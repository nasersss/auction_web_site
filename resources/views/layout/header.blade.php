<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/all.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Document</title>
</head>
<body>
  	<!-- HEADER -->
      <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container header-container">
                <!-- responsive-nav -->
                <div>
                    <a href="#" class="logo">
                        <img src="assets/images/logoDark.png" alt="">
                    </a>
                </div>
                <div id="responsive-nav" class="nav-div">
                    <!-- NAV -->
                    <ul class="main-nav  ">
                        {{-- <i class="fas fa-times"></i> --}}
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fas fa-times  close-menu-style"  ></i>

                            </a>
                        </div>
                        <li><a href="#">الرئيسة</a></li>
                        <li><a href="#">المزادات </a></li>
                        <li><a href="#">الفئات</a></li>
                        <li><a href="#">الاسئلة الشائعة</a></li>
                        <li><a href="#">تواصل معنا</a></li>
                        <div>


                        </div>
                    </ul>
                    <!-- /NAV -->
                </div>
                <div class="header-icons">
                    <div id="search" class="search-icon">
                    <i class="fas fa-search"></i>
                </div>
                    <div class="show"><i class="fa fa-globe" aria-hidden="true"></i></div>
                   <div class="show"> <i class="fas fa-user"></i> </div>
                   <div class="menu-toggle">
                    <a href="#">
                        <i class="fa fa-bars menu-style"></i>

                    </a>
                </div>
                  </div>
                <!-- /responsive-nav -->
            </div>
            <!-- /container -->
        </nav>

        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">

                                        </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->

                    <div class="col-md-6">
                        <div class="header-search">
                            <form>
                                <select class="input-select">
                                    <option value="0">جميع الفئات</option>
                                    <option value="1">تويوتا</option>
                                    <option value="1"> هونداي</option>
                                </select>
                                <input class="input" placeholder="Search here">
                                <button class="search-btn">البحث</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix parent-false-icon">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                                <div id="close">
                            <i class="fas fa-times"></i>
                        </div>
                            <!-- /Wishlist -->

                            <!-- Cart -->



                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- star slider -->

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

      <!-- end slieder -->
      <!-- star category-->
      
       <div class="container">
           <h2>الفئات</h2>
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
      <!-- end category-->

      <script src="assets/js/jquery-3.6.0.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<script src="assets/js/header.js"></script>
<script src="assets/js/app.js"></script>


</html>
