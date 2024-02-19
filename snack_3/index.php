<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["paragraph"]) && !empty($_GET["paragraph"])) {

        $paragraph = $_GET["paragraph"];
        
        $paragraph = trim($paragraph);
  
        $phrases = explode(".", $paragraph);  
    } else {
        echo "Inserisci un paragrafo.";
        die();
    }
}
?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/ico" href="../img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Francesco Mongiello">
    <meta name="description" content="PHP Snacks 3">
    <title>PHP Snacks 3</title>
</head>
<body>
    <!-- SNACK 3 -->
    <h1>Frasi</h1>
    <?php foreach ($phrases as $phrase): ?>
        <?php if (!empty($phrase)): ?>
            <p>- <?= $phrase?>.</p>
        <?php endif; ?>
    <?php endforeach; ?>
</body>
</html>
