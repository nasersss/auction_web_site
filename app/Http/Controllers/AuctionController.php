<?php

namespace App\Http\Controllers;

use App\Models\auction;
use App\Models\AuctionImage;
use App\Models\category;
use App\Models\City;
use App\Models\State;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category = category::get();
        $state = State::with("city")->get();
        $vehicleType = VehicleType::get();
        if ($request->method() == 'GET') {
            $auction = auction::with("auctionImage")->where('date_of_end_auction', '>=', Carbon::now()->add(-51, 'day'))->where('is_active', 1)->orderBy('created_at', 'desc')->paginate(9);
            return view('auction')->with([
                "auctions" => $auction,
                'categories' => $category,
                'vehicleTypes' => $vehicleType,
                'states' => $state,
            ]);
            // return response($auction);
        } else {
            $auction = auction::where('is_active',1);
            if ($request->category_id != null) {
                $auction->where("category_id", $request->category_id);
            }
            if ($request->color != null) {
                $auction->where("color", $request->color);
            }
            if ($request->vehicle_type != null) {
                $auction->where("vehicle_type_id", $request->vehicle_type);
            }
            if ($request->address != null) {
                $auction->where("city_id", $request->address);
            }
            if ($request->date_of_end_auction != null) {
                $auction->where("date_of_end_auction", '<=', $request->date_of_end_auction)->where("date_of_end_auction", '>=', Carbon::now());
            }
            $auction = $auction->get();
            // return view("index")->with(["auctions" => $auction , 'categories'=>$category, 'request',$request]);
            // return response($auction);
            return view('auction')->with([
                "auctions" => $auction,
                'categories' => $category,
                'vehicleTypes' => $vehicleType,
                'states' => $state,
            ]);
        }

        // return view('auction')->with([
        //     'categories' => $category,
        //     'vehicleTypes' => $vehicleType,
        //     'states' => $state,
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = category::get();
        $state = State::with("city")->get();
        // return response($state);
        $vehicleType = VehicleType::get();
        return view('admin/add_auction')->with([
            'categories' => $category,
            'vehicleTypes' => $vehicleType,
            'states' => $state,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * @param Request $request
     *this function used to insert data to database
     * @return [object]
     */
    public function store(Request $request)
    {
        $auctionInfo = new auction();
        $auctionInfo->seller_id = Auth::user()->id;
        $auctionInfo->is_active = -1;
        $auctionInfo->color = $request->color;
        $auctionInfo->category_id = $request->category_id;
        $auctionInfo->odometer = $request->odometer;
        $auctionInfo->damage = $request->damage;
        $auctionInfo->vehicle_type_id = $request->vehicle_type;
        $auctionInfo->name = $request->name;
        $auctionInfo->model = $request->model;
        $auctionInfo->state = $request->state;
        $auctionInfo->engine_type = $request->engine_type;
        $auctionInfo->notes = $request->notes;
        $auctionInfo->stare_price = $request->stare_price;
        $auctionInfo->min_bid = $request->min_bid;
        $auctionInfo->ger_type = $request->ger_type;
        $auctionInfo->curren_price = $request->stare_price;
        $auctionInfo->number_of_participate = 0;
        $auctionInfo->fuel = $request->fuel;
        $auctionInfo->city_id = $request->address;
        $auctionInfo->date_of_end_auction = $request->date_of_end_auction;
        // $auctionInfo->image = $request->hasFile('image') ? $this->uploadFile($request->file('image'), $auctionInfo->category_id) : "defaultImage.png";
        if ($auctionInfo->save()) {
            $auctionMaineImage = new AuctionImage();
            $destination = public_path() . "/images/auction";
            $fileName = $auctionInfo->id . "_" . "main" . "_" . time() . "_" .  $request->file('mainImage')->getClientOriginalName();
            $request->file('mainImage')->move($destination, $fileName);
            $auctionMaineImage->image = $fileName;
            $auctionMaineImage->is_active = -1;
            $auctionMaineImage->auction_id = $auctionInfo->id;
            $auctionMaineImage->save();
            foreach ($request->file('images') as $image) {
                $auctionImage = new AuctionImage();
                $auctionImage->image = $this->uploadFile($image, $auctionInfo->id);
                $auctionImage->is_active = -1;
                $auctionImage->auction_id = $auctionInfo->id;
                if ($auctionImage->save()) {
                    // return response($auctionInfo);
                }
            }
            return redirect()->route('index')->with(['success' => 'تم تحديث البيانات بنجاح']);
        }

        // return redirect()->route('list_categories')->with(['success' => 'تم تحديث البيانات بنجاح']);
        return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }

    public function uploadFile($file, $id)
    {
        $destination = public_path() . "/images/auction";
        $fileName = $id . "_" . time() . "_" . random_int(10000, 100000) . "_" . $file->getClientOriginalName();
        $file->move($destination, $fileName);
        return $fileName;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function show(auction $auction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function edit(auction $auction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, auction $auction)
    {
        $auctionInfo = new auction();
        $auctionInfo->seller_id = Auth::user()->id;
        $auctionInfo->is_active = -1;
        $auctionInfo->color = $request->color;
        $auctionInfo->category_id = $request->category_id;
        $auctionInfo->odometer = $request->odometer;
        $auctionInfo->damage = $request->damage;
        $auctionInfo->vehicle_type = $request->vehicle_type;
        $auctionInfo->name = $request->name;
        $auctionInfo->model = $request->model;
        $auctionInfo->state = $request->state;
        $auctionInfo->engine_type = $request->engine_type;
        $auctionInfo->notes = $request->notes;
        $auctionInfo->stare_price = $request->stare_price;
        $auctionInfo->min_bid = $request->min_bid;
        $auctionInfo->curren_price = $request->curren_price;
        $auctionInfo->number_of_participate = 0;
        $auctionInfo->fuel = $request->fuel;
        // $auctionInfo->image = $request->hasFile('image') ? $this->uploadFile($request->file('image'), $auctionInfo->category_id) : "defaultImage.png";
        if ($auctionInfo->save()) {
            $auctionMaineImage = new auction();
            $destination = public_path() . "/images/auction";
            $fileName = time() . "_" . $auctionInfo->id . "_" . "main" . "_" . $request->file('mainImage')->getClientOriginalName();
            $request->file('mainImage')->move($destination, $fileName);
            $auctionMaineImage->image = $fileName;
            $auctionMaineImage->is_active = -1;
            $auctionMaineImage->auction_id = $auctionInfo->id;
            $auctionMaineImage->save();
            foreach ($request->file('images') as $image) {
                $auctionImage = new auction();
                $auctionImage->image = $this->uploadFile($image, $auctionInfo->id);
                $auctionImage->is_active = -1;
                $auctionImage->auction_id = $auctionInfo->id;
                $auctionImage->save();
            }
        }

        // return redirect()->route('list_categories')->with(['success' => 'تم تحديث البيانات بنجاح']);
        return response($auctionInfo);
        return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }

    public function viewAuction(Request $request)
    {
        // return response($auction);
        // dd($request->method());
        // $category = category::get();
        // if ($request->method() == 'GET') {
        //     $auction = auction::with("auctionImage")->where('date_of_end_auction', '>=', Carbon::now()->add(-51, 'day'))->where('is_active', 1)->orderBy('created_at', 'desc')->paginate(9);
        //     return view("index")->with(["auctions" => $auction, 'categories' => $category]);
        //     // return response($auction);
        // } else {
        //     $category_id = '*';
        //     if (isset($request->category_id)) {
        //         $category_id = $request->category_id;
        //     }
        //     $auction = auction::with("auctionImage")->where("category_id", $category_id)->get();
        //     // return view("index")->with(["auctions" => $auction , 'categories'=>$category, 'request',$request]);
        //     return response('1');
        // }
        $category = category::get();
        $state = State::with("city")->get();
        $vehicleType = VehicleType::get();
        if ($request->method() == 'GET') {
            $auction = auction::with("auctionImage")->where('date_of_end_auction', '>=', Carbon::now()->add(-51, 'day'))->where('is_active', 1)->orderBy('created_at', 'desc')->paginate(9);
            return view('index')->with([
                "auctions" => $auction,
                'categories' => $category,
                'vehicleTypes' => $vehicleType,
                'states' => $state,
            ]);
            // return response($auction);
        } else {
            $auction = auction::where('is_active',1);
            if ($request->category_id != null) {
                $auction->where("category_id", $request->category_id);
            }
            if ($request->color != null) {
                $auction->where("color", $request->color);
            }
            if ($request->vehicle_type != null) {
                $auction->where("vehicle_type_id", $request->vehicle_type);
            }
            if ($request->address != null) {
                $auction->where("city_id", $request->address);
            }
            if ($request->date_of_end_auction != null) {
                $auction->where("date_of_end_auction", '<=', $request->date_of_end_auction)->where("date_of_end_auction", '>=', Carbon::now());
            }
            $auction = $auction->get();
            // return view("index")->with(["auctions" => $auction , 'categories'=>$category, 'request',$request]);
            // return response($auction);
            return view('index')->with([
                "auctions" => $auction,
                'categories' => $category,
                'vehicleTypes' => $vehicleType,
                'states' => $state,
            ]);
        }

    }


    public function detailAuction($carId)
    {
        $auctionCar = auction::with(["auctionImage", "category","city"])->find($carId);
        $state=State::get();
        // return response($auctionCar);
        return view("detail")->with(["auctions"=>$auctionCar,"state"=>$state]);
    }
    // this function show list of all auctions
    function auctionReview()
    {

        $auction = auction::with(["user", "category", "auctionImage"])->get();
        return view("admin.auctions_review")->with("auctions", $auction);
    }

    public function toggle($auctionId)
    {

        $auction = auction::find($auctionId);
        $auction->is_active *= -1;
        if ($auction->save())
            return back()->with(['success' => 'تم تحديث البيانات بنجاح']);

        return back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function destroy(auction $auction)
    {
        //
    }
}
