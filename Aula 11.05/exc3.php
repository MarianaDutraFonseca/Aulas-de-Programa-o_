<?php
class Aluno {
    private $nome;
    private $nota1;
    private $nota2;

    public function __construct() {
        $this->nome = '';
        $this->nota1 = 0.0;
        $this->nota2 = 0.0;
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

    private function validarNota($valor) {
        $valor = str_replace(',', '.', $valor);
        if (!is_numeric($valor)) {
            return false;
        }
        $valor = floatval($valor);
        if ($valor < 0 || $valor > 10) {
            return false;
        }
        return true;
    }

    public function setNota1($valor) {
        if (!$this->validarNota($valor)) {
            return "Nota1 inválida. Deve ser número entre 0 e 10.";
        }
        $this->nota1 = floatval(str_replace(',', '.', $valor));
        return true;
    }

    public function setNota2($valor) {
        if (!$this->validarNota($valor)) {
            return "Nota2 inválida. Deve ser número entre 0 e 10.";
        }
        $this->nota2 = floatval(str_replace(',', '.', $valor));
        return true;
    }

    public function getNota1() {
        return $this->nota1;
    }

    public function getNota2() {
        return $this->nota2;
    }

    public function cadastrar($nome, $n1, $n2) {
        $errors = [];
        $r = $this->setNome($nome);
        if ($r !== true) $errors[] = $r;
        $r = $this->setNota1($n1);
        if ($r !== true) $errors[] = $r;
        $r = $this->setNota2($n2);
        if ($r !== true) $errors[] = $r;
        return $errors;
    }

    public function calcularMedia() {
        $media = ($this->nota1 + $this->nota2) / 2;
        return round($media, 2);
    }

    public function verificarSituacao() {
        $media = $this->calcularMedia();
        if ($media >= 7.0) return 'Aprovado';
        if ($media >= 5.0) return 'Recuperação';
        return 'Reprovado';
    }

    public function mostrarAluno() {
        $nome = htmlspecialchars($this->nome, ENT_QUOTES, 'UTF-8');
        $n1 = number_format($this->nota1, 2, ',', '.');
        $n2 = number_format($this->nota2, 2, ',', '.');
        $media = number_format($this->calcularMedia(), 2, ',', '.');
        $situacao = $this->verificarSituacao();
        $html = "<div style='border:1px solid #ccc;padding:10px;margin:8px 0;'>";
        $html .= "<p><strong>Nome:</strong> {$nome}</p>";
        $html .= "<p><strong>Nota 1:</strong> {$n1}</p>";
        $html .= "<p><strong>Nota 2:</strong> {$n2}</p>";
        $html .= "<p><strong>Média:</strong> {$media}</p>";
        $html .= "<p><strong>Situação:</strong> {$situacao}</p>";
        $html .= "</div>";
        return $html;
    }
}

// Testes: criar três alunos com cenários diferentes
$alunos = [];

$a1 = new Aluno();
$errs = $a1->cadastrar('Alice', 8, 7);
if (empty($errs)) $alunos[] = $a1; else $alunos[] = $errs;

$a2 = new Aluno();
$errs = $a2->cadastrar('Bruno', '6,0', 5);
if (empty($errs)) $alunos[] = $a2; else $alunos[] = $errs;

$a3 = new Aluno();
$errs = $a3->cadastrar('Carlos', 4, 3);
if (empty($errs)) $alunos[] = $a3; else $alunos[] = $errs;

?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Teste Aluno</title>
    <style>body{font-family:Arial,Helvetica,sans-serif;max-width:800px;margin:30px auto;padding:0 15px}h1{margin-bottom:10px}</style>
</head>
<body>
    <h1>Resultados dos Alunos</h1>

    <?php foreach ($alunos as $item): ?>
        <?php if ($item instanceof Aluno): ?>
            <?php echo $item->mostrarAluno(); ?>
        <?php else: ?>
            <div style='border:1px solid #f99;padding:10px;margin:8px 0;background:#fff5f5;'><p><strong>Erros ao cadastrar aluno:</strong></p><ul>
            <?php foreach ($item as $e): ?>
                <li><?php echo htmlspecialchars($e, ENT_QUOTES, 'UTF-8'); ?></li>
            <?php endforeach; ?>
            </ul></div>
        <?php endif; ?>
    <?php endforeach; ?>

</body>
</html>
