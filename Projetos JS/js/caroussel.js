let function_arrays = [foto1,foto2,foto3]
let btn_next = document.getElementById('btn_next')
let btn_previous = document.getElementById('btn_previous')
let img = document.getElementById('foto2')
let position = 0

btn_next.addEventListener('click' , function(){
    img.style.opacity = 0
    setTimeout(() => {
        position++
        if(position >= function_arrays.length){
            position = 0
        }
        function_arrays[position]()
        img.style.opacity = 1 
    }, 500)
})

btn_previous.addEventListener('click',function(){
    img.style.opacity = 0
    setTimeout(() => {
        position--
        if(position < 0){
            position = function_arrays.length - 1
        }
        function_arrays[position]()
        img.style.opacity = 1
    }, 500);
})

function foto1() {
    img.src = 'img/cidade-leiria.jpg'
}

function foto2() {
    img.src = 'img/Leiria_(25746536508)_(cropped).jpg'
}

function foto3() {
    img.src = 'img/Visitar-Leiria-Roteiro3.jpg'
}