@extends('admin.layouts.main')

@section('title')
    لوحة التحكم

@endsection

@section('css')

@endsection
@section('breadcrumb-item')
    الرئيسية
@endsection
@section('breadcrumb-item2')
    لوحة التحكم
@endsection
@section('breadcrumb-item2')
    لوحة التحكم
@endsection
@section('breadcrumb-item-active')
    لوحة التحكم
@endsection

@section('page-title')
    لوحة التحكم
@endsection

@section('content')

    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card widget-inline">
                <div class="card-body p-0">
                    <div class="row g-0">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="mdi mdi-car-2-plus text-muted" style="font-size: 24px;"></i>
                                    <h3><span>29</span></h3>
                                    <p class="text-muted font-15 mb-0">المزادات المضافة</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="dripicons-checklist text-muted" style="font-size: 24px;"></i>
                                    <h3><span>715</span></h3>
                                    <p class="text-muted font-15 mb-0">إجمالي التوصيل</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="dripicons-user-group text-muted" style="font-size: 24px;"></i>
                                    <h3><span>31</span></h3>
                                    <p class="text-muted font-15 mb-0">عدد الستخدمين</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="dripicons-graph-line text-muted" style="font-size: 24px;"></i>
                                    <h3><span>93%</span> <i class="mdi mdi-arrow-up text-success"></i></h3>
                                    <p class="text-muted font-15 mb-0">نسبة المستخدمين </p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end row -->
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->

    <div class="row">


        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">المزادات الحالية</h4>

                    <p> عدد المزادات الحالية<b>5</b></p>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-hover mb-0">
                            <tbody>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">سيارة هيلوكس </a></h5>
                                    <span class="text-muted font-13">بدأ قبل 30 دقيقة</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">الحالة</span> <br>
                                    <span class="badge badge-warning-lighten">بدأ المزاد</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">صاحب المزاد</span>
                                    <h5 class="font-14 mt-1 fw-normal">فؤاد العمودي</h5>
                                </td>
                                <td>
                                    <span class="text-muted font-13">الوقت المتبقي على الانتهاء</span>
                                    <h5 class="font-14 mt-1 fw-normal">يومين</h5>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">سيارة فراري</a></h5>
                                    <span class="text-muted font-13">قبل 8 أيام</span>
                                </td>
                                <td>

                                    <span class="badge badge-warning-lighten">بدأ المزاد</span>
                                </td>
                                <td>

                                    <h5 class="font-14 mt-1 fw-normal">سامية ادريس</h5>
                                </td>
                                <td>

                                    <h5 class="font-14 mt-1 fw-normal">12 ساعة</h5>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">سيارة لاندكروزر</a></h5>
                                    <span class="text-muted font-13">قبل 5 أيام</span>
                                </td>
                                <td>

                                    <span class="badge badge-danger-lighten">تم الرفض</span>
                                </td>
                                <td>

                                    <h5 class="font-14 mt-1 fw-normal">ناصر الغيثي</h5>
                                </td>
                                <td>

                                    <h5 class="font-14 mt-1 fw-normal">لم يعد متاح</h5>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">سيارة فراري</a></h5>
                                    <span class="text-muted font-13">قبل 7 أيام</span>
                                </td>
                                <td>

                                    <span class="badge badge-success-lighten">انتهاء</span>
                                </td>
                                <td>

                                    <h5 class="font-14 mt-1 fw-normal">عبدالرحمن الصنعاني</h5>
                                </td>
                                <td>

                                    <h5 class="font-14 mt-1 fw-normal">لم يعد متاح</h5>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">سيارة كورلا</a></h5>
                                    <span class="text-muted font-13">قبل 8 أيام</span>
                                </td>
                                <td>

                                    <span class="badge badge-success-lighten">انتهاء</span>
                                </td>
                                <td>

                                    <h5 class="font-14 mt-1 fw-normal">محمد الزبير</h5>
                                </td>
                                <td>
                                    <h5 class="font-14 mt-1 fw-normal">10 أيام</h5>
                                </td>

                            </tr>

                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->

    </div>
    <!-- container -->

    </div>


@endsection

@section('script')

@endsection


