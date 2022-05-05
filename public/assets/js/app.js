let search=document.getElementById('search')
let closeSearch=document.getElementById('close')
let showSearch=document.getElementById('header')
let list_user=document.getElementById('list-user')
search.addEventListener('click',(e)=>{
e.preventDefault();
showSearch.style.display='block';
})
closeSearch.addEventListener('click',(e)=>{
    e.preventDefault();
    showSearch.style.display='none';
})

var prev = document.getElementsByClassName("prev");
var next = document.getElementsByClassName("next");
var categoryContainer = document.getElementsByClassName("category-container");
var category = document.getElementsByClassName("category")[20];
var x = 0;
for (let i = 0; i < prev.length; i++) {
    next[i].addEventListener('click', () => {
        x -= 22;

        if (x < 0) {
            x = 0;
        }
        categoryContainer[i].scrollLeft += 296;
    })
    prev[i].addEventListener('click', () => {
        x += 22;
        if (x > 76) {
            x = 76;
        }

        if (i == 0) {
            if (x > 29.2) {
                x = 29.2;
            }
        }
        categoryContainer[i].scrollLeft -= 296;
    })
}

function userSelection(){
    list_user.classList.toggle('visible')
}

let header_li=document.querySelectorAll('.main-nav li')
header_li.forEach((li)=>{
    li.addEventListener('click',removeActive)
})

function removeActive(){
   header_li.forEach((e)=>{
       e.classList.remove('active')
     this.classList.add('active')
   })
}
// let img_slider=document.querySelectorAll('.image-slider-container .image')
// img_slider.forEach((img)=>{
//     img.addEventListener('click',addActive);
// })
// function addActive(){

//     img_slider.forEach((e)=>{
//         e.classList.remove("img_active")
//         this.classList.add("img_active")
//     })

// }

// $(document).ready(function(){
//     $(".image img").click(function(e){
//         e.preventDefault()
//         $(".main-image img").attr("src",$(this).attr('src'));
//     })
// })

// let btn_right=document.getElementById("btn-right")
// let btn_left=document.getElementById("btn-left")
// btn_left.addEventListener("click",function(){
//     document.getElementById("slider").scrollRight-=180
//     })
// btn_right.addEventListener("click",function(){
// document.getElementById("slider").scrollLeft+=180
// })
let img_slider = document.querySelectorAll('.image img')

let activeImages = document.getElementsByClassName('img_active')

for (var i=0; i < img_slider.length; i++){

    img_slider[i].addEventListener("mouseover", function(){

        if (activeImages.length > 0){
            activeImages[0].classList.remove('img_active')
        }


        this.classList.add('img_active')
        document.getElementById('show-image').src = this.src
    })
}


let buttonRight = document.getElementById('btn-right');
let buttonLeft = document.getElementById('btn-left');

buttonLeft.addEventListener('click', function(){
    document.getElementById('slider').scrollLeft -= 180
})

buttonRight.addEventListener('click', function(){
    document.getElementById('slider').scrollLeft += 180

})

