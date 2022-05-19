@extends('admin.layouts.main')

@section('title')
    المحفظة

@endsection

@section('css')

@endsection
@section('breadcrumb-item')
    المحفظة
@endsection
@section('breadcrumb-item2')
    حركة الفلوس
@endsection

@section('breadcrumb-item-active')
    المحفظة
@endsection

@section('page-title')
    المحفظة
@endsection

@section('content')
    <div class="row">
        <div class="col-xxl-3 col-lg-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-end">
                        <i class="mdi mdi-pulse widget-icon"></i>
                    </div>
                    <h5 class="text-muted fw-normal mt-0" title="Growth">الاموال المستلمة</h5>
                    <h3 class="text-success mt-3 mb-3">+ 5000$</h3>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xxl-3 col-lg-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-end">
                        <i class="mdi mdi-pulse widget-icon"></i>
                    </div>
                    <h5 class="text-muted fw-normal mt-0" title="Growth">الاموال المحولة</h5>
                    <h3 class="text-danger mt-3 mb-3">- 30000$</h3>
                </div>
            </div>
        </div> <!-- end col-->




    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title mb-3">أخر حركة الاموال</h4>

                    <div data-simplebar="init" style="max-height: 320px; overflow-x: hidden;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                                </div>
                                                <div class="col ps-0">
                                                    <a href="javascript:void(0);" class="text-body">تم خصم مبلغ المزاد بدون توصيل</a>
                                                    <p class="mb-0 text-muted"><small>أمس</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-danger fw-bold pe-2">-$489.30</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                                </div>
                                                <div class="col ps-0">
                                                    <a href="javascript:void(0);" class="text-body">تم تحويل من حساب الادمن الى البوابة الكترونية</a>
                                                    <p class="mb-0 text-muted"><small>اليوم</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-success fw-bold pe-2">+$1578.54</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                                </div>
                                                <div class="col ps-0">
                                                    <a href="javascript:void(0);" class="text-body">تم تحويل من حساب الادمن الى البوابة الكترونية</a>
                                                    <p class="mb-0 text-muted"><small>16 Sep 2018</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-success fw-bold pe-2">+$247.5</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                                </div>
                                                <div class="col ps-0">
                                                    <a href="javascript:void(0);" class="text-body">تم خصم مبلغ المزاد بدون توصيل</a>
                                                    <p class="mb-0 text-muted"><small>أمس</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-danger fw-bold pe-2">-$489.30</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                                </div>
                                                <div class="col ps-0">
                                                    <a href="javascript:void(0);" class="text-body">تم تحويل من حساب الادمن الى البوابة الكترونية</a>
                                                    <p class="mb-0 text-muted"><small>اليوم</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-success fw-bold pe-2">+$1578.54</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                                </div>
                                                <div class="col ps-0">
                                                    <a href="javascript:void(0);" class="text-body">تم تحويل من حساب الادمن الى البوابة الكترونية</a>
                                                    <p class="mb-0 text-muted"><small>16 Sep 2018</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-success fw-bold pe-2">+$247.5</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                                </div>
                                                <div class="col ps-0">
                                                    <a href="javascript:void(0);" class="text-body">تم خصم مبلغ المزاد بدون توصيل</a>
                                                    <p class="mb-0 text-muted"><small>أمس</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-danger fw-bold pe-2">-$489.30</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                                </div>
                                                <div class="col ps-0">
                                                    <a href="javascript:void(0);" class="text-body">تم تحويل من حساب الادمن الى البوابة الكترونية</a>
                                                    <p class="mb-0 text-muted"><small>اليوم</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-success fw-bold pe-2">+$1578.54</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                                </div>
                                                <div class="col ps-0">
                                                    <a href="javascript:void(0);" class="text-body">تم تحويل من حساب الادمن الى البوابة الكترونية</a>
                                                    <p class="mb-0 text-muted"><small>16 Sep 2018</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-success fw-bold pe-2">+$247.5</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                                </div>
                                                <div class="col ps-0">
                                                    <a href="javascript:void(0);" class="text-body">تم خصم مبلغ المزاد بدون توصيل</a>
                                                    <p class="mb-0 text-muted"><small>أمس</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-danger fw-bold pe-2">-$489.30</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                                </div>
                                                <div class="col ps-0">
                                                    <a href="javascript:void(0);" class="text-body">تم تحويل من حساب الادمن الى البوابة الكترونية</a>
                                                    <p class="mb-0 text-muted"><small>اليوم</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-success fw-bold pe-2">+$1578.54</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                                </div>
                                                <div class="col ps-0">
                                                    <a href="javascript:void(0);" class="text-body">تم تحويل من حساب الادمن الى البوابة الكترونية</a>
                                                    <p class="mb-0 text-muted"><small>16 Sep 2018</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-success fw-bold pe-2">+$247.5</span>
                                                </div>
                                            </div>

                                        </div></div></div></div><div class="simplebar-placeholder" style="width: 283px; height: 571px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 179px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div> <!-- end slimscroll -->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card-->
        </div>
    </div>




@endsection

@section('script')

@endsection


