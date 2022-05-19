<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\auction;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
class PymentContoller extends Controller
{
  public function showPyment(){
    $info = Route::current()->parameter('info');
    $info = base64_decode($info);
      $data= $arrayFormat=json_decode($info ,true);

       for($i=0;$i<count($data);$i++){
           $status=array_column($arrayFormat,'status');
           $paid_amount=array_column($arrayFormat,'paid_amount');
           $card_holder=array_column($arrayFormat,'card_holder');
           $card_type= array_column($arrayFormat,'card_type');
           $created_at=array_column($arrayFormat,'created_at');
           $updated_at=array_column($arrayFormat,'updated_at');
           $order_reference_id=array_column($arrayFormat,'order_reference_id');
       }
       $card_type=str_replace('+',' ',$card_type[0]);
       $card_holder=str_replace('+',' ',$card_holder[0]);
 //return $data;
       // add to 10% to superAdmin wellt 
 return view('receiptConfirmation',compact('paid_amount','status','card_holder','card_type','created_at','order_reference_id'));
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
    public function makePyment(auction $auction,$amountOfPayment){

    
        $data = [
            "order_reference" => $auction->id,
            "products" => [
                array(
                    "id" =>   $auction->id,
                    "product_name" => $auction->name,
                    "quantity" => 1,
                    "unit_amount" =>  $amountOfPayment
                  )
            ],
           "currency" => "US",
            "total_amount" =>  $amountOfPayment,
            "success_url" => "http://127.0.0.1:8000/pyment/response",
            "cancel_url" => "http://127.0.0.1:8000/pyment/cancel",
            "metadata" => [
              "Customer name" =>$auction->user->name,
              "order id" => $auction->id
            ]
      
          ];
          $curl = curl_init();
       
          curl_setopt_array($curl, array(
            CURLOPT_URL => "https://waslpayment.com/api/test/merchant/payment_order",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
      
            CURLOPT_HTTPHEADER => array(
              "private-key: rRQ26GcsZzoEhbrP2HZvLYDbn9C9et",
              "public-key: HGvTMLDssJghr9tlN9gr4DVYt0qyBy",
              "Content-Type:  application/x-www-form-urlencoded"
      
      
            ),
          ));
      
          $response = curl_exec($curl);
          $err = curl_error($curl);
      
          curl_close($curl);
      
          if ($err) {
            echo " Error #:" . $err;
          } else {
            //return json_decode($response)->invoice->invoice_referance;

           //return  json_decode($response);
           $url = json_decode($response)->invoice->next_url;
           return redirect()->away($url);
          }
          
      
    }
}
