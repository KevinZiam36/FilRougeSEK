<?php
$title="Newsletter OK ";
ob_start();
?>   
    <center>
    <div id="succesNews">Bravo l'adresse <?=$adresse?> a été ajoutée à notre newsletter</div>
    </center>
<?php
 $content=ob_get_clean();
require_once 'base.php';
?>
