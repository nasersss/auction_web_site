@extends('admin.layouts.main')

@section('title')
    الصفحة الشخصية

@endsection

@section('css')

@endsection
@section('breadcrumb-item')
    الرئيسية
@endsection
@section('breadcrumb-item2')
    لوحة التحكم
@endsection
@section('breadcrumb-item-active')
    الصفحة الشخصية
@endsection

@section('page-title')
    الصفحة الشخصية
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <!-- Profile -->
            <div class="card bg-primary">
                <div class="card-body profile-user-box">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="avatar-lg">
                                        <img src="assets/images/users/avatar-11.jpg" alt="" class="rounded-circle img-thumbnail">
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <h4 class="mt-1 mb-1 text-white">مرحبا...</h4>
                                        <h4 class="mt-1 mb-1 text-white">فؤاد العمودي</h4>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-sm-4">
                            <div class="text-center  mt-3 text-sm-start">
                                <button type="button" class="btn btn-light">
                                    <i class="mdi mdi-account-edit me-1"></i> تعديل
                                </button>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row -->

                </div> <!-- end card-body/ profile-user-box-->
            </div><!--end profile/ card -->
        </div> <!-- end col-->
    </div>

    <div class="row">
        <div class="col-xl-12">
            <!-- Personal-Information -->
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-3">المعلومات الشخصية</h4>

                    <hr>

                    <div>
                        <p class="text-muted"><strong>الاسم :</strong> <span class="ms-2">فؤاد حسن علي العمودي</span></p>

                        <p class="text-muted"><strong>الجوال :</strong><span class="ms-2">739641800</span></p>

                        <p class="text-muted"><strong>البريد الالكتروني :</strong> <span class="ms-2">fuad.h.alamoudi@gmail.com</span></p>

                        <p class="text-muted"><strong>العنوان :</strong> <span class="ms-2">اليمن-حضرموت -المكلا</span></p>


                        <p class="text-muted mb-0" id="tooltip-container"><strong> مواقع التواصل الاجتماعي :</strong>
                            <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="" title="" data-bs-original-title="Facebook" aria-label="Facebook"><i class="mdi mdi-facebook"></i></a>
                            <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="" title="" data-bs-original-title="Twitter" aria-label="Twitter"><i class="mdi mdi-twitter"></i></a>
                            <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="" title="" data-bs-original-title="Skype" aria-label="Skype"><i class="mdi mdi-skype"></i></a>
                        </p>

                    </div>
                </div>
            </div>
            <!-- Personal-Information -->





        </div> <!-- end col-->


        <!-- end col -->

    </div>



@endsection

@section('script')

@endsection


