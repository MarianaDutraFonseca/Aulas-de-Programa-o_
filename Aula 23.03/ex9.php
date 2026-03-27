<?php

class Pessoa{
public $NOME;
public $DATA_NASCIMENTO;
public $GENERO;
    
    public function Calcular(){
        $Nasc = new DateTime($this->DATA_NASCIMENTO);
        $hoje = new DateTime();
        $intervalo = $hoje->diff($Nasc);
        return array(
            'dias' => $intervalo->d,
            'meses' => $intervalo->m,
            'anos' => $intervalo->y
        );
    }
    public function exibir(){
        $idade = $this->Calcular();
        return $this->NOME . " tem " . $idade['anos'] . " anos, " . 
               $idade['meses'] . " meses e " . $idade['dias'] . " dias, e é do gênero " . $this->GENERO . ".";
    }
}

$ps1 = new Pessoa();
$ps1->NOME = "Maximus Decimus Meridius";
$ps1->DATA_NASCIMENTO = "1984-12-15";
$ps1->GENERO = "masculino";
echo $ps1->exibir() . "<br>";

echo "_____________________________________________________________________<br><br>";

$ps2 = new Pessoa();
$ps2->NOME = "Joel Miller";
$ps2->DATA_NASCIMENTO = "1990-03-22";
$ps2->GENERO = "masculino";
echo $ps2->exibir();
