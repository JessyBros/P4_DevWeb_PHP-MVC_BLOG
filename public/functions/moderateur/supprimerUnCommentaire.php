<!-- Suppression du commentaire après vérification-->
<?php
$messageAlerte="";
if(isset($_POST['supprimer']))
{  
    $idCommentaire  = isset($_POST['numeroCommentaire']) ? $_POST['numeroCommentaire'] : NULL;
    $supprimerUnCommentaireSignaler = $supprimerUnCommentaireSignalerManager->supprimerUnCommentaireSignaler($idCommentaire);
    
    if ($supprimerUnCommentaireSignaler)
    {
        $messageAlerte=" le commentaire " . $idCommentaire ." a bien été  supprimer ";   
        header("Refresh: 3;url=signalerUnCommentaire");
    }
    else
    {
        $messageAlerte=" Une erreur est survenu lors de la suppresion du commentaire ";
         header("Refresh: 3;url=signalerUnCommentaire");
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
