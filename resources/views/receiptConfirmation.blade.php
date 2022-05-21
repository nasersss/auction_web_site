<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>تاكيد الطلب</title>
</head>

<body>
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title w-100">تمت عملية السحب من حسابك  بنجاح</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center"> الرجاء الضغط على زر تأكيد لأتمام العملية </p>
			</div>
			<div>

        @php 
        session_start();
        @endphp
        @isset( $_SESSION["delivery"])
        <form method="post" action="{{ route("paymentOfDeleviry") }}">
        @else 
        <form method="post" action="{{ route("comfirmPyment") }}">
        @endisset
          @csrf
          <input type="hidden" value="{{ $paid_amount[0] }}" name="paid_amount" >
          <input type="hidden" value="{{ $created_at[0] }}" name="creaated_at" >
          <input type="hidden" value="{{ $order_reference}}" name="order_reference" >
          <input type="hidden" value="{{ $card_type[0]}}" name="card_type" >
          <input type="hidden" value="{{Auth::user()->id}}" name="userid" >
          <button type="submit" class="btn btn-primary">تأكيد</button>
        </form>
      </div>
		</div>
	</div>
</div>     


   
  
  </body>
  
  </html>