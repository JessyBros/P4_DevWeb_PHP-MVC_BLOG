<!-- Suppression du commentaire après vérification-->
<?php
if(isset($_POST['supprimer']))
{  
    $idCommentaire  = isset($_GET['commentaire']) ? $_GET['commentaire'] : NULL;
    $supprimerUnCommentaireSignaler = $supprimerUnCommentaireSignalerManager->supprimerUnCommentaireSignaler($idCommentaire);
    
    if ($supprimerUnCommentaireSignaler)
    {
        echo '<script>alert(" le commentaire ' . $idCommentaire .' a bien été  supprimer ");</script>';   
        header("Location: signalerUnCommentaire");  
    }
    else
    {
        echo '<script>alert(" Une erreur est survenu lors de la suppresion du commentaire ");</script>';
    }
}
?>
