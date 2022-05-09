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
                    <!--Start-->
                    <form>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="inputAddress" class="form-label">اسم السيارة</label>
                                <input name="name" type="text" class="form-control" id="inputAddress" placeholder="مثال هيلوكس...">
                            </div>
                            <div class="col-md-3">
                                <label for="inputAddress" class="form-label">نوع السيارة</label>
                                <select name="categorie" class="form-select mb-3">
                                    <option selected>أختر احدى الانوع</option>
                                    <option value="1">تيوتا</option>
                                    <option value="2">بي أم دبليو</option>
                                    <option value="3">فيراري</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="inputAddress" class="form-label">لون السيارة</label>
                                <input name="color" type="text" class="form-control" id="inputAddress" placeholder="مثال أحمر ...">
                            </div>
                            <div class="col-md-3">
                                <label for="inputAddress" class="form-label">حالة السيارة</label>
                                <select name="stat" class="form-select mb-3">
                                    <option selected>أختر حالة السيارة </option>
                                    <option value="1">مستخدم</option>
                                    <option value="2">جديد</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="inputAddress" class="form-label">الموديل</label>
                                <input name="model" type="text" class="form-control" id="inputAddress" placeholder="مثال 2014...">
                            </div>

                            <div class="col-md-4">
                                <label for="inputAddress" class="form-label">صورة الرئيسية السيارة</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                            </div>
                            <div class="mb-4 col-md-4">
                                <label for="inputAddress" class="form-label">باقي الصور سيارة</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                            </div>
                            <h4 class="header-title">المعلومات الفنية</h4>
                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">نوع المركبة</label>
                                <input name="vehicle_type" type="text" class="form-control" id="inputAddress" placeholder="مثال باص ...">
                            </div>
                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">نوع الوقود</label>
                                <select name="fuel" class="form-select mb-3">
                                    <option selected>أختر نوع الوقود </option>
                                    <option value="1">بترول</option>
                                    <option value="2">ديزيل</option>
                                    <option value="2">غاز</option>
                                    <option value="2">كهرباء</option>
                                </select>
                            </div>


                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">نوع المحرك</label>
                                <input name="engine_type" type="text" class="form-control" id="inputAddress" placeholder="مثال 6 بوستن...">
                            </div>
                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">ملاحظات</label>
                                <input name="notes" type="text" class="form-control" id="inputAddress" placeholder="ملاحظات...">
                            </div>
                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">الاضرار</label>
                                <input name="damage" type="text" class="form-control" id="inputAddress" placeholder="مثال صدمة في الباب ...">
                            </div>
                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">المسافة المقطوعة</label>
                                <input name="odometer" type="text" class="form-control" id="inputAddress" placeholder="مثال 5000KM ...">
                            </div>



                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">السعر المبدئي</label>
                                <input name="stare_price" type="text" class="form-control" id="inputAddress" placeholder="مثال 2000$ ...">
                            </div>
                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">أقل قيمة للمزيادة</label>
                                <input name="min_bid" type="text" class="form-control" id="inputAddress" placeholder="مثال 200$ ...">
                            </div>

                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">نوع القير</label>
                                <select name="ger_type" class="form-select mb-3">
                                    <option selected>أختر احدى الانوع</option>
                                    <option value="1">عادي</option>
                                    <option value="2">تماتيك</option>
                                    <option value="3">عادي واتماتيك</option>
                                </select>
                            </div>
                        <div class="mb-1 col-md-6">
                            <label for="inputAddress" class="form-label">مكان السيارة الحالي</label>
                            <input name="address" type="text" class="form-control" id="inputAddress" placeholder="مثال حضرموت-المكلا...">
                        </div>


                        <button type="submit" class="btn btn-primary">إضافة</button>
                        </div>
                    </form>

                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->



@endsection

@section('script')

@endsection


