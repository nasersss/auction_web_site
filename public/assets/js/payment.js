let payment_item=document.querySelectorAll(".payment-item input")
payment_item.forEach((input)=>{
    input.addEventListener("click",function(){
        if(input.value =="VisaSystem"){
            if( document.getElementById("paypal").style.display=="block" || document.getElementById("master").style.display=="block" ){
                document.getElementById("paypal").style.display="none"
                document.getElementById("master").style.display="none"
            }
document.getElementById("visa").style.display="block"

        }
        else if(input.value =="PaypalSystem"){
            if( document.getElementById("visa").style.display=="block" || document.getElementById("master").style.display=="block" ){
                document.getElementById("visa").style.display="none"
                document.getElementById("master").style.display="none"
            }
            document.getElementById("paypal").style.display="block"

                    }
        else if(input.value =="MasterCardSystem"){
            if( document.getElementById("paypal").style.display=="block" || document.getElementById("visa").style.display=="block" ){
                document.getElementById("paypal").style.display="none"
                document.getElementById("visa").style.display="none"
            }
                        document.getElementById("master").style.display="block"
                                }
    })
})
