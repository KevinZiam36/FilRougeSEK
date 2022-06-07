<?php

function ajouterEmailDatabase($pAdresseEmail)
{
    try
    {
        $sql = "INSERT INTO newsletter (`id`,`email`) values (NULL,'$pAdresseEmail');";
        $db = new PDO('mysql:host=localhost;dbname=sek','root','');
    echo $sql;
    //$stmt = $db->prepare($sql);
    $db ->query($sql);
    }

    catch(PDOException $e)
    {
        echo "Erreur:" .$e->getMessage();
    }
}


?>