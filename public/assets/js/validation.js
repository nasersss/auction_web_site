let text = document.querySelector("[name='name']")
let state = document.querySelector("[name='state_id']")
let phone = document.querySelector("[name='phone']")
let address = document.querySelector("[name='address']")

// The validation variable will be used for validation all forms in project
const validation = document.getElementsByClassName("validation")
const validate_profile = document.getElementsByClassName("validate_profile")



/**\
 * this function used to validate vehicle if the input value true store data in database else return error message
 */
for (let index = 0; index < validation.length; index++) {
    validation[index].addEventListener('submit', function(e) {


        if (text.value == "") {
            e.preventDefault();
            document.getElementById("msg").style.display = "block"
            document.getElementById("err-msg").innerHTML = "يجب الا يكون الحقل المدخل فارغ"

        } else if (text.value.length <= 1) {
            e.preventDefault();
            document.getElementById("msg").style.display = "block"
            document.getElementById("err-msg").innerHTML = "يجب الا يكون الحقل المدخل لايحتوي على عصر واحد مدخل"
        }
        if (state.value == "") {
            e.preventDefault();
            document.getElementById("msg").style.display = "block"
            document.getElementById("err-msg").innerHTML = "يجب الا يكون الحقل المدخل فارغ"

        }



    })
}


// for (let index = 0; index < validate_profile.length; index++) {
//     validate_profile[index].addEventListener('submit', function(e) {


//         if (phone_validate.length <= 4) {
//             e.preventDefault();
//             document.getElementById("msg").style.display = "block"
//             document.getElementById("err-msg").innerHTML = "يجب ان يكون الرقم المدخل اكبر او يساوي 4 ارقام وما اكثر "
//         }
//         if (phone_validate == "") {
//             e.preventDefault();
//             document.getElementById("msg").style.display = "block"
//             document.getElementById("err-msg").innerHTML = "يجب الا يكون الحقل المدخل فارغ"

//         }
//         if (phone_validate.length >= 15) {
//             e.preventDefault();
//             document.getElementById("msg").style.display = "block"
//             document.getElementById("err-msg").innerHTML = "يجب ان يكون الرقم المدخل اقل من   16    "
//         }
//         if (address_validate == "") {
//             e.preventDefault();
//             document.getElementById("msg").style.display = "block"
//             document.getElementById("err-msg").innerHTML = "يجب الا يكون الحقل المدخل فارغ"

//         }
//         if (!/^[0-9]+$/.test(phone_validate)) {
//             e.preventDefault()
//             document.getElementById("msg").style.display = "block"
//             document.getElementById("err-msg").innerHTML = "يجب ان يكون النص المدخل رقم"

//         }

//     })

// }








/**
 *  this function used to validate city  if the input value true store data in database else return error message
 * @param {*} e
 */
document.forms['profile'].onsubmit = function(e) {

    let text_validate = text.value;
    let phone_validate = phone.value;
    let address_validate = address.value;

    if (text_validate == "") {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب الا يكون الحقل المدخل فارغ"

    }
    if (text_validate.length <= 1) {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب الا يكون الحقل المدخل لايحتوي على عصر واحد مدخل"

    }
    if (phone_validate.length <= 4) {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب ان يكون الرقم المدخل اكبر او يساوي 4 ارقام وما اكثر "
    }
    if (phone_validate == "") {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب الا يكون الحقل المدخل فارغ"

    }
    if (phone_validate.length >= 15) {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب ان يكون الرقم المدخل اقل من   16    "
    }

    if (!/^[0-9]+$/.test(phone_validate)) {
        e.preventDefault()
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب ان يكون النص المدخل رقم"

    }
    if (address_validate == "") {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب الا يكون الحقل المدخل فارغ"

    }


}