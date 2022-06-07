<?php

function ajouterEmailDatabase($pAdresseEmail)
{
    try
<<<<<<< Updated upstream
    {
        $sql = "INSERT INTO newsletter (email) value (?);";
        $db = new PDO('mysql:host=localhost;db=sek',
        'root','');
    
    $stmt = $db->prepare($sql);
    $stmt->execute([$pAdresseEmail]);
=======
    { 
    $db = new PDO('mysql:host=localhost;db=sek',
    'root','');
>>>>>>> Stashed changes
    }

    catch(PDOException $e)
    {
        echo "Erreur:" .$e->getMessage();
    }
}


?>