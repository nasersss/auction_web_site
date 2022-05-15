<!doctype html>
<html lang="en">

<head>
  <title>مزادي كار | الرئيسية</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="assets/css/search.css" rel="stylesheet" />
  <link href="assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/all.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/home.css">

</head>

<body>
  @extends('master')
  @section( 'content')
  <!--slider-->
  <div id="carouselExampleControls" class="carousel slide  carousel-fade  " data-ride="carousel">

    <div class="carousel-inner">
        @foreach($auctions as $auction)
      <div class="carousel-item @if($loop->index==1) active @endif">
        @foreach($auction->auctionImage as $image)
        @php
        $im = explode('_',$image->image);
        @endphp
        @if($im[1]=='main')


        <div class="slider-img" style="background-image: url('{{ $image->image }}')">

        </div>
        @endif
        @endforeach
        <div class="container">
          <div class="col-12 col-lg-6">
            <div class="card slider-card">
              <div class="card-body">
                <div class="new-offer">
                  <b class="text-white">الحصري</b>
                </div>
<div class="slider_head col-12">
                <div class="slider-offer-image">
                  <img src="/assets/images/logos/pngegg.png" alt="">
                </div>
                <div>
                <h5 class="card-title mt-3"> {{ $auction->name }} </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    {{$auction->city->name  }}-


    {{ $auction->city->state->name }}

                </h6>
            </div>
        </div>
                <div class="row">
                  <div class="col-12 col-md-6">
                    <p class="card-text">
                    <table>
                      <tr>
                        <th>
                          الموديل </th>
                        <td>
                          {{ $auction->model }}
                        </td>
                      </tr>
                      <tr>
                        <th>
                          الحالة
                        </th>
                        <td>
                            @if($auction->state == 1) مستخدم @else جديد @endif </td>
                      </tr>
                      <tr>
                        <th>
                          المسافات المقطوعة
                        </th>
                        <td>
                           {{ $auction->odometer }}
                        </td>
                      </tr>
                      <tr>
                        <th>
                          اللون
                        </th>
                        <td>
                          {{ $auction->color }}
                        </td>
                      </tr>
                    </table>
                    </p>

                  </div>
                  <div class="col-12 col-md-6">
                    @foreach($auction->auctionImage as $image)
                    @php
                    $im = explode('_',$image->image);
                    @endphp
                    @if($im[1]=='main')
                    <img src="{{$image->image}}" class="w-100 rounded" style="height: 115px" alt="">
                    @endif
                    @endforeach

                  </div>
                  <p class="mt-4 card-text auction-paragraph col-12">المزاد الحالي<span class="auction-price"> 10000 $</span></p>

                  <a href="{{ route('action_detail',$auction->id) }}" class="btn btn-color col-12">الاشتراك في المزاد</a>

                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
      @endforeach
      {{-- <div class="carousel-item">
         <div class="slider-img" style="background-image: url('/assets/images/cars/car2.jpg')">
        </div>
        <div class="container">
          <div class="col-12 col-lg-6">
            <div class="card slider-card">
              <div class="card-body">
                <div class="new-offer">
                  <b class="text-white">جديد</b>
                </div>
                <div class="slider-offer-image">
                  <img src="/assets/images/logos/pngegg.png" alt="">
                </div>
                <h5 class="card-title mt-3"> كامري </h5>
                <h6 class="card-subtitle mb-2 text-muted">المكلا</h6>
                <div class="row">
                  <div class="col-6">
                    <p class="card-text">
                    <table>
                      <tr>
                        <th>
                          الموديل </th>
                        <td>
                          2018
                        </td>
                      </tr>
                      <tr>
                        <th>
                          الحالة
                        </th>
                        <td>
                          مستخدم
                        </td>
                      </tr>
                      <tr>
                        <th>
                          المسافات المقطوعة
                        </th>
                        <td>
                          25000 km
                        </td>
                      </tr>
                      <tr>
                        <th>
                          اللون
                        </th>
                        <td>
                          ازرق
                        </td>
                      </tr>
                    </table>
                    </p>

                    <a href="#" class="btn btn-color">الاشتراك في المزاد</a>
                  </div>
                  <div class="col-6">
                    <img src="/assets/images/cars/car2.jpg" class="w-100 rounded" alt="">
                    <p class="mt-2 card-text auction-paragraph">المزاد الحالي<span class="auction-price"> 10000 $</span></p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}

     </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <div class="slide-bar-icon"> <span class="carousel-control-prev-icon" aria-hidden="true"></span></div>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <div class="slide-bar-icon"><span class="carousel-control-next-icon" aria-hidden="true"></span></div>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!--end slider-->
  <!--start category-->
  <section class=" mt-5">
    <div class="container">
      <h3>الفئات</h3>
      <div class="container-parent-category mt-3">
        <div class="arrow-category">
          <span>
            <i id="next" class="fas fa-angle-right next "></i>
          </span>
        </div>
        <!-- category container-->
        <div class="category-container">

@foreach($categories as $category)

          <div class="category">
            <div class="head-catagory-container">
              <div class="head-category">
                <img src="{{ $category->image }}" alt="">
              </div>
            </div>
            <div class="category-title">
              <h6>
                {{ $category->name}}
              </h6>
            </div>
          </div>

          @endforeach


        </div>

        <div class="arrow-category">
          <span>
            <i id="prev" class="fas fa-angle-left prev "></i>
          </span>
        </div>
      </div>
    </div>
  </section>
  <!-- end category-->
  <!--end category-->
  <section class="mt-5">
    <div class="container">
      <br>
      <h3> عروض مزادات </h3>
      <br>

      <!--Sarch input-->
      <div class="col-md-12">
                <div class="s007 mt-3">
                    <form method="post" action="{{route('index')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="inner-form">
                            <div class="basic-search">
                                <div class="input-field">
                                    <div class="icon-wrap">
                                        <img src="/assets/images/search.png" width="30">
                                    </div>
                                    <input id="search" type="text" placeholder="بحث..." />
                                    <div class="result-count" onclick="myFunction()">
                                        <img src="/assets/images/Advanced_Search.png" width="30">بحث متقدم
                                    </div>
                                </div>
                            </div>
                            <div class="advance-search" id="myDIV">

                                <div class="row">
                                    <div class="input-field">
                                        <label for="inputAddress" class="form-label" style="text-align: right;">ماركة المركبة</label>
                                        <div class="input-select">
                                            <select name="category_id" class="form-select mb-3">
                                                <option selected disabled value="">.أختر احدى الماركات</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <label for="inputAddress" class="form-label" style="text-align: right;">لون المركبة</label>
                                        <div class="input-select">
                                            <select data-trigger="" name="color" class="form-select mb-3">
                                                <option selected disabled value="">.أختر احد الاللوان </option>
                                                <option value="أزرق">أزرق</option>
                                                <option value="أحمر">أحمر</option>
                                                <option value="أخضر">أخضر</option>
                                                <option value="رمادي">رمادي</option>
                                                <option value="أسود">أسود</option>
                                                <option value="أبيض">أبيض</option>
                                                <option value="بنفجسي">بنفجسي</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <label for="inputAddress" class="form-label" style="text-align: right;">نوع المركبة</label>
                                        <div class="input-select">
                                            <select name="vehicle_type"  class="form-select mb-3">
                                                <option value="" selected disabled>.أختر نوع المركبة</option>
                                                @isset($vehicleTypes)
                                                @foreach($vehicleTypes as $vehicleType)
                                                <option value="{{$vehicleType->id}}">{{$vehicleType->name}}</option>
                                                @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="input-field">
                                        <label for="inputAddress" class="form-label" style="text-align: right;">المحافظة</label>
                                        <div class="input-select">
                                            <select id='state' name="states" class="form-select mb-3">
                                                <option selected disabled>.أختر محافظة</option>
                                                @isset($states)
                                                @foreach($states as $state)
                                                <option value="{{$state->id}}">{{$state->name}}</option>
                                                @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <label for="inputAddress" class="form-label" style="text-align: right;">المدينة</label>
                                        <div class="input-select">
                                            <select data-trigger="" name="address" id='city' class="form-select mb-3">
                                                <option value="" selected disabled>.أختر مدينة</option>
                                                @isset($states)
                                                @foreach($states as $state)
                                                @foreach($state->city as $city)
                                                <option style="display: none !important;" class="citys state-{{$city->state_id}}" value="{{$city->id}}">{{$city->name}}</option>
                                                @endforeach
                                                @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                    <script>
                                        const states = document.getElementById('state');
                                        const city = document.getElementById('city');
                                        states.addEventListener('click', function() {
                                            city.value = '.أختر مدينة ';
                                            var citys = document.getElementsByClassName('citys');
                                            for (let index = 0; index < citys.length; index++) {
                                                citys[index].style.display = 'none';
                                            }
                                            citys = document.getElementsByClassName('state-' + states.value);
                                            for (let index = 0; index < citys.length; index++) {
                                                citys[index].style.display = 'block';
                                            }
                                        })
                                    </script>
                                    <div class="input-field">
                                        <label for="inputAddress" class="form-label" style="text-align: right;">تارخ ووقت انتهاء المزاد</label>
                                        <div class="input-select">
                                            <input name="date_of_end_auction" type="datetime-local" class="form-select" style="margin: 0;padding: 0;height: 38px;" id="inputAddress" placeholder="مثال باص ...">
                                        </div>
                                    </div>
                                </div>

                                <div class="row third">
                                    <div class="input-field">
                                        <button class="btn-search">بحث</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
      <!--End Sarch input-->

      <div class="row" id="ads">
        <!-- Category Card -->


        @if($auctions!=null)
        @foreach($auctions as $auction)



        <div class="col-md-4 my-3">
          <div class="card rounded">
            <div class="card-image">
              <span class="card-notify-year">@if($auction->state == 1) مستخدم @else جديد @endif
              </span>
              @foreach($auction->auctionImage as $image)
              @php
              $im = explode('_',$image->image);
              @endphp
              @if($im[1]=='main')
              <img class="img-fluid" src="{{$image->image}}" alt="" />
              @endif

              @endforeach
            </div>
            <div class="card-image-overlay m-auto">
              <span class="card-detail-badge">{{ $auction->model }}</span>
              <span class="card-detail-badge">{{ $auction->city->state->name }} - {{ $auction->city->name }}</span>
              <span class="card-detail-badge">{{ $auction->odometer }}km</span>
            </div>
            <div class="card-body text-center">
              <div class="ad-title m-auto">
                <h5>{{ $auction->name }}</h5>
                <h2>العطاء الحالي ${{ $auction->stare_price }}</h2>
                <h2>تاريخ انتهاء المزاد</h2>
                <h2 id=""> {{ $auction->date_of_end_auction }}</h2>

              </div>
              <a class="ad-btn" href="{{ route('action_detail',$auction->id)}}">مشاهدة التفاصيل</a>
            </div>
          </div>
        </div>


        @endforeach
        @else
        <h1>لاتوجد مزادات حالية</h1>
        @endisset


      </div>
  </section>
  <section id="about" class="about mt-5">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>التعريف بمنصة مزادي كار</h2>
        <p>هي منصة إلكترونية تتيح للمزايدين المزايدة إلكترونياً على السيارات في المزاد بواسطة وسائل دفع إلكترونية و
          عملية المزايدة في الموقع الإلكتروني موثوقة، وتتفق مع قوانين إقامة المزادات والبيع والشراء في الجمهورية اليمنية وايضاُ
          يمكن الاطلاع على مجريات المزادات بدون تسجيل الدخول من خلال الضغط على 'عرض التفاصيل' في المزاد المطلوب </p>
      </div>
    </div>
  </section>
  <div class="container">
    <h2 id="method_header">طريقة إستخدام النظام</h2>
    <div class="row">
      <div class="tab-content col-6">

        <div class="tab-pane active d-none show" id="tab-1">
          <div class="md-stepper-horizontal orange">
            <div class="md-step active done">
              <div class="md-step-circle"><span>4</span></div>
              <div class="md-step-title">أضف مزايدتك</div>
              <div class="md-step-bar-left"></div>
              <div class="md-step-bar-right"></div>
            </div>
            <div class="md-step active editable">
              <div class="md-step-circle"><span>3</span></div>
              <div class="md-step-title"> إشترك في المزاد</div>
              <div class="md-step-bar-left"></div>
              <div class="md-step-bar-right"></div>
            </div>
            <div class="md-step active">
              <div class="md-step-circle"><span>2</span></div>
              <div class="md-step-title">اشحن محفظتك</div>
              <div class="md-step-bar-left"></div>
              <div class="md-step-bar-right"></div>
            </div>
            <div class="md-step active">
              <div class="md-step-circle"><span>1</span></div>
              <div class="md-step-title"> سجل في المنصة</div>
              <div class="md-step-bar-left"></div>
              <div class="md-step-bar-right"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200" id="method">
        <img class="img-fluid" src="assets/images/top-10-programmers-on-the-world.jpg" alt="">
      </div>
    </div>
  </div>
  </div>
  </div>

  <section id="featured-services" class="featured-services">
    <div class="container">
      <h3> لماذا المزاد الالكتروني؟</h3>
      <div class="row gy-4">

        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
          <div class="service-item position-relative">
            <div class="icon">
              <img src="assets/images/card-id-identity-svgrepo-com.svg">
            </div>
            <h4>وسائل دفع الكترونية</h4>
            <p>يمكن دفع مبالغ مالية واسترجاعها من خلال وسائل دفع الكترونية</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <img src="assets/images/computer-device-hardware-svgrepo-com.svg">
            </div>
            <h4>المشاركة عن بعد</h4>
            <p>بإمكان المزايد المشاركة في المزادات بشكل إلكتروني دون الحاجة للحضور في موقع المزاد</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <img src="assets/images/checklist-document-file-svgrepo-com.svg">
            </div>
            <h4>أمان الموقع</h4>
            <p>عمليات المزايدة بداخل الموقع تكون بأعلى وسائل الحماية والامن داخل وخارج الجمهورية اليمنية </p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <img src="assets/images/auction-svgrepo-com (1).svg">
            </div>
            <h4>المزايدة في أكثر من مزاد</h4>
            <p>بإمكان المزايد المشاركة بإكثر من مزاد بنفس الوقت</p>
          </div>
        </div><!-- End Service Item -->
      </div>
    </div>
  </section><!-- End Featured Services Section -->
  <!-- start footer-->


  @endsection

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>


</body>

</html>
