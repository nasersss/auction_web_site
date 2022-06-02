<?php

namespace App\Http\Controllers;

use App\Models\auction;
use App\Models\Bidding;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class PymentContoller extends Controller
{
    public function showPyment()
    {
        $info = Route::current()->parameter('info');
        $info = base64_decode($info);

        $data = $arrayFormat = json_decode($info, true);
        for ($i = 0; $i < count($data); $i++) {
            $status = array_column($arrayFormat, 'status');
            $paid_amount = array_column($arrayFormat, 'paid_amount');
            $card_holder = array_column($arrayFormat, 'card_holder');
            $card_type = array_column($arrayFormat, 'card_type');
            $created_at = array_column($arrayFormat, 'created_at');
            $updated_at = array_column($arrayFormat, 'updated_at');
        }
        $card_type = str_replace('+', ' ', $card_type[0]);
        $card_holder = str_replace('+', ' ', $card_holder[0]);
        $order_reference = $data['order_reference'];
        session_start();
        if (isset($_SESSION["delivery"])) {
          try {
            
            $deleviry = new OrderController();
            return $deleviry->paymentOfDeleviry($paid_amount);
            session_unset();
            session_destroy();
          } catch (\Throwable $th) {
            $error = 'عذرا انتهت جلسة الدفع الخاصة فيك';
            return view('error.error')->with('error', $error);
          }
        } else if (isset($_SESSION['amountOfBidding'])) {
            $auction = auction::find($order_reference);
            $admin = User::where('role', 0)->first();
            $paidAmout = $auction->stare_price * 0.2;
            Auth::user()->deposit($paidAmout, ['order_reference_id' => $auction->id, 'creaated_at' => $created_at, 'userName' => Auth::user()->name, 'auctionName' => $auction->name, 'auctionModle' => $auction->model]);
            $auction->curren_price += $_SESSION['amountOfBidding'];
            $auction->number_of_participate += 1;
            $auction->update();
            $newBidding = new Bidding();
            $newBidding->user_id = Auth::user()->id;
            $newBidding->auction_id = $auction->id;
            $newBidding->bidding_amount = $_SESSION['amountOfBidding']; //must be modfy to gevin by requst or save the amout in session then claa here
            $newBidding->payed_amount = (($auction->curren_price + $_SESSION['amountOfBidding']) * 10 / 100);
            try {
            $newBidding->save();
            session_unset();
            session_destroy();
            return redirect('detail_car/' . $auction->id . '')->with(['success' => '  تمت عملية المزايدة بنجاح مع خصم نسبة المزايدة ']);
      
            } catch (\Throwable $th) {
              $error = 'لم تتم عملية المزايدة بنجاح';
            return view('error.error')->with('error', $error);
            }
        }
        else{
          $error = 'عذرا انتهت الجلسة الخاصة بالمزايدة';
          return view('error.error')->with('error', $error);
        }
              //return view('success');
    }

    /**
     * This function used to connect to pyment getway api of waslegetay
     * and check of aucation date then route user to checkout
     *
     * @param mixed $auctionId
     *
     * @return route
     *
     */
    public function dopayment(Request $request)
    {
     
        // try {
            $auctionId = $request->auctionId;
            $auction = auction::find($auctionId);
            $percentageFromStrartPrice = $auction->stare_price * 0.2;
            $payment = new PymentContoller();
            return $payment->makePyment($auction, $percentageFromStrartPrice);
        // } catch (\Throwable$th) {

        //     $error = 'الرجاء تأكيد العملية ';
        //     return view('error.error')->with($error);
        // }

    }

    public function makePyment(auction $auction, $amountOfPayment)
    {
        $data = [
            "order_reference" => $auction->id,
            "products" => [
                array(
                    "id" => $auction->id,
                    "product_name" => $auction->name,
                    "quantity" => 1,
                    "unit_amount" => $amountOfPayment,
                ),
            ],
            "currency" => "US",
            "total_amount" => $amountOfPayment,
            "success_url" => "http://127.0.0.1:8000/pyment/response",
            "cancel_url" => "http://127.0.0.1:8000/pyment/cancel",
            "metadata" => [
                "Customer name" => $auction->user->name,
                "order id" => $auction->id,
            ],

        ];
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://waslpayment.com/api/v1/merchant/payment_order",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),

            CURLOPT_HTTPHEADER => array(
                "private-key: mDwOkIltPkb70yzLry1np531D9iZ4Pvge8ELatHN2YINdmjjt5",
                "public-key: tGNFyisNv5UemXTOlgo7wDawp",
                "Content-Type:  application/x-www-form-urlencoded",

            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $error = 'لم تتم عملية الاتصال ببوابة الدفع الاكتروني  ';
            return view('error.error')->with('error', $error);
        } 
        else {
            $url = json_decode($response)->invoice->next_url;
            return redirect()->away($url);
        }
    }

}
