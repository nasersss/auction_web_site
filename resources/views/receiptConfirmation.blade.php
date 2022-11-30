  <!DOCTYPE html>
  <html>

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS only -->
      <!-- <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/app-ar.min.css" rel="stylesheet" type="text/css" id="light-style"> -->
      <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('assets/css/app-ar.min.css') }}" rel="stylesheet" type="text/css" id="light-style">
      <title>تمت عملية الدفع بنجاح</title>
      <style>
          @import url(../fonts/DIN.css);

          body {
              background-color: #eee;
              font-family: DIN-light, sans-serif, Arial;
              font-weight: 300
          }

          .cart {
              height: 100vh
          }

          .title {
              display: flex;
              align-items: center
          }

          .line {
              width: 76px;
              height: 6px;
              background: #63d19e
          }



          .check1 {
              display: flex;
              background-color: #63d19e;
              color: #fff;
              font-size: 17px;
              width: 100px;
              height: 100px;
              align-items: center;
              justify-content: center;
              border-radius: 50%;
              margin-bottom: 10px
          }

          .check1 i {
              font-size: 50px;
          }



          .confirm-button {
              height: 50px
          }

          .confirm-button-bg {
              background-color: #63d19e;
              border: none;
          }

          .background-muted {
              background-color: #fafafc
          }

      </style>
  </head>

  <body>
      <div class="container mt-4 mb-4">
          <div class="row d-flex cart align-items-center justify-content-center">
              <div class="col-md-10">
                  <div class="card">
                      <div class="d-flex justify-content-center border-bottom">
                          <div class="p-3">
                              <div class="title">
                                  <h4>تمت التأكد من حسابك بنجاح </h4>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12 p-5 pb-1">
                              <div class="text-center">
                                  <div class="d-flex justify-content-center mb-5 flex-column align-items-center">
                                      <span class="check1"><i class="dripicons-checkmark"></i></span>

                                      <h4 class="mt-2 mb-5"> الرجاء التأكيد على عملية الدفع</h4>

                                      @php
                                          session_start();
                                      @endphp
                                      @isset($_SESSION['delivery'])
                                          <form method="post" action="{{ route('paymentOfDeleviry') }}">
                                          @else
                                              <form method="post" action="{{ route('comfirmPyment') }}">
                                              @endisset
                                              @csrf
                                              <input type="hidden" value="{{ $paid_amount[0] }}" name="paid_amount">
                                              <input type="hidden" value="{{ $created_at[0] }}" name="creaated_at">
                                              <input type="hidden" value="{{ $order_reference }}"
                                                  name="order_reference">
                                              <input type="hidden" value="{{ $card_type[0] }}" name="card_type">
                                              <input type="hidden" value="{{ Auth::user()->id }}" name="userid">
                                              <button type="submit" class="btn btn-success">تأكيد</button>
                                          </form>
                                  </div>


                              </div>
                          </div>

                      </div>
                      <div> </div>
                  </div>
              </div>
          </div>
      </div>
  </body>

  </html>
