


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Curso Robótica Módulo 2 | AROTEC</title>
    <link rel="shortcut icon" href="imagens/a.png" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <script src="js/init.js"></script>
    <link rel="stylesheet" href="produtos.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="academia.css">
    <link rel="stylesheet" href="navv.css">
    <link rel="stylesheet" href="owl/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="owl/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="alerts/sweetalert2.js"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
    <script src="js/init.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="alerts/sweetalert2.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="owl/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="owl/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" href="produtos.css">
    <script src="https://cdn.jsdelivr.net/npm/party-js@latest/bundle/party.min.js"></script>
    <script src="owl/dist/owl.carousel.js"></script>
</head>
<style>

::-webkit-scrollbar-thumb:hover{
  background: #0066be!important;
}

::-webkit-scrollbar-thumb{
  background: #0066be!important;
  cursor: pointer;
  border-radius: 10px!important;
}
::-webkit-scrollbar{
  width: 9px!important;
}

::-webkit-scrollbar-track{
    cursor: pointer;
  box-shadow: inset 0 0 5px grey!important;
  border-radius: 10px!important;
}
.navbar .nav-link{
    color: white!important;
}


fieldset {
    padding: 3rem !important;
}


.arobot {
    position: absolute;
    width: 15%;
}

.login:hover,
.login:focus,
.login {
    border-radius: 0;
    background: none;
    border: 2px solid #062656;
    color: #062656;
}

.login-btn:hover,
.login-btn:focus,
.login-btn {
    border-radius: 0;
    background: none;
    border: 2px solid #fff;
    color: #fff;
}

.svg {
    transition: .4s;
}


nav {
    background: #0066be;
}



.text-secondary {
    font-size: 12px;
}


.carousel-control-prev-icon-bg {
    background: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='black'><path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/></svg>") !important;

}

.login-btn:hover .svg {
    transform: translateX(8px);
    transition: .4s;
}

.login:hover .svg {
    transform: translateX(8px);
    transition: .4s;
}


.criarC,
.criarC:hover,
.criarC:focus {
    border-radius: 0;
    background: #062656;
    border: 2px solid #062656;
    color: white;
}

body {
    overflow-x: hidden;
}


