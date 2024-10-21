const open_btn = document.getElementById('open')
const faq = document.querySelector('.faq-container')

open_btn.addEventListener('click', function(){
    faq.classList.toggle('faq-toggle')
})