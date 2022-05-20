@extends('admin.layouts.main')

@section('title')
    عرض الأصناف

@endsection

@section('css')

@endsection
@section('breadcrumb-item')
    الأصناف
@endsection
@section('breadcrumb-item2')
    عرض الأصناف
@endsection

@section('breadcrumb-item-active')
    الأصناف
@endsection

@section('page-title')
    عرض الأصناف
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            @if(session()->has('success'))
            <div class="alert alert-danger success-dismissible bg-success text-white border-0 fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>{{ session()->get('success') }} </strong>
            </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="{{ route('add-cat') }}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i>إضافة صنف جديد</a>
                        </div>

                    </div>

                    <div class="table-responsive">
                        <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="products-datatable">
                            <thead class="table-light">
                            <tr>

                                <th>شعار الماركة</th>
                                <th>اسم الصنف</th>
                                <th>الحالة</th>
                                <th style="width: 75px;">العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)


                            <tr>
                                <td class="table-user">
                                    <img src="{{$category->image}}" alt="table-user" class="me-2 rounded-circle">
                                </td>
                                <td>{{$category->name}}</td>
                                <td>
                                    @if($category->is_active==1)
                                    <span class="badge badge-success-lighten">نشط</span>
                                    @else
                                        <span class="badge badge-danger-lighten">غير نشط</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="edit_categories/{{$category->id}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="toggle_categories/{{$category->id}}" class="action-icon"> <i class="mdi mdi-delete"></i></a>
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
