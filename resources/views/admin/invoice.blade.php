<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>فاتورة الشراء</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="" name="MAZADI CAR">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">

        <!-- App css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/app-ar.min.css')}}" rel="stylesheet" type="text/css" id="light-style">
        <link href="{{asset('assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="assets/css/search.css" rel="stylesheet" />
  <link href="assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/all.css">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link rel="stylesheet" href="/assets/css/home.css">

    </head>
    @extends('master')
    @section('content')


    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->

            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page"  style="margin-right: 0">
                <div class="content">
                    <!-- Topbar Start -->

                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <!-- <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                            <li class="breadcrumb-item active">Invoice</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Invoice</h4>
                                </div>
                            </div>
                        </div>      -->
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Invoice Logo-->
                                        <div class="clearfix">
                                            <div class="float-start mb-3">
                                                <img src="assets/images/logoDark.png" alt="" height="30">
                                            </div>
                                            <div class="float-end">
                                                <h4 class="m-0 d-print-none">فاتورة شراء</h4>
                                            </div>
                                        </div>

                                        <!-- Invoice Detail-->
                                        <div class="row d-print-flex">
                                            <div class="col-sm-6">
                                                <div class="float-end mt-3">
                                                    <p><b>اسم المشتري :  {{Auth::user()->name}} </b></p>
                                                </div>

                                            </div><!-- end col -->
                                            <div class="col-sm-4 offset-sm-2">
                                                <div class="mt-3 float-sm-end">
                                                    <p class="font-13"><strong>تاريح الطلب </strong> &nbsp;&nbsp;&nbsp; {{$delever->created_at}}</p>
                                                    {{-- <p class="font-13"><strong>Order Status: </strong> <span class="badge bg-success float-end">Paid</span></p> --}}
                                                    <p class="font-13"><strong> رقم الطلب </strong>&nbsp;&nbsp;&nbsp; {{$delever->id}}</p>
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="row mt-4">
                                            <div class="col-sm-4">
                                                <h6>بيانات المرسل </h6>
                                                <address>
                                                    الاسم : {{ $delever->auction->user->name}} <br>
                                                    العنوان: {{$delever->auction->city->state->name}} - {{ $delever->auction->city->name}}<br>
                                                    
                                                    الجوال :@isset($delever->auction->user->profile->phone){{$delever->auction->user->profile->phone}} @endisset

                                                </address>
                                            </div> <!-- end col-->

                                            <div class="col-sm-4">
                                                <h6> بيانات المستلم</h6>
                                                <address>
                                                    الاسم : {{$delever->receiver_name}} <br>
                                                  العنوان :{{$delever->city->state->name}} - {{$delever->city->name}}<br>
                                                  نوع الهوية : {{$delever->receiver_identity_type}}<br>
                                                  رقم الهوية : {{$delever->receiver_identity_number}}<br>
                                                  رقم الجوال : {{$delever->receiver_identity_number}}
                                                </address>
                                            </div> <!-- end col-->

                                            <div class="col-sm-4">
                                                <div class="text-sm-end">
                                                    {{-- <img src="assets/images/logoDark.png" alt="barcode-image" class="img-fluid me-2"> --}}
                                                </div>
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table mt-4">
                                                        <thead>
                                                        <tr><th>#</th>
                                                            <th>المنتج</th>
                                                            <th>سعر التوصيل</th>
                                                            <th> سعر السيارة</th>
                                                            <th class="text-end">الاجمالي</th>
                                                        </tr></thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <b>{{$delever->auction->name}} {{$delever->auction->model}}</b> <br>
                                                                اللون :{{$delever->auction->color}} -   الجير :{{$delever->auction->ger_type}},
                                                            </td>
                                                            <td>200 $</td>
                                                            <td>{{$paidAmout-200}} $</td>
                                                            <td class="text-end">{{ $paidAmout}} $</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="clearfix pt-3">
                                                    <h6 class="text-muted">ملاحظات :</h6>
                                                    <small>
                                                        - يرجى التاكد من هوية المستلم قبل تسليم السيارة                                                    </small>
                                                    <small><br>
                                                        - الرجاء مراجعة الايمل الشخصي أو صفحة الاشعارات لتأكيد استلام السيارة 
                                                    </small>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-sm-6">
                                                <div class="float-start mt-3 mt-sm-0">
                                                    <h5> الاجمالي النهائي</h5>
                                                    <h3>{{$paidAmout}}  $</h3>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row-->

                                        <div class="d-print-none mt-4">
                                            <div class="text-end">
                                                <a href="javascript:window.print()" class="btn btn-primary float-left"><i class="mdi mdi-printer"></i>طباعة</a>
                                                {{-- <a href="javascript: void(0);" class="btn btn-info">Submit</a> --}}
                                            </div>
                                        </div>
                                        <!-- end buttons -->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <!-- <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer> -->
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Right Sidebar -->
        <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar="">

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1">

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked="">
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>


                    <!-- Width -->
                    <h5 class="mt-4">Width</h5>
                    <hr class="mt-1">
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked="">
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>


                    Left Sidebar
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1">
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                        <label class="form-check-label" for="default-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked="">
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked="">
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                        <label class="form-check-label" for="condensed-check">Condensed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                        <a href="../../product/hyper-responsive-admin-dashboard-template/index.htm" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                    </div>
                </div> <!-- end padding-->

            </div>
        </div>
        @endsection

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->


        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

    </body>
</html>
