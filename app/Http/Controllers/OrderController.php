<?php

namespace App\Http\Controllers;

use App\Models\auction;
use App\Models\Delivery;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    /**
     * [This function used to rout user topayment get way to pay
     * many of delevry or pay amount of auction ]
     *
     * @param Request $requser
     *
     * @return [rout]
     *
     */
    public function paymentOfDeleviry($paid_amount)
    {
        try {
            session_start();
            $delever = Delivery::find($_SESSION['delivery']['id']);
            $paidAmout = $paid_amount[0];
            Auth::user()->deposit($paidAmout, ['order-delever' => $delever->id,'userName' => Auth::user()->name, 'creaated_at' => $delever->creaated_at, 'auction_id' => $delever->auction->id,'auctionName'=>$delever->auction->id,'auctionModle' =>$delever->auction->model]);
            $notfication = new NotificationController();
            $notfication->sendNotificationFromAdmin(Auth::user()->id, ' شكرا عزيزي العميل
                                                                        لقد تمت عملية الدفع بنجاح يرجى تأكيد استلام السيارة
                                                               لكي نرسل لكم بقية وثائق السيارة ', 'comfirmDelevery/' . $delever->id);

             // remove all session variables
             session_unset();
             // destroy the session
             session_destroy();
          return view('admin.invoice')->with(['delever' => $delever, 'paidAmout' => $paidAmout]);
        } catch (\Throwable$th) {
            return view('error.error');
        }

    }
    /**
     * [This function used to store sucess
     * deleviry in order table ]
     *
     * @param mixed $deleviryId
     *
     * @return [type]
     *
     */
    public function comfirmDelevery($deleviryId)
    {
        $deleviry = Delivery::find($deleviryId);
        return view('comfirmDelevery')->with('deleviryId', $deleviry->id);
    }
    public function comfirmSell($auctionId)
    {
        $auction = auction::find($auctionId);
        return view('comfirmSell')->with('auction', $auction);
    }
    /**
     * [This function used to stor order ]
     *
     * @param Request $request
     *
     * @return [type]
     *
     */
    public function makeDeleverDone(Request $request)
    {
        // return $request;
        // try {

            $delever = Delivery::find($request->deleverId);
            $auction = auction::find($delever->auction->id);
            $auction->is_received *= -1;
            $auction->is_active = -1;
            $auction->update();
            $payer = Auth::user();
            $paidAmout = $delever->paid_amout;
            $seller = $delever->auction->user;
            $admin = User::where('role', 0)->first();
            $order = new OrderController();
            $auctionPrice = $delever->auction->curren_price;
            $startPrice = $delever->auction->stare_price;
            $amoutOfSystem = $order->discountAmountOfSystem($auctionPrice);
            $payer->transfer($admin, $amoutOfSystem, [ 'From' => $payer->name, 'to' => $admin->name, 'carName' => $delever->auction->name,'model' => $delever->auction->name]);
            $payer->transfer($seller, $auctionPrice, ['From' => $payer->name, 'to' => $seller->name, 'carName' => $delever->auction->name,'model' => $delever->auction->name]);
            $seller->transfer($admin, $amoutOfSystem, ['From' => $seller->name, 'to' => $admin->name, 'carName' => $delever->auction->name,'model' => $delever->auction->name]);
            $order = new Order();
            $order->system_balance_from_seller = $amoutOfSystem;
            $order->system_balance_from_payer = $amoutOfSystem;
            $order->delivery_id = $delever->id;
            $order->save();
             // remove all session variables
           
            return view('success');
           
        // } catch (\Throwable$th) {
        //     return view('error.error');
        // }

    }
/**
 * [Description for discountAmountOfSystemFromSeller]
 *
 * @param mixed $amount
 *
 * @return [int]
 *
 */
    public function discountAmountOfSystem($amount)
    {
        $net = $amount * 0.05;
        return $net;
    }
    public function showWallet()
    {
       
        $users = User::get();
        return view('admin.wallet')->with('users',$users);
    }
}
