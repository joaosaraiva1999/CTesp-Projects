/*const function_arrays = [joana,manel,leandro]
const btn_next = document.getElementById('btn1')
const btn_random = document.getElementById('btn2')
const btn_previous = document.getElementById('btn3')
const imagem = document.getElementById('foto2')
const nome = document.getElementById('section_h1')
let index = 0

btn_next.addEventListener('click', function(){
    index++
    if(index >= function_arrays.length){
        index = 0
    }
    function_arrays[index]()
})

btn_previous.addEventListener('click', function() {
    index--
    if(index < 0){
        index = function_arrays.length - 1
    }
    function_arrays[index]()
});

btn_random.addEventListener('click',function (){
   let random = Math.floor(Math.random()*function_arrays.length)
   function_arrays[random]()
})

function joana(){
    imagem.src = "img/images (1).jpeg"
    nome.textContent = 'Joana Abreu'
}

function manel(){
    imagem.src = 'img/retrato-de-homem-feliz-e-sorridente_23-2149022620.avif'
    nome.textContent = 'Manel Augusto'
}

function leandro(){
    imagem.src = 'img/90946814-homem-segurando-cachorro.webp'
    nome.textContent = 'Leandro Rocha'
}
*/



// Data das Reviews
const reviews = [
{
    name:'Joana Abreu',
    img: 'img/images (1).jpeg'
},
{
    name:'Manel Augusto',
    img: 'img/retrato-de-homem-feliz-e-sorridente_23-2149022620.avif'
},
{
    name:'Leandro Rocha',
    img:'img/90946814-homem-segurando-cachorro.webp'
}, 
]

// Variaveis das img e nomes
const img = document.getElementById('foto2')
const nome = document.getElementById('section_h1')


//Variaveis dos Butões
const btn_next = document.getElementById('btn1')
const btn_random = document.getElementById('btn2')
const btn_previous = document.getElementById('btn3')

//Starting Item
let currentItem = 0

//Load no 1º Review
window.addEventListener('DOMContentLoaded', function(){
    showPerson(currentItem)
})


// Mostrar pessoa baseada no ITEM

function showPerson(pessoa){
    const item = reviews[pessoa]
    img.src = item.img
    nome.textContent = item.name
}


// Next Person

btn_next.addEventListener('click', function (){
   currentItem++
   if(currentItem >= reviews.length){
    currentItem = 0
   }
   showPerson(currentItem)
})

// Previous Person

btn_previous.addEventListener('click', function (){
    currentItem--
    if(currentItem < 0){
     currentItem = reviews.length - 1
    }
    showPerson(currentItem)
 })


 //Random Person

 btn_random.addEventListener('click', function (){
    currentItem = Math.floor(Math.random()*reviews.length)
    showPerson(currentItem)
 })