{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>تاكيد استلام السيارة </title>
</head>

<body>
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title w-100">مرحبا بك  : {{Auth::user()->name}}شكرا لثقتك بنا ونحن سعداء بك </h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">  الرجاء تأكسد عملية استلام السيارة عن طريق الضغط على الزر تأكيد </p>
			</div>
			<div>
        <form method="post" action="{{route('makeDeleverDone')}}">
          @csrf
          <input type="hidden" value="{{Auth::user()->id}}" name="userid" >
          <input type="hidden" value="{{$deleviryId}}" name="deleverId">
          <button type="submit" class="btn btn-primary">تأكيد</button>
        </form>
      </div>
		</div>
	</div>
</div>     


   
  
  </body>
  
  </html> --}}


  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
<link href="{{asset('assets/css/app-ar.min.css')}}" rel="stylesheet" type="text/css" id="light-style">
<link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
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
                                  <span class="check1"><i class="dripicons-checkmark"></i></span> 
                                  <h4 class="modal-title w-100">مرحبا بك  : {{Auth::user()->name}}شكرا لثقتك بنا ونحن سعداء بك </h4>	
                                 
                                    <p class="text-center"> الرجاء تأكيد عملية استلام السيارة عن طريق الضغط على الزر <strong>تأكيد</strong> واذا كان هناك اي اشكالية أو عدم مطابقة السيارة للمطلو اضغط على زر <strong>رفض</strong>  </p>
                                </div> 
                                  <form method="post" action="{{route('makeDeleverDone')}}">
                                    @csrf
                                    <input type="hidden" value="{{Auth::user()->id}}" name="userid" >
                                    <input type="hidden" value="{{$deleviryId}}" name="deleverId">
                                    <button type="submit" class="btn btn-success btn-block confirm-button">تأكيد العملية</button>
                                  </form>
                                  <form method="post" action="{{route('cencel_delivery')}}">
                                    @csrf
                                    <input type="hidden" value="{{Auth::user()->id}}" name="userid" >
                                    <input type="hidden" value="{{$deleviryId}}" name="deleverId">
                                    <button type="submit"  class="btn btn-danger btn-block confirm-button">رفض العملية</button>
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