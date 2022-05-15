@extends('admin.layouts.main')

@section('title')
    المزادات | أضافة مزاد

@endsection

@section('css')

@endsection
@section('breadcrumb-item')
    المزادات
@endsection
@section('breadcrumb-item2')
    أضافة مزاد
@endsection

@section('breadcrumb-item-active')
    المزادات
@endsection

@section('page-title')
    أضافة مزاد
@endsection

@section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">المعلومات الاساسية</h4>
                        <div class="row">
                            <div class="row">
                                <form method="post" action="{{route('store-auction')}}" enctype="multipart/form-data">
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="inputAddress" class="form-label">اسم السيارة</label>
                                            <input required name="name" type="text" class="form-control" id="inputAddress" placeholder="مثال هيلوكس...">
                                        </div>
                                    </div>
                                </form>

                            <div class="col-xl-6">
                                <div class="mb-3 mt-3 mt-xl-0">
                                    <label for="projectname" class="mb-0">الصورة الاسياسية</label>
                                    <p class="text-muted font-14">حجم الصورة الموصى به 800 × 400 (بكسل)</p>
                                    <div action="/"  class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                        <div class="fallback">
                                            <input name="file" type="file">
                                        </div>

                                        <div class="dz-message needsclick">
                                            <i class="dripicons-photo"></i>
                                            <h4>قم بسحب و إسقاط الصور هنا أو انقر هنا للتحميل</h4>
                                        </div>
                                    </div>

                                    <!-- Preview -->
                                    <div class="dropzone-previews mt-3" id="file-previews"></div>

                                    <!-- file preview template -->
                                    <div class="d-none" id="uploadPreviewTemplate">
                                        <div class="card mt-1 mb-0 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <img data-dz-thumbnail="" src="#" class="avatar-sm rounded bg-light" alt="">
                                                    </div>
                                                    <div class="col ps-0">
                                                        <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name=""></a>
                                                        <p class="mb-0" data-dz-size=""></p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove="">
                                                            <i class="dripicons-cross"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end file preview template -->
                                </div>


                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

    </div> <!-- container -->







    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


@endsection

@section('script')
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

    <!-- plugin js -->
    <script src="assets/js/vendor/dropzone.min.js"></script>
    <!-- init js -->
    <script src="assets/js/ui/component.fileupload.js"></script>

@endsection


