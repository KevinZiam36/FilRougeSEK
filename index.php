<?php
var_dump($_POST);
if(ISSET($_POST['mail'])){
    inscrireNewsletter($_POST['mail']);
}
require_once './controller/controllers.php';
afficherHomePage();

?>