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
                                    <th>السعر</th>
                                    <th>تاريخ الاضافة</th>
                                    <th>الحالة</th>
                                    <th style="width: 85px;">العمليات</th>
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
                                    <td>
                                        <img src="assets/images/products/product-1.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <a href="apps-ecommerce-products-details.html" class="text-body">سيارة هيلوكس</a>
                                            <br>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                        </p>
                                    </td>
                                    <td>
                                        BMW
                                    </td>
                                    <td>
                                        2010
                                    </td>
                                    <td>
                                        $10000
                                    </td>

                                    <td>
                                        09/12/2022
                                    </td>
                                    <td>
                                        <span class="badge bg-warning">قيد الانتظار</span>
                                    </td>

                                    <td class="table-action">
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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
                                    <td>
                                        <img src="assets/images/products/product-4.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <a href="apps-ecommerce-products-details.html" class="text-body">Biblio Plastic Armchair</a>
                                            <br>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star-half"></span>
                                        </p>
                                    </td>
                                    <td>
                                        Wooden Chairs
                                    </td>
                                    <td>
                                        09/08/2018
                                    </td>
                                    <td>
                                        $8.99
                                    </td>

                                    <td>
                                        1,874
                                    </td>
                                    <td>
                                        <span class="badge bg-success">مقبول</span>
                                    </td>
                                    <td class="table-action">
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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
                                    <td>
                                        <img src="assets/images/products/product-3.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <a href="apps-ecommerce-products-details.html" class="text-body">Branded Wooden Chair</a>
                                            <br>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star-outline"></span>
                                        </p>
                                    </td>
                                    <td>
                                        Dining Chairs
                                    </td>
                                    <td>
                                        09/05/2018
                                    </td>
                                    <td>
                                        $68.32
                                    </td>

                                    <td>
                                        2,541
                                    </td>
                                    <td>
                                        <span class="badge bg-warning">قيد الانتظار</span>
                                    </td>

                                    <td class="table-action">
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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
                                    <td>
                                        <img src="assets/images/products/product-4.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <a href="apps-ecommerce-products-details.html" class="text-body">Designer Awesome Chair</a>
                                            <br>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star-half"></span>
                                            <span class="text-warning mdi mdi-star-outline"></span>
                                        </p>
                                    </td>
                                    <td>
                                        Baby Chairs
                                    </td>
                                    <td>
                                        08/23/2018
                                    </td>
                                    <td>
                                        $112.00
                                    </td>

                                    <td>
                                        3,540
                                    </td>
                                    <td>
                                        <span class="badge bg-success">مقبول</span>
                                    </td>

                                    <td class="table-action">
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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
                                    <td>
                                        <img src="assets/images/products/product-5.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <a href="apps-ecommerce-products-details.html" class="text-body">كورلا</a>
                                            <br>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                        </p>
                                    </td>
                                    <td>
                                        تيوتا
                                    </td>
                                    <td>
                                        08/02/2018
                                    </td>
                                    <td>
                                        $59.69
                                    </td>

                                    <td>
                                        26
                                    </td>
                                    <td>
                                        <span class="badge bg-success">مقبول</span>
                                    </td>

                                    <td class="table-action">
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck7">
                                            <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/products/product-3.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <a href="apps-ecommerce-products-details.html" class="text-body"></a>
                                            <br>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star-half"></span>
                                        </p>
                                    </td>
                                    <td>
                                        Wing Chairs
                                    </td>
                                    <td>
                                        07/15/2018
                                    </td>
                                    <td>
                                        $148.66
                                    </td>

                                    <td>
                                        485
                                    </td>
                                    <td>
                                        <span class="badge bg-warning">قيد الانتظار</span>
                                    </td>

                                    <td class="table-action">
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck8">
                                            <label class="form-check-label" for="customCheck8">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/products/product-6.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <a href="apps-ecommerce-products-details.html" class="text-body">Adirondack Chair</a>
                                            <br>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                        </p>
                                    </td>
                                    <td>
                                        Aeron Chairs
                                    </td>
                                    <td>
                                        07/07/2018
                                    </td>
                                    <td>
                                        $65.94
                                    </td>

                                    <td>
                                        652
                                    </td>
                                    <td>
                                        <span class="badge bg-warning">قيد الانتظار</span>
                                    </td>

                                    <td class="table-action">
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck9">
                                            <label class="form-check-label" for="customCheck9">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/products/product-2.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <a href="apps-ecommerce-products-details.html" class="text-body">Bean Bag Chair</a>
                                            <br>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                        </p>
                                    </td>
                                    <td>
                                        Wooden Chairs
                                    </td>
                                    <td>
                                        06/30/2018
                                    </td>
                                    <td>
                                        $99
                                    </td>

                                    <td>
                                        1,021
                                    </td>
                                    <td>
                                        <span class="badge bg-danger">غير مقبول</span>
                                    </td>
                                    <td class="table-action">
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck10">
                                            <label class="form-check-label" for="customCheck10">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/products/product-3.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <a href="apps-ecommerce-products-details.html" class="text-body">The butterfly chair</a>
                                            <br>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star-half"></span>
                                        </p>
                                    </td>
                                    <td>
                                        Dining Chairs
                                    </td>
                                    <td>
                                        06/19/2018
                                    </td>
                                    <td>
                                        $58
                                    </td>

                                    <td>
                                        874
                                    </td>
                                    <td>
                                        <span class="badge bg-success">مقبول</span>
                                    </td>

                                    <td class="table-action">
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck11">
                                            <label class="form-check-label" for="customCheck11">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/products/product-4.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <a href="apps-ecommerce-products-details.html" class="text-body">Eames Lounge Chair</a>
                                            <br>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star-half"></span>
                                        </p>
                                    </td>
                                    <td>
                                        Baby Chairs
                                    </td>
                                    <td>
                                        05/06/2018
                                    </td>
                                    <td>
                                        $39.5
                                    </td>

                                    <td>
                                        1,254
                                    </td>
                                    <td>
                                        <span class="badge bg-success">مقبول</span>
                                    </td>

                                    <td class="table-action">
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck12">
                                            <label class="form-check-label" for="customCheck12">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/products/product-5.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <a href="apps-ecommerce-products-details.html" class="text-body">Farthingale Chair</a>
                                            <br>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star-half"></span>
                                        </p>
                                    </td>
                                    <td>
                                        Plastic Armchair
                                    </td>
                                    <td>
                                        04/09/2018
                                    </td>
                                    <td>
                                        $78.66
                                    </td>

                                    <td>
                                        524
                                    </td>
                                    <td>
                                        <span class="badge bg-danger">غير مقبول</span>
                                    </td>

                                    <td class="table-action">
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck13">
                                            <label class="form-check-label" for="customCheck13">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/products/product-6.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <a href="apps-ecommerce-products-details.html" class="text-body">Unpowered aircraft</a>
                                            <br>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star-half"></span>
                                        </p>
                                    </td>
                                    <td>
                                        Wing Chairs
                                    </td>
                                    <td>
                                        03/24/2018
                                    </td>
                                    <td>
                                        $49
                                    </td>

                                    <td>
                                        204
                                    </td>
                                    <td>
                                        <span class="badge bg-danger">غير مقبول</span>
                                    </td>

                                    <td class="table-action">
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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
