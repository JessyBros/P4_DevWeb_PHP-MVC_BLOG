<?php 
$message = "";
if (isset($_GET['commentaire']))    
{
   
    $episodeSignaler = $commentaireSelectionner['commentaireSignaler'];
    
    if ($episodeSignaler == "signaler")
    {
        ?>
<style>
    #formEpisodeSignaler {
        display: block;
    }

    #listeDesCommentairesSignales {
        display: none;
    }

</style>
<?php
    }
}

elseif($aucunCommentaireSignaler['commentaireSignaler'] != "signaler")
{
         ?>
    <style>
        #listeDesCommentairesSignales {
            display: none;
        }

    </style>
    <?php
}

    

?>
