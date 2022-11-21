<?php
session_start();
include_once('php/header.php');




if(empty($_SESSION)){
    echo"";
  }
  
  else{
    $user = $_SESSION['user'];
  }
  
  

if(empty($_GET['c'])){
  $curso = "<b> Não escolhido! </b>";

}
else{
$c = $_GET['c'];
switch ($c) {
  case 'industrial':
    $curso = "Mecânica e Eletrônica industrial";
    break;

  case 'arduino':
    $curso = "Arduino";
    # code...
    break;
    

  case 'eletronica':
    $curso = "Eletrônica";
    # code...
    break;
    

  case 'robotica_m2':
    $curso = "Robótica Módulo 2";
    # code...
    break;

    
  case 'robotica_m1':
    $curso = "Robótica Módulo 2";
    # code...
    break;
  
  
  case 'eng':
    $curso = "Pequeno Engenheiro";
    # code...
    break;

    
  case 'int_artificial':
    $curso = "Introdução à inteligência artificial com Python";
    # code...
    break;

  
    
  case 'computacao':
    $curso = "Introdução à ciência da computação com Python";
    # code...
    break;
  default:
    # code...
    break;
}
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inscrição Para o curso de <?=$curso?> | AROTEC</title>
    <link rel="shortcut icon" href="imagens/a.png" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <script src="js/init.js"></script>
    <link rel="stylesheet" href="navv.css">
    <link rel="stylesheet" href="produtos.css">
    <script src="js/materialize.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.css.map">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="alerts/sweetalert2.js"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
    <script src="js/init.js"></script>
    <link rel="stylesheet" href="owl/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="owl/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" href="produtos.css">
    <script src="https://cdn.jsdelivr.net/npm/party-js@latest/bundle/party.min.js"></script>
    <script src="owl/dist/owl.carousel.js"></script>

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css" rel="stylesheet" /><!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js"></script>


</head>
<style>
@import url(contato.css);
@import url(estilo.css);
@import url(navv.css);
@import url('https://fonts.googleapis.com/css2?family=Anek+Latin:wght@100;200&family=League+Gothic&display=swap');



::-webkit-scrollbar {
    width: 8px !important;
}

::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey !important;
    border-radius: 10px !important;
}

::-webkit-scrollbar-thumb {
    background: #0066be !important;
    border-radius: 10px !important;
}

::-webkit-scrollbar-thumb:hover {
    background: #0066be !important;
}


footer a {
    text-decoration: none;
}

footer ul li {
    list-style-type: none;
}

footer svg {
    color: grey;
    height: 2em !important;
    transition: .3s;
}

footer svg:hover {
    color: #0066be;
    transition: .3s;
}


.c {
    transition: .3s;
}

.c:hover {
    transform: scale(1.01);
    transition: .3s;
}

b {
    color: #0066be;
}

@import url(css/materialize.css);


.mideas-sociais li {
    display: inline !important;
    margin: .5rem;
}

.mideas-sociais li svg {}


.span {
    color: #0066bec4 !important;
    font-size: 12px;
}

.c,
.c:hover,
.c:focus {
    background: #0066be !important;
    border-radius: 0 !important;
    color: white;
}

#online:checked #centro{
    display: none!important;
}

.form-control {
}

.form-control:focus {
    box-shadow: none;
}

.navbar {
    height: 4rem;
}


.linha input{
  margin-top: -.07rem;
}

@media screen and (min-width:500px) {
    .campo {
        width: 50%;
    }



    .mideas-sociais {
        float: right;
        margin-top: -3rem;
    }
}

.text-secondary {
    color: grey !important;
}

.col-12 h5 {
    color: #0066be !important;
}

#exampleModal {
    z-index: 100000000 !important;
}

.form-floating input{
  height: 3rem!important;
  padding-top: -.5rem
}

.btn-outline-secondary{
  border-color: #0066be!important; 
  color: #0066be;
}

.bn2{
  background: url(imagens/bn2.jpeg) center center;
  background-repeat: no-repeat;
  background-size: cover;
}

#centro{
  display: none;
}
</style>

