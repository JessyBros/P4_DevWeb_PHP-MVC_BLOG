<!-- Lors d'un commentaire signalé par un utilisateur,
    Permet à l'écrivain de conserver ce commentaire si celui-ci juge qu'il est respectable.-->
<?php
$messageAlerte="";
if(isset($_POST['conserver']))
{  

    $idCommentaire  = isset($_GET['commentaire']) ? $_GET['commentaire'] : NULL;
    $conserverLeCommentairSignaler = $conserverLeCommentairSignalerManager->conserverLeCommentairSignaler($idCommentaire);
    
        
        if ($conserverLeCommentairSignaler)
        {
           $messageAlerte=" le commentaire " . $idCommentaire ." a été conserver ";
            header("Location: signalerUnCommentaire");
        
        }
        else
        {
            $messageAlerte=" Une erreur est survenu ";
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
