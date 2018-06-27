<!-- Lors d'un commentaire signalé par un utilisateur,
    Permet à l'écrivain de conserver ce commentaire si celui-ci juge qu'il est respectable.-->
<?php
if(isset($_POST['conserver']))
{  

    $idCommentaire  = isset($_GET['commentaire']) ? $_GET['commentaire'] : NULL;
    $conserverLeCommentairSignaler = $conserverLeCommentairSignalerManager->conserverLeCommentairSignaler($idCommentaire);
    
        
        if ($conserverLeCommentairSignaler)
        {
            echo '<script>alert(" le commentaire ' . $idCommentaire .' a été conserver ");</script>';
            header("Location: signalerUnCommentaire");
        
        }
        else
        {
            echo '<script>alert(" Une erreur est survenu ");</script>';
        }
}
?>
