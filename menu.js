const list = document.querySelectorAll('nav a')
    function activeLink(){
        list.forEach((item) =>
        item.classList.remove('active'))
        this.classList.add('active')
    }
        list.forEach((item) =>
        item.addEventListener('click', activeLink))

    

let menuIcon = document.querySelector(".menuIcon")
let nav = document.querySelector(".nav")
let menu = document.querySelector(".menu")

function abrirMenu(event){
    if(event.type === "touchstart") event.preventDefault()
    event.stopPropagation()
    menu.classList.toggle("activeMenu")
    handleClickOutside(menu, () => {
        nav.classList.remove("activeMenu")
    })
}

menuIcon.addEventListener("click", abrirMenu)
menuIcon.addEventListener("touchstart", abrirMenu)