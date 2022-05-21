<?php

namespace App\Http\Controllers;
use App\Mail\Notification as MailNotification;
use App\Models\auction;
use App\Models\AuctionImage;
use App\Models\Bidding;
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
use Illuminate\Support\Facades\Mail;
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
        try {

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
        } catch (\Throwable $error) {
            /**
             * getMessage function show error message if it found error
             */
            return redirect()->back()->with(['error' => 'عذرا هناك خطا ما   ']);
        }
    }

    /**
     * Show the form for creating a new auction.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $category = category::get();
            $state = State::with("city")->get();

            $vehicleType = VehicleType::get();
            return view('admin.auction.add_auction')->with([
                'categories' => $category,
                'vehicleTypes' => $vehicleType,
                'states' => $state,
            ]);
        } catch (\Throwable $error) {

            /**
             */
            return redirect()->back()->with(['error' => 'عذرا هناك خطا ما   ']);
        }
    }


    /**
     * Store a newly created auction in auction.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
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

                'name.required' => 'يجب ملى حقل اسم السيارة',
                'name.min' => 'لايمكنك ادخال اقل من 2 احرف',
                'name.max' => 'لايمكنك ادخال اقل من 100 حرف',
                'model.required' => 'يجب تعبئة الحقل الخاص بموديل السيارة',
                'model.max' => '  يجب ان يكون عدد الارقام 4',

                'color.required' => 'يجب اختيار لون لسيارة',
                'state.required' => 'يجب اختيار حالة السيارة',
                'address.required' => 'يجب  اخيار العنوان ',
                'vehicle_type.required' => 'يجب اختيار نوع المركبة',
                'fuel.required' => 'يجب اختيار نوع الوقود',
                'ger_type.required' => 'يجب ملى نوع المحرك',
                'damage.required' => 'يجب ملى حقل  الاضرار',
                'odometer.required' => 'يجب ملى حقل  الخاص بالمسافات المقطوعة',
                'stare_price.required' => 'يجب ملى حقل  الخاص بالسعر المبدئي',
                'min_bid.required' => 'يجب ملى حقل  الخاص با اقل سعر للمزاد',
                'date_of_end_auction.required' => ' يجب تحديد تاريح انتهاء المزاد ',
                'mainImage.required' => 'يجب تحديد الصورة الرئيسية للمزاد',
                'images.required' => 'يجب تحديد صور المزاد  ',
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
            $auctionInfo->model = $request->mdel;
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
        } catch (\Throwable $error) {

            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
        // if the auction is saved that will save and upload images of auction.
        try {
            //code...

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
                $notification->sendNotification(Auth::user()->id,$admin->id, 'تم اضافة مزاد جديد', 'auction_review');
            }
           
            $payment = new PymentContoller();
            $percentageFromStrartPrice = $auctionInfo->stare_price*0.2;
           return  $payment->makePyment($auctionInfo,$percentageFromStrartPrice);

        }
    }catch (\Throwable $th) {
            return redirect()->back()->with(["error" => "there error found"]);
            // return redirect()->route('index')->with(['success' => 'تم تحديث البيانات بنجاح']);
        }
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
        try {
            $destination = public_path() . "/images/auction";
            $fileName = $id . "_" . time() . "_" . random_int(10000, 100000) . "_" . $file->getClientOriginalName();
            $file->move($destination, $fileName);
            return $fileName;
        } catch (\Throwable $error) {
            /**
             * getMessage function show error message if it found error
             */
            return redirect()->back()->with(['error' => ' عذرا هناك خطا لم تتم رفع الصورة بنجاح']);
        }
    }

    public function uploadMainFile($file, $id)
    {
        try {

            $destination = public_path() . "/images/auction";
            $fileName = $id . "_" . "main" . "_" . time() . "_" .  $file->getClientOriginalName();
            $file->move($destination, $fileName);
            return $fileName;
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => ' عذرا هناك خطا لم تتم رفع الصور بنجاح']);
        }
    }

    /**
     * Display the specified auction.
     *
     * @param  \App\Models\auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function show(auction $auction)
    {
        try {


            $auctionImage = AuctionImage::find($auction);
            if ($auctionImage->delete()) {
                return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
            } else
                return redirect()->back()->with(['error' => 'عذرا هناك خطا لم يتم حذف البيانات']);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }

    /**
     * Show the form for editing the specified auction.
     *
     * @param  \App\Models\auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function edit($auction_id)
    {
        try {

        $vehicleType = VehicleType::get();
        $auction = auction::find($auction_id);
        return view('admin.auction.edit_auction')->with([
            'auction' => $auction,
            'categories' => $category,
            'vehicleTypes' => $vehicleType,
            'states' => $state,
        ]);
    }
    catch (\Throwable $error) {
        return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم حدف الصور بنجاح']);

    }
    }
    /**
     * @param mixed $auctionId
     *This function delete images if user inter any images that not related of his auction
     * @return [rout with message]
     */
    public function deleteImage($auctionId)
    {
        try {


            $auctionImage = AuctionImage::find($auctionId);
            if ($auctionImage->delete()) {
                return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
            } else
                return redirect()->back()->with(['error' => 'عذرا هناك خطا لم يتم حذف البيانات']);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم حدف الصور بنجاح']);
        }
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
        try {


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

                return redirect()->route('index')->with(['success' => 'تم تحديث البيانات بنجاح']);
            }

            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }

    /**
     * @param Request $request
     *This function used for view users auction in index page when admin make active in auction
     * @return [all users auctions with is active = -1 then admin make it is _active=1]
     */
    public function viewAuction(Request $request)
    {
        try {



            $category = category::get();
            $state = State::with("city")->get();
            $vehicleType = VehicleType::get();
            if ($request->method() == 'GET') {
                $auction = auction::with("auctionImage")->where('date_of_end_auction', '>=', Carbon::now())->where('is_active', 1)->orderBy('created_at', 'desc')->paginate(9);
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
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }


    /**
     * @param mixed $carId
     * This function display detail page with all auction information
     * @return All details about auction
     */
    public function detailAuction($carId)
    {
        $is_ready_to_sell= 1;
        $auctionCar = auction::with(["auctionImage", "category"])->find($carId);
        $payer = Bidding::where('auction_id',$auctionCar->id)->orderBy('id', 'desc')->first();
        if($auctionCar->is_active == 1)
        return view("detail")->with("auctions", $auctionCar);
        else if($is_ready_to_sell == 1 && Auth::user()->id==$payer->user_id)
            return view("detail")->with("auctions", $auctionCar);
        else 
        return 0;
    }




    /**
     *This function show all users auctions
     * @return [string]return all information about user auctions
     */
    function auctionReview()
    {
        try {

            $user = User::find(Auth::user()->id);
            if ($user->role < 2) {
                $auctions = auction::with(["user", "category", "auctionImage"])->orderBy('created_at', 'desc')->get();
                return view("admin.auctions_review")->with("auctions", $auctions);
            } else {
                $auction = auction::where('seller_id', $user->id)->orderBy('created_at', 'desc')->get();
                return view("admin.userAuction")->with("auctions", $auction);
            }
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with(['error' => " عذرا هناك خطأ"]);
        }
    }

    /**
     * [This function used to active auction]
     *
     * @param mixed $auctionId
     * 
     * @return [type]
     * 
     */
    public function toggle($auctionId)
    {
        $notification = new NotificationController();
        $auction = auction::find($auctionId);
        $auction->is_active *= -1;
        if ($auction->save()){
            $notification->sendNotificationFromAdmin($auction->seller_id, 'عزيزي العميل لقد تم تفعيل مزادك الخاص بالسيارة ' .$auction->name.' بنجاح  شكرا لك ', 'edit_auction/' . $auctionId);

            // $users = User::chunck(10,function($data){
                // This for each will send notfication and email to all user 
                $users = User::get();
                foreach ($users as $user) {
                    $notification->sendNotificationFromAdmin($user->id, 'تمت اضافة مزاد جديد ', 'action_detail/' . $auctionId);
                    $notify = Notification::where('to_user_id',$user->id)->orderBy('id','desc')->first();
                    $MailNotification = new MailNotificatin($notify);
                    Mail::to($user->email)->send($MailNotification);
                }
            // });

            $admin = User::where('role', 0)->first();            
            return back()->with(['success' => 'تم تحديث البيانات بنجاح']);
        }
        else{
            return back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);

        }
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

    /**
     * [This function  used to check all auction date ]
     *
     * @return [type]
     * 
     */
    public function checkAucationDate()
    {   
        $notification = new NotificationController();
        $auctions = auction::where('is_active', 1)->get();
        $currentTime = date("Y-m-d H:i:s");
        foreach ($auctions as $auction) {
            $endAucationTime =  $auction->date_of_end_auction;
            if (strtotime($currentTime) > strtotime($endAucationTime)) {
                $auctionControl = new AuctionController;
                $auctionId = $auction->id;
                $lastBidding = Bidding::where('auction_id', $auctionId)->orderBy('created_at', 'desc')->first();
                if ($lastBidding == null) {
                    $auctionControl->toggle($auctionId);
                    $notification->sendNotificationFromAdmin($auction->seller_id, 'عزيزي العميل عفوا مزادك لم يشارك فيه احد وقد انتهت مدته يرجى تمديد المدة  ', 'edit_auction/' . $auctionId);
                } else {
                    $uesrId = $lastBidding->user_id;
                    $user = User::where('id', $uesrId)->get();
                    $admin = User::where('role', 0)->first();
                    $notification = new NotificationController();
                    $notification->sendNotificationFromAdmin($uesrId, 'عزيزي العميل لقد رسي المزاد عليك   ', 'action_detail/' . $auctionId);
                    $notification->sendNotificationFromAdmin($admin->id, 'لقد رسى المزاد على المستخدم ', 'edit-auction/' . $auctionId);
                    $notification->sendNotificationFromAdmin($auction->seller_id, 'مبروك  ' .$auction->user->name.' لقد رسي مزادك الخاص بالسيارة '.$auction->name.' بمبلغ '.$auction->curren_price.' هل انت موافق على عملية البيع اضغط على موافق للبيع أو تمديد ', 'comfirmSell/'. $auctionId);
                    $auctionControl->toggle($auctionId);
                }
            }
        }
        
    }
    /**
     * [ makeAuctionToSell Method used to 
     *      active auction to sell]
     *
     * @param Request $request
     * 
     * @return [type]
     * 
     */
    public function makeAuctionToSell(Request $request){
        $auctionID = $request->auctionId;
        $auction = auction::find($auctionID);
        $auction->is_ready_to_sell *= -1;
        if ($auction->update())
              return redirect('/');;
        return back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }
    /**
     * [This function used to extended time of auction ]
     *
     * @param Request $request
     * 
     * @return [type]
     * 
     */
    public function actionTimeExtended(Request $request){
        $auctionId = $request->auctionId;
        $auction = auction::find($auctionId);
        $auction->date_of_end_auction =$request->date_of_end_auction;
        if ($auction->update())
              {
                $username = Auth::user()->name;
                $admin = User::where('role', 0)->first();
                $notification = new NotificationController();
                $notification->sendNotificationFromAdmin($admin->id, 'لقد قام المستخدم ' . $username.'بتمديد المزاد الخاص به الرجاء مراجعة المزاد ', 'edit-auction/' . $auctionId);

              }
        else {

        }
    }

}
