/*let btn = document.getElementById('btn1')
let btn2 = document.getElementById('btn2')
let btn3 = document.getElementById('btn3')
let num = document.querySelector('.num')

function color(){
    if(num.textContent >= 1){
        num.style.color = 'green'
    }else if (num.textContent < 0){
        num.style.color = 'red'
    }else if(num.textContent == 0){
        num.style.color = 'black'
    }
}

btn.addEventListener('click',function(){
    num.textContent++
    color()
})

btn2.addEventListener('click',function(){
    num.textContent--
    color()
})

btn3.addEventListener('click', function(){
    num.textContent = '0'
    color()
})*/

let count = 0 // count setado a 0
let value = document.querySelector('.num')
let btns = document.querySelectorAll('.btn')

btns.forEach(function (btn) {
    btn.addEventListener('click', function(e){
        let styles = e.currentTarget.classList;
        if(styles.contains('decrease')){
            count--
        }
        else if(styles.contains('increase')){
            count++
        }else if(styles.contains('reset')){
            count = 0
        }
        if(count > 0){
            value.style.color = 'green'
        }else if (count < 0){
            value.style.color = 'red'
        }else if(count == 0){
            value.style.color = 'black'
        }
        value.textContent = count
    })
})