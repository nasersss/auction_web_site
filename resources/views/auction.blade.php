<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>المزادات </title>

    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
    @extends('master')
    @section('content')

  {{-- <div class="container my-5">
    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option selected data-filter="all">جميع المحافظات</option>
        <option selected data-filter="hadrmout">حضرموت</option>
        <option selected data-filter="taiz">تعز</option>
        <option selected data-filter="sanaa">صنعاء</option>

      </select>
    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option selected data-filter="all">جميع المدن </option>
        <option selected data-filter="hamdan"> همدات</option>
        <option selected data-filter="taizh"> التعزية </option>
        <option selected data-filter="mukalla"> المكلا </option>


      </select>

    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option selected data-filter="all">جميع الفئات</option>
        <option selected data-filter="toyouta"> نويوتا</option>
        <option selected data-filter="honda"> هوندا</option>
        <option selected data-filter="nissan">نيسان</option>



      </select>



  </div> --}}
    <div class="container">
        <h2 class="text-center">المزادات المتاحة</h2>
    <div class="row" id="ads">
        <!-- Category Card -->

        <div class="col-md-4 my-3">
            <div class="card rounded">
                <div class="card-image">
                    <span class="card-notify-badge">مزاد جاري</span>
                    <span class="card-notify-year">New</span>
                    <img class="img-fluid" src="assets/images/mobile_listing_main_01.jpg" alt="Alternate Text" />
                </div>
                <div class="card-image-overlay m-auto">
                    <span class="card-detail-badge">2018</span>
                    <span class="card-detail-badge"><span class="hadrmout">حضرموت</span> - <span class="mukalla">المكلا</span></span>
                    <span class="card-detail-badge">123,000 Kms</span>
                </div>
                <div class="card-body text-center nissan">
                    <div class="ad-title m-auto">
                        <h5>  نيسان Kicks SV+NAV عائلة</h5>
                        <h2>العطاء الحالي 4,000,000</h2>
              <h2 id="demo"> ينتهي المزاد بعد</h2>

                    </div>
                    <a class="ad-btn" href="{{ route('details-car')}}">مشاهدة التفاصيل</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-3">
            <div class="card rounded">
                <div class="card-image">
                    <span class="card-notify-badge">مزاد جاري</span>

                    <img class="img-fluid" src="/assets/images/e-class-coupe-brilliant-blue-metallic.jpg" alt="Alternate Text" />
                </div>
                <div class="card-image-overlay m-auto">
                    <span class="card-detail-badge">2020</span>
                    <span class="card-detail-badge"><span class="sanna">صنعاء</span> - <span class="hamdan">همدان</span></span>
                    <span class="card-detail-badge">13000 Kms</span>
                </div>
                <div class="card-body text-center">
                    <div class="ad-title m-auto">
                        <h5>  مرسيدس بنز  Coupe عائلة</h5>
                        <h2>العطاء الحالي8,000,000 </h2>
              <h2> ينتهي المزاد بعد</h2>

                    </div>
                    <a class="ad-btn" href="{{  route('details-car')}}">مشاهدة التفاصيل</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">
            <div class="card rounded">
                <div class="card-image">
                    <span class="card-notify-badge">مزاد جاري</span>

                    <img class="img-fluid" src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC091A021001.jpg&width=440&height=262" alt="Alternate Text" />
                </div>
                <div class="card-image-overlay m-auto">
                    <span class="card-detail-badge">2018</span>
                    <span class="card-detail-badge"><span class="sanna">صنعاء</span> - <span class="hamdan">همدان</span></span>
                    <span class="card-detail-badge">8000 Kms</span>
                </div>
                <div class="card-body text-center honda">
                    <div class="ad-title m-auto">
                        <h5> هوندا اكورد Sport صالون</h5>
                        <h2>العطاء الحالي5,000,000<h2>
              <h2> ينتهي المزاد بعد</h2>
             <div class="div" id="demo">

             </div>
                    <a class="ad-btn" href="{{  route('details-car')}}">مشاهدة التفاصيل</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 my-3">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">مزاد جاري</span>
                <span class="card-notify-year">New</span>
                <img class="img-fluid" src="assets/images/mobile_listing_main_01.jpg" alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">2018</span>
                <span class="card-detail-badge"><span class="hadrmout">حضرموت</span> - <span class="mukalla">المكلا</span></span>
                <span class="card-detail-badge">123,000 Kms</span>
            </div>
            <div class="card-body text-center nissan">
                <div class="ad-title m-auto">
                    <h5>  نيسان Kicks SV+NAV عائلة</h5>
                    <h2>العطاء الحالي 4,000,000</h2>
          <h2 id="demo"> ينتهي المزاد بعد</h2>

                </div>
                <a class="ad-btn" href="{{ url('/appear_detalis_2')}}">مشاهدة التفاصيل</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 my-3">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">مزاد جاري</span>

                <img class="img-fluid" src="assets/images/e-class-coupe-brilliant-blue-metallic.jpg" alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">2020</span>
                <span class="card-detail-badge"><span class="taiz">تعز</span> - <span class="taizh">التعزية</span></span>
                <span class="card-detail-badge">13000 Kms</span>
            </div>
            <div class="card-body text-center toyouta">
                <div class="ad-title m-auto">
                    <h5>  مرسيدس بنز  Coupe عائلة</h5>
                    <h2>العطاء الحالي8,000,000 </h2>
          <h2> ينتهي المزاد بعد</h2>

                </div>
                <a class="ad-btn" href="{{ url('/appear_detalis_1')}}">مشاهدة التفاصيل</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 my-3">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">مزاد جاري</span>

                <img class="img-fluid" src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC091A021001.jpg&width=440&height=262" alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">2018</span>
                <span class="card-detail-badge">تعز</span>
                <span class="card-detail-badge">8000 Kms</span>
            </div>
            <div class="card-body text-center honda">
                <div class="ad-title m-auto ">
                    <h5> هوندا اكورد Sport صالون</h5>
                    <h2>العطاء الحالي5,000,000<h2>
          <h2> ينتهي المزاد بعد</h2>
         <div class="div" id="demo">

         </div>
                <a class="ad-btn" href="{{ url('/appear_detalis')}}">مشاهدة التفاصيل</a>
            </div>
        </div>
    </div>
    </div>

    <div class="col-md-4 my-3">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">مزاد جاري</span>
                <span class="card-notify-year">New</span>
                <img class="img-fluid" src="assets/images/mobile_listing_main_01.jpg" alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">2018</span>
                <span class="card-detail-badge">حضرموت</span>
                <span class="card-detail-badge">123,000 Kms</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5>  نيسان Kicks SV+NAV عائلة</h5>
                    <h2>العطاء الحالي 4,000,000</h2>
          <h2 id="demo"> ينتهي المزاد بعد</h2>

                </div>
                <a class="ad-btn" href="{{ url('/appear_detalis_2')}}">مشاهدة التفاصيل</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 my-3">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">مزاد جاري</span>

                <img class="img-fluid" src="assets/images/e-class-coupe-brilliant-blue-metallic.jpg" alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">2020</span>
                <span class="card-detail-badge">صنعاء</span>
                <span class="card-detail-badge">13000 Kms</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5>  مرسيدس بنز  Coupe عائلة</h5>
                    <h2>العطاء الحالي8,000,000 </h2>
          <h2> ينتهي المزاد بعد</h2>

                </div>
                <a class="ad-btn" href="{{ url('/appear_detalis_1')}}">مشاهدة التفاصيل</a>
            </div>
        </div>
    </div>

    <div class="col-md-4  my-3">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">مزاد جاري</span>

                <img class="img-fluid" src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC091A021001.jpg&width=440&height=262" alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">2018</span>
                <span class="card-detail-badge">تعز</span>
                <span class="card-detail-badge">8000 Kms</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5> هوندا اكورد Sport صالون</h5>
                    <h2>العطاء الحالي5,000,000<h2>
          <h2> ينتهي المزاد بعد</h2>
         <div class="div" id="demo">

         </div>
                <a class="ad-btn" href="{{ url('/appear_detalis')}}">مشاهدة التفاصيل</a>
            </div>
        </div>
    </div>
    </div>




    </div>
</div>
    @endsection

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<script src="assets/js/filter.js"></script>
</html>
