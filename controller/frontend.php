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

    require('view/accueil.php');
}

function connexion()
{
    $connexionManager = new PostManager(); /* connexion à l'espace modérateur */
    $connexion = $connexionManager-> connexionDuModerateur();
    
    $commentManager = new PostManager(); /* header */
    $choixEpisode = $commentManager->choixEpisode();

    require('view/connexion.php');

}

function listesEpisodes()
{
    $commentManager = new PostManager(); /* header */
    $choixEpisode = $commentManager->choixEpisode();

    $listesEpisodesManager = new PostManager(); /* Listes de chaque épisodes crées*/
    $listesEpisodes = $listesEpisodesManager->listesEpisodes();


    require('view/listesEpisodes.php');

}

function lectureEpisode()
{
   
    
    $commentManager = new PostManager(); /* header */
    $choixEpisode = $commentManager->choixEpisode();

    $postManager = new PostManager(); /* récupération de l'épisode selon le choix de l'utilisateur*/
    $post = $postManager->lectureEpisode($_GET['episode']); 

    $nombreduDernierEpisodeManager = new PostManager(); /* nombre du dernier épisode */
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();


    $commentManager = new PostManager();  /* récupère tous les commentaires selon l'épisodes*/
    $commentaires = $commentManager->getComments($_GET['episode']);

    $commentManager = new PostManager();  /* ajout un commentaire de la part de l'utilisateur */

    require('view/lireBlog.php');

}


function modifEpisode()
{
    $ajoutEpisodeManagers = new PostManager(); // Création d'un objet

    $nombreduDernierEpisodeManager = new PostManager();
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();

    $listEpisodeManagers = new PostManager(); // Création d'un objet
    $listEpisode = $listEpisodeManagers->listEpisode(); // Appel d'une fonction de cet objet

    $donnéesEpisodeManager = new PostManager();
        $getEpisode  = isset($_GET['episode']) ? $_GET['episode'] : NULL;
    $donnéesEpisode = $donnéesEpisodeManager->donnéesEpisode($getEpisode );

    $modificationEpisodeManagers = new PostManager();
         $modifNumeroEpisode = isset($_POST['modifNumeroEpisode']) ? $_POST['modifNumeroEpisode'] : NULL;
         $modifTitre = isset($_POST['modifTitre']) ? $_POST['modifTitre'] : NULL;
         $modifDescription = isset($_POST['modifDescription']) ? $_POST['modifDescription'] : NULL;
         $modifTexte= isset($_POST['modifTexte']) ? $_POST['modifTexte'] : NULL;
    $modificationEpisode = $modificationEpisodeManagers->modificationEpisode($modifTitre,$modifDescription,$modifTitre,$modifNumeroEpisode);

    $suppressionEpisodeManagers = new PostManager();

    require('view/modifBlog.php');
}


