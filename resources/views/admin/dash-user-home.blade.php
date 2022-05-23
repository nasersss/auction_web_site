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
                                <h3><span>@isset($biddings) {{count($biddings)}} @else 0 @endisset</span></h3>
                                <p class="text-muted font-15 mb-0">عدد المزادت المشارك فيها</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-4">
                        <div class="card shadow-none m-0 border-start">
                            <div class="card-body text-center">
                                <i class="mdi mdi-car-2-plus text-muted" style="font-size: 24px;"></i>
                                <h3><span>@isset($auctions){{count($auctions)}}@else 0 @endisset</span></h3>
                                <p class="text-muted font-15 mb-0">عدد المزادت التي اضفتها</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-4">
                        <div class="card shadow-none m-0 border-start">
                            <div class="card-body text-center">
                                <i class="dripicons-wallet text-muted" style="font-size: 24px;"></i>
                                <h3><span>@isset(Auth::user()->balance){{Auth::user()->balance}}@else 0 @endisset$</span></h3>
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

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title mb-3">المزادات الحالية</h4>

            <p> عدد المزادات الحالية<b> @isset($auctions) {{count($auctions)}} @endisset</b></p>

            <div class="table-responsive">
                <table class="table table-centered table-nowrap table-hover mb-0">
                    <tbody>
                        @isset($auctions)
                        @foreach($auctions as $auction)
                        <tr>
                            <td>
                                <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">{{$auction->vehicleType->name}} {{$auction->name}} {{$auction->model}}</a></h5>
                                <span class="text-muted font-13">بدأ المزاد في {{$auction->created_at}}</span>
                            </td>
                            <td>
                                <span class="text-muted font-13">الحالة</span> <br>
                                @if($auction->is_active == 1)
                                <span class="badge badge-success-lighten">نشط</span>
                                @else
                                <span class="badge badge-danger-lighten">موقف</span>
                                @endif
                            </td>
                            <!-- <td>
                                <span class="text-muted font-13">صاحب المزاد</span>
                                <h5 class="font-14 mt-1 fw-normal"> {{$auction->user->name}}</h5>
                            </td> -->
                            <td>
                                <span class="text-muted font-13">وقت انتهاء المزاد</span>
                                <h5 class="font-14 mt-1 fw-normal">{{$auction->date_of_end_auction}}</h5>
                            </td>
                            <td>
                                <span class="text-muted font-13">عدد المشاركات في المزاد</span>
                                <h5 class="font-14 mt-1 fw-normal">{{count($auction->bidding)}}</h5>
                            </td>
                        </tr>
                        @endforeach
                        @endisset
                    </tbody>
                </table>
            </div> <!-- end table-responsive-->

        </div> <!-- end card body-->
    </div> <!-- end card -->
</div><!-- end col-->

</div>
<!-- container -->

</div>


@endsection

@section('script')

@endsection