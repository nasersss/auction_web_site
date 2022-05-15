let vehicle = document.querySelector("[name='name']")
let state = document.querySelector("[name='name']")

/**
 * this function used to validate vehicle if the input value true store data in database else return error message
 */

// document.forms["vehicle_types"].onsubmit = function(e) {
//     let vehicle_validate = vehicle.value;
//     if (vehicle_validate == "") {
//         e.preventDefault();
//         document.getElementById("msg").style.display = "block"
//         document.getElementById("err-msg").innerHTML = "يجب الا يكون الحقل المدخل فارغ"

//     }
//     // if (!/^[a-zA-Z]*$/g.test(vehicle_validate)) {
//     //     e.preventDefault();
//     //     document.getElementById("msg").style.display = "block"
//     //     document.getElementById("err-msg").innerHTML = "يجب ان يكون الحقل المدخل نص"
//     // }


// }



/**
 *  this function used to validate state  if the input value true store data in database else return error message

 */
document.forms["state"].onsubmit = function(e) {
    let state_validate = state.value;
    if (state_validate == "") {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب الا يكون الحقل المدخل فارغ"

    }
    if (state_validate.length <= 1) {
        e.preventDefault();
        document.getElementById("msg").style.display = "block"
        document.getElementById("err-msg").innerHTML = "يجب الا يكون الحقل المدخل لايحتوي على عصر واحد مدخل"

    }
    // if (!/^[a-zA-Z]*$/g.test(state_validate)) {
    //     e.preventDefault();
    //     document.getElementById("msg").style.display = "block"
    //     document.getElementById("err-msg").innerHTML = "يجب ان يكون الحقل المدخل نص"
    // }


}