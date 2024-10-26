// logout

var logout = document.querySelector('#logout')

logout.addEventListener('click', () => {
    const closeBtn2 = document.querySelector('.closeIcon2')
    const cancel2 = document.getElementById('cancelBtn2')
    const modal2 = document.querySelector('.modal2')
    
    modal2.classList.add('active')
    closeBtn2.addEventListener('click', () => {
        modal2.classList.remove('active')
    })
    cancel2.addEventListener('click', () => {
        modal2.classList.remove('active')
    })
    window.addEventListener('click', event => {
        if (event.target == modal2) {
            modal2.classList.remove('active')
        }
    })
})

// sidebar.active

const btnmenu = document.querySelector('.menu-btn')
const sidebar = document.querySelector('.sidebar')

const btnsidebar = document.getElementById('btnsidebar')
const btnsidebar2 = document.getElementById('btnsidebar2')

btnsidebar.addEventListener('click', () => {
    sidebar.classList.toggle('response')
})

btnsidebar2.addEventListener('click', () => {
    sidebar.classList.toggle('response')
})

sidebar.classList.add('active')

btnmenu.addEventListener('click', () => {
    sidebar.classList.toggle('active')
})

// Dark Mode

const body = document.body
const checkbox = document.querySelector('.theme-switch__checkbox');
const palanca = document.querySelector('.theme-switch__checkbox')

var img = document.querySelector('.menu-btn')

palanca.addEventListener('click', () => {
    body.classList.toggle('dark-mode')

    if (body.className == "dark-mode") {
        img.src = '../assets/logoBlanco.png'
    } else {
        img.src = '../assets/logo.png'
    }
})
