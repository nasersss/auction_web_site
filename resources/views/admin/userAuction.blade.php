@extends('admin.layouts.main')

@section('title')
مزاداتي
@endsection

@section('css')

@endsection
@section('breadcrumb-item')
    المزادات
@endsection
@section('breadcrumb-item2')
     مزاداتي
@endsection

@section('breadcrumb-item-active')
    مزاداتي
@endsection

@section('page-title')
    مزاداتي
@endsection

@section('content')

        <!-- end page title -->

        <div class="row">


                        <div class="table-responsive">
                            @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <strong>{{ session()->get('success') }} </strong>
                            </div>
                            @elseif(session()->has('error'))
                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <strong>{{ session()->get('success') }} </strong>
                            </div>
                            @endif
                            <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                <thead class="table-light">
                                <tr>

                                    <th>#</th>
                                    <th class="all">السيارات</th>
                                    <th>النوع</th>
                                    <th>الموديل</th>
                                    <th>السعر المبدئي</th>
                                    <th>سعر المزاد الحالي</th>

{{--                                    <th>العطى الحالي</th>--}}
{{--                                    <th>تاريخ الاضافة</th>--}}
{{--                                    <th>تاريخ الانتهاء</th>--}}
                                    <th>الحالة</th>
                                    <th>حالة المزاد</th>
                                    <th style="width: 85px;">العمليات</th>
                                </tr>
                                </thead>
                                <tbody>
                        @foreach($auctions as $auction)


                                <tr>
                                    <td>
                                      {{ $loop->iteration }}
                                    </td>
                                    <td>
                                         {{-- <img src="assets/images/products/product-1.png" alt="contact-img" title="contact-img" class="rounded me-3" height="48"> --}}
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            {{-- <a href="{{ route('action_detail',$auction->id)}}" class="text-body">{{ $auction->name }}</a> --}}
سنتافي
                                        </p>
                                    </td>
                                    <td>
                                        {{ $auction->category->name }}
                                    </td>
                                    <td>
                                {{ $auction->model }}
                                    </td>
                                    <td>
                                        {{ $auction->stare_price }}
                                    </td>
                                    <td>
                                            {{-- {{ $auction->stare_price }} --}}10000
                                    </td>
                                    <td>
                                        @isset($auction->is_active)
                                        @if($auction->is_active==1)
                                        <span class="badge badge-success-lighten">{{ "نشط" }}</span>
@else
                                        <span class="badge badge-danger-lighten">{{ "موقف" }}</span>

                                        @endif

                                        @endisset
                                    </td>
                                    <td>
                                        <span class="badge badge-success-lighten">{{ "جاري" }}</span>
                                    </td>

                                    <td class="table-action">
                                        {{-- <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="{{ route("toggle_auction",$auction->id) }}" class="action-icon"> <i class="mdi mdi-delete"></i></a> --}}
                                    </td>
                                </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->



@endsection

@section('script')
    <!-- third party js -->
    <script src="assets/js/vendor/jquery.dataTables.min.js"></script>
    <script src="assets/js/vendor/dataTables.bootstrap5.js"></script>
    <script src="assets/js/vendor/dataTables.responsive.min.js"></script>
    <script src="assets/js/vendor/responsive.bootstrap5.min.js"></script>
    <script src="assets/js/vendor/dataTables.checkboxes.min.js"></script>

    <!-- third party js ends -->

    <!-- demo app -->
    <script src="assets/js/pages/demo.products.js"></script>
    <!-- end demo js-->


@endsection
