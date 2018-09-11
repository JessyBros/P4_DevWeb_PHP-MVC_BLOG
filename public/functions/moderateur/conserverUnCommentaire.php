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
}
?>
