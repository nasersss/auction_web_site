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
                <form method="post" action="{{route('store-auction')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <label for="inputAddress" class="form-label">اسم السيارة</label>
                            <input required name="name" type="text" class="form-control" id="inputAddress" placeholder="مثال هيلوكس...">
                        </div>
                        <div class="col-md-3">
                            <label for="inputAddress" class="form-label">نوع السيارة</label>
                            <select required name="category_id" class="form-select mb-3">
                                <option selected disabled>أختر احدى الانوع</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                <!-- <option value="2">بي أم دبليو</option>
                                    <option value="3">فيراري</option> -->
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputAddress" class="form-label">لون السيارة</label>
                            <select required name="color" class="form-select mb-3">
                                <option selected disabled>أختر لون السيارة </option>
                                <option value="أزرق">أزرق</option>
                                <option value="أحمر">أحمر</option>
                                <option value="أخضر">أخضر</option>
                                <option value="رمادي">رمادي</option>
                                <option value="أسود">أسود</option>
                                <option value="أبيض">أبيض</option>
                                <option value="بنفجسي">بنفجسي</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputAddress" class="form-label">حالة السيارة</label>
                            <select required name="state" class="form-select mb-3">
                                <option selected disabled>أختر حالة السيارة </option>
                                <option value="مستخدم">مستخدم</option>
                                <option value="جديد">جديد</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputAddress" class="form-label">الموديل</label>
                            <input required name="model" type="text" class="form-control" id="inputAddress" placeholder="مثال 2014...">
                        </div>

                        <div class="col-md-4">
                            <label for="inputAddress" class="form-label">صورة الرئيسية السيارة</label>
                            <input class="form-control" required name="mainImage" accept="image/*" type="file" id="formFileMultiple">
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="inputAddress" class="form-label">باقي الصور سيارة</label>
                            <input class="form-control" type="file" required name="images[]" accept="image/*" id="formFileMultiple" multiple>
                        </div>

                        <div class="mb-1 col-md-12">
                            <label for="inputAddress" class="form-label">تارخ ووقت انتهاء المزاد</label>
                            <input required name="date_of_end_auction" type="datetime-local" class="form-control" id="inputAddress" placeholder="مثال باص ...">
                        </div>
                        <h4 class="header-title">المعلومات الفنية</h4>
                        <div class="mb-1 col-md-6">
                            <label for="inputAddress" class="form-label">نوع المركبة</label>
                            <select required name="vehicle_type" class="form-select mb-3">
                                <option selected disabled>أختر احدى الانوع</option>
                                @isset($vehicleTypes)
                                @foreach($vehicleTypes as $vehicleType)
                                <option value="{{$vehicleType->id}}">{{$vehicleType->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="mb-1 col-md-6">
                            <label for="inputAddress" class="form-label">نوع الوقود</label>
                            <select required name="fuel" class="form-select mb-3">
                                <option selected disabled>أختر نوع الوقود </option>
                                <option value="بترول">بترول</option>
                                <option value="ديزيل">ديزيل</option>
                                <option value="غاز">غاز</option>
                                <option value="كهرباء">كهرباء</option>
                            </select>
                        </div>


                        <div class="mb-1 col-md-6">
                            <label for="inputAddress" class="form-label">نوع المحرك</label>
                            <input required name="engine_type" type="text" class="form-control" id="inputAddress" placeholder="مثال 6 بوستن...">
                        </div>
                        <div class="mb-1 col-md-6">
                            <label for="inputAddress" class="form-label">ملاحظات</label>
                            <input required name="notes" type="text" class="form-control" id="inputAddress" placeholder="ملاحظات...">
                        </div>
                        <div class="mb-1 col-md-6">
                            <label for="inputAddress" class="form-label">الاضرار</label>
                            <input required name="damage" type="text" class="form-control" id="inputAddress" placeholder="مثال صدمة في الباب ...">
                        </div>
                        <div class="mb-1 col-md-6">
                            <label for="inputAddress" class="form-label">المسافة المقطوعة</label>
                            <input required name="odometer" type="number" class="form-control" id="inputAddress" placeholder="مثال 5000KM ...">
                        </div>



                        <div class="mb-1 col-md-6">
                            <label for="inputAddress" class="form-label">السعر المبدئي</label>
                            <input required name="stare_price" type="number" class="form-control" id="inputAddress" placeholder="مثال 2000$ ...">
                        </div>

                        <!-- <div class="mb-1 col-md-1">
                                <label for="inputAddress" class="form-label">العملة</label>
                                <select required name="ger_type" class="form-select mb-3">
                                    <option selected disabled>أختر احدى الانوع</option>
                                    <option value="1">ريال يمني</option>
                                    <option value="2">ريال سعيودي</option>
                                    <option value="3">دولار امريكي</option>
                                </select>
                            </div> -->

                        <div class="mb-1 col-md-6">
                            <label for="inputAddress" class="form-label">أقل قيمة للمزيادة</label>
                            <input required name="min_bid" type="number" class="form-control" id="inputAddress" placeholder="مثال 200$ ...">
                        </div>

                        <div class="mb-1 col-md-6">
                            <label for="inputAddress" class="form-label">نوع القير</label>
                            <select required name="ger_type" class="form-select mb-3">
                                <option selected disabled>أختر احدى الانوع</option>
                                <option value="عادي">عادي</option>
                                <option value="تماتيك">تماتيك</option>
                                <option value="عادي واتماتيك">عادي واتماتيك</option>
                            </select>
                        </div>
                        <div class="mb-1 col-md-3">
                            <label for="inputAddress" class="form-label">مكان السيارة الحالي</label>
                            <select required id='state' name="states" class="form-select mb-3">
                                <option selected disabled>أختر محافظة</option>
                                @isset($states)
                                @foreach($states as $state)
                                <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="mb-1 col-md-3">
                            <label for="inputAddress" class="form-label">مكان السيارة الحالي</label>
                            <select required name="address" id='city' class="form-select mb-3">
                                <option selected disabled>أختر مدينة</option>
                                @isset($states)
                                @foreach($states as $state)
                                @foreach($state->city as $city)
                                <option style="display: none;" class="citys state-{{$city->state_id}}" value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <script>
                            const states = document.getElementById('state');
                            const city = document.getElementById('city');
                            states.addEventListener('change', function() {
                                city.value = 'أختر مدينة ';
                                var citys = document.getElementsByClassName('citys');
                                for (let index = 0; index < citys.length; index++) {
                                    citys[index].style.display = 'none';
                                }
                                citys = document.getElementsByClassName('state-' + states.value);
                                for (let index = 0; index < citys.length; index++) {
                                    citys[index].style.display = 'block';
                                }
                            })
                        </script>

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