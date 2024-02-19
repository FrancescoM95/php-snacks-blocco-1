<?php

/* 
# Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
*/


$matches = [
    ["squadra_casa" => "Olimpia Milano", "squadra_ospite" => "Cantù", "punti_casa" => 55, "punti_ospite" => 60],
    ["squadra_casa" => "Virtus Bologna", "squadra_ospite" => "Fortitudo Bologna", "punti_casa" => 70, "punti_ospite" => 68],
    ["squadra_casa" => "Reggiana", "squadra_ospite" => "Varese", "punti_casa" => 62, "punti_ospite" => 59],
    ["squadra_casa" => "Venezia", "squadra_ospite" => "Brindisi", "punti_casa" => 72, "punti_ospite" => 65],
    ["squadra_casa" => "Trento", "squadra_ospite" => "Brescia", "punti_casa" => 67, "punti_ospite" => 70],
    ["squadra_casa" => "Pesaro", "squadra_ospite" => "Trieste", "punti_casa" => 60, "punti_ospite" => 58]
];

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/ico" href="./img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Francesco Mongiello">
    <meta name="description" content="PHP Snacks">
    <title>PHP Snacks</title>
</head>
<body>
    <!-- SNACK 1 -->
    <h1>Partite di Basket</h1>
    <ul>
        <?php foreach ($matches as $match): ?>
            <li><?= $match["squadra_casa"] ?> - <?= $match["squadra_ospite"] ?> | <?= $match["punti_casa"] ?>-<?= $match["punti_ospite"] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
