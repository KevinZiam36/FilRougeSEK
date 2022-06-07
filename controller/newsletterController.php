
<?php
require_once $_SERVER['DOCUMENT_ROOT']. "/FilRougeSEK/dataaccess/dataaccess.php";

function inscrireNewsletter($pMail){
    echo "bienvenue sur notre newsletter";
    ajouterEmailDatabase($pMail);
    $adresse = $pMail;
    require_once $_SERVER ['DOCUMENT_ROOT']. "/FilRougeSEK/views/newsletter_success.php";
}
?>