<?php

require_once 'function.php';

$conta1 = [
    'titular' => 'Fritz',
    'conta' => 'Corrente',
    'saldo' => 3200
];
$conta2 = [
    'titular' => 'Henríque',
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Eu sou o Fritz e to aprendendo php</h1>

    <ul>
        <?php foreach ($contas as $cpf => $conta){?>
        <p>CPF: <?=$cpf?></p>
        <li>Titular: <?=$conta['titular']?></li>
        <li>Saldo: <?=$conta['saldo']?></li>
        <?php } ?>
    </ul>
</body>
</html>