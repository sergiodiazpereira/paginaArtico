<?php
    print_r($_GET);
    echo '<h2>'.$_GET['numero'].' es la variable numerica</h2>';
    echo '<h2>'.$_GET['texto'].' es la variable de texto</h2>';
    echo '<h2>'.$_GET['radio'].' es la variable de radio</h2>';
    //Solo coge un checkbox (el último marcado) echo '<h2>'.$_GET['checkbox'].' es la variable de checkbox</h2>';
    foreach ($_GET['checkbox'] as $indice => $checkbox) {
        echo '<h2>'.$checkbox.' es la variable checkbox numero '.$indice.'</h2>';
    }
?>