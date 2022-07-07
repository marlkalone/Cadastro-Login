<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20,147,270), rgb(17,54,71));
        }
        .tela-login {
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        .input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputsubmit {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        .inputsubmit:hover {
            background-color: deepskyblue;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="tela-login">
        <h1>Login</h1>
        <form action="testelogin.php" method="POST">
        <input type="text" name="email" placeholder="Email" class="input">
        <br><br>
        <input type="password" name="senha" placeholder="Senha" class="input">
        <br><br>
        <input class="inputsubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>