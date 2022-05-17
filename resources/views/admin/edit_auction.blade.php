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

@if(session()->has('error'))
<div class="alert alert-danger" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{ session()->get('error') }} </strong>
</div>
@endif
@if(session()->has('success'))
<div class="alert alert-danger" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{ session()->get('success') }} </strong>
</div>
@endif
<form method="post" action="{{route('update-auction')}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="my-1">تعديل مزاد </h4>
            </div>
            <input type="hidden" name="id" value="@isset($auction->id){{$auction->id}}@endisset">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2">
                        <h5 class="my-1">المعلومات الاساسية</h5>
                    </div>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="mb-2 col-lg-4 col-md-12">
                                <label for="name" class="form-label">اسم السيارة</label>
                                <input required name="name" value="@isset($auction->name){{$auction->name}}@endisset" type="text" class="form-control" id="name" placeholder="مثال هيلوكس...">
                            </div>
                            <div class="mb-2 col-lg-4 col-md-12">
                                <label for="category" class="form-label">نوع السيارة</label>
                                <select value="@isset($auction->category_id){{$auction->category_id}}@endisset" required name="category_id" class="form-select" id="category">
                                <option disabled>أختر احدى الانوع</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                </select>
                            </div>
                            <div class="mb-2 col-lg-4 col-md-12">
                                <label for="color" class="form-label">لون السيارة</label>
                                <select value="@isset($auction->color){{$auction->color}}@endisset" required name="color" class="form-select" id="color">
                                    <option disabled>أختر لون السيارة </option>
                                    <option value="أزرق">أزرق</option>
                                    <option value="أحمر">أحمر</option>
                                    <option value="أخضر">أخضر</option>
                                    <option value="رمادي">رمادي</option>
                                    <option value="أسود">أسود</option>
                                    <option value="أبيض">أبيض</option>
                                    <option value="بنفجسي">بنفجسي</option>
                                </select>
                            </div>
                            <div class="mb-2 col-lg-3 col-md-12">
                                <label for="state" class="form-label">حالة السيارة</label>
                                <select value="@isset($auction->state){{$auction->state}}@endisset" required name="state" class="form-select">
                                    <option disabled>أختر حالة السيارة </option>
                                    <option value="مستخدم">مستخدم</option>
                                    <option value="جديد">جديد</option>
                                </select>
                            </div>
                            <div class="mb-2 col-lg-3 col-md-12">
                                <label for="model" class="form-label">الموديل</label>
                                <input value="@isset($auction->model){{$auction->model}}@endisset" required name="model" type="text" class="form-control" id="model" placeholder="مثال 2014...">
                            </div>
                            <div class="mb-2 col-lg-3 col-md-12">
                                <label for="address" class="form-label">مكان السيارة الحالي (المحافظة)</label>
                                <select value="@isset($auction->city->state_id){{$auction->city->state_id}}@endisset" required id='editState' name="state" class="form-select mb-3">
                                    <option disabled>أختر محافظة</option>
                                    @isset($states)
                                    @foreach($states as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                    @endisset
                                </select>
                            </div>
                            <div class="mb-2 col-lg-3 col-md-12">
                                <label for="city" class="form-label"> مكان السيارة الحالي (المدينة)</label>
                                <select value="@isset($auction->city_id){{$auction->city_id}}@endisset" required name="address" id='editCity' class="form-select mb-3">
                                    <option disabled>أختر مدينة</option>
                                    @isset($states)
                                    @foreach($states as $state)
                                    @foreach($state->city as $city)
                                    <option class="edit_citys edit_state-{{$city->state_id}}" value="{{$city->id}}">{{$city->name}}</option>
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
                                <select value="@isset($auction->vehicleType_id){{$auction->vehicleType_id}}@endisset" required name="vehicle_type" class="form-select" id="vehicle_type">
                                    <option disabled>أختر احدى الانوع</option>
                                    @isset($vehicleTypes)
                                    @foreach($vehicleTypes as $vehicleType)
                                    <option value="{{$vehicleType->id}}">{{$vehicleType->name}}</option>
                                    @endforeach
                                    @endisset
                                </select>
                            </div>
                            <div class="mb-1 col-lg-6 col-md-12">
                                <label for="fuel" class="form-label">نوع الوقود</label>
                                <select value="@isset($auction->fuel){{$auction->fuel}}@endisset" required name="fuel" class="form-select" id="fuel">
                                    <option disabled>أختر نوع الوقود </option>
                                    <option value="بترول">بترول</option>
                                    <option value="ديزيل">ديزيل</option>
                                    <option value="غاز">غاز</option>
                                    <option value="كهرباء">كهرباء</option>
                                </select>
                            </div>
                            <div class="mb-1 col-lg-6 col-md-12">
                                <label for="engine_type" class="form-label">نوع المحرك</label>
                                <input value="@isset($auction->engine_type){{$auction->engine_type}}@endisset" required name="engine_type" type="text" class="form-control" id="engine_type" placeholder="مثال 6 بوستن...">
                            </div>
                            <div class="mb-1 col-lg-6 col-md-12">
                                <label for="ger_type" class="form-label">نوع القير</label>
                                <select value="@isset($auction->ger_type){{$auction->ger_type}}@endisset" required name="ger_type" class="form-select" id="ger_type">
                                    <option disabled>أختر احدى الانوع</option>
                                    <option value="عادي">عادي</option>
                                    <option value="تماتيك">تماتيك</option>
                                    <option value="عادي واتماتيك">عادي واتماتيك</option>
                                </select>
                            </div>
                            <div class="mb-1 col-lg-6 col-md-12">
                                <label for="damage" class="form-label">الاضرار</label>
                                <input value="@isset($auction->damage){{$auction->damage}}@endisset" required name="damage" type="text" class="form-control" id="damage" placeholder="مثال صدمة في الباب ...">
                            </div>
                            <div class="mb-1 col-lg-6 col-md-12">
                                <label for="odometer" class="form-label">المسافة المقطوعة</label>
                                <input value="@isset($auction->odometer){{$auction->odometer}}@endisset" required name="odometer" type="number" class="form-control" id="odometer" placeholder="مثال 5000KM ...">
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
                                            <input class="form-control" name="mainImage" accept="image/*" type="file">
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
                                            <input type="file" name="images[]" accept="image/*" id="formFileMultiple" multiple>
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
                            @isset($auction->auctionImage)
                            @foreach($auction->auctionImage as $image)
                            <div id="uploadPreviewTemplate" class="col-12 col-sm-6 col-md-4">
                                <div class="card mt-1 mb-0 shadow-none border">
                                    <div class="p-2">
                                        <div class="row">
                                            <div class="col-auto">
                                                <img data-dz-thumbnail="" src="{{$image->image}}" class="avatar-lg rounded bg-light" alt="">
                                            </div>

                                            <div class="col-2">
                                                <!-- Button -->
                                                <a href="{{route('delete_auction_image',$image->id)}}" class="btn btn-link btn-lg text-muted" data-dz-remove="">
                                                <i class="mdi mdi-delete"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endisset
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
                            <textarea name="notes" class="form-control" id="project-overview" rows="5" placeholder="ملاحظات...">@isset($auction->notes){{$auction->notes}}@endisset</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">تعديل</button>

                    </div>

                </div>

            </div>



        </div> <!-- end card-body-->
    </div>
    </div>
</form>





@endsection

@section('script')
<script src="assets/js/edit_state_city.js"></script>


<!-- plugin js -->
<script src="assets/js/vendor/dropzone.min.js"></script>
<!-- init js -->
<script src="assets/js/ui/component.fileupload.js"></script>

@endsection