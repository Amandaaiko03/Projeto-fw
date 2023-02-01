<?php session_start()?>

    <?php
      if(!isset ($_SESSION['../index.php'])){
        if(!isset($_POST['Entrar'])){
            $usuario = 'Amanda';
            $senha = '123456';

            $usuarioForm = $_POST['usuario'];
            $senhaForm = $_POST['senha'];

            if($usuario == $usuarioForm && $senha == $senhaForm){
                //logado com suceeso
                $_SESSION ['../index.php'] == true;
                header('location: ../homepage.php');
                } 
                else{
                    echo 'Dados incorretos!';
                }

        }
        
      }
    ?>

