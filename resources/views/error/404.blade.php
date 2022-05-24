<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/home.css">

    <title>404</title>
</head>

<body>
    <div class="container">
        <div class="error-msg">
            <h3>😖 هناك خطاء </h3>
            <h4> انقر على الزر في الاسفل للعودة الى الصفخة الرئيسية</h4>

            <a href="{{ route('index') }}" class="btn btn-primary text-white"> الصفخة الرئيسية</a>
        </div>
        <div class='error-img'>
            <img src="/assets/images/error/404.png" alt="">
        </div>
    </div>
</body>

</html>
