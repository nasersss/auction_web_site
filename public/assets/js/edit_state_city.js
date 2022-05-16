
const states = document.getElementById('editState');
const city = document.getElementById('editCity');
states.addEventListener('change', function () {
    city.value = 'أختر مدينة';
    var citys = document.getElementsByClassName('edit_citys');
    for (let index = 0; index < citys.length; index++) {
        citys[index].style.display = 'none';
    }
    citys = document.getElementsByClassName('edit_state-' + states.value);
    for (let index = 0; index < citys.length; index++) {
        citys[index].style.display = 'block';
    }
})
