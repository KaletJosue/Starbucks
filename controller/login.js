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