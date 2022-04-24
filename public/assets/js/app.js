let search=document.getElementById('search')
let closeSearch=document.getElementById('close')
let showSearch=document.getElementById('header')
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

