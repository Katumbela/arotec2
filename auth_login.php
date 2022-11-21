<?php
include_once('php/header.php');

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $select = "SELECT * FROM inscricao WHERE email ='$email' AND senha = '$senha'";
    $datas = $conexao->query($select);

if(mysqli_num_rows($datas)>0){
        session_start();
        setcookie('arotec', 'Welcome', time()+7200);
    $set=mysqli_fetch_array($datas);
        $_SESSION['logado']='logado';
        $_SESSION['email']=$set['email'];
        $_SESSION['senha']=$set['senha']; 
        
        if(empty($_POST['curso'])){
             header('location: index.php');
               }
        elseif(
            $_POST['pagina']=='cursos'){
            $curso_de = $_POST['curso'];
            header('location: aulas.php?curso='.$curso_de.'');
        }
        else{
            header('location: index.php');
        }
        
       
}

else{
   header('location: login.php?i=a');
}


}


?>