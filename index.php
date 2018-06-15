<?php
require('controller/frontend.php');

try {
    if (isset($_GET['action']))
    {
        if ($_GET['action'] == 'accueil')
        {
            accueil();
        }
        elseif ($_GET['action'] == 'connexion') 
        {
            connexion();
        }
        elseif ($_GET['action'] == 'listesEpisodes') 
        {
            listesEpisodes();
        }
        elseif ($_GET['action'] == 'lectureEpisode' /*&& $_GET['episode'] > "0" */) 
        {
            lectureEpisode();
        }
        elseif ($_GET['action'] == 'espaceModerateur')
        {
             espaceModerateur();
        }
        elseif ($_GET['action'] == 'apercuDesEpisodes') 
        {
            apercuDesEpisodes();
        }
        elseif ($_GET['action'] == 'ajouterUnEpisode') 
        {
            ajouterUnEpisode();
        }
          elseif ($_GET['action'] == 'modifierUnEpisode') 
        {
            modifierUnEpisode();
        }
          elseif ($_GET['action'] == 'supprimerUnEpisode') 
        {
            supprimerUnEpisode();
        }
          elseif ($_GET['action'] == 'signalerUnCommentaire') 
        {
            signalerUnCommentaire();
        }
            elseif ($_GET['action'] == 'moderateurPseudoMdp') 
        {
            moderateurPseudoMdp();
        }
        else
        {
            throw new Exception('Aucun identifiant de billet envoyé');
        }
    }
    else
    {
        accueil();
    }
}
catch(Exception $e)
{
    echo 'Erreur : ' . $e->getMessage();
}
