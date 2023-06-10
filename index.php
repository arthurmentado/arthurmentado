<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Arthur Santana</title>
</head>
<body>
    <?php include('navbar.php'); ?>
    <main>
        <div class="leftItens">
        <button onclick="darkMode()">darkMode</button>
		</label>
        </div>
        <section id="home">
            <div class="txtInicio">
                <h2>Me chamo <span></span></h2>
                <h1>Arthur Santana <span></span></h1>
                <h2>Desenvolvedor WEB | Full-Stack <span></span></h2>
                <div class="buttonCVDownload">
                    <button class="buttonCV">Download CV</button>
                </div>
            </div>
            <div class="imagem">
                <img src="imgs/computador.png" alt="Computador">
            </div>
            <a href="#sobreMim" class="seta">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
            </svg>            
            </a>
        </section>
            <section id="sobreMim">
                <div class="container">
                    <div class="photo" data-anime="left">
                        <img src="imgs/fotoArthur.jpg" alt="Foto de Arthur" id="foto">
                    </div>
                    <div class="sobreTxt" data-anime="right">
                        <h2>Sobre Mim</h2>
                        <p> Meu nome é Arthur Santana, apaixonado por criar soluções digitais e explorar o mundo da programação.
                            Embora ainda não tenha entrado no mercado de trabalho, tenho investido meu tempo em aprender e aprimorar minhas habilidades como desenvolvedor.
                        </p>
                        <p>
                            Tenho interesse em desenvolvimento front end e back end e amo criar soluções para a WEB.
                        </p>
                        <p>
                            Estou animado para embarcar nesta jornada como desenvolvedor e estou pronto para enfrentar novos desafios e aprimorar minhas habilidades constantemente.
                        </p>
                    </div>
                </div>
            </section>
        <section id="projetos">
            <div class="titulo">
                <h2>Projetos</h2>
            </div>
            <div class="projetos">
                <div class="projeto" data-anime="left">
                    <img src="imgs/embreve.jpg" alt="Projeto">
                    <div class="containerDescricao">
                        <h3>lorem</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos, laboriosam voluptates maiores error numquam itaque alias neque doloremque, exercitationem voluptatum dolor expedita vitae atque voluptate odio culpa sapiente, odit aperiam.</p>
                    </div>
                </div>
                <div class="projeto reverseProjeto" data-anime="right">
                    <div class="containerDescricao">
                        <h3>lorem</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos, laboriosam voluptates maiores error numquam itaque alias neque doloremque, exercitationem voluptatum dolor expedita vitae atque voluptate odio culpa sapiente, odit aperiam.</p>
                    </div>
                    <img src="imgs/embreve.jpg" alt="Projeto">
                </div>
            </div>
        </section>
        <section id="skills">
            <div class="titulo">
                <h2>Skills</h2>
            </div>
            <div class="logos">
                <div class="logos-slide">
                    <img src="imgs/logoHTML.png" alt="Logo HTML">
                    <img src="imgs/logoCSS.png" alt="Logo CSS">
                    <img src="imgs/logoJS.png" alt="Logo JavaScript">
                    <img src="imgs/logoPHP.png" alt="Logo PHP">
                    <img src="imgs/logoSQL.png" alt="Logo SQL">
                    <img src="imgs/logoBootstrap.png" alt="Logo Bootstrap">
                    <img src="imgs/logoSASS.png" alt="Logo SASS">
                    <img src="imgs/logoGit.png" alt="Logo Git">
                    <img src="imgs/logoGithub.png" alt="Logo GitHub">
                    <img src="imgs/logoFigma.png" alt="Logo Figma">
                </div>
                <div class="logos-slide">
                    <img src="imgs/logoHTML.png" alt="Logo HTML">
                    <img src="imgs/logoCSS.png" alt="Logo CSS" id="css">
                    <img src="imgs/logoJS.png" alt="Logo JavaScript">
                    <img src="imgs/logoPHP.png" alt="Logo PHP">
                    <img src="imgs/logoSQL.png" alt="Logo SQL">
                    <img src="imgs/logoBootstrap.png" alt="Logo Bootstrap">
                    <img src="imgs/logoSASS.png" alt="Logo SASS">
                    <img src="imgs/logoGit.png" alt="Logo Git">
                    <img src="imgs/logoGithub.png" alt="Logo GitHub">
                    <img src="imgs/logoFigma.png" alt="Logo Figma">
                </div>
            </div>
            <div class="container-txt-logos">
            <p id="txt-logos"></p>
            </div>
        </section>
        <section id="certificacoes">
            <div class="titulo">
                <h2>Certificações</h2>
                <p>Ensino técnico em Desenvolvimento de Sistemas - ETEC <br>
                (Início: Fevereiro/2022 - Término: Junho/2023)</p>


            </div>
        </section>
        <section id="contato">
            <h2 class="titulo">Contato</h2>
            <div class="containerContato">
                <form action="https://formsubmit.co/arthursantanatec@gmail.com" method="POST" data-anime="left">
                        <label for="nome">Nome</label>
                        <input type="text" class="textoContato" name="nome" id="nome" placeholder="Como gostaria de ser chamado?" require>
                        <label for="email">Email</label>
                        <input type="email" class="textoContato" name="email" id="email" placeholder="email@emal.com" require>
                        <label for="mensagem">Mensagem</label>
                        <textarea name="message" class="textoContato" id="mensagem" cols="30" rows="10" placeholder="Digite sua mensagem" require></textarea>
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_next" value="http://localhost/Portfolio/obrigado.html">
                        <input type="submit" value="Enviar">
                </form>
                <div class="contatoItens" data-anime="right">
                    <div class="contatoGroup">
                        <div class="iconContato">
                            <svg xmlns="http://www.w3.org/2000/svg" height="2.5rem" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                                <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                                <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
                            </svg>
                        </div>
                        <h2>Email</h2>
                    </div>
                    <div class="contatoGroup">
                        <div class="iconContato">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <h2>Whatsapp</h2>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="icons">
            <a href="https://github.com/arthursantanna" target="_blank">
                <i class="bi bi-github"></i>
            </a>
            <a href="https://www.linkedin.com/in/arthur-santanna/" target="_blank">
            <i class="bi bi-linkedin"></i>
            </a>
        </div>
        <p>&copy;2023 - Arthur Santana</p>
        <p>All rights are reserved</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>