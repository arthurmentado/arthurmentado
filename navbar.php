<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <title>Navbar</title>
</head>
<body>
    <header>
        <div>
            <a href="">
                <h1>&lt/Arthur Santana&gt</h1>
            </a>
        </div>
        <nav>
            <a href="#home" class="active">Home</a>
            <a href="#sobreMim">Sobre mim</a>
            <a href="#projetos">Projetos</a>
            <a href="#skills">Skills</a>
            <a href="#certificacoes">Certificações</a>
            <a href="#contato">Contato</a>
        </nav>
    </header>
<script>
    const list = document.querySelectorAll('nav a')
    function activeLink(){
        list.forEach((item) =>
        item.classList.remove('active'))
        this.classList.add('active')
    }
        list.forEach((item) =>
        item.addEventListener('click', activeLink))

//     const home = document.querySelector("#homeItem")
//     const sobremim = document.querySelector("#sobremimItem")
//     window.addEventListener('scroll', function(event){ 
//     if (window.scrollY > 600) {
//         sobremim.classList.add('active')
//         home.classList.remove('active')
//     }
// });

// let section = document.querySelectorAll('section')
// let navLinks = document.querySelectorAll('header nav a')

// window.onscroll = () =>{
//     section.forEach(sec =>{
//         let top = window.scrollY
//         let offset = sec.offsetTop
//         let height = sec.offsetHeight
//         let id = sec.getAttribute('id')

//         if(top >= offset && top < offset + height){
//             navLinks.forEach(links => {
//                 links.classList.remove('active')
//                 document.querySelector('header nav a[href*=' + id + ']').classListAdd
//                 ('active')
//             })
//         }
//     })
// }
</script>
</body>
</html>
<!-- loungelizard.com -->
<!-- strv.com -->
<!-- https://dvlpr.pro/#home -->