<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>تاكيد الايميل</title>


    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/app-ar.min.css')}}" rel="stylesheet" type="text/css" id="light-style">

</head>

<body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>

    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">

                    <!-- Logo -->
                    <div class="auth-brand text-center text-lg-start">
                        <a href="index.html" class="logo-dark">
                            <span><img src="{{asset('assets/images/logoDark.png')}}" alt="" height="50"></span>
                        </a>
                        <a href="index.html" class="logo-light">
                            <span><img src="assets/images/logo.png" alt=""></span>
                        </a>
                    </div>

                    <!-- email send icon with text-->
                    <div class="text-center m-auto">
                        <img src="{{asset('assets/images/mail_sent.svg')}}" alt="mail sent image" height="64" />
                        <h4 class="text-dark-50 text-center mt-4 fw-bold">يرجا تاكيد الايميل</h4>
                        <p class="text-muted mb-4">
                            الايميل سيرسل الى <b>{{ Auth::user()->email }}</b>

                        </p>
                    </div>
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif


                    لم تستلم الايميل ؟؟



                    <!-- form -->
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <div class="mb-0 d-grid text-center">
                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-home me-1"></i> اضغط هنا لاعادة ارسال رسالة جديدة </button>
                        </div>
                    </form>
                    <!-- end form-->

                    <!-- Footer-->
                    <footer class="footer footer-alt">

                    </footer>

                </div> <!-- end .card-body -->
            </div> <!-- end .align-items-center.d-flex.h-100-->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <h2 class="mb-3">منصة مزادي كار اكبر منصة لمزاد السيارات في اليمن </h2>
                <p class="lead"><i class="mdi mdi-format-quote-open"></i>لكل الاشخاص الراغبين عن مزاد للسيارات في جميع اننحاء الجمهورية اليمنية جاءت منصة مزادي كار لتخفيف عنائكم مع امكانية التوصيل الى جميع المحافظات فقط عليكم الاشتراك بالمنصة<i class="mdi mdi-format-quote-close"></i>
                </p>

            </div> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->
    </div>
    <!-- end auth-fluid-->

    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

</body>