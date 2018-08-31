<!-- Lorsqu'un utilisateur signale un commentaire,
    Lui indique si ce commentaire à bien été signalé ou non-->
<?php
if ( isset($_POST['signaler']) )
{
    $numEpisode = isset($_POST['numEpisode']) ? $_POST['numEpisode'] : NULL;

    $idCommentaire = isset($_POST['idCommentaire']) ? $_POST['idCommentaire'] : NULL;
    
    $postSignaler = $signalementDuCommentaire->commentaireSignaler($idCommentaire);
    
    if ($postSignaler)
    {    
        $messageAlerte=" Le commentaire est signalé ";        
    }
    else
    {
        $messageAlerte=" Erreur, lors du signalement du commentaire ";
    }
        ?>
<style>
    #alerte {
        display: block;
    }
</style>
<?php
}