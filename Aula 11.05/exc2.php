<?php
class ContaBancaria {
    private $titular;
    private $saldo;

    public function __construct($titular) {
        $this->titular = trim($titular);
        $this->saldo = 0.0;
    }

    public function getTitular() {
        return $this->titular;
    }

    public function depositar($valor) {
        $valor = str_replace(',', '.', $valor);
        if (!is_numeric($valor)) {
            return "Erro: valor de depósito inválido.";
        }
        $valor = floatval($valor);
        if ($valor <= 0) {
            return "Erro: não é permitido depósito negativo ou zero.";
        }
        $this->saldo += $valor;
        return "Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso.";
    }

    public function sacar($valor) {
        $valor = str_replace(',', '.', $valor);
        if (!is_numeric($valor)) {
            return "Erro: valor de saque inválido.";
        }
        $valor = floatval($valor);
        if ($valor <= 0) {
            return "Erro: saque deve ser maior que zero.";
        }
        if ($valor > $this->saldo) {
            return "Erro: saldo insuficiente para saque.";
        }
        $this->saldo -= $valor;
        return "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso.";
    }

    public function consultarSaldo() {
        return $this->saldo;
    }

    public function mostrarSaldo() {
        return "Saldo atual de " . htmlspecialchars($this->titular, ENT_QUOTES, 'UTF-8') . ": R$ " . number_format($this->saldo, 2, ',', '.');
    }
}

$mensagens = [];
$conta = new ContaBancaria('João Silva');

$mensagens[] = $conta->depositar(500);         // depósito válido
$mensagens[] = $conta->sacar(100);             // saque válido
$mensagens[] = $conta->sacar(500);             // saque maior que o saldo -> erro
$mensagens[] = $conta->depositar(-50);         // depósito negativo -> erro
$mensagens[] = $conta->depositar('250,75');    // depósito com vírgula -> válido

?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Teste ContaBancaria</title>
    <style>body{font-family:Arial,Helvetica,sans-serif;max-width:700px;margin:30px auto;padding:0 15px}p{margin:6px 0}strong{display:block;margin-top:12px}</style>
</head>
<body>
    <h1>Teste ContaBancaria</h1>
    <h2>Titular: <?php echo htmlspecialchars($conta->getTitular(), ENT_QUOTES, 'UTF-8'); ?></h2>

    <?php foreach ($mensagens as $m): ?>
        <p><?php echo htmlspecialchars($m, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endforeach; ?>

    <p><strong><?php echo $conta->mostrarSaldo(); ?></strong></p>
</body>
</html>
