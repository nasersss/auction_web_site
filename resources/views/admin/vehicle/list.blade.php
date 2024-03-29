@extends('admin.layouts.main')

@section('title')
    عرض المركبات

@endsection

@section('css')

@endsection
@section('breadcrumb-item')
    المركبات
@endsection
@section('breadcrumb-item2')
    عرض المركبات
@endsection

@section('breadcrumb-item-active')
    المركبات
@endsection

@section('page-title')
    عرض المركبات
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            @include('message')

            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="{{ route('add_vehicle') }}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i>إضافة مركبة جديدة</a>
                        </div>

                    </div>

                    <div class="table-responsive">
                        <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="products-datatable">
                            <thead class="table-light">
                            <tr>

                                <th># </th>
                                <th>اسم المركبة</th>
                                <th>الحالة</th>
                                <th style="width: 75px;">العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($vehicle as $vehicle)


                            <tr>
                                <td class="table-user">
                                    {{  $loop->iteration }}
                                </td>
                                <td>{{$vehicle->name}}</td>
                                <td>
                                    @if($vehicle->is_active==1)
                                    <span class="badge badge-success-lighten">نشط</span>
                                    @else
                                        <span class="badge badge-danger-lighten">غير نشط</span>
                                    @endif
                                </td>




                                <td>
                                    <a href="{{ route("edit_vehicle",$vehicle->id) }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    @isset($vehicle->is_active)
                                    @if($vehicle->is_active==1)
                                    <span class="badge badge-success-lighten"></span>
                                    <a href="{{ route("toggle_vehicle",$vehicle->id) }}" class="action-icon"> <i class="uil-eye-slash" ></i></a>
                                    @else
                                    <a href="{{ route("toggle_vehicle",$vehicle->id) }}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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
