let nav = document.querySelector('nav')
let trigger = document.querySelector('#trigger')
let close = document.querySelector('#close')

function openNav() {
    setTimeout(()=>{close.style.display='block'},1000)
     nav.style.left = "0"
     trigger.style.left = "-5vh"
}

function closeNav() {
    close.style.display='none'
    nav.style.left = "-22vw"
    trigger.style.left = "0"
}

trigger.addEventListener('click', openNav);
close.addEventListener('click', closeNav)