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

window.addEventListener('scroll', function () {
    var card1 = document.querySelector('#first_card')
    var card2 = document.querySelector('#second_card')
    var card3 = document.querySelector('#third_card')
    var card4 = document.querySelector('#fourth_card')

    var panini = document.querySelector('.panini')

    let posicionObj1 = card1.getBoundingClientRect().top
    let posicionObj2 = card2.getBoundingClientRect().top
    let posicionObj3 = card3.getBoundingClientRect().top
    let posicionObj4 = card4.getBoundingClientRect().top
    let posicionObj5 = panini.getBoundingClientRect().top

    let tamanoPantalla = window.innerHeight / 3.5

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

    if ((posicionObj5 - 400) < tamanoPantalla) {
        panini.classList.add('active')
    }
})

// Buttons

var login = document.querySelector('#login')


login.addEventListener('click', () => {
    location.href = "views/login.php"
})

// imgs

var move_right = document.querySelector('#move_right')
var move_left = document.querySelector('#move_left')
var number_move = document.querySelector('.number_move')
var variable = 1

var late = document.querySelector('.late')
var span = document.querySelector('.h1span')

var addcar = document.querySelector('#addcar')
var circle = document.querySelector('.circle')
var circle_vacio = document.querySelector('.circle_vacio')

addcar.addEventListener('click', () => {
    location.href = "../Starbucks/views/login.php"
})

move_right.addEventListener('click', () => {
    if (variable == 5) {
        variable = 1;
    } else {
        variable += 1;
    }

    var imgactive = 'img' + variable;
    var imgdesactive = 'img' + (variable === 1 ? 5 : variable - 1);

    var activeImg = document.querySelector(`.${imgactive}`);
    var desactiveImg = document.querySelector(`.${imgdesactive}`);

    if (desactiveImg) {
        desactiveImg.classList.add('out');
        desactiveImg.classList.remove('active');
    }

    if (activeImg) {
        activeImg.classList.add('active');
        activeImg.classList.remove('out');
    }

    number_move.textContent = variable;

    if (imgactive == 'img1') {
        late.style.background = "#a07c2e"
        span.style.color = '#432200'
        activeImg.style.filter = "drop-shadow(1rem 1px 1rem #432200)"
        circle.style.background = "#68501d47"
        circle_vacio.style.background = "#68501d47"
        circle_vacio.classList.remove('gray')
        circle_vacio.classList.remove('amarillo')
        circle_vacio.classList.remove('rosado')
        circle_vacio.classList.remove('verde')
    } else if (imgactive == 'img2') {
        late.style.background = "gray"
        span.style.color = '#404040'
        activeImg.style.filter = "drop-shadow(1rem 1px 1rem #404040)"
        circle.style.background = "#47474782"
        circle_vacio.style.background = "#47474782"
        circle_vacio.classList.add('gray')
        circle_vacio.classList.remove('amarillo')
        circle_vacio.classList.remove('rosado')
        circle_vacio.classList.remove('verde')
    } else if (imgactive == 'img3') {
        late.style.background = "#cdaa58"
        span.style.color = '#5c220d'
        activeImg.style.filter = "drop-shadow(1rem 1px 1rem #5c220d)"
        circle.style.background = "#68501d47"
        circle_vacio.style.background = "#68501d47"
        circle_vacio.classList.remove('gray')
        circle_vacio.classList.add('amarillo')
        circle_vacio.classList.remove('rosado')
        circle_vacio.classList.remove('verde')
    } else if (imgactive == 'img4') {
        late.style.background = "#e37974"
        span.style.color = '#5c220d'
        activeImg.style.filter = "drop-shadow(1rem 1px 1rem #8f3935)"
        circle.style.background = "#a7443e78"
        circle_vacio.style.background = "#a7443e78"
        circle_vacio.classList.remove('gray')
        circle_vacio.classList.remove('amarillo')
        circle_vacio.classList.add('rosado')
        circle_vacio.classList.remove('verde')
    } else if (imgactive == 'img5') {
        late.style.background = "#a6ad5a"
        span.style.color = '#51542d'
        activeImg.style.filter = "drop-shadow(1rem 1px 1rem #70753b)"
        circle.style.background = "#71763f92"
        circle_vacio.style.background = "#71763f92"
        circle_vacio.classList.remove('gray')
        circle_vacio.classList.remove('amarillo')
        circle_vacio.classList.remove('rosado')
        circle_vacio.classList.add('verde')
    }
});

move_left.addEventListener('click', () => {
    if (variable === 1) {
        variable = 5;
    } else {
        variable -= 1;
    }

    var imgactive = 'img' + variable;
    var imgdesactive = 'img' + (variable + 1);

    if (variable == 5) {
        imgdesactive = 'img' + 1
    }

    var activeImg = document.querySelector(`.${imgactive}`);
    var desactiveImg = document.querySelector(`.${imgdesactive}`);

    if (desactiveImg) {
        desactiveImg.classList.add('out');
        desactiveImg.classList.remove('active');
    }

    if (activeImg) {
        activeImg.classList.add('active');
        activeImg.classList.remove('out');
    }

    number_move.textContent = variable;

    if (imgactive == 'img1') {
        late.style.background = "#a07c2e"
        span.style.color = '#432200'
        activeImg.style.filter = "drop-shadow(1rem 1px 1rem #432200)"
        circle.style.background = "#68501d47"
        circle_vacio.style.background = "#68501d47"
        circle_vacio.classList.remove('gray')
        circle_vacio.classList.remove('amarillo')
        circle_vacio.classList.remove('rosado')
        circle_vacio.classList.remove('verde')
    } else if (imgactive == 'img2') {
        late.style.background = "gray"
        span.style.color = '#404040'
        activeImg.style.filter = "drop-shadow(1rem 1px 1rem #404040)"
        circle.style.background = "#47474782"
        circle_vacio.style.background = "#47474782"
        circle_vacio.classList.add('gray')
        circle_vacio.classList.remove('amarillo')
        circle_vacio.classList.remove('rosado')
        circle_vacio.classList.remove('verde')
    } else if (imgactive == 'img3') {
        late.style.background = "#cdaa58"
        span.style.color = '#5c220d'
        activeImg.style.filter = "drop-shadow(1rem 1px 1rem #5c220d)"
        circle.style.background = "#68501d47"
        circle_vacio.style.background = "#68501d47"
        circle_vacio.classList.remove('gray')
        circle_vacio.classList.add('amarillo')
        circle_vacio.classList.remove('rosado')
        circle_vacio.classList.remove('verde')
    } else if (imgactive == 'img4') {
        late.style.background = "#d1534d"
        span.style.color = '#5c220d'
        activeImg.style.filter = "drop-shadow(1rem 1px 1rem #8f3935)"
        circle.style.background = "#a7443e78"
        circle_vacio.style.background = "#a7443e78"
        circle_vacio.classList.remove('gray')
        circle_vacio.classList.remove('amarillo')
        circle_vacio.classList.add('rosado')
        circle_vacio.classList.remove('verde')
    } else if (imgactive == 'img5') {
        late.style.background = "#a6ad5a"
        span.style.color = '#51542d'
        activeImg.style.filter = "drop-shadow(1rem 1px 1rem #70753b)"
        circle.style.background = "#71763f92"
        circle_vacio.style.background = "#71763f92"
        circle_vacio.classList.remove('gray')
        circle_vacio.classList.remove('amarillo')
        circle_vacio.classList.remove('rosado')
        circle_vacio.classList.add('verde')
    }
});