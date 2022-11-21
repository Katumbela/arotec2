<?php
include('php/header.php');
session_start();




if(empty($_GET)){
    echo"";
  }
  
  else{
    $curso = $_GET['curso'];

    echo $curso;
    echo $page;
  }


  if(empty( $_SESSION['email'] )){
    echo"";
}
if(empty($_SESSION['senha'] )){
    echo"";
}

else{

    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];

    $pesquisar = "SELECT * FROM inscricao WHERE email ='$email' AND senha = '$senha'";
    $datas = $conexao->query($pesquisar);

if(mysqli_num_rows($datas)>0){
    $set=mysqli_fetch_array($datas);

        $user=$set['nome']; 
        $_SESSION['user'] = $user;
        $sobrenome=$set['sobrenome'];
}

}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AROTEC | INICIO</title>
    <link rel="shortcut icon" href="imagens/a.png" type="image/x-icon">
    <script src="js/jquery.js"></script><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="alerts/sweetalert2.js"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
    <script src="js/init.js"></script><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="alerts/sweetalert2.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="owl/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="owl/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" href="produtos.css"><script src="https://cdn.jsdelivr.net/npm/party-js@latest/bundle/party.min.js"></script>
    <script src="owl/dist/owl.carousel.js"></script>
</head>
<style>

    *, html, body{
        transition: .4s;
    }
    
    ul li a{
        color: white!important;
    }


    footer{
        padding: 3rem 0;
    }

    footer ul li{
        list-style-type: none;
        text-decoration: none;
    }

    footer ul li a{
        text-decoration: none;
    }

    footer .mideas li{
        display: inline;
    }
    fieldset{
        background: #ebf3ff;
        padding: 3rem!important;
    }


    .arobot{
        position: absolute;
        width: 15%;
    }

    .login:hover, .login:focus,.login{
        border-radius: 0;
        background: none;
        border: 2px solid #062656;
        color:#062656;
    }

    .login-btn:hover, .login-btn:focus,.login-btn{
        border-radius: 0;
        background: none;
        border: 2px solid #fff;
        color:#fff;
    }

    .svg{
        transition: .4s;
    }


    nav, footer{
        background: #0066be;
    }



.text-secondary{
    font-size: 12px;
}
  

    .carousel-control-prev-icon-bg{
       background:  url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='black'><path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/></svg>")!important;

    }      
    .login-btn:hover .svg{
        transform: translateX(8px);
        transition: .4s;
    }

    .login:hover .svg{
        transform: translateX(8px);
        transition: .4s;
    }


    .criarC, .criarC:hover, .criarC:focus{
        border-radius: 0;
        background: #062656;
        border: 2px solid #062656;
        color: white;
    }

   body{
    overflow-x: hidden;
  }


@media screen and (min-width: 700px){
    .loja{
        margin-top: -3rem;
    }
    .navbar-brand{
        margin-left: 6.5rem;
    }
    
    .nav-c{
        margin-left: 20%!important;
    }

    .l2{
        position: absolute; 
        top: -4rem;
    }

    .arobot{
        top: 13rem;
    }

.cursos {
    margin-top: 2rem!important;
}

.lp{
    padding: 4rem;
}


.carousel-item{
    height: 60vh !important;
}


.pl:hover, .pr:hover{
    opacity: 1;
}

.pl{
    margin-left: 15rem;
    border-radius: 50px;
    opacity: .3;
    margin-top: 26rem !important;
}
.pr{
    margin-right: 15rem;
    border-radius: 50px;
    opacity: .3;
    margin-top: 26rem !important;
}

}

fieldset{
    padding: 1.5rem;
    position: relative;
}


.cursos {
    margin-top: 2rem;
}

.cursos .imagenm1{
    height: 20vh;
    margin: .8rem 0;
    background-size: 100% 100%;
    background-image:  url(imagens/rob.avif);
}

.cursos .imagenm2{
    height: 20vh;
    margin: .8rem 0;
    background-size: 50% 50%;
    background:  url(imagens/ard.jpeg) center center;
}

.cursos .imagenm3{
    height: 20vh;
    margin: .8rem 0;
    background-size: 100% 100%;
    background-image:  url(imagens/ia.jpeg);
}

