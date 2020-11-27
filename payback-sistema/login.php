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
    <body style="background-image: url('img/bg-login.png');background-position:0% 79%">

        <a href="index.php"><h4 style="color: #32a852; padding: 20px; font-size:34px">Voltar</h4></a>
        <div id="logo" style="padding-top:100px;text-align:center" class="navbar__col navbar__col--title">
                        <a href="index.php"><span style="color:#32a852; font-size:80px"><b>PayBack</b></span></a>
                     </div>

        <div id="espaco1">
            <h1 style="color: #32a852;">Login</h1>
        </div>

        <div id="corpo-form" style="position: inherit;">
            <form method="POST">
                <input type="email" placeholder="Usuário" name="email" />
                <input type="password" placeholder="Senha" name="senha" />
                <input type="submit" id="btnAcessar" value="ACESSAR" />
            </form>
        </div>

        <?php
if(isset($_POST['email']))
{
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if(!empty($email) && !empty($senha))
    {
        $u->conectar("db-payback", "localhost", "root", ""); if($u->msgErro =="") { if($u->logar($email, $senha)) { header("location: AreaPrivada.php"); }else { ?>
        <div class="msg-erro">
             E-mail e/ou senha estão incorretos!;
        </div>
        <?php
            }
        }else
        {
            echo "Erro: ".$u->msgErro; } }else { ?>
        <div class="msg-erro">
             Preencha todos os campos!;
        </div>
        <?php
        
    }
}
?>
    </body>
</html>
