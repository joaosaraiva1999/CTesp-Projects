const modaltoggle = document.querySelector('.modal-btn')
const closemodal = document.querySelector('.close-btn')
const modal = document.querySelector('.modal-overlay')

modaltoggle.addEventListener('click', function(){
    modal.classList.add('open-modal')
})

closemodal.addEventListener('click', function(){
    modal.classList.remove('open-modal')
})