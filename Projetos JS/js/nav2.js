const nav = document.querySelector('.nav')
const links = document.querySelector('.links');
const toggle = document.querySelector('#toggle');

toggle.addEventListener('click', function () {
    nav.classList.toggle('nav-bar');
    links.classList.toggle('show'); // Adiciona ou remove a classe 'show' para exibir ou ocultar a lista
});