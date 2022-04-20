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
                    <h4 class="header-title">أضافة مزاد جديد</h4>
                    <!--Start-->
                    <form>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">اسم السيارة</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="مثال هيلوكس...">
                            </div>
                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">نوع السيارة</label>
                                <select class="form-select mb-3">
                                    <option selected>أختر احدى الانوع</option>
                                    <option value="1">تيوتا</option>
                                    <option value="2">بي أم دبليو</option>
                                    <option value="3">فيراري</option>
                                </select>
                            </div>

                        <div class="mb-1 col-md-6">
                            <label for="inputAddress" class="form-label">الموديل</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="مثال 2014...">
                        </div>
                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">صور السيارة</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                            </div>


                        <div class="mb-2">
                            <label for="inputAddress" class="form-label">مكان السيارة الحالي</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="مثال حضرموت-المكلا...">
                        </div>
                        <div class="mb-2">
                            <label for="inputAddress" class="form-label">صور السيارة</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                        </div>

                        <div class="mb-3">
                            <label for="inputAddress2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputState" class="form-label">State</label>
                                <select id="inputState" class="form-select">
                                    <option>Choose</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="customCheck11">
                                <label class="form-check-label" for="customCheck11">Check this custom checkbox</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">إضافة</button>
                    </form>

                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->



@endsection

@section('script')

@endsection


