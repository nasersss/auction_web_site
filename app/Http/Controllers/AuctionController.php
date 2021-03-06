<?php

namespace App\Http\Controllers;

use App\Models\auction;
use App\Models\AuctionImage;
use App\Models\category;
use App\Models\City;
use App\Models\Notification;
use App\Models\State;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AuctionController extends Controller
{
    /**
     * Display a listing of the auctions.
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
        } else {
            $auction = auction::where('is_active', 1);
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
            return view('auction')->with([
                "auctions" => $auction,
                'categories' => $category,
                'vehicleTypes' => $vehicleType,
                'states' => $state,
            ]);
        }
    }

    /**
     * Show the form for creating a new auction.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $category = category::get();
        $state = State::with("city")->get();

        $vehicleType = VehicleType::get();
        return view('admin/add_auction')->with([
            'categories' => $category,
            'vehicleTypes' => $vehicleType,
            'states' => $state,
        ]);
    }


    /**
     * Store a newly created auction in auction.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::validate($request->all(), [
            'name' => ['required', 'min:2', 'max:100'],
            'color' => ['required'],
            'state' => ['required'],
            'model' => ['required', 'max:4'],
            'address' => ['required'],
            'vehicle_type' => ['required'],
            'fuel' => ['required'],
            'engine_type' => ['required'],
            'ger_type' => ['required'],
            'damage' => ['required'],
            'odometer' => ['required'],
            'stare_price' => ['required'],
            'min_bid' => ['required'],
            'date_of_end_auction' => ['required'],
            'mainImage' => ['required'],
            'images' => ['required'],

        ], [

            'name.required' => '?????? ?????? ?????? ?????? ??????????????',
            'name.min' => '?????????????? ?????????? ?????? ???? 2 ????????',
            'name.max' => '?????????????? ?????????? ?????? ???? 100 ??????',
            'model.required' => '?????? ?????????? ?????????? ?????????? ???????????? ??????????????',
            'model.max' => '  ?????? ???? ???????? ?????? ?????????????? 4',

            'color.required' => '?????? ???????????? ?????? ????????????',
            'state.required' => '?????? ???????????? ???????? ??????????????',
            'address.required' => '??????  ?????????? ?????????????? ',
            'vehicle_type.required' => '?????? ???????????? ?????? ??????????????',
            'fuel.required' => '?????? ???????????? ?????? ????????????',
            'ger_type.required' => '?????? ?????? ?????? ????????????',
            'damage.required' => '?????? ?????? ??????  ??????????????',
            'odometer.required' => '?????? ?????? ??????  ?????????? ?????????????????? ????????????????',
            'stare_price.required' => '?????? ?????? ??????  ?????????? ???????????? ??????????????',
            'min_bid.required' => '?????? ?????? ??????  ?????????? ???? ?????? ?????? ????????????',
            'date_of_end_auction.required' => ' ?????? ?????????? ?????????? ???????????? ???????????? ',
            'mainImage.required' => '?????? ?????????? ???????????? ???????????????? ????????????',
            'images.required' => '?????? ?????????? ?????? ????????????  ',







        ]);
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
        // if the auction is saved that will save and upload images of auction.
        if ($auctionInfo->save()) {
            $auctionMaineImage = new AuctionImage();
            $auctionMaineImage->image = $this->uploadMainFile($request->file('mainImage'), $auctionInfo->id);
            $auctionMaineImage->is_active = -1;
            $auctionMaineImage->auction_id = $auctionInfo->id;
            $auctionMaineImage->save();
            foreach ($request->file('images') as $image) {
                $auctionImage = new AuctionImage();
                $auctionImage->image = $this->uploadFile($image, $auctionInfo->id);
                $auctionImage->is_active = -1;
                $auctionImage->auction_id = $auctionInfo->id;
                $auctionImage->save();
            }


            $admins = User::where('role', '<', 2)->get();
            $users = User::where('role', 2)->get();
            foreach ($admins as  $admin) {
                $notification = new NotificationController();
                $notification->sendNotification($admin->id, '???? ?????????? ???????? ????????', 'edit-auction/' . $auctionInfo->id);
            }

            return redirect()->route('index')->with(['success' => '???? ?????????? ???????????????? ??????????']);
        }

        return redirect()->back()->with(['error' => '???????? ???????? ?????? ???? ?????? ?????????? ????????????????']);
    }

    /**
     * This function used to upload image and return file nam.
     *
     * @param mixed $file
     * @param mixed $id
     *
     * @return string $fileName
     *
     */
    public function uploadFile($file, $id)
    {
        $destination = public_path() . "/images/auction";
        $fileName = $id . "_" . time() . "_" . random_int(10000, 100000) . "_" . $file->getClientOriginalName();
        $file->move($destination, $fileName);
        return $fileName;
    }



    public function uploadMainFile($file, $id)
    {
        $destination = public_path() . "/images/auction";
        $fileName = $id . "_" . "main" . "_" . time() . "_" .  $file->getClientOriginalName();
        $file->move($destination, $fileName);
        return $fileName;
    }

    /**
     * Display the specified auction.
     *
     * @param  \App\Models\auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function show(auction $auction)
    {
        $auctionImage = AuctionImage::find($auction);
        if ($auctionImage->delete()) {
            return redirect()->back()->with(['success' => '???? ?????????? ??????????']);
        } else
            return redirect()->back()->with(['error' => '???????? ???????? ?????? ???? ?????? ?????? ????????????????']);
    }

    /**
     * Show the form for editing the specified auction.
     *
     * @param  \App\Models\auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function edit($auction_id)
    {
        $category = category::get();
        $state = State::with("city")->get();

        $vehicleType = VehicleType::get();
        $auction = auction::find($auction_id);
        return view('admin/edit_auction')->with([
            'auction' => $auction,
            'categories' => $category,
            'vehicleTypes' => $vehicleType,
            'states' => $state,
        ]);
    }

    public function deleteImage($auctionId)
    {
        $auctionImage = AuctionImage::find($auctionId);
        if ($auctionImage->delete()) {
            return redirect()->back()->with(['success' => '???? ?????????? ??????????']);
        } else
            return redirect()->back()->with(['error' => '???????? ???????? ?????? ???? ?????? ?????? ????????????????']);
    }

    /**
     * Update the specified auction in auction.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $auctionInfo = auction::find($request->id);
        // return response($request);
        $auctionInfo->category_id = $request->category_id;
        $auctionInfo->color = $request->color;
        $auctionInfo->odometer = $request->odometer;
        $auctionInfo->damage = $request->damage;
        $auctionInfo->vehicle_type_id = $request->vehicle_type;
        $auctionInfo->name = $request->name;
        $auctionInfo->model = $request->model;
        $auctionInfo->state = $request->state;
        $auctionInfo->engine_type = $request->engine_type;
        $auctionInfo->notes = $request->notes;
        $auctionInfo->ger_type = $request->ger_type;
        $auctionInfo->fuel = $request->fuel;
        $auctionInfo->city_id = $request->address;

        // if the auction is saved that will save and upload images of auction.
        if ($auctionInfo->update()) {
            $auctionMaineImage = AuctionImage::where('image', 'like', $request->id . '_' . 'main' . '_' . '%')->first();

            if ($request->hasFile('mainImage')) {
                if ($auctionMaineImage != null) {
                    if (realpath($auctionMaineImage->image)) {
                        unlink(realpath($auctionMaineImage->image));
                    }
                    $auctionMaineImage->image = $this->uploadMainFile($request->file('mainImage'), $request->id);
                    $auctionMaineImage->update();
                } else {
                    $auctionMaineImage = new AuctionImage();
                    $auctionMaineImage->image = $this->uploadMainFile($request->file('mainImage'), $request->id);
                    $auctionMaineImage->auction_id = $request->id;
                    $auctionMaineImage->save();
                }
            }
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $auctionImage = new AuctionImage();
                    $auctionImage->image = $this->uploadFile($image, $auctionInfo->id);
                    $auctionImage->is_active = -1;
                    $auctionImage->auction_id = $auctionInfo->id;
                    $auctionImage->save();
                }
            }

            return redirect()->route('index')->with(['success' => '???? ?????????? ???????????????? ??????????']);
        }

        return redirect()->back()->with(['error' => '???????? ???????? ?????? ???? ?????? ?????????? ????????????????']);
    }

    public function viewAuction(Request $request)
    {

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
        } else {
            $auction = auction::where('is_active', 1);
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
        $auctionCar = auction::with(["auctionImage", "category"])->find($carId);
        return view("detail")->with("auctions", $auctionCar);
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
            return back()->with(['success' => '???? ?????????? ???????????????? ??????????']);

        return back()->with(['error' => '???????? ???????? ?????? ???? ?????? ?????????? ????????????????']);
    }

    /**
     * Remove the specified auction from auction.
     *
     * @param  \App\Models\auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function destroy(auction $auction)
    {
        //
    }
}
