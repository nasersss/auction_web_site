<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تأكيد الطلب </title>

    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/checkout.css">
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
    @extends('master')
    @section('content')
    <div class="container mt-5 p-3 rounded cart">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="product-details mr-2">
                    <div class="d-flex flex-row align-items-center"><i class="fa fa-long-arrow-left"></i><span class="ml-2">السلة</span></div>
                    <hr>
                    
                    <div class="d-flex justify-content-between"><span>لديك منتجين في سلتك</span>
                        <div class="d-flex flex-row align-items-center"><span class="text-black-50">فرز حسب:</span>
                            <div class="price ml-2"><span class="mr-1">السعر</span><i class="fa fa-angle-down"></i></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row"><img class="rounded" src="assets/images/mobile_listing_main_01.jpg" width="100">
                            <div class="ml-2"><span class="font-weight-bold d-block">نيسان KICKS SV+NAV</span><span class="spec">بترول, أحمر</span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block"></span><span class="d-block ml-5 font-weight-bold">$12000</span><a href="#"><img src="assets/images/delete-button-svgrepo-com.svg" width="20"></a></i></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row"><img class="rounded" src="assets/images/e-class-coupe-brilliant-blue-metallic.jpg" width="100">
                            <div class="ml-2"><span class="font-weight-bold d-block">مرسيدس بنز COUPE</span><span class="spec">بترول ,أزرق</span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block"></span><span class="d-block ml-5 font-weight-bold">$15000</span><a href="#"><img src="assets/images/delete-button-svgrepo-com.svg" width="20"></a></i></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row">
                            <div class="ml-2"><span class="font-weight-bold d-block"></span><span class="spec"></span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block"></span><span class="d-block ml-5 font-weight-bold"></span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row">
                            <div class="ml-2"><span class="font-weight-bold d-block"></span><span class="spec"></span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block"></span><span class="d-block ml-5 font-weight-bold"></span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="checkout-detail-container">
                            <div class="product-info">
                                <div class="product-info-heading">
                <span>المنتج</span><span>السعر النهائي</span>
                                </div>
                                <div class="product-info-detail">
                <div class="column">
                <span>نيسان</span><span>12000 <span>$</span></span>
                
                </div>
                <div class="column">
                    
                    <span>مرسيدس</span><span>15000 <span>$</span></span>
                    </div>
                <div class="column">
                    <span>الشحن</span><span>مجاني</span>
                    </div>
                                </div>
                                <div class="total">
                <div class="text">الاجمالي</div>
                <div class="price">27000 <span>$</span></div>
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
                               <a href="http://waslpayment.com/api/test/merchant/do_payment_order/qyt78NKIDC"><button class="order-btn">تاكيد الشراء</button></a>
                
                
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
        <div class="alert alert-warning alert-dismissible fade show" id="warning">
    <strong>تحذير!</strong> في حال نقر المستخدم على زر الحذف سيتم خصم عربون الإشتراك
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
    </div>
             
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