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
                        <a href="{{ route('home') }}">
                            <i class="fas fa-times  close-menu-style"  ></i>

                        </a>
                    </div>
                    <li><a href="{{ route('home') }}">الرئيسة</a></li>
                    <li><a href="{{ route('auction') }}">المزادات </a></li>
                    <li><a href="#">الفئات</a></li>
                    <li><a href="#">الاسئلة الشائعة</a></li>
                    <li><a href="{{  route('ContactUs')}}">تواصل معنا</a></li>
                    <li class="show-menu"><a href="{{ route('login') }}">تسجيل الدخول</a></li>
                    {{-- <li class="show-menu"><a href="#"> اللغة</a></li> --}}
                    <div>


                    </div>
                </ul>
                <!-- /NAV -->
            </div>
            <div class="header-icons">
                <div id="search" class="search-icon icon">
                <i class="fas fa-search"></i>
            </div>
                {{-- <div class="show icon"><i class="fa fa-globe" aria-hidden="true"></i></div> --}}
               <!-- <div class="show"> <a href="{{ route('login') }}"> <i class="fas fa-user"></i></a> </div> -->
                @guest
                            @if (Route::has('login'))

                                <div  class="show login" > <a href="{{ route('login') }}" >تسجيل الدخول</a>

                                </div>

                            </div>
                            @endif
                        @else
                        <div  class="show icon user" onclick="userSelection()" style="background: #eee"> <a href="#" style="color:var(--secondary)"> <i class="fas fa-user"></i></a>
                            <div id="list-user"  class="list-user">
                            <a href=""><i class="fas fa-user"></i> الملف الشخصي</a>
                            <a href=""><i class="fas fa-cog"></i>  الاعدادات</a>
                            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fas fa-sign-out"></i>تسجيل الخروج</a>
                        </div>
                     </div>
                                    {{ Auth::user()->name }}
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                        @endguest

                {{-- <div class="show icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
               <div class="show icon"> <i class="fas fa-user"></i> </div> --}}
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




@yield('content')
<footer class="footer-10">

    <div class="row mb-5 pb-3 no-gutters">
        <div class="col-md-4 mb-md-0 mb-4 d-flex">
            <div class="con con-1 w-100 py-5">
                <div class="con-info w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="ion-ios-call"></span>
                    </div>
                    <div class="text">
                        <span>(+00) 967*********</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-md-0 mb-4 d-flex">
            <div class="con con-2 w-100 py-5">
                <div class="con-info w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="ion-ios-mail"></span>
                    </div>
                    <div class="text">
                        <span>info@email.com</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-md-0 mb-4 d-flex">
            <div class="con con-3 w-100 py-5">
                <div class="con-info w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="ion-ios-pin"></span>
                    </div>
                    <div class="text">
                        <span>الجمهورية اليمنية , حضرموت</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-4 mb-md-0 mb-4">
                    <h2 class="footer-heading">الخدمات</h2>
                    <ul class="list-unstyled">
          <li><a href="#" class="d-block">التجار </a></li>
          <li><a href="#" class="d-block">الشحن</a></li>
          <li><a href="#" class="d-block">المتسوق العالمي</a></li>
          <li><a href="#" class="d-block">مزودي النقل </a></li>
        </ul>
                </div>
                <div class="col-md-4 mb-md-0 mb-4">
                    <h2 class="footer-heading">المزادات</h2>
                    <ul class="list-unstyled">
          <li><a href="#" class="d-block">مزادات اليوم</a></li>
          <li><a href="#" class="d-block">الإنضمام للمزاد</a></li>
          <li><a href="#" class="d-block">مزادات سيارات الإيجار</a></li>
          <li><a href="{{  route('ContactUs')}}" class="d-block">تواصل معنا</a></li>
        </ul>
                </div>
                <div class="col-md-4 mb-md-0 mb-4">
                    <h2 class="footer-heading">تعرف علينا</h2>
                    <ul class="list-unstyled">
          <li><a href="{{  route('AboutUs')}}" class="d-block"> حول مزادي كار</a></li>
          <li><a href="#" class="d-block">علاقات المستثمرين </a></li>
          <li><a href="#" class="d-block"> أخبار الاعضاء</a></li>
      <li><a href="#" class="d-block">  المجتمع</a></li>
        </ul>
                </div>
            </div>
        </div>
        <div class="col-md-5 mb-md-0 mb-4">
            <h2 class="footer-heading">اشترك</h2>
            <form action="#" class="subscribe-form">
  <div class="form-group d-flex">
    <input type="text" class="form-control rounded-left" placeholder="ادخل بريدك الالكتروني">
    <button type="submit" class="form-control submit rounded-right">اشترك</button>
  </div>
  <span class="subheading">بوابة التحديث الرقمي في صندوق البريد الخاص بك</span>
</form>
        </div>
    </div>
    <div class="row mt-5 pt-4 border-top">
<div class="col-md-6 col-lg-8 mb-md-0 mb-4">
<p class="copyright mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<i class="ion-ios-heart" aria-hidden="true"></i>  <a href="https://muzida.com" target="_blank">mazady Car.com</a>
&copy;<script>document.write(new Date().getFullYear());</script>  | كل الحقوق محفوظة. لموقع مزادي كار
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
</div>
<div class="col-md-6 col-lg-4 text-md-right">
  <ul class="ftco-footer-social p-0">
  <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
  <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
  <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li>
</ul>
</div>
</div>
</div>
</footer>
<script src="assets/js/header.js"></script>
<script src="assets/js/app.js"></script>

