var colors2 = ['green' , 'red' , 'rgba(133,122,200)' , '#f15025']
let btn = document.getElementById('btn')
let text2 = document.getElementById('text_color')

btn.addEventListener('click', function(){
    let randomNumber = getrandomNumber();
    text2.textContent = colors2[randomNumber]
    document.body.style.backgroundColor = colors2[randomNumber]
})


function getrandomNumber(){
    return Math.floor(Math.random()*colors2.length)
}