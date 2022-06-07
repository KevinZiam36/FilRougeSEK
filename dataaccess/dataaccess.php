<?php

function ajouterEmailDatabase($pAdresseEmail)
{
    try
    {
        $sql = "INSERT INTO newsletter (email) value (?);";
        $db = new PDO('mysql:host=localhost;db=sek',
        'root','');
    
    $stmt = $db->prepare($sql);
    $stmt->execute([$pAdresseEmail]);
    }

    catch(PDOException $e)
    {
        echo "Erreur:" .$e->getMessage();
    }
}


?>