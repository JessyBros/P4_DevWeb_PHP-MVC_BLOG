<?php
require('controller/frontend.php');

try {
    if (isset($_GET['action']))
    {
        if ($_GET['action'] == 'accueil')
        {
            accueil();
        }
         elseif ($_GET['action'] == 'listesEpisodes') 
        {
            listesEpisodes();
        }
        elseif ($_GET['action'] == 'lectureEpisode' && $_GET['episode'] > "0" ) 
        {
            lectureEpisode();
        }
        elseif ($_GET['action'] == 'modifEpisode')
        {
             modifEpisode();
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
