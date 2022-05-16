let name = document.querySelector("[name='name']");
let model = document.querySelector("[name='model']");
let engine = document.querySelector("[name='engine_type']");
let odometer = document.querySelector("[name='odometer']");
let star_price = document.querySelector("[name='stare_price']");
let min_bidding = document.querySelector("[name='min_bid']");
let color = document.querySelector("[name='color']")
let category = document.querySelector("[name='category_id']")
let state = document.querySelector("[name='state']")


document.forms['auction'].onsubmit = function(e) {
    if (name.value == "") {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب الا يكون   اسم السيارة فارغ"
    } else if (name.value.length <= 2) {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب الا يكون   اسم السيارة اكتر من 2 احرف"
    }
    if (model.value == "") {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب الا يكون   اسم الموديل فارغ"

    } else if (!/^[0-9]+$/.test(model.value)) {
        e.preventDefault()
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب ان يكون النص المدخل رقم"

    } else if (model.value <= 4) {
        e.preventDefault()
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = " يجب الايزيد االرقم المدحل عن 4 اعداد   "

    }
    if (engine.value == "") {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب الا يكون نوع المحرك فارغ  "
    }

    if (odometer.value == "") {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب الا تكون  المسافات المقطوعه فارغة  "
    } else if (odometer.value < 0) {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = " يجب الا تكون قيمة المسافات المقطوعه اصغر من الصفر  "
    }
    if (star_price.value == "") {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب الا يكون السعر المبدئي فارغ  "
    } else if (star_price.value <= 0) {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = " يجب الا تكون قيمة السعر المبدئي صفر او قيمة سالبة المقطوعه اصغر من الصفر  "
    } else if (!/^[0-9]+$/.test(star_price.value)) {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "    يجب ان يكون النص المدخل رقم "

    }
    if (min_bidding.value == "") {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب الا يكون السعر الادنى للمزاد فارغ  "
    } else if (star_price.value <= 0) {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب الا تكون قيمة السعر الادنى للمزاد صفر او قيمة سالبة  "
    } else if (!/^[0-9]+$/.test(star_price.value)) {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "    يجب ان يكون النص المدخل رقم "

    }
    if (color.value == "") {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب الا يكون  اللون  فارغ  "
    }
    if (category.value == "") {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب الا يكون  نوع السيارة  فارغ  "
    }
    if (state.value == "") {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب الا يكون  نوع المستخدم  فارغ  "
    }


}