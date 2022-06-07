<?php
$title="Home Page SEK";
ob_start();
?>   
    <center>
        <div id="formNewsletter">
            <form method="post">
                Inscrivez-vous à notre Newsletter !
                <br/>
                <input type="text" name="mail" placeholder="Votre email" />
                <br/>
                <input type="submit" value="S'inscrire" id="btnNewsletter"/>
            </form>
        </div>
    </center>
<?php $content=ob_get_clean();
require_once 'base.php';
?>
