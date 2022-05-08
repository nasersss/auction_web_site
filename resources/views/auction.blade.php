<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>المزادات </title>
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
    @extends('master')
    @section('content')
    <div class="container my-5">
        <h2 class="text-center">الفئات</h2>
   <div class="container-parent-category mt-3">
       <div class="arrow-category">
           <span>
         <i id="next" class="fas fa-angle-right next "></i>
     </span>
       </div>
       <!-- category container-->
       <div class="category-container">


       <div class="category">
           <div class="head-catagory-container">
           <div class="head-category">
             <img src="/assets/images/logos/pngegg.png" alt="">
           </div>
         </div>
           <div class="category-title">
             <h6>
                 تويوتا
             </h6>
         </div>
       </div>




       <div class="category">
         <div class="head-catagory-container">
         <div class="head-category">
           <img src="/assets/images/logos/لكزس.png" alt="">
         </div>
       </div>
         <div class="category-title">
           <h6>
لكزس              </h6>
       </div>
     </div>

     <div class="category">
         <div class="head-catagory-container">
         <div class="head-category">
           <img src="/assets/images/logos/مرسيدس.png" alt="">
         </div>
       </div>
         <div class="category-title">
           <h6>
مرسيدس              </h6>
       </div>
     </div>

     <div class="category">
         <div class="head-catagory-container">
         <div class="head-category">
           <img src="/assets/images/logos/سوزكي.png" alt="">
         </div>
       </div>
         <div class="category-title">
           <h6>
سوزكي              </h6>
       </div>
     </div>

     <div class="category">
         <div class="head-catagory-container">
         <div class="head-category">
           <img src="/assets/images/logos/bmw.png" alt="">
         </div>
       </div>
         <div class="category-title">
           <h6>
بي ام دبليو              </h6>
       </div>
     </div>

     <div class="category">
         <div class="head-catagory-container">
         <div class="head-category">
           <img src="/assets/images/logos/نيسان.png" alt="">
         </div>
       </div>
         <div class="category-title">
           <h6>
نيسان              </h6>
       </div>
     </div>

     <div class="category">
         <div class="head-catagory-container">
         <div class="head-category">
           <img src="/assets/images/logos/هونداي.png" alt="">
         </div>
       </div>
         <div class="category-title">
           <h6>
هونداي              </h6>
       </div>
     </div>

     <div class="category">
         <div class="head-catagory-container">
         <div class="head-category">
           <img src="/assets/images/logos/كيا.png" alt="">
         </div>
       </div>
         <div class="category-title">
           <h6>
كيا              </h6>
       </div>
     </div>
     <div class="category">
         <div class="head-catagory-container">
         <div class="head-category">
           <img src="/assets/images/logos/هوندا.png" alt="">
         </div>
       </div>
         <div class="category-title">
           <h6>
هوندا              </h6>
       </div>
     </div>
     </div>

   <div class="arrow-category">
       <span>
     <i id="prev" class="fas fa-angle-left prev "></i>
     </span>
   </div>
 </div>
</div>
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
                    <span class="card-detail-badge">حضرموت</span>
                    <span class="card-detail-badge">123,000 Kms</span>
                </div>
                <div class="card-body text-center">
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
</html>
