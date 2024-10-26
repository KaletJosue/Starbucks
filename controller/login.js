var btnCuenta = document.querySelector('.btnCuenta')
var btnCuenta2 = document.querySelector('.btnCuenta2')
var formRegister = document.querySelector('.register')
var formLogin = document.querySelector('.login')

var btnRegisterCir = document.querySelector('.btnRegisterCir')
var btnIniciarCir = document.querySelector('.btnIniciarCir')
var text1 = document.querySelector('.text1')
var text2 = document.querySelector('.text2')
var span1 = document.querySelector('.span1')
var img1 = document.querySelector('.img1')
var img2 = document.querySelector('.img2')

var title = document.querySelector('.title')

btnRegisterCir.addEventListener('click', () => {
    formRegister.classList.add('active')
    formLogin.classList.add('active')
    text1.classList.add('active')
    text2.classList.add('active')
    span1.classList.add('active')
    img1.classList.add('active')
    img2.classList.add('active')

    title.textContent = "Registro | Starbucks"
})

btnIniciarCir.addEventListener('click', () => {
    formRegister.classList.remove('active')
    formLogin.classList.remove('active')
    text1.classList.remove('active')
    text2.classList.remove('active')
    span1.classList.remove('active')
    img1.classList.remove('active')
    img2.classList.remove('active')

    title.textContent = "Inicia Sesion | Starbucks"
})

btnCuenta.addEventListener('click', () => {
    formRegister.classList.add('active')
    formLogin.classList.add('active')
    text1.classList.add('active')
    text2.classList.add('active')
    span1.classList.add('active')
    img1.classList.add('active')
    img2.classList.add('active')

    title.textContent = "Registro | Starbucks"
})

btnCuenta2.addEventListener('click', () => {
    formRegister.classList.remove('active')
    formLogin.classList.remove('active')
    text1.classList.remove('active')
    text2.classList.remove('active')
    span1.classList.remove('active')
    img1.classList.remove('active')
    img2.classList.remove('active')

    title.textContent = "Inicia Sesion | Starbucks"
})

const closeBtn = document.querySelector('.closeIcon')
const tryAgain = document.getElementById('okBtn')
const modal = document.querySelector('.modal')

const closeBtn2 = document.querySelector('.closeIcon2')
const tryAgain2 = document.getElementById('okBtn2')
const modal2 = document.querySelector('.modal2')

const closeBtn3 = document.querySelector('.closeIcon3')
const tryAgain3 = document.getElementById('okBtn3')
const modal3 = document.querySelector('.modal3')
const text3 = document.querySelector('.text3')

closeBtn.addEventListener('click', () => {
    modal.classList.remove('active')
})
tryAgain.addEventListener('click', () => {
    modal.classList.remove('active')
})
window.addEventListener('click', event => {
    if (event.target == modal) {
        modal.classList.remove('active')
    }
})

closeBtn2.addEventListener('click', () => {
    modal2.classList.remove('active')
})
tryAgain2.addEventListener('click', () => {
    modal2.classList.remove('active')
})
window.addEventListener('click', event => {
    if (event.target == modal2) {
        modal2.classList.remove('active')
    }
})

closeBtn3.addEventListener('click', () => {
    modal3.classList.remove('active')
})
tryAgain3.addEventListener('click', () => {
    modal3.classList.remove('active')
})
window.addEventListener('click', event => {
    if (event.target == modal3) {
        modal3.classList.remove('active')
    }
})

// eye

var eye = document.querySelector('#contraRegis')
var input = document.querySelector('#txtClaveRegis')

var eyeLog = document.querySelector('#contraLog')
var inputLog = document.querySelector('#txtClave')

eye.addEventListener('click', () => {
    if (input.type === 'password') {
        input.type = 'text';
    } else {
        input.type = 'password';
    }

    eye.classList.toggle('active')
})

eyeLog.addEventListener('click', () => {
    if (inputLog.type === 'password') {
        inputLog.type = 'text';
    } else {
        inputLog.type = 'password';
    }

    eyeLog.classList.toggle('active')
})