<body>
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
    </div>
    <br>
    <br>
    <main class="main ">


        <br>
        <center>
            <div class="title text-center">
            </div>
            <br>
        </center>



        <center>

        <div class="row">
          <div class="col-12 col-lg-4 col-md-4 col-sm-12 col-xs-4 bn2">
            
          </div>
          <div class="col-12 col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class=" text-center  campo">
                <h5 class="cor">Inscrição para o curso de <?= $curso?></h5>
                <span class="text-secondary">Insira os seus dados abaixo</span>
                <form action="insert_insc.php" method="post" class="">
                    <div class="row">
                        <input class="form-control" type="hidden" name="curso" value="<?=$curso?>">
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                        
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" name="nome" id="floatingInput" placeholder="name@example.com">
                         
                        </div>
                        </div>
                       
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" name="sobrenome" id="floatingInput" placeholder="name@example.com">
                         
                        </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                          <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                          
                        </div>
                        <div class="form-floating mb-3">
                          <input type="tel" class="form-control" name="telefone" id="floatingInput" placeholder="name@example.com">
  
                        </div>
                        <!--                    
                          <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button">Província</button>
                            <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                              <option selected>Selecione...</option>
                              <option value="1">Luanda</option>
                              <option value="2">Benguela</option>
                              <option value="3">Cuanza Sul</option>
                              <option value="3">Cwanza Norte</option>
                              <option value="3">Malanje</option>
                              <option value="3">Uíge</option>
                              <option value="3">Bié</option>
                              <option value="3">Huambo</option>
                              <option value="3">Cabinda</option>
                              <option value="3">Moxico</option>
                              <option value="3">Cunene</option>
                              <option value="3">Huila</option>
                            </select>
                          </div>-->
                    <div class="row center">
                        <div class="col-10 col-sm-10 col-lg-10">
                        <div class="form-floating mb-3">
                          <input type="password" class="form-control" name="senha" id="senha" placeholder="name@example.com">
                          
                        </div>
                        </div>

                        <div style=" padding-top: 1rem;" class="col s2 l2">
                            <span style="margin-left: -1rem; border: none!important" id="mostrar" onclick="mostrar()"
                                class="mostrar senha"><i class="bi bi-eye"></i></span>
                            <span style="margin-left: -1rem; border: none!important" id="ocultar" onclick="ocultar()"
                                class="ocultar senha"><i class="bi bi-eye-slash"></i></span>
                        </div>
                    </div>

                    <div class="row text-start px-2">
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                            <p>
                                <label>
                                    <input name="group1"type="radio" />
                                    <span id="online" >Online</span>
                                </label>
                            </p>
                        </div>
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 text-start">
                            <p>
                                <label>
                                    <input name="group1"  type="radio" />
                                    <span id="presencial">Presencial</span>
                                </label>
                            </p>
                        </div>
                        <div>
                          <div class="" id="centro">
                                  <select class="form-select" id="inputGroupSelect01">
                                              <option selected>Escolha o centro</option>
                                              <option value="Laboratório Palanca - Luanda">Laboratório Palanca - Luanda</option>
                                              <option value="CFITEL - Luanda">CFITEL - Luanda</option>
                                              <option value="Mediateca do lubango - Lubango">Mediateca do lubango - Lubango</option>
                                              <option value="Luz Verde - Benguela">Luz Verde - Benguela</option>
                                              <option value="Tchiowa Hub - Cabinda">Tchiowa Hub - Cabinda</option>
                                            </select>
                                        </div>

                            <br>

                                    <center>
                            <div class="row text-center">
                                <div class="col-12 col-lg-12 col-sm-12 col-md-12">
                                    <div style="text-align: center; padding-left: .6rem;">


                                        <span>Escolha um método de pagamento</span>
                                        <br><br>
                                    </div>
                                        <div style="display: flex; flex-direction: row; justify-content: center">
                                            <img src="imagens/mcx.png" height="25em" id="ainda" alt="">
                                            <img style="margin: 0 1rem;" src="imagens/visa1.png" id="payV" height="25em"
                                                alt="">
                                            <img src="imagens/umoney.png" height="25em" id="ainda" alt="">

                                            <div style="display: flex; flex-direction: column; margin-left: 1rem"
                                                id="pagT">
                                                <span
                                                    style="font-family: 'League Gothic', sans-serif; color: #0066be; font-size: 10px">TRANSFÊNCIA</span>
                                                <span
                                                    style="font-family: 'League Gothic', sans-serif; color: #0066be; font-size: 14px">BANCÁRIA</span>
                                            </div>
                                        </div>

                                    <div id="coord" class="bg-light py-5" style="display: none; text-align: start; padding-left: 1rem">
                                        <hr>
                                        <center>
                                            <h6 style="color: #0066be">Pagamento por Tranferência</h6>
                                        </center>
                                        <p>Coordernadas para o pagamento:</p>
                                        <p>Titular: <b> Arotec Servicos de Tecnologia </b></p>
                                        <p>Banco: <b>Millenium Atlântico</b></p>
                                        <p>Nº da Conta: <b>179204918 10 001</b></p>
                                        <p>IBAN: <b>AO06.0055.0000.7920.4918.1011.6</b></p>

                                        <label for=""><span style="color: green">Nota:</span> Submeter o comprovativo
                                            por email: <a href="mailto:info.arotec@gmail.com">
                                                info.arotec@gmail.com</a>.

                                    </div>


                                    <div id="visa" style="display: none; text-align: start; padding: 0 1rem" class="bg-light py-4">
                                        <center>
                                            <h5 style="color: #0066be">Dados do cartão</h5>
                                        </center>
                                        <div class="linha">
                                          <label for="nome">Titular do cartão</label>
                                        <input type="text" class="form-control" name="" placeholder="Titular da conta" id="">
                                        
                                        </div>
                                        <br><div class="linha">
                                          <label for="nome">Código CVV/ CCV </label>
                                        <input type="number" class="form-control" name="" placeholder="CVC code" id="">
                                        
                                        </div>
                                        <br><div class="linha">
                                          <label for="nome">Validade</label>
                                        <input type="number" class="form-control" name="" placeholder="MM/AAAA" id="">
                                    <br>
                                    <center>
                                      <span class="text-warning">Este serviço ainda não está disponível</span>
                                    </center>
                                          </div>
                                        </div>

                                </div>
                            </div>
                            <br>
                            <button class="btn c w-100 " id="enviar">Inscrever-se</button>
               
                                    </center> </form>
                <br>
            </div>
            </div>
          </div>
        </div>


    </main>

    </center>
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
                        <li><a class="text-secondary" href="contatar.php">Con tactar</a></li>
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
                <a class="span " href="http://aro-tec.net"> &copy; AROTEC &middot; Todos os direitos reservados</a><br>
                <p class="text-secondary text-lighten-1">Angola Robótica e Tecnologia - Angola</p>

                <ul class="mideas-sociais ">
                    <li class="img tooltipped" data-position="left" data-tooltip="Facebook"><a
                            href="https://facebook.com/arotec1"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg></a>
                    </li>
                    <li class="img tooltipped" data-position="bottom" data-tooltip="Linkedin"><a href="#"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg></a>
                    </li>
                    <li class=" tooltipped" data-position="bottom" data-tooltip="Youtube"><a href="http://"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-youtube" viewBox="0 0 16 16">
                                <path
                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                            </svg></li>
                </ul>
            </div>
        </div>
        </div>
    </footer>




    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function() {

      
    });

    $("#pagT").click(function() {
        $("#coord").stop().slideToggle();
        $("#visa").stop().slideUp();
    })

    $("#ainda").click(function() {
        alert("Serviço indisponível no momento")
    })


    $("#payV").click(function() {
        $("#visa").stop().slideToggle();
        $("#coord").stop().slideUp();
    })




    $(document).ready(function() {
        $('.sidenav').sidenav();
    });


    function mostrar() {
        document.getElementById('senha').setAttribute('type', 'text');
        document.getElementById('mostrar').style.display = "none";
        document.getElementById('ocultar').style.display = "block";
    }


    function ocultar() {
        document.getElementById('senha').setAttribute('type', 'password');
        document.getElementById('mostrar').style.display = "flex";
        document.getElementById('mostrar').style.marginLeft = ".5rem";
        document.getElementById('ocultar').style.display = "none";
    }


    $("#presencial").click(function () {
      
      $("#centro").stop().slideDown();
    
        });

    $("#online").click(function () {
      
  $("#centro").slideUp();
  $("#centro").val("");
    })
    /*
    var nav =document.getElementById('nav');

       function animarScroll(){
    const windowTop = window.pageYOffset;
        
        if(windowTop > 80){
         nav.style.color='red';
        }

        else{
            nav.style.css.color='black';
        }
        
       }

       window.addEventListener('scroll', function(){
         animarScroll();
       });
    */
    </script>
</body>

</html>