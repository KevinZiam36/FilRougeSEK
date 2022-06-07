<?php

function ajouterEmailDatabase($pAdresseEmail)
{
    try
    {
    $db = new PDO('mysql:host=localhost;db=sek',
    'root','');
    }

    catch(PDOException $e)
    {
        echo "Erreur:" .$e->getMessage();
    }
}


?>