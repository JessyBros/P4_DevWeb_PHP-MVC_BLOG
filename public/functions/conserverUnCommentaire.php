<?php
if(isset($_POST['conserver']))
{  

    $idCommentaire  = isset($_GET['commentaire']) ? $_GET['commentaire'] : NULL;
    $conserverLeCommentairSignaler = $conserverLeCommentairSignalerManager->conserverLeCommentairSignaler($idCommentaire);
    
        
        if ($conserverLeCommentairSignaler)
        {
            echo '<script>alert(" le commentaire ' . $idCommentaire .' a été conserver ");</script>';
         ?>

           <script language="Javascript">document.location.replace("index.php?action=signalerUnCommentaire");</script><!-- Ne fonctionne que si l'utilisateur ne desactive pas le js--><?php
        }
        else
        {
            echo '<script>alert(" Une erreur est survenu ");</script>';
        }
}
?>