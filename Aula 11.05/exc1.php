<?php
class Produto {
    private $nome;
    private $preco;
    private $quantidade;

    public function __construct() {
    $this->nome = '';
    $this->preco = 0.0;
    $this->quantidade = 0;
    }

    public function setNome($nome) {
    $nome = trim($nome);
    if ($nome === '') {
    return "O nome não pode ser vazio.";
    }
    $this->nome = $nome;
    return true;
    }

    public function getNome() {
    return $this->nome;
    }

    public function setPreco($preco) {
    $preco = str_replace(',', '.', $preco);
    if (!is_numeric($preco)) {
        return "O preço deve ser um número.";
    }
    $preco = floatval($preco);
    if ($preco <= 0) {
        return "O preço deve ser maior que zero.";
    }
    $this->preco = $preco;
    return true;
    }

    public function getPreco() {
    return $this->preco;
    }

    public function setQuantidade($quantidade) {
    if (is_numeric($quantidade) && intval($quantidade) == $quantidade) {
        $quantidade = intval($quantidade);
    } else {
        return "A quantidade deve ser um número inteiro.";
    }
    if ($quantidade < 0) {
        return "A quantidade não pode ser negativa.";
    }
    $this->quantidade = $quantidade;
    return true;
    }

    public function getQuantidade() {
    return $this->quantidade;
    }

    public function cadastrar($nome, $preco, $quantidade) {
    $errors = [];
    $r = $this->setNome($nome);
    if ($r !== true) $errors[] = $r;
    $r = $this->setPreco($preco);
    if ($r !== true) $errors[] = $r;
    $r = $this->setQuantidade($quantidade);
    if ($r !== true) $errors[] = $r;
    return $errors;
    }

    public function mostrarProduto() {
    $precoFormat = number_format($this->preco, 2, ',', '.');
    $nomeEsc = htmlspecialchars($this->nome, ENT_QUOTES, 'UTF-8');
    $quant = $this->quantidade;
    $html = "<h2>Dados do Produto</h2>";
    $html .= "<p><strong>Nome:</strong> {$nomeEsc}</p>";
    $html .= "<p><strong>Preço:</strong> R$ {$precoFormat}</p>";
    $html .= "<p><strong>Quantidade em estoque:</strong> {$quant}</p>";
    return $html;
    }
}

$mensagens = [];
$produto = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$nome = $_POST['nome'] ?? '';
$preco = $_POST['preco'] ?? '';
$quantidade = $_POST['quantidade'] ?? '';
$produto = new Produto();
$errors = $produto->cadastrar($nome, $preco, $quantidade);
if (empty($errors)) {
    $mensagens[] = "Produto cadastrado com sucesso.";
} else {
    $mensagens = array_merge($mensagens, $errors);
}
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Cadastro de Produto</title>
    <style>body{font-family:Arial,Helvetica,sans-serif;max-width:700px;margin:30px auto;padding:0 15px}label{display:block;margin-top:10px}input[type=text],input[type=number]{width:100%;padding:8px;margin-top:6px}button{margin-top:12px;padding:8px 16px}</style>
</head>
<body>
    <h1>Cadastro de Produto</h1>

    <?php if (!empty($mensagens)): ?>
        <ul>
            <?php foreach ($mensagens as $m): ?>
                <li><?php echo htmlspecialchars($m, ENT_QUOTES, 'UTF-8'); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post">
        <label>Nome
            <input type="text" name="nome" value="<?php echo isset($_POST['nome']) ? htmlspecialchars($_POST['nome'], ENT_QUOTES, 'UTF-8') : ''; ?>" required>
        </label>

        <label>Preço (use . ou ,)
            <input type="text" name="preco" value="<?php echo isset($_POST['preco']) ? htmlspecialchars($_POST['preco'], ENT_QUOTES, 'UTF-8') : ''; ?>" required>
        </label>

        <label>Quantidade em estoque
            <input type="number" name="quantidade" min="0" value="<?php echo isset($_POST['quantidade']) ? htmlspecialchars($_POST['quantidade'], ENT_QUOTES, 'UTF-8') : '0'; ?>" required>
        </label>

        <button type="submit">Cadastrar</button>
    </form>

    <?php
    if ($produto && empty($errors)) {
        echo $produto->mostrarProduto();
    }
    ?>
</body>
</html>