.cursos .imagenm4{
    height: 20vh;
    margin: .8rem 0;
    background-size: 80% 80%;
    background:  url(imagens/py1.jpeg) center center;
}


.ic:hover, .ic:focus {
        border-radius: 0;
        width: 100%;
        background: none;
        border-color: green;
        color:green;
}


.ic {
        border-radius: 0;
        width: 100%;
        background: none;
}


.azul{
    color: #052c65;
}

.prod{
    border: 1px solid #ececec;
    display: grid;
    place-items: center;
    transition: .4s;
    height: 13rem;
    z-index: 1;
}
.prod:hover .img{
    transform: scale(1.1);
    transition: .4s;
    z-index: -1;
}

.img{
    z-index: -1000;
}

.prod img{
  width: 70%;
}

.estrelas{
    display: flex;
    flex-direction: row;
    color: #f1c900ea; 
}

#a {
    position: relative;
    width: 120px;
    padding: 10px 20px;
    font-size: 20px;
    position: relative;
    color: #2E8DEF;
    background: #333333;
    border-bottom: 3px solid #2E8DEF;
}
#a:after {
    content: " ";
    position: absolute;
    display: block;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: -1;

    background: #333333;
    border-bottom: 3px solid #2E8DEF;
    border-right: 20px solid #2E8DEF;

    transform-origin: bottom left;
    -ms-transform: skew(-30deg, 0deg);
    -webkit-transform: skew(-30deg, 0deg);
    transform: skew(-30deg, 0deg);
}

#texto{

    z-index: 1000;
}

.carousel-item{
    height: 50vh;
}

</style>
<body>
<nav class="navbar navbar-expand-lg nav navbar-light p-3">
  <div class="container-fluid">
    <img src="imagens/logo.png" class="navbar-brand" height="40em" alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Eventos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">GGPN</a></li>
            <li><a class="dropdown-item" href="#">Unitel Code Robotica</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Campeonato Nacional de Robótica</a></li>
      </ul>
</div>
</center>
      <form class="d-flex">
        <a href="login"><button class="btn btn-outline-primary login-btn" type="submit">Login  <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
        </svg></button></a>
        <a href="criar_conta"><button class="btn btn-outline-primary mx-4 criarC" type="submit">Criar Conta</button></a>
      </form>
    </div>
  </div>
</nav>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
<div class="container">
    <div class="row">
    <div class="col-12 col-lg-6 col-md-6 col-xs-6 py-lg-5">
        <h1  class="px-lg-5 mt-lg-5 azul">Academia de robótica</h1>
        <p class="px-lg-5 my-lg-4">
            Academia de robótica, variados cursos voltados ás novas tecnologias , Trazendo novas tecnologias mais proximos dos estudantes.
            <br>

            <br>
            <a href="academia"  class="login btn">ir para academia <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
        </svg></a>
        </p>
    </div>
    <div class="col-12 col-lg-6 col-md-6 col-xs-6 py-lg-5">
        <img src="imagens/f.png" styl="margin-top: -5rem; z-index: -1" class="w-50" alt="">
    </div>  
</div>
</div>

    </div>
    <div class="carousel-item">
<div class="container">
    <div class="row">
    <div class="col-12 col-lg-6 col-md-6 col-xs-6 py-lg-5">
        <h1  class="px-lg-5 mt-lg-5 azul">Loja</h1>
        <p class="px-lg-5 my-lg-4">
            Dispositivos e eletrônicos disponíveis para desenvolvimento e suporte de projectos. Desde componentes eletrônicos aos dispositivos montados.
            <br>
            <br>
            <a href="loja" class="btn login">ir para loja <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
        </svg></a>
        </p>
    </div>
    <div class="col-12 col-lg-6 col-md-6 col-xs-6 py-lg-5 ml-lg-5 text-center">
        <img src="imagens/img3.png" class="loja" style="width: 50%"  alt="">
    </div>  
</div>
</div>

    </div>
    <div class="carousel-item">
