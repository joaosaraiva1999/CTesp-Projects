// classList - Mostra/Recebe todas as Classes
// contains - ve se uma classlist contem alguma outra class
// add - add uma class
// remove - remove uma class
//toggle - toggle class

const navToggle = document.querySelector('.nav-toggle')
const links = document.querySelector('.links')

navToggle.addEventListener('click', function(){
     /*if(links.classList.contains('show-links')){
        links.classList.remove('show-links')
    }
    else{
        links.classList.add('show-links')
    }*/
   links.classList.toggle('show-links')
})