@extends('admin.layouts.main')

@section('title')
    المزادات | مراجعة

@endsection

@section('css')

@endsection
@section('breadcrumb-item')
    المزادات
@endsection
@section('breadcrumb-item2')
    مراجعة المزادت
@endsection

@section('breadcrumb-item-active')
    المزادات
@endsection

@section('page-title')
    مراجعة المزادت
@endsection

@section('content')

        <!-- end page title -->

        <div class="row">


                        <div class="table-responsive">
                            {{-- @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <strong>{{ session()->get('success') }} </strong>
                            </div>
                            @elseif(session()->has('error'))
                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <strong>{{ session()->get('success') }} </strong>
                            </div>
                            @endif --}}
                            @include('message')

                            <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                <thead class="table-light">
                                <tr>
                                    <th class="all" style="width: 20px;">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th class="all">السيارات</th>
                                    <th>النوع</th>
                                    <th>الموديل</th>
                                    <th>اسم صاحب المزاد</th>
                                    <th>السعر المدئي</th>
{{--                                    <th>تاريخ الاضافة</th>--}}
{{--                                    <th>تاريخ الانتهاء</th>--}}
                                    <th>الحالة</th>
                                    <th>إرساء المزاد </th>
                                    <th style="width: 85px;">العمليات</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($auctions as $auction)


                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                         {{-- <img src="assets/images/products/product-1.png" alt="contact-img" title="contact-img" class="rounded me-3" height="48"> --}}
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <a href="{{ route('action_detail',$auction->id)}}" class="text-body">{{ $auction->name }}</a>

                                        </p>
                                    </td>
                                    <td>
                                        {{ $auction->category->name }}
                                    </td>
                                    <td>
                                        {{ $auction->model }}
                                    </td>
                                    <td>
                                        {{ $auction->user->name }}
                                    </td>
                                    <td>
                                        {{ $auction->stare_price }}
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
                                        @if ($auction->is_active == 1)
                                            <a class="btn btn-success" href="{{route('endOneauction',$auction->id)}}">
                                            إرساء المزاد
                                            </a>
                                        @else
                                            <span class="badge badge-dark-lighten">{{ "تم الارساء" }}</span>
                                        @endif
                                        
                                    </td>
                                    
                                    <td class="table-action">
                                        {{-- <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a> --}}

                                        {{-- <a href="{{ route("toggle_auction",$auction->id) }}" class="action-icon"> <i class="uil-eye-slash" ></i></a>

                                        <a href="javascript:void(0);" class="action-icon" style="display: none" id="view"> <i class="mdi mdi-eye"></i></a> --}}
                                        <a href="{{ route('edit-auction',$auction->id) }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>

                                        @isset($auction->is_active)
                                        @if($auction->is_active==1)
                                        <span class="badge badge-success-lighten"></span>
                                        <a href="{{ route("toggle_auction",$auction->id) }}" class="action-icon"> <i class="uil-eye-slash" ></i></a>


                                        @else
                                        <a href="{{ route("toggle_auction",$auction->id) }}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        @endif



                                        @endisset



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
