@extends('admin.layouts.main')

@section('title')
    عرض المدن

@endsection

@section('css')

@endsection
@section('breadcrumb-item')
    المدن
@endsection
@section('breadcrumb-item2')
    عرض المدن
@endsection

@section('breadcrumb-item-active')
المدن
@endsection

@section('page-title')
    عرض المدن
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            {{-- @if(session()->has('success'))
            <div class="alert alert-success success-dismissible bg-success text-white border-0 fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>{{ session()->get('success') }} </strong>
            </div>
            @elseif(session()->has('success'))
                <div class="alert alert-danger danger-dismissible bg-danger text-white border-0 fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>{{ session()->get('success') }} </strong>
                </div>


            @endif --}}
            @include('message')

            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="{{ route('add_city') }}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i>إضافة مدينة جديدة</a>
                        </div>

                    </div>

                    <div class="table-responsive">
                        <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="products-datatable">
                            <thead class="table-light">
                            <tr>

                                <th># </th>
                                <th> المدينة</th>
                                <th> المحافظة</th>
                                <th>الحالة</th>
                                <th style="width: 75px;">العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($city as $city)


                            <tr>
                                <td class="table-user">
                                    {{  $loop->iteration }}
                                </td>
                                <td>{{$city->name}}</td>
                                <td>{{$city->state->name}}</td>
                                <td>
                                    @if($city->is_active==1)
                                    <span class="badge badge-success-lighten">نشط</span>
                                    @else
                                        <span class="badge badge-danger-lighten">غير نشط</span>
                                    @endif
                                </td>




                                <td>
                                    <a href="{{ route("edit_city",$city->id) }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    @isset($city->is_active)
                                    @if($city->is_active==1)
                                    <span class="badge badge-success-lighten"></span>
                                    <a href="{{ route("toggle_city",$city->id) }}" class="action-icon"> <i class="uil-eye-slash" ></i></a>
                                    @else
                                    <a href="{{ route("toggle_city",$city->id) }}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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



@endsection

@section('script')
    <!-- bundle -->


    <!-- third party js -->
    <script src="assets/js/vendor/jquery.dataTables.min.js"></script>
    <script src="assets/js/vendor/dataTables.bootstrap5.js"></script>
    <script src="assets/js/vendor/dataTables.responsive.min.js"></script>
    <script src="assets/js/vendor/responsive.bootstrap5.min.js"></script>
    <script src="assets/js/vendor/apexcharts.min.js"></script>
    <script src="assets/js/vendor/dataTables.checkboxes.min.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->

    <!-- end demo js-->


@endsection
