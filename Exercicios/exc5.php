<?php

    class Usuario {

    private $login;
    private $senha;

    public function setLogin($login) {
        if (strlen($login) >= 4) {
            $this->login = $login;
        } else {
            echo "Login inválido!<br>";
        }
    }

    public function setSenha($senha) {
        if (strlen($senha) >= 8) {
            $this->senha = $senha;
        } else {
            echo "Senha inválida!<br>";
        }
    }

    public function alterarSenha($novaSenha) {
        if (strlen($novaSenha) >= 8) {
            $this->senha = $novaSenha;
            echo "Senha alterada com sucesso!<br>";
        } else {
            echo "Nova senha inválida!<br>";
        }
    }

    public function autenticar($login, $senha) {
        if ($this->login == $login && $this->senha == $senha) {
            echo "Login realizado com sucesso!<br>";
        } else {
            echo "Login ou senha incorretos!<br>";
        }
    }
}

echo "<h3>Teste de Login</h3>";
$usuario = new Usuario();
$usuario->setLogin("mariana");
$usuario->setSenha("230608");
$usuario->autenticar("mariana", "230608");
$usuario->autenticar("mariana", "senhaerrada");
$usuario->alterarSenha("novasenha");
$usuario->autenticar("mariana", "novasenha");
echo "Usuário: mariana<br>";
?>