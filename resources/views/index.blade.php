<!doctype html>
<html lang="en">
  <head>
  	<title>مازدي كار | الرئيسية</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/ionicons.min.css">
		<link rel="stylesheet" href="assets/css/style.css">

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
          <div class="carousel-item active">
              <div class="slider-img" style="background-image: url('/assets/images/cars/car1.jpg')">
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
  الموديل                                    </th>
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
                                            المشي
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

                            <p class="card-text"><strong>المزاد الحالي</strong>: 10000 $</p>
                            <a href="#" class="btn btn-color">الاشتراك في المزاد</a>
                          </div>
                          <div class="col-6">
                              <img src="/assets/images/cars/car1.jpg" class="w-100 rounded" alt="">
                          </div>
                            </div>

                        </div>
                      </div>
                </div>
            </div>

          </div>
          <div class="carousel-item">
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
الموديل                                    </th>
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
                                          المشي
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

                          <p class="card-text"><strong>المزاد الحالي</strong>: 10000 $</p>
                          <a href="#" class="btn btn-color">الاشتراك في المزاد</a>
                        </div>
                        <div class="col-6">
                            <img src="/assets/images/cars/car2.jpg" class="w-100 rounded" alt="">
                        </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
         <div class="slide-bar-icon"> <span class="carousel-control-prev-icon" aria-hidden="true"></span></div>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
         <div class="slide-bar-icon" ><span class="carousel-control-next-icon" aria-hidden="true"></span></div>
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
</section>
    <!-- end category-->
      <!--end category-->
      <section class="mt-5">
  <div class="container">
    <br>
    <h3>  عروض مزادات </h3>
	<br>
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
                <a class="ad-btn" href="{{ route('details-car')}}">مشاهدة التفاصيل</a>
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
                <a class="ad-btn" href="{{ route('details-car')}}">مشاهدة التفاصيل</a>
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



</div>
</section>
<section id="about" class="about mt-5">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>التعريف بمنصة مزادي كار</h2>
          <p>هي منصة إلكترونية تتيح للمزايدين المزايدة إلكترونياً على السيارات في المزاد بواسطة وسائل دفع إلكترونية و
عملية المزايدة في الموقع الإلكتروني موثوقة، وتتفق مع قوانين إقامة المزادات والبيع والشراء في الجمهورية اليمنية وايضاُ
يمكن الاطلاع على مجريات المزادات بدون تسجيل الدخول من خلال الضغط على 'عرض التفاصيل' في المزاد المطلوب  </p>
        </div>
</div>
</section>
<div class="container">
<h2 id="method_header">طريقة إستخدام النظام</h2>
  <div class="row">
  <div class="tab-content col-6">

<div class="tab-pane active show" id="tab-1">
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
      <img  class="img-fluid" src="assets/images/top-10-programmers-on-the-world.jpg" alt="">
    </div>
  </div>
  </div>
  </div>
  </div>

<section id="featured-services" class="featured-services">
      <div class="container">
    <h3>  لماذا المزاد الالكتروني؟</h3>
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
