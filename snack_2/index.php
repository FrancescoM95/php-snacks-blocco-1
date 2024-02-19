<?php

/* 
# Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.
*/



if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
    if (strlen($_GET['name']) > 3) {
        if (strpos($_GET['mail'], '@') !== false && strpos($_GET['mail'], '.') !== false) {
            if (is_numeric($_GET['age'])) {
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato: l'età deve essere un numero.";
            }
        } else {
            echo "Accesso negato: l'email non è valida.";
        }
    } else {
        echo "Accesso negato: il nome deve essere più lungo di 3 caratteri.";
    }
} else {
    echo "Accesso negato: parametri mancanti.";
}

?>


