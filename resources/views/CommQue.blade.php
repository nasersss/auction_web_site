<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>سياسة الموقع</title>
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/home.css">
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


  </body>

</html>
