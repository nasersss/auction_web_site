<!DOCTYPE html>
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
  
  </html>