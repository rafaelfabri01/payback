<?php
require_once 'usuarios.php';
$u = new Usuario;
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <link rel="stylesheet" href="estilo.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui" />
    </head>
    <body style="background-image: url('img/bg-login.png');">

        <a href="index.php"><h4 style="color: #32a852; padding: 20px; font-size:34px">Voltar</h4></a>
        <div id="logo" style="padding-top:100px;text-align:center" class="navbar__col navbar__col--title">
                        <a href="index.php"><span style="color:#32a852; font-size:80px"><b>PayBack</b></span></a>
                     </div>

        <div id="espaco1">
            <h1 style="color: #32a852;">Cadastro</h1>
        </div>

        <div id="corpo-form" style="position: inherit;">
            <form method="POST">
                <input type="text" placeholder="Nome" name="NomeCompleto" />
                <input type="email" placeholder="E-mail" name="Email" />
                <input type="password" placeholder="Senha" name="Senha" />
                <input type="text" placeholder="RG" name="RG" />
                <input type="text" placeholder="CPF" name="CPF" />
                <input type="date" placeholder="Data de Nascimento" name="Nascimento" />
                <input type="text" placeholder="Endereço" name="Endereco" />
                <input type="text" placeholder="Telefone 1" name="Telefone1" />
                <input type="text" placeholder="Telefone 2" name="Telefone2" />
                <input type="text" placeholder="Sexo" name="Sexo" />

                <input type="submit" id="btnAcessar" value="ACESSAR" />
            </form>
        </div>

<?php
 $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
 //criar conexao
 $conn = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error());

 mysqli_select_db($conn, $dbname)or die (mysqli_error());

 $nome = $_POST['NomeCompleto'];
 $email = $_POST['Email'];
 $senha = $_POST['Senha'];
 $rg = $_POST['RG'];
 $cpf = $_POST['CPF'];
 $nascimento = $_POST['Nascimento'];
 $endereco = $_POST['Endereco'];
 $telefone1 = $_POST['Telefone1'];
 $telefone2 = $_POST['Telefone2'];
 $sexo = $_POST['Sexo'];

 $sql =  "INSERT INTO `users`(`ID_Users`, `NomeCompleto`, `Email`, `Senha`, `RG`, `CPF`, `Nascimento`, `Endereco`, 
 `Telefone1`, `Telefone2`, `Sexo`) VALUES (null, '{$nome}','{$email}','{$senha}','{$rg}','{$cpf}','{$nascimento}','{$endereco}','{$telefone1}','{$telefone2}','{$sexo}')";

 $resultado_cadastro  = mysqli_query($conn, $sql);
    echo ("Cadastrado com sucesso!");
?>
    </body>
</html>
