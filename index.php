<?php
require('controller/frontend.php');

try {
    if (isset($_GET['action']))
    {
        if ($_GET['action'] == 'connexion') 
        {
            $lien = "?action=connexion";
            connexion();
        }
        elseif ($_GET['action'] == 'listesEpisodes') 
        {
            $lien = "?action=listesEpisodes";
            listesEpisodes();
        }
        elseif ($_GET['action'] == 'lectureEpisode') 
        {
            $lien  = "?action=lectureEpisode";
            lectureEpisode();
        }
        elseif ($_GET['action'] == 'espaceModerateur')
        {
            $lien = "?action=espaceModerateur";
             espaceModerateur();
        }
        elseif ($_GET['action'] == 'apercuDesEpisodes') 
        {
            $lien = "?action=apercuDesEpisodes";
            apercuDesEpisodes();
        }
        elseif ($_GET['action'] == 'ajouterUnEpisode') 
        {
            $lien = "?action=ajouterUnEpisode";
            ajouterUnEpisode();
        }
        elseif ($_GET['action'] == 'modifierUnEpisode') 
        {
            $lien = "?action=modifierUnEpisode";
            modifierUnEpisode();
        }
        elseif ($_GET['action'] == 'supprimerUnEpisode') 
        {
            $lien = "?action=supprimerUnEpisode";
            supprimerUnEpisode();
        }
        elseif ($_GET['action'] == 'signalerUnCommentaire') 
        {
            $lien = "?action=signalerUnCommentaire";
            signalerUnCommentaire();
        }
        elseif ($_GET['action'] == 'moderateurPseudoMdp') 
        {
            $lien = "?action=moderateurPseudoMdp";
            moderateurPseudoMdp();
        }
        else
        {      
            header("Location: index.php$lien");           
        }
    }
    else
    {
        $lien = "";
        accueil();
    }
}
catch(Exception $e)
{
    echo 'Erreur : ' . $e->getMessage();
}
