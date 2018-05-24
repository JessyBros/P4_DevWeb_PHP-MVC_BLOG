<?php
require('model/model.php');

function accueil()
{
   
    
    $commentManager = new PostManager(); /* header */
    $choixEpisode = $commentManager->choixEpisode();

    $postManager = new PostManager(); /* aperçu du premier épisode*/
    $data = $postManager->premierEpisode();

    $postManagers = new PostManager(); // aperçu des trois derniers épisodes
    $episodes = $postManagers->dernierEpisode(); 

    require('view/utilisateur/accueil.php');
}

function connexion()
{
    $connexionManager = new PostManager(); /* connexion à l'espace modérateur */
    $connexion = $connexionManager-> connexionDuModerateur();
    
    $commentManager = new PostManager(); /* header */
    $choixEpisode = $commentManager->choixEpisode();

    require('view/utilisateur/connexion.php');

}

function listesEpisodes()
{
    $commentManager = new PostManager(); /* header */
    $choixEpisode = $commentManager->choixEpisode();

    $listesEpisodesManager = new PostManager(); /* Listes de chaque épisodes crées*/
    $listesEpisodes = $listesEpisodesManager->listesEpisodes();


    require('view/utilisateur/listesDesEpisodes.php');

}

function lectureEpisode()
{
   
    
    $commentManager = new PostManager(); /* header */
    $choixEpisode = $commentManager->choixEpisode();

    $postManager = new PostManager(); /* récupération de l'épisode selon le choix de l'utilisateur*/
    if (isset($_GET['episode']))
    {
         $post = $postManager->lectureEpisode($_GET['episode']); 
    }
     

    $nombreduDernierEpisodeManager = new PostManager(); /* nombre du dernier épisode */
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();


    $commentManager = new PostManager();  /* récupère tous les commentaires selon l'épisodes*/
    if (isset($_GET['episode']))
    {
          $commentaires = $commentManager->getComments($_GET['episode']);
    }
   

    $commentManager = new PostManager();  /* ajout un commentaire de la part de l'utilisateur */

    require('view/utilisateur/lecturesDesEpisodes.php');

}


function espaceModerateur()
{
    
    require('view/moderateur/espaceModerateur.php');
}

function apercuDesEpisodes()
{
    $listEpisodeManagers = new PostManager(); 
    $listEpisode = $listEpisodeManagers->listEpisode();
    
    $nombreduDernierEpisodeManager = new PostManager(); /* nombre du dernier épisode */
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();
    
    $postManager = new PostManager(); /* récupération de l'épisode selon le choix de l'utilisateur*/
     if (isset($_GET['episode']))
    {
         $post = $postManager->lectureEpisode($_GET['episode']); 
    }
    
    
   
    require('view/moderateur/apercuDesEpisodes.php');
}

function ajouterUnEpisode()
{
    $ajoutEpisodeManagers = new PostManager();
    
    $nombreduDernierEpisodeManager = new PostManager();
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();
    
    require('view/moderateur/ajouterUnEpisode.php');
}

function modifierUnEpisode()
{
    $listEpisodeManagers = new PostManager(); 
    $listEpisode = $listEpisodeManagers->listEpisode();
    
    $nombreduDernierEpisodeManager = new PostManager();
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();
    
    $modificationEpisodeManagers = new PostManager();
         $modifNumeroEpisode = isset($_POST['modifNumeroEpisode']) ? $_POST['modifNumeroEpisode'] : NULL;
         $modifTitre = isset($_POST['modifTitre']) ? $_POST['modifTitre'] : NULL;
         $modifDescription = isset($_POST['modifDescription']) ? $_POST['modifDescription'] : NULL;
         $modifTexte = isset($_POST['modifTexte']) ? $_POST['modifTexte'] : NULL;
    $modificationEpisode = $modificationEpisodeManagers->modificationEpisode($modifTitre,$modifDescription,$modifTexte,$modifNumeroEpisode);
    
    $donnéesEpisodeManager = new PostManager();
        $getEpisode  = isset($_GET['episode']) ? $_GET['episode'] : NULL;
    $donnéesEpisode = $donnéesEpisodeManager->donnéesEpisode($getEpisode );
    
    require('view/moderateur/modifierUnEpisode.php');
}

function supprimerUnEpisode()
{
    $listEpisodeManagers = new PostManager(); 
    $listEpisode = $listEpisodeManagers->listEpisode();
    
    $nombreduDernierEpisodeManager = new PostManager();
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();
    
    $donnéesEpisodeManager = new PostManager();
        $getEpisode  = isset($_GET['episode']) ? $_GET['episode'] : NULL;
    $donnéesEpisode = $donnéesEpisodeManager->donnéesEpisode($getEpisode );
    
    $suppressionEpisodeManagers = new PostManager();
    
    require('view/moderateur/supprimerUnEpisode.php');
}

function signalerUnCommentaire()
{
    require('view/moderateur/signalerUnCommentaire.php');
}