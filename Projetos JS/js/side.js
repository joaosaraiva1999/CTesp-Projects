const sidebar = document.querySelector('.sidebar-toggle');
const links = document.querySelector('.sidebar');
const closebtn = document.querySelector('.close-btn')


sidebar.addEventListener('click',function(){
    links.classList.toggle('show-sidebar')
})


closebtn.addEventListener('click',function(){
    links.classList.remove('show-sidebar')
})