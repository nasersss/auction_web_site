@extends('admin.layouts.main')

@section('title')
    الملف الشخصي | أضافة المعلومات

@endsection

@section('css')

@endsection
@section('breadcrumb-item')
    الملف الشخصي
@endsection
@section('breadcrumb-item2')
    تعديل الملف الشخصي
@endsection

@section('breadcrumb-item-active')
    تعديل الملف الشخصي
@endsection

@section('page-title')
    الملف الشخصي
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">تعديل الملف الشخصي</h4>
                    <!--Start-->
                    <form>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">الاسم الكامل</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="مثال محمد سالم ...">
                            </div>
                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">الصورة الشخصية</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                            </div>
                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">البريد الالكتروني</label>
                                <input type="email" class="form-control" id="inputAddress" placeholder="مثال ahmed@gmil.com...">
                            </div>
                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">الجوال</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="مثال 7396...">
                            </div>
                            <div class="mb-3">
                                <label for="inputAddress" class="form-label">العنوان</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="مثال حضرموت-المكلا-...">
                            </div>

                            <h5 class="header-title">مواقع التواصل</h5>
                            <div class="mb-2 col-md-4">
                                <input type="text" class="form-control" id="inputAddress" placeholder="الفيس بوك مثلا fb/ahmed">
                            </div>
                            <div class="mb-2 col-md-4">
                                <input type="text" class="form-control" id="inputAddress" placeholder="تويتر">
                            </div>
                            <div class="mb-2 col-md-4">
                                <input type="text" class="form-control" id="inputAddress" placeholder="انستقرام">
                            </div>


                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </form>

                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->



@endsection

@section('script')

@endsection


