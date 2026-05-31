<?php

class Temperatura{
    private $celsius;

    public function __construct($celsius){
        $this->celsius = $celsius;
    }

    public function paraFahrenheit(){
        return ($this->celsius * 9/5) + 32;
    }

    public function paraKelvin(){
        return $this->celsius + 273.15;
    }
}

$t = new Temperatura(0);
echo "Temperatura em Celsius: 0°C<br>";
echo "Temperatura em Fahrenheit: " . $t->paraFahrenheit() . "°F<br>";
echo "Temperatura em Kelvin: " . $t->paraKelvin() . "K<br>";
echo "___________________________________<br><br>";
$t2 = new Temperatura(100);
echo "Temperatura em Celsius: 100°C<br>";
echo "Temperatura em Fahrenheit: " . $t2->paraFahrenheit() . "°F<br>";
echo "Temperatura em Kelvin: " . $t2->paraKelvin() . "K<br>";
echo "___________________________________<br><br>";
$t3 = new Temperatura(37);
echo "Temperatura em Celsius: 37°C<br>";
echo "Temperatura em Fahrenheit: " . $t3->paraFahrenheit() . "°F<br>";
echo "Temperatura em Kelvin: " . $t3->paraKelvin() . "K<br>";
?>