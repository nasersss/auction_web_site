
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
    المستخدمين
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="javascript:void(0);" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i>اضافة مستخدم جديد</a>
                        </div>

                    </div>

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
                                <th>المحافظة</th>
                                <th>المدينة</th>
                                <th>الحالة</th>
                                <th style="width: 75px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-11.jpg" alt="table-user" class="me-2 rounded-circle">
                                    <a href="javascript:void(0);" class="text-body fw-semibold">فؤاد العمودي</a>
                                </td>
                                <td>
                                    739641800
                                </td>
                                <td>
                                    fuad.h.alamoudi@gmail.com
                                </td>
                                <td>
                                    حضرموت
                                </td>
                                <td>
                                    المكلا
                                </td>
                                <td>
                                    <span class="badge badge-success-lighten">فعال</span>
                                </td>

                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                        <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-1.png" alt="table-user" class="me-2 rounded-circle">
                                    <a href="javascript:void(0);" class="text-body fw-semibold">ناصر الغيثي</a>
                                </td>
                                <td>
                                    215-302-3376
                                </td>
                                <td>
                                    n@gmail.com
                                </td>
                                <td>
                                    اب
                                </td>
                                <td>
                                    القرية
                                </td>
                                <td>
                                    <span class="badge badge-success-lighten">فعال</span>
                                </td>

                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck4">
                                        <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-1.png" alt="table-user" class="me-2 rounded-circle">
                                    <a href="javascript:void(0);" class="text-body fw-semibold">عبدالرحمن الصنعاني</a>
                                </td>
                                <td>
                                    828-216-2190
                                </td>
                                <td>
                                    san@gmail.com
                                </td>
                                <td>
                                    حضرموت
                                </td>
                                <td>
                                    المكلا
                                </td>
                                <td>
                                    <span class="badge badge-danger-lighten">غير فعال</span>
                                </td>

                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck5">
                                        <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-1.png" alt="table-user" class="me-2 rounded-circle">
                                    <a href="javascript:void(0);" class="text-body fw-semibold">محمد الزبير</a>
                                </td>
                                <td>
                                    (216) 75 612 706
                                </td>
                                <td>
                                    Z@gmail.com
                                </td>
                                <td>
                                    حضرموت
                                </td>
                                <td>
                                    المكلا
                                </td>
                                <td>
                                    <span class="badge badge-danger-lighten">Blocked</span>
                                </td>

                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck6">
                                        <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-1.png" alt="table-user" class="me-2 rounded-circle">
                                    <a href="javascript:void(0);" class="text-body fw-semibold">سامية ادريس</a>
                                </td>
                                <td>
                                    (02) 75 150 655
                                </td>
                                <td>
                                    sa@gmai.com
                                </td>
                                <td>
                                    حضرموت
                                </td>
                                <td>
                                    المكلا
                                </td>
                                <td>
                                    <span class="badge badge-success-lighten">Active</span>
                                </td>

                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-11.jpg" alt="table-user" class="me-2 rounded-circle">
                                    <a href="javascript:void(0);" class="text-body fw-semibold">فؤاد العمودي</a>
                                </td>
                                <td>
                                    739641800
                                </td>
                                <td>
                                    fuad.h.alamoudi@gmail.com
                                </td>
                                <td>
                                    حضرموت
                                </td>
                                <td>
                                    المكلا
                                </td>
                                <td>
                                    <span class="badge badge-success-lighten">فعال</span>
                                </td>

                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                        <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-1.png" alt="table-user" class="me-2 rounded-circle">
                                    <a href="javascript:void(0);" class="text-body fw-semibold">ناصر الغيثي</a>
                                </td>
                                <td>
                                    215-302-3376
                                </td>
                                <td>
                                    n@gmail.com
                                </td>
                                <td>
                                    اب
                                </td>
                                <td>
                                    القرية
                                </td>
                                <td>
                                    <span class="badge badge-success-lighten">فعال</span>
                                </td>

                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck4">
                                        <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-1.png" alt="table-user" class="me-2 rounded-circle">
                                    <a href="javascript:void(0);" class="text-body fw-semibold">عبدالرحمن الصنعاني</a>
                                </td>
                                <td>
                                    828-216-2190
                                </td>
                                <td>
                                    san@gmail.com
                                </td>
                                <td>
                                    حضرموت
                                </td>
                                <td>
                                    المكلا
                                </td>
                                <td>
                                    <span class="badge badge-danger-lighten">غير فعال</span>
                                </td>

                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck5">
                                        <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-1.png" alt="table-user" class="me-2 rounded-circle">
                                    <a href="javascript:void(0);" class="text-body fw-semibold">محمد الزبير</a>
                                </td>
                                <td>
                                    (216) 75 612 706
                                </td>
                                <td>
                                    Z@gmail.com
                                </td>
                                <td>
                                    حضرموت
                                </td>
                                <td>
                                    المكلا
                                </td>
                                <td>
                                    <span class="badge badge-danger-lighten">Blocked</span>
                                </td>

                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck6">
                                        <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-1.png" alt="table-user" class="me-2 rounded-circle">
                                    <a href="javascript:void(0);" class="text-body fw-semibold">سامية ادريس</a>
                                </td>
                                <td>
                                    (02) 75 150 655
                                </td>
                                <td>
                                    sa@gmai.com
                                </td>
                                <td>
                                    حضرموت
                                </td>
                                <td>
                                    المكلا
                                </td>
                                <td>
                                    <span class="badge badge-success-lighten">Active</span>
                                </td>

                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-11.jpg" alt="table-user" class="me-2 rounded-circle">
                                    <a href="javascript:void(0);" class="text-body fw-semibold">فؤاد العمودي</a>
                                </td>
                                <td>
                                    739641800
                                </td>
                                <td>
                                    fuad.h.alamoudi@gmail.com
                                </td>
                                <td>
                                    حضرموت
                                </td>
                                <td>
                                    المكلا
                                </td>
                                <td>
                                    <span class="badge badge-success-lighten">فعال</span>
                                </td>

                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                        <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-1.png" alt="table-user" class="me-2 rounded-circle">
                                    <a href="javascript:void(0);" class="text-body fw-semibold">ناصر الغيثي</a>
                                </td>
                                <td>
                                    215-302-3376
                                </td>
                                <td>
                                    n@gmail.com
                                </td>
                                <td>
                                    اب
                                </td>
                                <td>
                                    القرية
                                </td>
                                <td>
                                    <span class="badge badge-success-lighten">فعال</span>
                                </td>

                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck4">
                                        <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-1.png" alt="table-user" class="me-2 rounded-circle">
                                    <a href="javascript:void(0);" class="text-body fw-semibold">عبدالرحمن الصنعاني</a>
                                </td>
                                <td>
                                    828-216-2190
                                </td>
                                <td>
                                    san@gmail.com
                                </td>
                                <td>
                                    حضرموت
                                </td>
                                <td>
                                    المكلا
                                </td>
                                <td>
                                    <span class="badge badge-danger-lighten">غير فعال</span>
                                </td>

                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck5">
                                        <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-1.png" alt="table-user" class="me-2 rounded-circle">
                                    <a href="javascript:void(0);" class="text-body fw-semibold">محمد الزبير</a>
                                </td>
                                <td>
                                    (216) 75 612 706
                                </td>
                                <td>
                                    Z@gmail.com
                                </td>
                                <td>
                                    حضرموت
                                </td>
                                <td>
                                    المكلا
                                </td>
                                <td>
                                    <span class="badge badge-danger-lighten">Blocked</span>
                                </td>

                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck6">
                                        <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-1.png" alt="table-user" class="me-2 rounded-circle">
                                    <a href="javascript:void(0);" class="text-body fw-semibold">سامية ادريس</a>
                                </td>
                                <td>
                                    (02) 75 150 655
                                </td>
                                <td>
                                    sa@gmai.com
                                </td>
                                <td>
                                    حضرموت
                                </td>
                                <td>
                                    المكلا
                                </td>
                                <td>
                                    <span class="badge badge-success-lighten">Active</span>
                                </td>

                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>

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