<div class="container">
    <div class="row">
    <div class="col-12 col-lg-6 col-md-6 col-xs-6 py-lg-5">
        <h1  class="px-lg-5 mt-lg-5 azul">Para empresas</h1>
        <p class="px-lg-5 my-lg-4">
        Consultoria e design de dispositivos e softwares inteligentes. Soluções e programas sociais para empresas.
             <br>
             <br>
            <a href="academia" class="btn login">Saber mais <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
        </svg></a>
        </p>
    </div>
    <div class="col-12 col-lg-6 col-md-6 col-xs-6 py-lg-5">
            <img src="imagens/img1.png" class="loja l2" style="width: 25%; "  alt="">
    </div>  
    <div class="col-12 col-lg-12 col-md-12 col-xs-12">

<div class=" bg-light py-3" xyz="fade rotate-right">
    <div class="container">
    <center>
        <h6>Serviços prestados e parceiros</h6>
</center> 
    <div class="row">
    <center>
     
        <img src="imagens/unitel.png" style="width: 10%">
        <img src="imagens/transferir.jpeg" class="mx-5" style="width: 10%">
        <img src="imagens/ggpn.png" style="width: 10%">
      
</center>  
    </div>
    </div>
    </div>
</div>
</div>

    </div>
  </div>
  
</div>

<button class="carousel-control-prev pl" style="background: grey!important; height: 3rem; width: 3rem;  margin-top: 40vh; " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next pr"  style="background: grey!important; height: 3rem; width: 3rem; margin-top: 40vh" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
<br>
    </div>
</div>


<div class="container xyz-in example-grid"  >
    <fieldset   xyz="fade small stagger" class="px-lg-5">
            <h3 class="azul">Explore os cursos disponíveis na academia </h3>
        
        <span style="font-size: 14px" class="text-secondary">Cursos disponíveis presencial nas academias da arotec e online na nossa plataforma</span>
        <br>
        <br>
        <a href="academia" class="login btn">Ver todos os cursos <i class="bi bi-mortarboard"></i></a>
        <div class="cursos ">
            <div class="row">
                <div class="col-12 col-lg-3 col-md-3 col-xs-3 xyz-in">
                    <div class="column">
                        <div class="imagenm1">

                        </div>
                        <div class="corpo">
                            <h5><b class="text-primary">Curso de robótica Módulo 1</b></h5>
                            <br>
                            <span class="text-secondary"><i class="bi bi-smartwatch"></i> 4 Semanas</span><br>
                            <span class="text-secondary"><i class="bi bi-pin-map"></i> Presencial</span><br>
                            <span class="text-secondary"><i class="bi bi-cash-stack"></i> <b class="azul">20.000 AOA</b></span><br>
                            <br>
                            <br>
                            <center>
                                 <button class="btn ic btn-outline-primary">Inscrever-se <i class="bi bi-pencil-square"></i></button>
                            </center>
                           
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 col-md-3 col-xs-3 xyz-in">
                    <div class="column">
                        <div class="imagenm2">

                        </div>
                        <div class="corpo">
                            <h5><b class="text-primary">Curso de Arduino</b></h5>
                            <br>
                            <span class="text-secondary"><i class="bi bi-smartwatch"></i> 4 Semanas</span><br>
                            <span class="text-secondary"><i class="bi bi-pin-map"></i> Presencial & Online</span><br>
                            <span class="text-secondary"><i class="bi bi-cash-stack"></i> <b class="azul">15.000 AOA - 25.000 AOA</b></span><br>
                            <br>
                            <br>
                            <center>
                                 <button class="btn ic btn-outline-primary">Inscrever-se <i class="bi bi-pencil-square"></i></button>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 col-md-3 col-xs-3 xyz-in">
                    <div class="column">
                        <div class="imagenm3">

                        </div>
                        <div class="corpo">
                            <h5><b class="text-primary">Introdução à inteligencia artificial com python</b></h5>
                            <span class="text-secondary"><i class="bi bi-smartwatch"></i> 4 Semanas</span><br>
                            <span class="text-secondary"><i class="bi bi-pin-map"></i> Online</span><br>
                            <span class="text-secondary"><i class="bi bi-cash-stack"></i> <b class="azul">20.000 AOA</b></span><br>
                            <br>
                            <br>
                            <center>
                                 <button class="btn ic btn-outline-primary">Inscrever-se <i class="bi bi-pencil-square"></i></button>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 col-md-3 col-xs-3 xyz-in">
                    <div class="column">
                        <div class="imagenm4">

                        </div>
                        <div class="corpo">
                            <h5><b class="text-primary">Introdução a ciencia de computação com Python</b></h5>
                            <span class="text-secondary"><i class="bi bi-smartwatch"></i> 4 Semanas</span><br>
                            <span class="text-secondary"><i class="bi bi-pin-map"></i> Online</span><br>
                            <span class="text-secondary"><i class="bi bi-cash-stack"></i> <b class="azul">15.000 AOA</b></span><br>
                            <br>
                            <br>
                            <center>
                                 <button class="btn ic btn-outline-primary">Inscrever-se <i class="bi bi-pencil-square"></i></button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</div>

