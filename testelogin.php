<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        /*print_r('Email: '. $email);
        print_r('<br>');
        print_r('Senha: '. $senha);*/

        // Verificando se este email e senha existem no db
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'"; 
        $result = $conexao->query($sql);

        //Mostra se existe as credenciais solicitadas no db
        print_r($sql);
        print_r($result);
        
        if(mysqli_num_rows($result) >= 1)
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
        else 
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
    }
    else{
        //Não acessa
        header('Location:login.php');
    }
?>