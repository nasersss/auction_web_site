
@extends('admin.layouts.main')

@section('title')
    لوحة التحكم |المستخدمين

@endsection
@section('first-css')
    <!-- third party css -->
    <link href="assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css">
    <link href="assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
    <!-- third party css end -->

@endsection

@section('css')


@endsection
@section('breadcrumb-item')
    المستخدمين
@endsection
@section('breadcrumb-item2')
    عرض المستخدمين
@endsection
@section('breadcrumb-item-active')
    المستخدمين
@endsection

@section('page-title')
    عرض جميع المستخدمين
@endsection

@section('content')
    <div class="row">

        <div class="col-12">
           
            @include('message')

            <div class="card">
                <div class="card-body">
                    <!-- <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="javascript:void(0);" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i>اضافة مستخدم جديد</a>
                        </div>

                    </div> -->

                    <div class="table-responsive">
                        <table class="table table-centered table-striped dt-responsive nowrap w-100" id="products-datatable">
                            <thead>
                            <tr>
                                <th style="width: 20px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                    </div>
                                </th>
                                <th>الاسم</th>
                                <th>الجوال</th>
                                <th>الايميل</th>
                                <th>العنوان</th>
                                <th>الصلاحية</th>
                                <th>الحالة</th>
                                <th style="width: 75px;">العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)

                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="table-user">
                                    @isset( $user->profile->image)
                                    <img src="assets/images/users/{{ $user->profile->image }}" alt="table-user" class="me-2 rounded-circle">

                                    @endisset

                                    <a href="javascript:void(0);" class="text-body fw-semibold">{{ $user->name }}</a>
                                </td>
                                <td>
                                    @isset($user->profile->phone)
                                    {{ $user->profile->phone }}
                                    @endisset

                                </td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td>
                               @isset( $user->profile->address)
                               {{  $user->profile->address }}
                               @endisset
                                </td>
                                <td>
@if($user->role==1)
{{ "مدير" }}
@else
{{ "مستخدم" }}
@endif
                                </td>

                                <td>
                                    @if($user->is_active==1)
                                    <span class="badge badge-success-lighten">نشط</span>

                                    @else
                                        <span class="badge badge-danger-lighten">غير نشط</span>
                                    @endif

                                <td>
                                    <a href="{{ route("edit_user",$user->id) }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    @isset($user->is_active)
                                        @if($user->is_active==1)
                                        <span class="badge badge-success-lighten"></span>
                                        <a href="{{ route("toggle_users",$user->id) }}" class="action-icon"> <i class="uil-eye-slash" ></i></a>
                                        @else
                                        <a href="{{ route("toggle_users",$user->id) }}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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
    <script src="assets/js/pages/demo.customers.js"></script>
    <!-- end demo js-->

@endsection


