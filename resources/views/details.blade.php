<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
         <link rel="stylesheet" href="assets/css/all.css">
         <link rel="stylesheet" href="assets/css/style.css">
 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="assets/css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="assets/css/slick-theme.css"/>
         <link rel="stylesheet" href="assets/css/details.css">
         <link rel="stylesheet" href="assets/css/header.css">

    <title>Document</title>
</head>
<body>


    @extends('master')
    @section('content')

    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2" style="direction: ltr;">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="assets/images/car1.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/car2.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/car1.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/car2.jpg" alt="">
                        </div>
                    </div>



                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5 " style="direction: ltr;">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="assets/images/car1.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/car2.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/car1.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/car2.jpg" alt="">
                        </div>
                    </div>

                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">

                     <div class="auction-title">
                        <h2>كامري</h2>
                        <h4 class="address"> حضرموت - المكلا</h4>
                        <img src="img/مرسيدس.png" alt="" class="brand">
                        <span class="price-title">السعر الحالي للمزاد</span> <span class="price">15000$</span>
                    </div>
                    <div class="detail-container">
                        <div class="detail-colmun">
                            <h4>  المدة المتبقية</h4>
                            <div>3 ايام 5ساعات 30دقيقة</div>
                        </div>
                        <div class="detail-colmun">
                        <h4>	عدد المشاركات	</h4>
                        <div>
                            18
                        </div>
                        </div>
                        <div class="detail-colmun" >
                    <h4>   الحد الادنى للمزاد </h4>
                    <div>1000$</div>
                        </div>

                    </div>

                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">اسم السيارة </span>
                                    <span>كامري</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">الشركة المصنعة</span>
                                    <span>تويوتا</span>
                                </div>

                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">الموديل</span>
                                    <span>2018</span>
                                </div>

                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">اللون</span>
                                    <span>ازرق</span>
                                </div>

                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">الحالة</span>
                                    <span>مسعمل</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">الاضرار</span>
                                    <span>سليم</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">نوع القير</span>
                                    <span>اوتماتيك</span>
                                </div>

                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">المسافات المقطوعة</span>
                                    <span>30000 km</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">نوع المحرك</span>
                                    <span>3.0L 6</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">نوع الوقود </span>
                                    <span>بترول</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">الملاحظات </span>
                                    <span>بترول</span>
                                </div>
                                <div  class="col-11 col-md-12 padding-customize  ">
                                    <div class="auction">
                                        <input type="number" name="prise" placeholder="ادخل المبلغ للاشتراك في المزاد">
                                     <button class="btn btn-primary auction-btn">مزايدة</button>
                                   </div>
                                </div>


                          </div>


                </div>
                <!-- /Product details -->

                <!-- Product tab -->

                <!-- /product tab -->
            </div>


            </div>
            <!-- /row -->

        </div>

    </div>
    @endsection
    <script src="js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/slick.min.js"></script>
		<script src="assets/js/jquery.zoom.min.js"></script>
		<script src="assets/js/main.js"></script>
</body>
</html>
