const target = document.querySelectorAll('[data-anime]')

function animeScroll(){
    const windowTop = window.pageYOffset
    target.forEach(function(element){
        if((windowTop) > element.offsetTop - (window.innerHeight * 0.75)){
            element.classList.add('animate')
        }else{
            element.classList.remove('animate')
        }
    })
}
animeScroll()

if(target.length){
window.addEventListener('scroll', function(){
    animeScroll()
})
}


const skills = document.querySelectorAll('#skills')
const certificacoes = document.querySelectorAll('#certificacoes')
function animeBackground(){
    const windowTop = window.pageYOffset
    skills.forEach(function(element){
        if((windowTop) > element.offsetTop - (window.innerHeight * 0.75)){
            element.style.background = "black"
            document.querySelector("#skills h2").style.color = "white";
        }else{
            element.style.background = "white"
            document.querySelector("#skills h2").style.color = "black";
        }
    })
    certificacoes.forEach(function(element){
        if((windowTop) > element.offsetTop - (window.innerHeight * 0.75)){
            element.style.background = "black"
            document.querySelector("#certificacoes h2").style.color = "white";
            document.querySelector("#certificacoes p").style.color = "white";
        }else{
            element.style.background = "white"
            document.querySelector("#certificacoes h2").style.color = "black";
            document.querySelector("#certificacoes p").style.color = "black";
        }
    })
}
    window.addEventListener('scroll', function(){
        animeBackground()
    })