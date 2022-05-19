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
                        <div class="col-sm-6 col-xl-4">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="mdi mdi-car-back text-muted" style="font-size: 24px;"></i>
                                    <h3><span>29</span></h3>
                                    <p class="text-muted font-15 mb-0">عدد المزادت المشارك فيها</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="mdi mdi-car-2-plus text-muted" style="font-size: 24px;"></i>
                                    <h3><span>715</span></h3>
                                    <p class="text-muted font-15 mb-0">عدد المزادت التي اضافتها</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="dripicons-wallet text-muted" style="font-size: 24px;"></i>
                                    <h3><span>5000$</span></h3>
                                    <p class="text-muted font-15 mb-0">محفظتي</p>
                                </div>
                            </div>
                        </div>



                    </div> <!-- end row -->
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->



    </div>
    <!-- container -->

    </div>


@endsection

@section('script')

@endsection


