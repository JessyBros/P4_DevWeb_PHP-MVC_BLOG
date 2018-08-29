<!-- Lors d'un commentaire signalé par un utilisateur,
    Permet à l'écrivain de conserver ce commentaire si celui-ci juge qu'il est respectable.-->
<?php

if(isset($_POST['conserver']))
{  

    $idCommentaire  = isset($_POST['numeroCommentaire']) ? $_POST['numeroCommentaire'] : NULL;
    $conserverLeCommentairSignaler = $conserverLeCommentairSignalerManager->conserverLeCommentairSignaler($idCommentaire);
    
        
        if ($conserverLeCommentairSignaler)
        {
           
        $messageAlerte=" le commentaire " . $idCommentaire ." a été conserver ";
            header("Refresh: 3;url=signalerUnCommentaire");
        }
        else
        {
            $messageAlerte=" Une erreur est survenu ";
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
