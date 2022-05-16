
const states = document.getElementById('state');
const city = document.getElementById('city');
states.addEventListener('change', function () {
    city.value = 'أختر مدينة';
    var citys = document.getElementsByClassName('citys');
    for (let index = 0; index < citys.length; index++) {
        citys[index].style.display = 'none';
    }
    citys = document.getElementsByClassName('state-' + states.value);
    for (let index = 0; index < citys.length; index++) {
        citys[index].style.display = 'block';
    }
})
