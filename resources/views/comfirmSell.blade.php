<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>تاكيد بيع السيارة </title>
</head>

<body>
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title w-100">مرحبا بك  : {{Auth::user()->name;}}شكرا لثقتك بنا ونحن سعداء بكم  </h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">  هل انت موافق على عملية بيع السيارة{{$auction->name}} بالمبلغ {{$auction->curren_price}} اذا كنت موافق اضغط على زر موافق أو تمديد  </p>
			</div>
			<div class="flex">
            <div>
              <form method="post" action="{{route('isActiveToSell')}}">
                @csrf
                <input type="hidden" value="{{Auth::user()->id}}" name="userid" >
                <input type="hidden" value="{{$auction->id;}}"  name="auctionId">
                <button type="submit" class="btn btn-success">تأكيد</button>
              </form>
            </div>
            <button class="btn btn-dark">تمديد</button>

            <form method="post" action="{{route('actionTimeExtended')}}">
              @csrf
              <input type="hidden" value="{{Auth::user()->id}}" name="userid" >
              <input type="hidden" value="{{$auction->id;}}"  name="auctionId">
              <input type="datetime-local" value="{{$auction->date_of_end_auction}}" name="date_of_end_auction" id="">
              <button type="submit" class="btn btn-primary">موافق</button>
            </form>
      </div>
		</div>
	</div>
</div>     


   
  
  </body>
  
  </html>