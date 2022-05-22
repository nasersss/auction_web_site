
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
<link href="{{asset('assets/css/app-ar.min.css')}}" rel="stylesheet" type="text/css" id="light-style">
    <title>عملية التاكيد</title>
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
            width: 60px;
            height: 60px;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-bottom: 10px
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
                                <h4>الرجاء تاكيد العملية</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 p-5">
                            <div class="text-center">
                                <div class="d-flex justify-content-center mb-5 flex-column align-items-center"> 
                                    <span class="check1"><i class="fa fa-check"></i></span> 
                                    <span class="font-weight-bold">يرجاء شحن محفضتك</span> 
                                        <small class="mt-2">سوف يتم خصم نسبة 20 % من محفضتك للتأكيد العملية يرجاء الضغط على الزر ادناه</small> 
                                         
                                    </div> 
                                    <a href="/" ><button class="btn btn-danger btn-block confirm-button">رفض العملية</button></a>

                                        <form class="d-inline" action="{{route('doPaymetn')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="auctionId" value="{{$auctionInfo->id}}">
                                            <button type="submit" class="btn btn-success btn-block confirm-button confirm-button-bg">تأكيد العملية</button>
                                        </form>
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