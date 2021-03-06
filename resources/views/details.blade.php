<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">

 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
         <link rel="stylesheet" href="assets/css/all.css">
         <link rel="stylesheet" href="assets/css/style.css">
 		<!-- Slick -->
 		<link rel="stylesheet" href="assets/css/slick.css">
         <link rel="stylesheet" href="assets/css/slick-theme.css">
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
                            <img src="assets/images/cars/car1.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/cars/car2.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/cars/car1.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/cars/car2.jpg" alt="">
                        </div>
                    </div>



                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5 " style="direction: ltr;">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="assets/images/cars/car1.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/cars/car2.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/cars/car1.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/cars/car2.jpg" alt="">
                        </div>
                    </div>

                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">

                     <div class="auction-title">
                        <h2>??????????</h2>
                        <h4 class="address"> ???????????? - ????????????</h4>
                        <img src="assets/images/logos/????????????.png" alt="" class="brand">
                        <span class="price-title">?????????? ???????????? ????????????</span> <span class="price">15000$</span>
                    </div>
                    <div class="detail-container">
                        <div class="detail-colmun">
                            <h6>  ?????????? ????????????????</h6>
                            <div>3 ???????? 5?????????? 30??????????</div>
                        </div>
                        <div class="detail-colmun">
                        <h6>	?????? ??????????????????	</h6>
                        <div>
                            18
                        </div>
                        </div>
                        <div class="detail-colmun" >
                    <h6>   ???????? ???????????? ???????????? </h6>
                    <div>1000$</div>
                        </div>

                    </div>

                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">?????? ?????????????? </span>
                                    <span>??????????</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">???????????? ??????????????</span>
                                    <span>????????????</span>
                                </div>

                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">??????????????</span>
                                    <span>2018</span>
                                </div>

                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">??????????</span>
                                    <span>????????</span>
                                </div>

                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">????????????</span>
                                    <span>??????????</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">??????????????</span>
                                    <span>????????</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">?????? ??????????</span>
                                    <span>????????????????</span>
                                </div>

                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">???????????????? ????????????????</span>
                                    <span>30000 km</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">?????? ????????????</span>
                                    <span>3.0L 6</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">?????? ???????????? </span>
                                    <span>??????????</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">?????????????????? </span>
                                    <span>??????????</span>
                                </div>
                                <div  class="col-11 col-md-12 padding-customize  ">
                                    <div class="auction">
                                        <input type="number" name="prise" placeholder="???????? ???????????? ???????????????? ???? ????????????">
                                     <button class="btn btn-primary auction-btn">????????????</button>
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
        <script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/slick.min.js"></script>
		<script src="assets/js/jquery.zoom.min.js"></script>
		<script src="assets/js/app-main.js"></script>
    @endsection

</body>
</html>
