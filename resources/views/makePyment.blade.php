<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تأكيد عملية الدفع </title>
</head>
<body>
    الرجاء شحن محفظتك ب 20 % من سعر السيارة الاساسي وفقا لسياية الموقع <br> 
    سيتم توجيهك لبوابة الدفع الالكترونية هل انت موافق على اتمام العملية 
    <form action="{{route('doPaymetn')}}" method="post">
        @csrf
        <input type="q" name="auctionId" value="{{$auctionInfo->id}}">
        <button type="submit">اتمام العملية </button>
    </form>

</body>
</html>