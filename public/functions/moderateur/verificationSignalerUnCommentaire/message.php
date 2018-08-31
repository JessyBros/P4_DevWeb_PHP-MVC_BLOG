<?php 
$message = "";
if (isset($_GET['commentaire']))    
{
   
    $episodeSignaler = $commentaireSelectionner['commentaireSignaler'];
    
   if ($episodeSignaler == "nonSignaler")
    {
        $message = "ce commentaire n'est pas signalé";
    }
    else
    {
        $message = "ce commentaire n'existe pas";
    }
}

elseif($aucunCommentaireSignaler['commentaireSignaler'] != "signaler")
{
    $message = "Aucun commentaire n'a été signalé :D";
}

    

?>
