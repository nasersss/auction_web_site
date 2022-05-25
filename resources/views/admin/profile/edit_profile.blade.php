@extends('admin.layouts.main')

@section('title')
    الملف الشخصي | تعديل المعلومات

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
            <div id="msg" class="alert alert-danger">
                <strong id="err-msg"></strong>
                </div>
                    @if($errors->any())
                    @foreach($errors->all() as $err)
                        <p class="alert alert-danger">{{$err}}</p>
                        @endforeach
                    @endif
                    @include('message')

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">تعديل الملف الشخصي</h4>
                    <!--Start-->
                    <form method="POST" name="profile" class="validation" action="{{route('update_profile',$userInfo->id)}}" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">الاسم الكامل</label>
                                <input name='name' value="@isset($userInfo->name){{$userInfo->name}}@endisset" type="text" class="form-control" id="inputAddress" placeholder="مثال محمد سالم ...">
                            </div>
                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">الصورة الشخصية</label>
                                <input class="form-control" name='image' type="file" accept="image/*" id="formFileMultiple">
                            </div>
                            <!-- <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">البريد الالكتروني</label>
                                <input name='email' type="email" class="form-control" id="inputAddress" placeholder="مثال ahmed@gmil.com...">
                            </div> -->
                            <div class="mb-1 col-md-6">
                                <label for="inputAddress" class="form-label">الجوال</label>
                                <input name='phone' value="@isset($userInfo->profile->phone){{$userInfo->profile->phone}}@endisset" type="text" class="form-control" id="inputAddress" placeholder="مثال 7396...">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputAddress" class="form-label">العنوان</label>
                                <input name='address' value="@isset($userInfo->profile->address){{$userInfo->profile->address}}@endisset" type="text" class="form-control" id="inputAddress" placeholder="مثال حضرموت-المكلا-...">
                            </div>

                            <h5 class="header-title">مواقع التواصل</h5>
                            <div class="mb-2 col-md-4">
                                <input name='facebook' value="@isset($userInfo->profile->facebook){{$userInfo->profile->facebook}}@endisset" type="text" class="form-control" id="inputAddress" placeholder="الفيس بوك مثلا fb/ahmed">
                            </div>
                            <div class="mb-2 col-md-4">
                                <input name='twitter' value="@isset($userInfo->profile->twitter){{$userInfo->profile->twitter}}@endisset" type="text" class="form-control" id="inputAddress" placeholder="تويتر">
                            </div>
                            <div class="mb-2 col-md-4">
                                <input name='instagram' value="@isset($userInfo->profile->instagram){{$userInfo->profile->instagram}}@endisset" type="text" class="form-control" id="inputAddress" placeholder="انستقرام">
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
<script src="/assets/js/validation.js"></script>

@endsection


