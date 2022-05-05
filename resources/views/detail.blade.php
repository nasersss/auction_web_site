<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/detail.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <title>التفاصيل</title>
</head>
<body>
    @extends('master')
@section('content')
<div class="container mt-5">
    <div class="row">

        <div class="col-12 col-md-6 section-style ">
            {{-- section car information --}}
            <section>
            <div class="head-detail">
            <div class="logo">
               <img src="assets/images/logos/pngegg.png" alt="" srcset="">
            </div>
            <div class="head-title">
              <h4><span> تويوتا </span> - <span> كامري </span></h4>
              <h4><span> المكلا </span> - <span> حضرموت </span></h4>

            </div>
            </div>
        </section>
         {{-- end section car information --}}
         {{-- start section car auction --}}
         <section>
             <div class="auction-info-one my-3">
                 <div>السعر الحالي للمزاد :</div>
                 <span class="auction-price">11500 <span>$</span></span>

             </div>
             <div class="auction-info-two mb-3">
                 <div class="row">
                     <div class="col-4">
                      <h5 class="text-align"> الوقت المتبقي</h5>
                     <div class="text-align"> <span>5 ايام و 8ساعات</span></div>
                     </div>
                     <div class="col-4">
                    <h5 class="text-align"> عدد المشاركات</h5>
                   <div class="text-align"> <span>18</span>  </div>
                    </div>
                    <div class="col-4">
                        <h5 class="text-align">الحد الادنى للمزاد</h5>
                       <div class="text-align"><span>1000$</span></div>


                    </div>


                 </div>

             </div>
         </section>
         {{-- end section car auction --}}
         {{-- start section car images --}}
         <section>
             <div class="main-image mb-3">
                 {{-- <div class="arrow-right"> <i id="next" class="fas fa-angle-right  "></i></div>

                <div class="arrow-left"><i id="prev" class="fas fa-angle-left "></i></div> --}}

                 <img id="show-image" src="/assets/images/cars/car1.jpg" alt="" >

             </div>
             <div class="slider-container mb-3">
                <div id="btn-right" class="arrow-right"> <i  class="fas fa-angle-right  "></i></div>

                <div id="btn-left" class="arrow-left"><i  class="fas fa-angle-left "></i></div>
             <div id="slider" class="image-slider-container">
                 <div class="image ">
                    <img src="/assets/images/cars/car1.jpg" class="img_active" alt="">

                 </div>
                 <div class="image">
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
                </div>

             </div>
            </div>
         </section>
        </div>

    {{-- start scection detail informarion about car --}}
        <div class="col-12 col-md-6">
            <h4 class="bold"> المعلومات الاساسية</h4>
            <div class="detail-info-container">
            <div class="detail-info-row">
<span>اسم السيارة</span><span> كامري</span>
            </div>
            <div class="detail-info-row">
                <span>الشركة المصنعة</span><span> تويوتا</span>
            </div>
            <div class="detail-info-row">
                <span> الموديل</span><span> 2018</span>
            </div>

            <div class="detail-info-row">
                <span> اللون</span><span> الازرق</span>
            </div>

            <div class="detail-info-row">
                <span> الحالة</span><span> مستعمل</span>
            </div>
            <div class="detail-info-row">
                <span> الاضرار</span><span> سليم</span>
            </div>

            <div class="detail-info-row">
                <span> المسافات المقطوعه</span><span> 30000km</span>
            </div>

            <div class="detail-info-row">
                <span> نوع القير</span><span> اوتماتيك</span>
            </div>

            <div class="detail-info-row">
                <span> نوع المحرك</span><span> 3.0L 6</span>
            </div>

            <div class="detail-info-row">
                <span> نوع الوقود</span><span> بترول</span>
            </div>

            <div class="detail-info-row">
                <span> ملاحظات</span><span> لا يوجد
                </span>
            </div>

        </div>
        <div class="action-card mt-2">
            <div class="action-head">الاشتراك في المزاد</div>
            <div class="action-body"><input type="text" placeholder="ادخل مبلغ للاشتراك في المزاد"> <a href="" class="btn">مزايدة</a></div>
        </div>
        </div>

    </div>
</div>
@endsection
<script src="/assets/js/jquery.min.js"></script>
<script src="/public/assets/js/app.js"></script>
</body>
</html>