<br><br>

<div class="container lp">
    <h4 class="azul">Loja </h4>
    <div class="w-75">
         <span class="text-secondary">Encontre componentes eletrônicos e dispositivos para a montagem ou desenvolvimento do seu projeto/ trabalho.</span>
    </div>
    <br>
     <a href="loja" class="login btn">Ir para loja <i class="bi bi-shop svg"></i></a>
     <br>
     <br>
     <div class="produtos row ">

     <div class="col-12 col-lg-3 col-md-4 col-sm-6">
        <div class="">
                <div class="column">
                    <div class="prod">
                        <img src="imagens/arobot.png" class="img" alt="">
                    </div>
                    <div class="conteudo">
                        <br>
                        <b class="azul">AROBOT</b>
                        <br>
                        <div class=" estrelas">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        </div>
                        <b class="azul my-5">
                        <i class="bi bi-coin"></i> 50.000 kz</b>
                        <center>
                                 <button class="btn ic btn-outline-primary"> Comprar <i class="bi bi-bag-heart"></i></button>
                        </center>
                    </div>
                </div>
            </div>
     </div>
            


     <div class="col-12 col-lg-3 col-md-4 col-sm-6">
        <div class="">
                <div class="column">
                    <div class="prod">
                        <img src="imagens/LIV.png" class="img" alt="">
                    </div>
                    <div class="conteudo">
                        <br>
                        <b class="azul">Livro Inteligente</b>
                        <br>
                        <div class=" estrelas">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        </div>
                        <b class="azul my-5">
                        <i class="bi bi-info-circle"></i> Em produção</b>
                        <br>
                        <center>
                                 <button class="btn ic btn-outline-primary"> Comprar <i class="bi bi-bag-heart"></i></button>
                        </center>
                    </div>
                </div>
            </div>
     </div>
            
     </div>
</div>



<br>
<br>
<footer> <div class="container">
      <div class="row">
        <div class="col -12 col-lg-3 col-sm-6">
          <h5 class="white-text"><img src="imagens/logo.png" height="30rem" alt=""></h5>
          <p class="text-white text-lighten-1">Angola Robótica e Tecnologia - Angola</p>

      <span><b  class="text-white text-lighten-3 ">Mídeas</b></span>
      <ul class=" mideas " style="display: inline!important"> 
        <li class="img tooltipped" data-position="left" data-tooltip="Facebook"><a href="https://facebook.com/arotec1"> <img src="imagens/facebook.png"  height="20px" alt="facebook"></a>
        </li>
        <li class="img tooltipped" data-position="bottom" data-tooltip="Linkedin"><a href="https://www.linkedin.com/company/73220145/admin/" > <img src="imagens/linkedin.png" height="20px" alt="linkedin"></a>
        </li>
        <li class=" tooltipped" data-position="bottom" data-tooltip="Youtube"><a href="http://"><img src="imagens/youtube.png"  height="20px" alt="youtube"></a></li> 
    </ul> 
        </div>
        <div class="col -12 col-lg-3 col-sm-6">
            <h5 class="text-white">Sobre Nós</h5>
            <ul>
              <li><a class="white-text" href="index#sobre">Quem Somos?</a></li>
              <li><a class="white-text" href="index#sobre">Quando Surgiu?</a></li>
            </ul>

        </div>
        <div class="col -12 col-lg-3 col-sm-6">
          <h5 class="text-white">Suporte</h5>
          <ul>
              
            <li><a class="white-text" href="tel:+244938811659"> +244 938 811 659</a></li>
            <li><a class="white-text" href="tel:+244990811659"> +244 990 811 659</a></li>
            <li><a class="white-text" href="mailto:info.arotec@gmail.com">arotec.info@gmail.com</a></li>
            <li><a class="white-text" href="contatar">Contactar</a></li>
          </ul>
        </div>
        <div class="col -12 col-lg-3 col-sm-6">
          <h5 class="text-white">Links Rápidos</h5>
          <ul>
            <li><a class="white-text" href="academia">Academia</a></li>
            <li><a class="white-text" href="eventos">Eventos</a></li>
              <li><a class="white-text" href="loja">Loja</a></li>
              <li><a class="white-text" href="http://canar.rf.gd">Campeonato Nacional de Robótica</a></li>
              <li><a class="white-text" href="inscricao">Unitel Code Robótica</a></li>
          </ul>
        </div>
        </div>
      </div>
      <br>
