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

@endsection

@section('content')
<div id="msg" class="alert alert-danger">
    <strong id="err-msg"></strong>
    </div>
    @if($errors->any())
    @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
    @endif

<form method="post" name="auction" action="{{route('store-auction')}}" enctype="multipart/form-data">
    @csrf
    <div class="row">

        <div class="card">
            <div class="card-header">
                <h4 class="my-1">إضافة مزاد جديد</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2">
                        <h5 class="my-1">المعلومات الاساسية</h5>
                    </div>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <label for="name" class="form-label">اسم السيارة</label>
                                <input required name="name" value="{{ old('name') }}" type="text" class="form-control" id="name" placeholder="مثال هيلوكس...">
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <label for="category" class="form-label">نوع السيارة</label>
                                <select required name="category_id" class="form-select" id="category">
                                    <option selected disabled>أختر احدى الانوع</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    <!-- <option value="2">بي أم دبليو</option>
                                            <option value="3">فيراري</option> -->
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <label for="color" class="form-label">لون السيارة</label>
                                <select required name="color" class="form-select" id="color">
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
                            <div class="col-lg-3 col-md-12">
                                <label for="stat" class="form-label">حالة السيارة</label>
                                <select required name="state" class="form-select" id="stat">
                                    <option selected disabled>أختر حالة السيارة </option>
                                    <option value="مستخدم">مستخدم</option>
                                    <option value="جديد">جديد</option>
                                </select>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <label for="model" class="form-label">الموديل</label>
                                <input required name="model" type="text" value="{{ old('model') }}" class="form-control" id="model" placeholder="مثال 2014...">
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <label for="address" class="form-label">مكان السيارة الحالي (المحافظة)</label>
                                <select required id='state' class="form-select mb-3">
                                    <option selected disabled>أختر محافظة</option>
                                    @isset($states)
                                    @foreach($states as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                    @endisset
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <label for="city" class="form-label"> مكان السيارة الحالي (المدينة)</label>
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

                        </div>
                    </div>
                </div>
                <div class="card-header mb-3"></div>
                <div class="row">
                    <div class="col-lg-2">
                        <h5 class="my-1">المعلومات الفنية</h5>
                    </div>
                    <div class="col-lg-10">
                        <div class="row">

                            <div class="mb-1 col-lg-6 col-md-12">
                                <label for="vehicle_type" class="form-label">نوع المركبة</label>
                                <!-- <input required name="vehicle_type" type="text" class="form-control" id="inputAddress" placeholder="مثال باص ..."> -->
                                <select required name="vehicle_type" class="form-select" id="vehicle_type">
                                    <option selected disabled>أختر احدى الانوع</option>
                                    @isset($vehicleTypes)
                                    @foreach($vehicleTypes as $vehicleType)
                                    <option value="{{$vehicleType->id}}">{{$vehicleType->name}}</option>
                                    <!-- <option value="2">بي أم دبليو</option>
                                                    <option value="3">فيراري</option> -->
                                    @endforeach
                                    @endisset
                                </select>
                            </div>
                            <div class="mb-1 col-lg-6 col-md-12">
                                <label for="fuel" class="form-label">نوع الوقود</label>
                                <select required name="fuel" class="form-select" id="fuel">
                                    <option selected disabled>أختر نوع الوقود </option>
                                    <option value="بترول">بترول</option>
                                    <option value="ديزيل">ديزيل</option>
                                    <option value="غاز">غاز</option>
                                    <option value="كهرباء">كهرباء</option>
                                </select>
                            </div>
                            <div class="mb-1 col-lg-6 col-md-12">
                                <label for="engine_type" class="form-label">نوع المحرك</label>
                                <input required name="engine_type" type="text" value="{{ old('engine_type') }}" class="form-control" id="engine_type" placeholder="مثال 6 بوستن...">
                            </div>
                            <div class="mb-1 col-lg-6 col-md-12">
                                <label for="ger_type" class="form-label">نوع القير</label>
                                <select required name="ger_type" class="form-select" id="ger_type">
                                    <option selected disabled>أختر احدى الانوع</option>
                                    <option value="عادي">عادي</option>
                                    <option value="تماتيك">تماتيك</option>
                                    <option value="عادي واتماتيك">عادي واتماتيك</option>
                                </select>
                            </div>
                            <div class="mb-1 col-lg-6 col-md-12">
                                <label for="damage" class="form-label">الاضرار</label>
                                <input required name="damage" type="text" value="{{ old('damage') }}" class="form-control" id="damage" placeholder="مثال صدمة في الباب ...">
                            </div>
                            <div class="mb-1 col-lg-6 col-md-12">
                                <label for="odometer" class="form-label">المسافة المقطوعة</label>
                                <input required name="odometer" type="number" value="{{ old('odometer') }}" class="form-control" id="odometer" placeholder="مثال 5000KM ...">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header mb-3"></div>
                <div class="row">
                    <div class="col-lg-2">
                        <h5 class="my-1">معلومات متعلقة بالمزاد</h5>
                    </div>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="mb-1 col-lg-4 col-md-12">
                                <label for="stare_price" class="form-label">السعر المبدئي</label>
                                <input required name="stare_price" type="number" value="{{ old('stare_price') }}" class="form-control" id="stare_price" placeholder="مثال 2000$ ...">
                            </div>
                            <div class="mb-1 col-lg-4 col-md-12">
                                <label for="min_bid" class="form-label">أقل قيمة للمزيادة</label>
                                <input required name="min_bid" type="number"  value="{{ old('min_bid') }}"  class="form-control" id="min_bid" placeholder="مثال 200$ ...">
                            </div>
                            <div class="mb-1 col-lg-4 col-md-12">
                                <label for="date_of_end_auction" class="form-label">تارخ ووقت انتهاء المزاد</label>
                                <input required name="date_of_end_auction" value="{{ old('date_of_end_auction') }}" type="datetime-local" class="form-control" id="date_of_end_auction" placeholder="مثال باص ...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header mb-3"></div>
                <div class="row">
                    <div class="col-lg-2">
                        <h5 class="my-1">صور السيارة</h5>
                    </div>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3 mt-3 mt-xl-0">
                                    <label for="projectname" class="mb-0">الصورة الاسياسية</label>
                                    <p class="text-muted font-14">حجم الصورة الموصى به 800 × 400 (بكسل)</p>
                                    <div class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                        <div class="fallback">
                                            <input class="form-control" required name="mainImage" accept="image/*" type="file">
                                        </div>

                                        <div class="dz-message needsclick">
                                            <i class="dripicons-photo"></i>
                                            <h4>قم بسحب و إسقاط الصور هنا أو انقر هنا للتحميل</h4>
                                        </div>
                                    </div>


                                </div>


                            </div>
                            <div class="col-xl-6">
                                <div class="mb-3 mt-3 mt-xl-0">
                                    <label for="projectname" class="mb-0">صور اخرى</label>
                                    <p class="text-muted font-14">حجم الصورة الموصى به 800 × 400 (بكسل)</p>
                                    <div class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                        <div class="fallback">
                                            <input type="file" required name="images[]" accept="image/*" id="formFileMultiple" multiple>
                                        </div>

                                        <div class="dz-message needsclick">
                                            <i class="dripicons-photo-group"></i>
                                            <h4>قم بسحب و إسقاط الصور هنا أو انقر هنا للتحميل</h4>
                                        </div>
                                    </div>


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
                    </div>
                </div>
            </div>
            <div class="card-header mb-3"></div>
            <div class="row">
                <div class="col-lg-2">
                    <h5 class="my-1">معلومات اضافية</h5>
                </div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="project-overview" class="form-label">ملاحظات</label>
                            <textarea class="form-control" name="notes" id="project-overview" rows="5" placeholder="ملاحظات..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">إضافة</button>

                </div>

                </div>

            </div>



        </div> <!-- end card-body-->
    </div>
    </div>

<script src="assets/js/state_city.js"></script>

</form>



@endsection

@section('script')
<script src="/assets/js/auction-validation.js"></script>

<script src="assets/js/state_city.js"></script>

<!-- plugin js -->
<script src="assets/js/vendor/dropzone.min.js"></script>
<!--init js -->
<script src="assets/js/ui/component.fileupload.js"></script>

@endsection
