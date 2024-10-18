// bars menu

document.querySelector(".bars__menu").addEventListener('click', animateBars)
menu = document.querySelector('.menu')

var line1__bars = document.querySelector('.line1__bars-menu')
var line2__bars = document.querySelector('.line2__bars-menu')
var line3__bars = document.querySelector('.line3__bars-menu')

function animateBars() {
    line1__bars.classList.toggle("activeline1__bars-menu")
    line2__bars.classList.toggle("activeline2__bars-menu")
    line3__bars.classList.toggle("activeline3__bars-menu")

    menu.classList.toggle('active')
}

// scroll

window.addEventListener('scroll', function() {
    var card1 = document.querySelector('#first_card')
    var card2 = document.querySelector('#second_card')
    var card3 = document.querySelector('#third_card')
    var card4 = document.querySelector('#fourth_card')

    let posicionObj1 = card1.getBoundingClientRect().top
    let posicionObj2 = card2.getBoundingClientRect().top
    let posicionObj3 = card3.getBoundingClientRect().top
    let posicionObj4 = card4.getBoundingClientRect().top

    let tamanoPantalla = window.innerHeight/3.5

    if ((posicionObj1 - 400) < tamanoPantalla) {
        card1.classList.add('active')
    }

    if ((posicionObj2 - 400) < tamanoPantalla) {
        card2.classList.add('active')
    }

    if ((posicionObj3 - 400) < tamanoPantalla) {
        card3.classList.add('active')
    }

    if ((posicionObj4 - 400) < tamanoPantalla) {
        card4.classList.add('active')
    }
})

// Buttons

var login = document.querySelector('#login')


login.addEventListener('click', () => {
    location.href = "/Starbucks/views/login.php"
})