</footer>
        <script>


        party.confetti(this, {
            count: party.variation.range(20, 40),
            size: party.variation.range(0.8, 1.2),
            // ... and more!
        });

    $(document).ready(function(){ 
        $('.sidenav').sidenav(); 
    });


    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
    });
    
    /*
        autoplay()

    function autoplay(){
        $('.carousel').carousel('next');
        setTimeout(autoplay, 9000);
    }
*/

    $(document).ready(function(){
        $('.tooltipped').tooltip();
    });
    

    $('button').click(function(){
        $('#cart').html('1');
        
        document.getElementById('msg').style.display='block';

        
        setTimeout(() => {
            document.getElementById('msg').style.display='none';
        }, 2000);

    });


    $(document).ready(function(){
        $('.modal').modal();
    });


    $('#solicitar').click(
        function () {
            if ($('#email').val() == "") {
                $('#email').css("border-color","red"); 
                $('#msg2').css("transition",".5s");
                $('#msg2').html("<span style='color: red!important'>Por favor insira seu email</span>");             
            }
            else{
                var data = {
                    prod: 'AROBOT',
                    email: $('#email').val(),
                };
                $.post("php/solicitar", data , function (s) {
                  
                        Swal.fire(
                            'Solicitrado Com sucesso',
                            'Recebemos o seu pedido entraremos em contacto em breve, Obrigado!',
                            'success',
                        )
                
                  }
                );
        }}
    );

    
    $('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    autoWidth:true,
    indicators:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
});


$(document).ready(function () {
    $(document).ready(function(){
    var galleryImage = $('.gallery').find('div').first();
    var images = [
        "<div class='img1 i'><div class='row'><div class='col s12 l6'><p style='font-size:30px;' class='body'><b style='color: white;font-size:50px; class='titul'> Dispositivos e softwares personalisados </b><br>Electronicos e softwares virados as preferencias, personalidade e necessidades dos usuarios/clientes. <br>  <br>  <br><a href='contatar?case=disper' style='border: 1px solid #fff; color: white; padding: .8rem; border-radius: 5px; margin-top: 2rem; z-index: 10000000; font-size:25px; border-radius: 25px'> Faça Seu Orçamento </a></p></div></div></div>",
        "<div class='img2 i'><div class='row'><div class='col s12 l6'><p style='font-size:30px;' class='body'><b style='color: white;font-size:40px; class='titul'> Dispositivos e eletrônicos </b><br>Electronicos virados as educação e produção de eltronicos personalizados. <br>  <br>  <br><a href='contatar?case=disper' style='border: 1px solid #fff; color: white; padding: .8rem; border-radius: 5px; margin-top: 2rem; z-index: 10000000; font-size:25px; border-radius: 25px'> Faça Seu Orçamento </a></p></div></div></div>",
        "<div class='img3 i'></div>",
        
    ];

    var i = 0;
    setInterval(function() {
        i = (i + 1) % images.length;
        galleryImage.fadeOut(350, function(){
            $(this).html( images[i]);
            $(this).fadeIn(1250);
        })
    }, 9000);
})
});

$(window).scroll(function (){



var altura = window.pageYOffset;

if (altura >=100) {
    $('.nav').css('transition','.4s');
    alert("sdasdsadas");
}
});

        </script>
</body>
</html>
