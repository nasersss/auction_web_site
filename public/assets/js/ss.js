


// var getAllImages = document.getElementById('btn');
// var inp = document.getElementById('inp');
// var con = document.getElementById('con');
// const img =document.getElementById('aaa');



//     getAllImages.addEventListener('click', function() {
//         con.style.display = "none";
//         inp.value =  img.innerText
        
// })
let btns = document.querySelectorAll(".box");
var inp = document.getElementById('inp');
const img =document.getElementById('aaa');
btns.forEach(box => {

   box.addEventListener('click', (event)=> {
    box.style.display = "none";
    inp.value =  img.innerText
        
   });

});


       
     
