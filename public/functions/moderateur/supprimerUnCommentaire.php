<!-- Suppression du commentaire après vérification-->
<?php
$messageAlerte="";
if(isset($_POST['supprimer']))
{  
    $idCommentaire  = isset($_GET['commentaire']) ? $_GET['commentaire'] : NULL;
    $supprimerUnCommentaireSignaler = $supprimerUnCommentaireSignalerManager->supprimerUnCommentaireSignaler($idCommentaire);
    
    if ($supprimerUnCommentaireSignaler)
    {
        $messageAlerte=" le commentaire " . $idCommentaire ." a bien été  supprimer ";   
        header("Location: signalerUnCommentaire");  
    }
    else
    {
        $messageAlerte=" Une erreur est survenu lors de la suppresion du commentaire ";
    }
    ?>
    <style>
        #alerte {
            display: block;
        }

    </style>
    <?php
}
?>
