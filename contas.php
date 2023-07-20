<?php

function saque ($conta, $valor) {
    if ($conta['saldo']< $valor){
        echo "Você não tem saldo o suficiente". PHP_EOL;
    }
    else{
        return $conta["saldo"] -= $valor;
    }
    }

function deposito($conta, $valor) {
    if ($valor<=0){
        echo "Não é possivel depositar valores nulos ou negativos.";
    }
    else{return $conta["saldo"] += $valor;}
}

$conta1 = [
    'titular' => 'Fritz',
    'conta' => 'Corrente',
    'saldo' => 3200
];
$conta2 = [
    'titular' => 'Henrique',
    'conta' => 'Poupança',
    'saldo' => 1100
];
$conta3 =[
    'titular' => 'Ana',
    'conta' => 'Poupança',
    'saldo' => 0
];

$contas = [
    12345678910 => $conta1,
    12345678901 => $conta2,
    12674567890 => $conta3
];

$gg = deposito($contas[12345678910], -500);

echo $gg;