<?php
if(isset($_POST['supprimer']))
{  

    $idCommentaire  = isset($_GET['commentaire']) ? $_GET['commentaire'] : NULL;
    $supprimerUnCommentaireSignaler = $supprimerUnCommentaireSignalerManager->supprimerUnCommentaireSignaler($idCommentaire);
    
        
        if ($supprimerUnCommentaireSignaler)
        {
            echo '<script>alert(" le commentaire ' . $idCommentaire .' a bien été  supprimer ");</script>';
         ?>

           <script language="Javascript">document.location.replace("signalerUnCommentaire");</script><!-- Ne fonctionne que si l'utilisateur ne desactive pas le js--><?php
        }
        else
        {
            echo '<script>alert(" Une erreur est survenu lors de la suppresion du commentaire ");</script>';
        }
}
?>