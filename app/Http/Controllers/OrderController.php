<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use App\Models\auction;
use App\Models\Delivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * [This function used to rout user topayment get way to pay 
     * many of delevry or pay amount of auction ]
     *
     * @param Request $requser
     * 
     * @return [rout]
     * 
     */
    public function paymentOfDeleviry(Request $request){
        $pymentInfo = $request;
        session_start();
        $delever = Delivery::find($_SESSION['delivery']['id']);
        $paidAmout = $pymentInfo->paid_amount;
        Auth::user()->deposit($paidAmout,['paidAmout'=>$paidAmout,'order-delever'=>$delever->id,'creaated_at'=>$delever->creaated_at,'auction_id'=>$delever->auction->id]);
        $notfication = new NotificationController();
        $notfication->sendNotificationFromAdmin(Auth::user()->id,' شكرا عزيزي العميل
                                                                        لقد تمت عملية الدفع بنجاح يرجى تأكيد استلام السيارة 
                                                               لكي نرسل لكم بقية وثائق السيارة ','comfirmDelevery/'.$delever->id);
                                                               session_destroy();
         return view('admin.invoice')->with(['delever'=>$delever,'pymentInfo'=>$pymentInfo]);
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
    public function comfirmDelevery($deleviryId ){
        $deleviry = Delivery::find($deleviryId);
    
         return view('comfirmDelevery')->with('deleviryId',$deleviry->id);
         
    }
    public function comfirmSell($auctionId){
        $auction = auction::find($auctionId);
        
        return view('comfirmSell')->with('auction',$auction);
    
    }
   
}   
