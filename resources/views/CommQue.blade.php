<!DOCTYPE html>
<html lang="en">
<head>
    <title> سياسات الموقع </title>

    @include('header.head-contact')
</head>
<body>

    @extends('master')
    @section('content')
    <!--Section: FAQ-->
<section id="common-que" class="my-5">
  <h3 class="text-center mb-2 pt-5 pb-2 text-primary fw-bold">سياسة الموقع</h3>
  <p class="text-center mb-5">
    توفر لك سياسة الموقع كافة المعلومات لكي يكون المستخدم على علم بالبنود الخاصة بالمزادات
  </p>



  <div class="row">
    @foreach($policies as $police )
    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="text-center mb-3 text-primary"> {{ $police->police }}؟</h6>
      <p>
        {{ $police->description }}
      </p>
    </div>

    @endforeach
  </div>
</section>
<!--Section: FAQ-->
@endsection
@include('footer.footer')