@media screen and (min-width: 700px) {
    .loja {
        margin-top: -3rem;
    }

    .mideas-sociais{
    float: right;
    margin-top: -3rem;
}

    .bb{
    background: linear-gradient(90deg, #0066bec4,#0066bec4), url(imagens/imgB.jpg);
    background-repeat: no-repeat;
    background-size: 100% 100%!important;
    height: 30vh;
}
    .navbar-brand {
        margin-left: 6.5rem;
    }

    .nav-c {
        margin-left: 20% !important;
    }

    .l2 {
        position: absolute;
        top: -4rem;
    }

    .arobot {
        top: 13rem;
    }

    .cursos {
        margin-top: 2rem !important;
    }

    .lp {
        padding: 4rem;
    }


    .carousel-item {
        height: 60vh !important;
    }


    .pl:hover,
    .pr:hover {
        opacity: 1;
    }

    .pl {
        margin-left: 15rem;
        border-radius: 50px;
        opacity: .3;
        margin-top: 26rem !important;
    }

    .pr {
        margin-right: 15rem;
        border-radius: 50px;
        opacity: .3;
        margin-top: 26rem !important;
    }

}




.cursos .imagenm1 {
    height: 20vh;
    margin: .8rem 0;
    background-size: 100% 100%;
    background-image: url(imagens/rob.avif);
}

.cursos .imagenm2 {
    height: 20vh;
    margin: .8rem 0;
    background-size: 50% 50%;
    background: url(imagens/ard.jpeg) center center;
}

.cursos .imagenm3 {
    height: 20vh;
    margin: .8rem 0;
    background-size: 100% 100%;
    background-image: url(imagens/ia.jpeg);
}

.cursos .imagenm4 {
    height: 20vh;
    margin: .8rem 0;
    background-size: 80% 80%;
    background: url(imagens/py1.jpeg) center center;
}


.ic:hover,
.ic:focus {
    border-radius: 0;
    width: 100%;
    background: none;
    border-color: green;
    color: green;
}


.ic {
    border-radius: 0;
    width: 100%;
    background: none;
}


.azul {
    color: #052c65;
}

.prod {
    border: 1px solid #ececec;
    display: grid;
    place-items: center;
    transition: .4s;
    height: 13rem;
    z-index: 1;
}

.prod:hover .img {
    transform: scale(1.1);
    transition: .4s;
    z-index: -1;
}

.img {
    z-index: -1000;
}

.prod img {
    width: 70%;
}

.estrelas {
    display: flex;
    flex-direction: row;
    color: #f1c900ea;
}

.bb{
    background: linear-gradient(90deg, #0066bec4,#0066bec4), url(imagens/imgB.jpg);
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-position:center;
    height: 30vh;
    display: grid;
    place-content: center;
}


fieldset {
    padding: 1.5rem;
    position: relative;
}



     .cursos .rob{
    height: 6rem;
    background: linear-gradient(90deg, #0066bec4, #0066bec4, #0066bec4), url(imagens/logo.png);
    background-size: 100% 100%;
    font-size: 20px;
    line-height: 1rem;
    color: white!important;
    padding: 0 .3rem;
    display: grid!important;
    place-items: center!important;
    line-height: 1!important;
}
  .rob:hover{
        color: #0066be!important;
}
.cursos .rob, .cursos .rob:hover{

  font-size: 20px;
    line-height: 1rem;
    padding: 0 .3rem;
    display: grid!important;
    place-items: center!important;
    line-height: 1!important;
  height: 6rem;

}

@media only screen and (min-width:650px) and (max-width:800px) {
    
    .nav-alinhamento{
        width: 55%;
    }

    
    .sair{
        display: none;
    }


    .t3{
        border-bottom: 2px solid var(--cor_principal);
    }
    .t1 {
        display: block;
    }

    .sair img{
        height: 10rem;
        width: 20rem;
    }
    }

@media only screen and (min-width:990px) and (max-width:1049px) {
        
        .nav-alinhamento{
            width: 65%;
        }
   }


   
   @media only screen and (min-width:601px) and (max-width:649px) {

    .sair{
        display: none;
    }
    
    .nav-alinhamento{
        width: 80%;
    }
    .t2{
        width: 90%;
    }
    .t3{
        border-bottom: 2px solid var(--cor_principal);
    }

    .t1 {
        display: block;
        margin-top: -2rem;
        margin-bottom: -2rem;
    }
   }


    @media only screen and (min-width:100px) and (max-width:600px) {
    
        .nav-alinhamento{
            width: 95%;
        }

        .e-c{
            width: 100%;
        }

        .titulo{
            width: 100%;
        }


        .t2{
            width: 100%;
            font-size: 25px;
            margin-bottom: -2rem;
        }

        .t3{
            border-bottom: 2px solid var(--cor_principal);
        }
    
        .t1 {
            display: block;
            margin-top: -2rem;
            margin-bottom: -2rem;
        }

        .sair{
            display: none;
        }

        .col-lg-3 .column {
        margin-top: 4rem!important;
        cursor: pointer;
    }
  
        }
    
    

        .barra {
            margin: 2rem 0;

        }


        .barra div a{
            text-decoration: none;
            color: rgb(48, 47, 47);
            margin: 0 2rem;

        }


@media only screen and (min-width:1305px) and (max-width:3000px) {
    
    .nav-alinhamento{
        width: 46%;
    }

    }

    .f-15{
        font-size: 16px !important;
    }
    
    
@media only screen and (min-width:1050px) and (max-width:1300px) {
    
    .nav-alinhamento{
        width: 60%;
    }

    }

    .col-lg-3 .column {
        border: 1px solid #ffffffea;
        padding: 0 .5rem;
        padding-bottom: .5rem;
        margin-top: 1rem;
        transition: .4s;
        cursor: pointer;
    }
  
    .col-lg-3 .column:hover {
        background: white;
        transition: .4s;
    }

    .text-start{
        text-align: start!important;
    }

    .text-end{
        text-align: end!important;
    }

    .janela{
        height: 50vh;
        width: 50vw;
        }

    .bar{
        position: fixed;
        bottom: 0!important;
        left:0!important;
        right: 0!important;
        width: 100vw;
        height: 3rem;
        line-height: 3rem;
        background: #0066be;
    }

    .bar span{
        color: rgb(255, 242, 242);
    }

    .campo-texto{
        margin-top: 2rem;
        border: 1px solid #0066be;
        display: flex;
        flex-direction: row;
    }

    .campo-texto button {
        background: #0066be;
        border-radius: 0!important ;
        color: white;
    }

    .campo-texto input{
        border: none;
        width: 95%!important;
        padding: 0 .6rem;
        outline: none;
    }

    .descricao{
        height: 42vh;
        width: 50vw;
        overflow-y: scroll;
    }


   .col-12 h5, .span{
    color: #0066bec4!important;
}
    .bar span {
        cursor: pointer;
    }

    .bi-star-fill{
        color: rgb(229, 207, 5);
    }

    .column b{
        opacity: .6;
    }

    .t-list li{
        margin: 1rem 0;
        font-size: 16px;
        list-style-type: square;
    }


    .btnn:hover, .btnn:focus{
        background: #0066be;
        color: white;
    }


.btnn{
    border: 1px solid #0066be;
    border-radius: 0!important;
}

.pegar{
    border: 1px solid #0066be;
    height: 42vh;
    width: 20vw;
    position: fixed;
    right: 6rem;
}

.pegar .tit{
    background: #0066be;
    color: white;
    font-weight: bolder;
    padding: 1rem;
}

.preco{
    font-size: 40px;
    color: #0066be;
}
.aoa{
    font-size: 15px;
    margin-right: 1rem;
    color: #0066be;
}
</style>
<body>


<div class="navegacao">
<nav class="navbar navbar-expand-lg nav navbar-light p-3">
        <div class="container-fluid">
            <img src="imagens/logo.png" class="navbar-brand" height="40em" alt="">

            <center>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="academia">Academia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="empresas">Empresas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="loja">Loja</a>
                        </li>
                        <li class="nav-item dropdown" style="display: none">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Eventos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">GGPN</a></li>
                                <li><a class="dropdown-item" href="#">Unitel Code Robotica</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Campeonato Nacional de Robótica</a></li>
                            </ul>
                </div>
            </center>
            <form class="d-flex my-2 my-lg-1">
                <a href="login"><button class="btn btn-outline-primary login-btn" type="submit">Login <svg class="svg"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                        </svg></button></a>
                <a href="criar_conta"><button class="btn btn-outline-primary mx-4 criarC" type="submit">Criar
                        Conta</button></a>
            </form>
        </div>
        </div>
    </nav>
<br>
</div>
<main class="main container">
<br>
<br>
      
<div class="row">
    <div class="col-12 col-lg-9 col-md-9 col-xs-9 px-lg-4 px-md-3 col-sm-12">
        <h3 class="text-primary">Curso de Robótica Módulo 2</h3>
       
        <div class="mx-2" style="display: flex!important; flex-direction: row; ">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <span class="mx-2"> &middot;</span> <div class="">
                AROTEC 
            </div>
        </div>
        <div class="content w-50">
            <p>
                antecedido do módulo 1, robótica módulo 1 mostra uma visão mais ampla ou sucede daquilo que é o módulo 1    
        </p>
        </div>
        <br>
        <div class="banner">
            <img src="imagens/rbm2.jpeg"style="height: 25rem!important; width:100%" alt="">
        </div>
        <center>
            <br>
        <div class="detalhes px-5">
            <div class="row text-center">
                <div class="col-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 text-start">
                    <div class="column">
                        <span class="text-secondary f-15">
                            <i class="bi bi-calendar2-date mx-2"></i> Duração
                        </span><br>
                        <b class="mx-3">3 Semanas</b>
                    </div>
                </div>
                <div style="border-left: 1px solid #808080b2;border-right: 1px solid #808080b2;" class="col-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 text-start">
                    <div class="column">
                        <span class="text-secondary f-15">
                            <i class="bi bi-globe mx-2"></i></i> Presencial
                        </span><br>
                        <a class="mx-3" href="#">Saber mais</a>
                    </div>
                </div>
                <div  class="col-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 text-start">
                    <div class="column">
                        <span class="text-secondary f-15">
                            <i class="bi bi-smartwatch mx-2"></i></i> Horas por Aula
                        </span><br>
                        <b class="mx-3">1h:30min</b>
                    </div>
                </div>
                <div style="border-left: 1px solid #808080b2;"  class="col-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 text-start">
                    <div class="column">
                        <span class="text-secondary f-15">
                            <i class="bi bi-person-video mx-2"></i></i></i> AROTEC
                        </span>
                    </div>
                </div>
            </div>
        </div>
        </center>

        <div class="barra">
            <div class="bg-light text-center py-3">
                <a href="#overview" id="">Overview</a>
                <a href="#topic" id="">Topicos</a>
                <a href="#oque" id="">Oque vai aprender</a>
                <a href="#formador" id="">Formadores</a>
            </div>
        </div>
        <br>
        <br>

        <div id="overview" class="w-75">
        <h2>Overview do curso</h2>
        <p>
        O curso de robótica modulo 2, e um curso intermediário para o estudante a ter bases solidas na área de robótica e automação, o curso desenvolve a habilidades de criação de projecto ligados a sistemas robótica e trabalho multidisciplinares com a ciências de mecânica, eletrônica e programação. 
    </p>
        <br><br>
        </div>

        <div id="topic">
            <div class="bg-light p-4">
                <center><b><h4>Topicos do Curso</h4></b></center>
                <ul class="t-list w-75">
                    
                <li>1.	Introdução a robótica e seus fundamentos </li>
                <li>2.	Robótica industrial </li>
                <li>3.	Robótica educativa </li>
                <li>4.	Automação residencial </li>
                <li>5.	Criação de projecto tecnológico</li>
                </ul>
            </div>
        </div>


        <br><br><br>

        <div id="oque" class=" p-5">
            <center><h2><b>O que vai aprender </b></h2>
            <span class="text-secondary">Até ao final do curso será capaz de:</span></center>
            <br>
            <div class="row">
                <div class="col-12 col-lg-6 col-md-6 col-xs-6 col-sm-12" style="display: flex!important; flex-direction: row!important">
                    <span><i class="bi bi-check2-square mx-3"></i></span><p class="w-75">•	Como montar e controlar sistemas robóticos  </p>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-xs-6 col-sm-12" style="display: flex!important; flex-direction: row!important">
                    <span><i class="bi bi-check2-square mx-3"></i></span><p class="w-75">•	Uso de ferramentas e instrumentos nas áreas de mecânica, eletrônicas e programação</p>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-12 col-lg-6 col-md-6 col-xs-6 col-sm-12" style="display: flex!important; flex-direction: row!important">
                    <span><i class="bi bi-check2-square mx-3"></i></span><p class="w-75">•	Arduinos e rasperry Pi  <br> <br>•	ROS </p>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-xs-6 col-sm-12" style="display: flex!important; flex-direction: row!important">
                    <span><i class="bi bi-check2-square mx-3"></i></span><p class="w-75">•	Trabalhar em equipa <br><br>•	Pensamento criativo <br><br>•   Desenvolvimento de projecto</p>
                </div>
            </div>
        </div>

<br><br><br>
        <div id="formador">
            <div>
                <center><h2><b>Seu Formador</b></h2>

                    <br><br>
                <div class="ps column">
                    <div class="foto">
                        <img src="imagens/foto.png"  style="border-radius: 150px" height="160em" width="160em" alt="">
                    </div>
                    <br>
                    <div class="corpo w-50">
                        <h4><b class="text-primary">Qleusio Nenganga </b></h4>
                        <span class="text-secondary f-15 text-start">AROTEC</span>
                    </div>
                </div>
            </center>
            </div>
        </div>

        <br><br>
        <div class="text-start">
            
            <button class="btn btnn">
                <span><i class="bi bi-share"></i></span> Partilhar curso</button>
        </div>


    </div><!-- Termino da div do lado esquerdo onde contem tudo -->
    <div class="col-12 col-lg-3 col-md-3 col-xs-3 col-sm-12 text-center">
        <div class="pegar shadow text-center">
            <div class="tit">Inscrever-se</div>
        <div class="i-corp"><br>
            <b class="preco"><span class="aoa">AOA</span>20.000</b>
        </div><br>
        <span><i class="bi bi-check-lg mr-2"></i> Certificado de Aproveitamento</span><br>
        <span><i class="bi bi-check-lg mr-2"></i> Projectos Durante a formação </span>
        <br><br>
        <center>
            <a href="insc_curso.php?c=robotica_m2"><button class="btn btnn w-75" style="position: relative; bottom: 1rem; ">Increver-se</button></a>
        </center>
        
    </div>
        </div>
</div>
</main> 


<br>
<br>

      
<footer class="bg-light pt-5  pb-2 page-footer">
    <div class="container">
      <div class="row container">
       
        <div class="col-12 col-lg-4 col-sm-4 col-md-4">
            <h5 class="text-secondary">Sobre Nós</h5>
            <ul>
              <li><a class="text-secondary" href="index.php#sobre">Quem Somos?</a></li>
              <li><a class="text-secondary" href="index.php#sobre">Quando Surgiu?</a></li>
            </ul>

        </div>
        <div class="col-12 col-lg-4 col-sm-4 col-md-4">
          <h5 class="text-secondary">Suporte</h5>
          <ul>
              
            <li><a class="text-secondary" href="tel:+244946445629"> +244 946445629</a></li>
            <li><a class="text-secondary" href="tel:+244946445629"> +244 996445629</a></li>
            <li><a class="text-secondary" href="mailto:info.arotec@gmail.com">info.arotec@gmail.com</a></li>
            <li><a class="text-secondary" href="contatar.php">Contactar</a></li>
          </ul>
        </div>
        <div class="col-12 col-lg-4 col-sm-4 col-md-4">
          <h5 class="text-secondary">Links Rápidos</h5>
          <ul>
            <li><a class="text-secondary" href="academia.php">Academia</a></li>
              <li><a class="text-secondary" href="loja.php">Loja</a></li>
              <li><a class="text-secondary" href="http://canar.rf.gd">Campeonato Nacional de Robótica</a></li>
              <li><a class="text-secondary" href="inscricao.php">Unitel Code Robótica</a></li>
          </ul>
        </div>
        </div>
      </div>


        <div id="payment">
      </div>
      
    <div class="footer-copyright center mt-4">
      <div class="container">
       <a class="span text-secondary"  href="http://aro-tec.net">&copy; AROTEC &middot; Todos os direitos reservados</a><br>
        <p class="text-secondary text-lighten-1">Angola Robótica e Tecnologia - Angola</p>

      <ul class="mideas-sociais "> 
        <li class="img tooltipped" data-position="left" data-tooltip="Facebook"><a href="https://facebook.com/arotec1"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>
        </li>
        <li class="img tooltipped" data-position="bottom" data-tooltip="Linkedin"><a href="#" > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg></a>
        </li>
        <li class=" tooltipped" data-position="bottom" data-tooltip="Youtube"><a href="http://"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg></li> 
    </ul> 
        </div>
      </div>
    </div>
  </footer>

      
      
        <script>

    $(document).ready(function(){ 
        $('.sidenav').sidenav(); 
    });


    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators:true,
    });
        autoplay()

    function autoplay(){
        $('.carousel').carousel('next');
        setTimeout(autoplay, 7000);
    }


    $(document).ready(function(){
        $('.tooltipped').tooltip();
    });



    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoWidth:true,
    indicators:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:true,
        }
    }
});

   function animarScroll(){
var windowTop = window.pageYOffset;

alert(windowTop);

    
   }

   $(document).scroll( function(){
     animarScroll();
   });

        
        
        
        </script>
</body>
</html>
