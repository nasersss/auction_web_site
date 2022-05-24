<!doctype html>
<html lang="en">

<head>
    @include('header.head-details')
</head>

<body>
    @extends('master')
    @section('content')

    <div class="container mt-5">
        @if(session()->has('error'))
        <div class="alert alert-danger" role="alert">
            <button type="button" class="btn-close" style="color: #d30606;
                border: none;
                background: #0000;
                font-weight: bolder;
                " data-bs-dismiss="alert" aria-label="Close">X</button>
            <strong>{{ session()->get('error') }} </strong>
        </div>
        @endif
        @if(session()->has('success'))
        <div class="alert alert-danger success-dismissible bg-success text-white border-0 fade show" style="background-color: #5db961 !important;" role="alert">
            <button type="button" class="btn-close" style="color: #d30606;
                border: none;
                background: #0000;
                font-weight: bolder;
                " data-bs-dismiss="alert" aria-label="Close">X</button>
            <strong>{{ session()->get('success') }} </strong>
        </div>
        @endif
        <div class="row">

            <div class="col-12 col-md-6 section-style ">
                {{-- section car information --}}
                <section>
                    <div class="head-detail">
                        <div class="logo" style="left: 0px;">
                            <img src="@isset($auctions->category->image){{ $auctions->category->image}}@endisset" alt="" srcset="">
                        </div>
                        <div class="head-title">
                            <h4><span> @isset($auctions->category->name)
                                    {{ $auctions->category->name}}
                                    @endisset </span> - <span> @isset($auctions->name)
                                    {{ $auctions->name}}
                                    @endisset </span></h4>
                            @isset($auctions->state)
                            @if($auctions->state=="جديد")
                            <h5 style="color: #d30606;font-weight: bolder">{{$auctions->state}}</h5>
                            @else
                            <h5 style="color:blue;font-weight: bolder">{{$auctions->state}}</h5>
                            @endif
                            @endisset
                            @isset($auctions->city)
                            <h6><span>

                                </span></h6>
                            @endisset
                        </div>
                    </div>
                    <div class="head-title">
                        <h5>
                            @isset($auctions->city)
                            {{ $auctions->city->state->name}} - {{ $auctions->city->name}}
                            @endisset
                            </span>
                        </h5>

                    </div>
                </section>
                {{-- end section car information --}}
                {{-- start section car auction --}}
                <section>
                    <div class="auction-primary-info-container">
                        <div class="auction-primary-info">
                            @isset($auctions->color)
                            {{ $auctions->color}}
                            @endisset
                        </div>
                        <div class="auction-primary-info">
                            @isset($auctions->model)
                            {{ $auctions->model}}
                            @endisset
                        </div>
                        <div class="auction-primary-info">
                            @isset($auctions->engine_type)
                            {{ $auctions->engine_type}}
                            @endisset
                        </div>
                    </div>
                    <div class="row">
                        <div class="  auction-info-one ">
                            <div class="mb-2">السعر الحالي للمزاد :</div>
                            <div class="auction-price">
                                @isset($auctions->curren_price)
                                {{ $auctions->curren_price}}$
                                @endisset
                            </div>

                        </div>
                        <div class=" auction-info-one ">
                            <div class="mb-2"> اقل قيمة في المزاد :</div>
                            <div class="auction-price ">
                                @isset($auctions->min_bid)
                                {{ $auctions->min_bid}}$
                                @endisset
                            </div>

                        </div>
                        <div class=" auction-info-one ">
                            <div class="mb-2">عدد المشاركات :</div>
                            <div class="auction-price">
                                @isset($auctions->number_of_participate)
                                {{ $auctions->number_of_participate}}
                                @endisset
                            </div>

                        </div>

                        <div class=" auction-info-one ">
                            <div class="mb-2">موعد انتهاء المزاد :</div>
                            <h1 id="timer" class="d-none">@isset($auctions->date_of_end_auction){{ $auctions->date_of_end_auction }}@endisset</h1>
                            <div class="auction-price" id="demo">

                            </div>

                        </div>


                    </div>

                    {{-- <div class="auction-info-two mb-3"> --}}
                    {{-- <div class="row">
                            <div class="col-4">
                                <h5 class="text-align"> وقت انتهاء المزاد</h5>
                                <div class="text-align"> <span>
                                        @isset($auctions->date_of_end_auction)
                                        {{ $auctions->date_of_end_auction}}
                    @endisset</span>
            </div>
        </div>
        <div class="col-4">
            <h5 class="text-align"> عدد المشاركات</h5>
            <div class="text-align"> <span>
                    @isset($auctions->number_of_participate)
                    {{ $auctions->number_of_participate}}
                    @endisset
                </span> </div>
        </div>
        <div class="col-4">
            <h5 class="text-align">اقل قيمة للمزايدة</h5>
            <div class="text-align"><span>@isset($auctions->min_bid)
                    {{ $auctions->min_bid}}$
                    @endisset </span></div>


        </div>


    </div> --}}
    {{--
                    </div> --}}
    </section>
    {{-- end section car auction --}}
    {{-- start section car images --}}
    <section class="my-3">
        <div class="main-image mb-3">
            {{-- <div class="arrow-right"> <i id="next" class="fas fa-angle-right  "></i></div>

                <div class="arrow-left"><i id="prev" class="fas fa-angle-left "></i></div> --}}
            @foreach($auctions->auctionImage as $image)
            @php
            $im = explode('_',$image->image);
            @endphp
            @if($im[1]=='main')
            <img id="show-image" src="{{$image->image}}" alt="">



        </div>
        <div class="slider-container mb-3">
            <div id="btn-right" class="arrow-right"> <i class="fas fa-angle-right  "></i></div>

            <div id="btn-left" class="arrow-left"><i class="fas fa-angle-left "></i></div>
            <div id="slider" class="image-slider-container mt-3">
                <div class="image ">
                    <img src="{{$image->image}}" class="img_active" alt="">

                </div>
                @else
                <div class="image ">
                    <img src="{{$image->image}}" class="" alt="">

                </div>
                @endif

                @endforeach
                <!--  <div class="image">
                  <img src="/assets/images/cars/car2.jpg" alt="">
                </div>
                <div class="image">
                    <img src="/assets/images/cars/car1.jpg" alt="">
                </div>
                <div class="image">
                    <img src="/assets/images/cars/car1.jpg" alt="">
                </div>
                <div class="image">
                    <img src="/assets/images/cars/car1.jpg" alt="">
                </div>

                <div class="image">
                    <img src="/assets/images/cars/car1.jpg" alt="">
                </div>
                <div class="image">
                    <img src="/assets/images/cars/car1.jpg" alt="">
                </div> -->

            </div>
        </div>
    </section>
    </div>

    {{-- start scection detail informarion about car --}}
    <div class="col-12 col-md-6">
        <h4 class="info"> تفاصيل حول السيارة</h4>
        <div class="detail-info-container">
            <div class="detail-info-row">
                <span>اسم السيارة</span>
                <span class="bold">
                    @isset($auctions->name)
                    {{ $auctions->name}}
                    @endisset
                </span>
            </div>
            <div class="detail-info-row">
                <span>الشركة المصنعة</span>
                <span class="bold">
                    @isset($auctions->category->name)
                    {{ $auctions->category->name}}
                    @endisset
                </span>
            </div>
            <div class="detail-info-row">
                <span> الموديل</span><span class="bold">
                    @isset($auctions->model)
                    {{ $auctions->model}}
                    @endisset
                </span>
            </div>

            <div class="detail-info-row">
                <span> اللون</span><span class="bold">
                    @isset($auctions->color)
                    {{ $auctions->color}}
                    @endisset
                </span>
            </div>

            <div class="detail-info-row">
                <span> الحالة</span><span class="bold">
                    @isset($auctions->state)
                    {{$auctions->state}}
                    @endisset
                </span>
            </div>
            <div class="detail-info-row">
                <span> الاضرار</span><span class="bold">
                    @isset($auctions->damage)
                    {{ $auctions->damage}}
                    @endisset
                </span>
            </div>

            <div class="detail-info-row">
                <span> المسافات المقطوعة</span>
                <span class="bold">@isset($auctions->odometer)
                    {{ $auctions->odometer}}
                    @endisset
                    <span>km</span></span>
            </div>

            <div class="detail-info-row">
                <span> نوع القير</span><span class="bold">
                    @isset($auctions->ger_type)
                    {{$auctions->ger_type}}

                    @endisset
                </span>
            </div>

            <div class="detail-info-row">
                <span> نوع المحرك</span>
                <span class="bold"> @isset($auctions->engine_type)
                    {{ $auctions->engine_type}}
                    @endisset
                </span>
            </div>

            <div class="detail-info-row">
                <span> نوع الوقود</span><span class="bold">
                    @isset($auctions->fuel)
                    {{$auctions->fuel}}

                    @endisset
                </span>
            </div>

            <div class="detail-info-row">
                <span> ملاحظات</span>
                <span class="bold"> @isset($auctions->notes)
                    {{ $auctions->notes}}
                    @endisset
                </span>

            </div>

        </div>
        <div class="action-card mt-2">
            <div style="background-color: #a4a5ad !important;" class="action-head">الاشتراك في المزاد</div>
            <div class="action-body">
                @if($auctions->is_active==1)

                <form id="bidding-form" name="amountForm" method="post" action="{{route('bidding')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" required id="input-amount" name="amount" placeholder="ادخل مبلغ للاشتراك في المزاد">
                    <input type="hidden" name="auction_id" value="{{$auctions->id}}">
                    {{-- <button type="submit" class="btn btn-primary" >مزايدة</button> --}}
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">مزايدة</button>
                </form>
                @else

                {{-- <form method="get" action="{{route('delivery')}}">
                    @csrf
                    <input type="hidden" name="auction_id" value="{{$auctions->id}}">
                    <button type="submit" class="btn btn-primary col-12" data-bs-target="#exampleModal">إكمال عملية الدفع </button>
                </form> --}}

                @endif
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" class="">تاكيد الاشتراك </h5>
                                <i class="fas fa-times" style="font-size: 25px" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></i>
                            </div>
                            <div class="modal-body">
                                @isset(Auth::user()->balance)
                                @if(Auth::user()->balance < $auctions->stare_price*.2)
                                    <div>
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <p>عفوا ليس لديك رصيد كافي للمشاركة في المزاد يجب عليك شحن محفظتك بملغ <strong>{{$auctions->stare_price * .2}}$</strong></p>
                                            <hr>
                                            <p class="mb-0"> سياسات الموقع <a href="{{ route('view_policies') }}"> انقر هنا لمعرفة المزيد</a></p>

                                        </div>
                                    </div>
                                    @endif
                                    @endisset
                                    هل انت متاكد انك تريد المزايدة بمبلغ <strong id="amount"></strong>$

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اللغاء</button>
                                <button type="submit" class="btn model-btn  mx-2" form="bidding-form">تاكيد المزايدة </button>
                            </div>
                        </div>

                    </div>
                    <script>
                        const btn = document.getElementById('btn');
                        const amount = document.getElementById('amount');
                        const inputAmount = document.getElementById('input-amount');
                        inputAmount.addEventListener('input', function() {
                            console.log(inputAmount.vaule);
                            amount.innerText = inputAmount.value;

                        })

                        // btn.addEventListener('click',function() {
                        //     amount.innerText = inputAmount.value;
                            
                        // })
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div id="msg" class="alert alert-danger">
        <strong id="validate-msg"></strong>
    </div>
    </div>

    </div>
    <script src="/assets/js/slider.js"></script>
    <script src="/assets/js/main.js"></script>
    @endsection
</body>
@include('footer.footer-details')

</html>