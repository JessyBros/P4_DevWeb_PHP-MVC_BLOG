<?php 
$message = "";


if (isset($_GET['commentaire']))    
{
   
    $episodeSignaler = $commentaireSelectionner['commentaireSignaler'];
    
    if ($episodeSignaler == "signaler")
    {
        ?> 
        <style>
        #formEpisodeSignaler
        {
            display: block;
        } 
        #listeDesCommentairesSignales
        {
            display: none;    
        }
        </style>
        <?php
    }
    elseif ($episodeSignaler == "nonSignaler")
    {
        $message = "ce commentaire n'est pas signaler";
    }
    else
    {
        $message = "ce commentaire n'existe pas";
    }
}

elseif($aucunCommentaireSignaler['commentaireSignaler'] != "signaler")
{
         ?> 
        <style>
      
        #listeDesCommentairesSignales
        {
            display: none;    
        }
        </style>
        <?php
    $message = "Aucun commentaire n'a été signalé :D";
}

    

?>
    