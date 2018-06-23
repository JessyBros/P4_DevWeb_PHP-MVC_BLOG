<?php 
if (isset($_POST['modifier']))
{
    if ($modificationPseudoMdp)
    {
        echo '<script>alert(" Modification réussi ");</script>';
    ?>
    
        <script language="Javascript">document.location.replace("moderateurPseudoMdp");</script><!-- Ne fonctionne que si l'utilisateur ne desactive pas le js--><?php
    }
    else
    {
        echo '<script>alert(" Erreur, la modification a échoué ");</script>';
    }  

}


?>