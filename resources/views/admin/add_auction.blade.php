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
                <div class="card-header mb-3">
                    <h4 class="my-1">المعلومات الاساسية</h4>
                </div>
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
                            <select required name="color" class="form-select">
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
                            <select required name="state" class="form-select">
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
                            <label for="inputAddress" class="form-label">مكان السيارة الحالي (المحافظة)</label>
                            <!--                             <input name="address" type="text" class="form-control" id="inputAddress" placeholder="مثال حضرموت-المكلا...">
                             -->                            <select required id='state' name="state" class="form-select mb-3">
                                <option selected disabled>أختر محافظة</option>
                                @isset($states)
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputAddress" class="form-label"> مكان السيارة الحالي (المدينة)</label>
                            <select  required name="address" id='city' class="form-select mb-3">
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
                            states.addEventListener('change',function(){
                                city.value='أختر مدينة ';
                                var citys = document.getElementsByClassName('citys');
                                for (let index = 0; index < citys.length; index++) {
                                    citys[index].style.display='none';
                                }
                                citys = document.getElementsByClassName('state-'+states.value);
                                for (let index = 0; index < citys.length; index++) {
                                    citys[index].style.display='block';
                                }
                            })
                        </script>


                        <!-- end .border-->
                <div class="card-header mb-3 mt-3">
                    <h4 class="my-1">المعلومات الفنية</h4>
                </div>
                        <div class="mb-1 col-md-6">
                            <label for="inputAddress" class="form-label">نوع المركبة</label>
                            <!-- <input required name="vehicle_type" type="text" class="form-control" id="inputAddress" placeholder="مثال باص ..."> -->
                            <select required name="vehicle_type" class="form-select mb-3">
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
                            <label for="inputAddress" class="form-label">نوع القير</label>
                            <select required name="ger_type" class="form-select">
                                <option selected disabled>أختر احدى الانوع</option>
                                <option value="عادي">عادي</option>
                                <option value="تماتيك">تماتيك</option>
                                <option value="عادي واتماتيك">عادي واتماتيك</option>
                            </select>
                        </div>
                        <div class="mb-1 col-md-6">
                            <label for="inputAddress" class="form-label">الاضرار</label>
                            <input required name="damage" type="text" class="form-control" id="inputAddress" placeholder="مثال صدمة في الباب ...">
                        </div>
                        <div class="mb-1 col-md-6">
                            <label for="inputAddress" class="form-label">المسافة المقطوعة</label>
                            <input required name="odometer" type="number" class="form-control" id="inputAddress" placeholder="مثال 5000KM ...">
                        </div>
                        <div class="card-header mb-3 mt-3">
                            <h4 class="my-1">معلومات متعلقة بالمزاد</h4>
                        </div>
                        <div class="mb-1 col-md-6">
                            <label for="inputAddress" class="form-label">السعر المبدئي</label>
                            <input required name="stare_price" type="number" class="form-control" id="inputAddress" placeholder="مثال 2000$ ...">
                        </div>
                        <div class="mb-1 col-md-6">
                            <label for="inputAddress" class="form-label">أقل قيمة للمزيادة</label>
                            <input required name="min_bid" type="number" class="form-control" id="inputAddress" placeholder="مثال 200$ ...">
                        </div>
                        <div class="mb-1 col-md-12">
                            <label for="inputAddress" class="form-label">تارخ ووقت انتهاء المزاد</label>
                            <input required name="date_of_end_auction" type="datetime-local" class="form-control" id="inputAddress" placeholder="مثال باص ...">
                        </div>
                        <div class="card-header mb-3 mt-3">
                            <h4 class="my-1">تحميل صور السيارة</h4>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3 mt-3 mt-xl-0">
                                    <label for="projectname" class="mb-0">الصورة الاسياسية</label>
                                    <p class="text-muted font-14">حجم الصورة الموصى به 800 × 400 (بكسل)</p>
                                    <div action="/"  class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
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
                                    <div action="/"  class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                        <div class="fallback">
                                            <input  type="file" required name="images[]" accept="image/*" id="formFileMultiple" multiple>
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
                        <div class="card-header mb-3 mt-3">
                            <h4 class="my-1">معلومات اضافية</h4>
                        </div>
                        <div class="mb-3">
                            <label for="project-overview" class="form-label">ملاحظات</label>
                            <textarea class="form-control" id="project-overview" rows="5" placeholder="ملاحظات..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">إضافة</button>


            </div> <!-- end card-body-->
        </div>
    </div> <!-- end card -->
</div><!-- end col -->
<!-- end row -->





@endsection

@section('script')


    <!-- plugin js -->
    <script src="assets/js/vendor/dropzone.min.js"></script>
    <!-- init js -->
    <script src="assets/js/ui/component.fileupload.js"></script>

@endsection
