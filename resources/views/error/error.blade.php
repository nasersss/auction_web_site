<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/home.css">

    <title>error</title>
</head>

<body>
    <div class="container">
        <div class="error-msg">
            <h3>😖 انتهت جلستك في الموقع </h3>
            <h4>للعودة الى صفحتك السابقة قم بتسجيل الدخول</h4>

            <a href="{{ route('login') }}" class="btn btn-primary text-white"> تسجيل الدخول</a>
        </div>
        <div class='error-img'>
            <img src="/assets/images/projects/page-misc-error-light.png" alt="">
        </div>
    </div>
</body>

</html>
