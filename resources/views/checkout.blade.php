<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/checkout.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <title>تاكيد الطلب</title>
</head>
<body>
    @extends('master')
    @section('content')
    <div class="container">
<div class="row mt-5">
    <div class="col-12 col-md-6">
        <div class="checkout-detail-container">
            <div class="product-info">
                <div class="product-info-heading">
<span>المنتج</span><span>السعر النهائي</span>
                </div>
                <div class="product-info-detail">
<div class="column">
<span>كامري</span><span>12000 <span>$</span></span>
</div>
<div class="column">
    <span>الشحن</span><span>مجاني</span>
    </div>
                </div>
                <div class="total">
<div class="text">الاجمالي</div>
<div class="price">12000 <span>$</span></div>
                </div>

                <div class="payment">
                    <div class="description">
                        <span>طرق الدفع المتاحة عبر الموقع</span>
                    </div>

                      <div class="payment-item"> <input type="radio" name="payment-gateway" value="VisaSystem"><div>Visa System</div></div>
                     <div class="payment-item"> <input type="radio" name="payment-gateway" value="PaypalSystem"><div>Paypal System"</div></div>
                       <div class="payment-item"><input type="radio" name="payment-gateway" value="MasterCardSystem"><div>master card system</div></div>
<div id="visa"><a href=""><button class="payment-btn">Visa</button></a></div>
<div id="paypal"><a href=""><button class="payment-btn">Paybal</button></a></div>
<div id="master"><a href=""><button class="payment-btn">Master Card  </button></a></div>
                </div>
               <a href=""><button class="order-btn">تاكيد الشراء</button></a>


            </div>
        </div>
    </div>
    <div class="col-12 col-md-6"></div>

</div>
    </div>

<script src="assets/js/payment.js"></script>
@endsection
</body>
</html>
