
@extends('admin.layouts.main')


@section('title')
    الصفحة الشخصية

@endsection

@section('css')

@endsection
@section('breadcrumb-item')
    الرئيسية
@endsection
@section('breadcrumb-item2')
    لوحة التحكم
@endsection
@section('breadcrumb-item-active')
    الصفحة الشخصية
@endsection

@section('page-title')
    الصفحة الشخصية
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <!-- Profile -->
            <div class="card bg-primary">
                <div class="card-body profile-user-box">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="avatar-lg">
                                        @foreach($users as $user)
                                        <img src="@isset($user->profile->image){{$user->profile->image}}@endisset" alt="" class="rounded-circle img-thumbnail">
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <h4 class="mt-1 mb-1 text-white">مرحبا...</h4>
                                        <h4 class="mt-1 mb-1 text-white">@isset($user->name)
                                                {{$user->name}}
                                            @endisset
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-sm-4">
                            <div class="text-center  mt-3 text-sm-start">
                                <form method="Get" action="{{route('edit_profile',$user->id)}}" enctype="multipart/form-data">
                                    @csrf
                                <button type="submit" class="btn btn-light">
                                    <i class="mdi mdi-account-edit me-1"></i> تعديل
                                </button>
                                </form>
                            </div>

                        </div> <!-- end col-->
                    </div> <!-- end row -->

                </div> <!-- end card-body/ profile-user-box-->
            </div><!--end profile/ card -->
        </div> <!-- end col-->
    </div>

    <div class="row">
        <div class="col-xl-12">
            <!-- Personal-Information -->
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-3">المعلومات الشخصية</h4>

                    <hr>

                    <div>
                        <p class="text-muted"><strong>الاسم :</strong> <span class="ms-2">@isset($user->name){{$user->name}}@endisset</span></p>

                        <p class="text-muted"><strong>الجوال :</strong><span class="ms-2">@isset($user->profile->phone){{$user->profile->phone}}@endisset</span></p>

                        <p class="text-muted"><strong>البريد الالكتروني :</strong> <span class="ms-2">@isset($user->email){{$user->email}}@endisset</span></p>

                        <p class="text-muted"><strong>العنوان :</strong> <span class="ms-2">@isset($user->profile->address){{$user->profile->address}}@endisset</span></p>
                        <script>$.NotificationApp.send("Title","Your awesome message text","Position","Background color","Icon")</script>


                        <p class="text-muted mb-0" id="tooltip-container"><strong> مواقع التواصل الاجتماعي :</strong>
                            <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href=" @isset($user->profile->facebook) {{$user->profile->facebook}} @endisset" title="" data-bs-original-title="Facebook" aria-label="Facebook"><i class="mdi mdi-facebook"></i></a>
                            <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="@isset($user->profile->twitter){{$user->profile->twitter}}@endisset" title="" data-bs-original-title="Twitter" aria-label="Twitter"><i class="mdi mdi-twitter"></i></a>
                            <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="@isset($user->profile->instagram){{$user->profile->instagram}}@endisset" title="" data-bs-original-title="Instagram" aria-label="Instagram"><i class="mdi mdi-instagram"></i></a>
<!--                             <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="@isset($user->profile->instagram) {{url($user->profile->instagram)}}@endisset" title="" data-bs-original-title="Instagram" aria-label="Instagram"><i class="mdi mdi-instagram"></i></a>
 -->                        </p>

                    </div>
                </div>
            </div>
        @endforeach
            <!-- Personal-Information -->





        </div> <!-- end col-->


        <!-- end col -->

    </div>



@endsection

@section('script')

@endsection


