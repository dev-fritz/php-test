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

function maiusculo(array &$conta)
{
    $conta["titular"] = mb_strtoupper($conta["titular"]);
}

function printar($mensagem)
{
    echo $mensagem . PHP_EOL;
}