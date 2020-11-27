<?php

class Usuario
{
    private $pdo;
    public $msgErro = "";
    public function conectar($nome, $host, $email, $senha)
    {
        global $pdo;
        try {
            $pdo = new PDO("mysql:dbname=" . $nome . ";host=" . $host, $email, $senha);
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        }
    }

    public function logar($email, $senha)
    {
        global $pdo;
        $sql = $pdo->prepare("SELECT ID_Users from users where Email = :e and senha = :s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", $senha);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            session_start();
            $_SESSION['ID_Users'] = $dado['ID_Users'];
            return true;
        } else {
            return false;
        }
    }
}

?>
