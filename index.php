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
        <section id="home">
            <div>
                <h3>Me chamo</h3>
                <h1>Arthur Santana</h1>
                <h2>Desenvolvedor Front End | Desenvolvedor Back End</h2>
                <div class="buttonCVDownload">
                    <button class="buttonCV">Download CV</button>
                </div>
            </div>
            <div>
                <img src="imgs/computador.png" alt="Computador">
            </div>
        </section>
        <section id="sobreMim">
            <div class="container">
                <div class="photo">
                    <img src="imgs/fotoArthur.jpg" alt="Foto de Arthur" id="foto">
                </div>
                <div class="sobreTxt">
                    <h2>Sobre Mim</h2>
                    <p> Meu nome é Arthur Santana e sou um desenvolvedor de 18 anos, apaixonado por criar soluções digitais e explorar o mundo da programação.
                        Embora eu ainda não tenha entrado no mercado de trabalho, tenho investido meu tempo em aprender e aprimorar minhas habilidades como desenvolvedor.
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
            <div>
                <h2>Projetos</h2>
            </div>
        </section>
        <section id="skills">
            <h2>Skills</h2>
            <div class="container">

            </div>
        </section>
        <section>
            <div id="certificacoes">
                <h2>Certificações</h2>
                <p>Ensino técnico em Desenvolvimento de Sistemas - ETEC <br>
                (Início: Fevereiro/2022 - Término: Junho/2023)</p>
                <p>Ciência da Computação - MACKENZIE <br>
                (Início: Agosto/2023 - Término previsto: Agosto/2028)</p>

            </div>
        </section>
        <section id="contato">
            <form action="https://formsubmit.co/arthursantanatec@gmail.com" method="POST">
                <h2>Contato</h2>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Como gostaria de ser chamado?" require>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="email@emal.com" require>
                    <label for="mensagem">Mensagem</label>
                    <textarea name="message" id="mensagem" cols="30" rows="10" placeholder="Digite sua mensagem" require></textarea>
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_next" value="http://localhost/Portfolio/obrigado.html">
                    <input type="submit" value="Enviar">
            </form>
 
        </section>
    </main>
    <footer>
        <div>
            <i class="bi bi-github"></i>
            <i class="bi bi-linkedin"></i>
        </div>
        <p>&copy;2023 - Arthur Santana</p>
    </footer>
</body>
</html>