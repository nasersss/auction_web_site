<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\auction;
use App\Models\Bidding;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BiddingController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with(['error' => 'عذرا لا تملك الصلاحية لدخول هذه الصفخة يرجا تسجيل الدخول او انشاء حساب']);
        }
         
        $auction = auction::find($request->auction_id);
        session_start();
        $_SESSION["auction"] = $auction;
        $_SESSION["amountOfBidding"] = $request->amount;
        if ($request->amount < $auction->min_bid) {
            return redirect()->back()->with(['error' => 'لايمكنك ادخال مبلغ اقل من ' . $auction->min_bid . '$ ' . ' لانها اقل قيمة للمزايدة']);
        }
        if (($auction->curren_price + $request->amount) * 10 / 100 > Auth::user()->balance) {
            $payment = new PymentContoller();
            $percentageFromStrartPrice = $auction->stare_price*0.2;
           return  $payment->makePyment($auction,$percentageFromStrartPrice);
        }
        $auction->curren_price += $request->amount;
        $auction->number_of_participate += 1;
        $auction->update();
        $admin = User::where('role',0)->first();
        $adminWallet =$admin->balance;
        $newBidding = new Bidding();
        $newBidding->user_id = Auth::user()->id;
        $newBidding->auction_id = $request->auction_id;
        $newBidding->bidding_amount = $request->amount;
        $newBidding->payed_amount = (($auction->curren_price + $request->amount) * 10 / 100);
        $newBidding->save();
        return redirect()->back()->with(['success' => 'تمت عملية المزايدة بنجاح']);
    }

    /**
     * [addAmountOfBidding method used to comfirm pamyent operation
     * which will be save in wallte table in database
     *
     * @param Request $request
     * 
     * @return [type]
     * 
     */
    public function addAmountOfBidding(Request $request){
        session_start();
        $auction = auction::find($_SESSION['auction']['id']);
        $admin = User::where('role',0)->first();
        $paidAmout = $request->paid_amount;
        Auth::user()->deposit($paidAmout,['paid_amount'=>$paidAmout,'order_reference_id'=>$auction->id,'creaated_at'=>$request->creaated_at]);
        //Auth::user()->withdraw($request->paid_amount,['paid_amount'=>$request->paid_amount,'order_reference_id'=>$auction->id,'creaated_at'=>$request->creaated_at]);
        //$admin->deposit($request->paid_amount,['paid_amount'=>$request->paid_amount,'order_reference_id'=>$auction->id,'creaated_at'=>$request->creaated_at,'FromuserId'=>Auth::user()->id]);

        $auction->curren_price += $_SESSION['amountOfBidding'];
        $auction->number_of_participate += 1;
        $auction->update();
        $newBidding = new Bidding();
        $newBidding->user_id = Auth::user()->id;
        $newBidding->auction_id = $auction->id;
        $newBidding->bidding_amount = $_SESSION['amountOfBidding'];//must be modfy to gevin by requst or save the amout in session then claa here
        $newBidding->payed_amount = (($auction->curren_price + $request->amount) * 10 / 100);
        $newBidding->save();
        session_destroy();
      
        return redirect('detail_car/'.$auction->id.'')->with(['success' => 'تمت عملية المزايدة بنجاح']);
    
             
    }
   
    public function whenAuctionClosed()
    {
        $badd = new Bidding();
        $badd->user_id = 100;
        $badd->auction_id = 12;
        $badd->bidding_amount = 1250;
        $badd->payed_amount = 1254;
        $badd->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bidding  $bidding
     * @return \Illuminate\Http\Response
     */
    public function show(Bidding $bidding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bidding  $bidding
     * @return \Illuminate\Http\Response
     */
    public function edit(Bidding $bidding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bidding  $bidding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bidding $bidding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bidding  $bidding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bidding $bidding)
    {
        //
    }
}
