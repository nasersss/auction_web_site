let img_slider = document.querySelectorAll('.image img')

let activeImages = document.getElementsByClassName('img_active')

for (var i = 0; i < img_slider.length; i++) {

    img_slider[i].addEventListener("mouseover", function() {

        if (activeImages.length > 0) {
            activeImages[0].classList.remove('img_active')
        }


        this.classList.add('img_active')
        document.getElementById('show-image').src = this.src
    })
}
let buttonRight = document.getElementById('btn-right');
let buttonLeft = document.getElementById('btn-left');

buttonLeft.addEventListener('click', function() {
    document.getElementById('slider').scrollLeft -= 180
})

buttonRight.addEventListener('click', function() {
    document.getElementById('slider').scrollLeft += 180

})
