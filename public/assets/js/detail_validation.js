let amount =document.getElementById('input-amount'); 
//let amount = document.querySelector("[name='amount']")
document.forms["amountForm"].onsubmit == function(e) {
    let num_amount = amount.value;

    if (num_amount == "") {
        e.preventDefault()
        document.getElementById("msg").style.display = "block"
        document.getElementById("validate-msg").innerHTML = "يرجئ ملئ الحقل للاشتراك في المزاد"

    }
    if (num_amount < 0) {
        e.preventDefault()
        document.getElementById("msg").style.display = "block"
        document.getElementById("validate-msg").innerHTML = "يجب الا يكون الرقم المدخل رقم سالب"

    }
    if (!/^[0-9]+$/.test(num_amount)) {
        e.preventDefault()
        document.getElementById("msg").style.display = "block"
        document.getElementById("validate-msg").innerHTML = "يجب ان يكون النص المدخل رقم"

    } else
        document.getElementById("myModel").style.display = "block"
    ok_btn.addEventListener(("click"), () => {

        submit = true
        document.getElementById("myModel").style.display = "none";

    })
    console_btn.addEventListener(("click"), () => {
        e.preventDefault()
        document.getElementById("myModel").style.display = "none";

    })

}
