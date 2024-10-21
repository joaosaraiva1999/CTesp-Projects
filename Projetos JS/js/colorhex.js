var colors = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9,
    'A', 'B', 'C', 'D', 'E', 'F']
let btn2 = document.getElementById('btn2')
let text = document.getElementById('text_color')

btn2.addEventListener('click', function () {
    let hexColor = "#";
    for (let i = 0; i < 6; i++) {
        hexColor += colors[getrandomNumber()]
    }
    text.textContent = hexColor
    document.body.style.backgroundColor = hexColor
})


function getrandomNumber(){
    return Math.floor(Math.random() * colors.length)
}