<?php
require('model/utilisateur.php');
require('model/moderateur.php');

function accueil()
{
   
    
    $commentManager = new UtilisateurPostManager(); /* header */
    $choixEpisode = $commentManager->choixEpisode();

    $postManager = new UtilisateurPostManager(); /* aperçu du premier épisode*/
    $data = $postManager->premierEpisode();

    $postManagers = new UtilisateurPostManager(); // aperçu des trois derniers épisodes
    $episodes = $postManagers->dernierEpisode(); 

    require('view/utilisateur/accueil.php');
}

function connexion()
{
    $connexionManager = new UtilisateurPostManager(); /* connexion à l'espace modérateur */
    $connexion = $connexionManager-> connexionDuModerateur();
    
    $commentManager = new UtilisateurPostManager(); /* header */
    $choixEpisode = $commentManager->choixEpisode();

    require('view/utilisateur/connexion.php');

}

function listesEpisodes()
{
    $commentManager = new UtilisateurPostManager(); /* header */
    $choixEpisode = $commentManager->choixEpisode();

    $listesEpisodesManager = new UtilisateurPostManager(); /* Listes de chaque épisodes crées*/
    $listesEpisodes = $listesEpisodesManager->listesEpisodes();


    require('view/utilisateur/listesDesEpisodes.php');

}

function lectureEpisode()
{
   
    
    $commentManager = new UtilisateurPostManager(); /* header */
    $choixEpisode = $commentManager->choixEpisode();

    $postManager = new UtilisateurPostManager(); /* récupération de l'épisode selon le choix de l'utilisateur*/
    if (isset($_GET['episode']))
    {
         $post = $postManager->lectureEpisode($_GET['episode']); 
    }
     

    $nombreduDernierEpisodeManager = new UtilisateurPostManager(); /* nombre du dernier épisode */
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();


    $commentManager = new UtilisateurPostManager();  /* récupère tous les commentaires selon l'épisodes*/
    if (isset($_GET['episode']))
    {
          $commentaires = $commentManager->getComments($_GET['episode']);
    }
   

    $commentManager = new UtilisateurPostManager();  /* ajout un commentaire de la part de l'utilisateur */
    
    $signalementDuCommentaire  = new UtilisateurPostManager();

    require('view/utilisateur/lecturesDesEpisodes.php');

}


function espaceModerateur()
{
    
    require('view/moderateur/espaceModerateur.php');
}

function apercuDesEpisodes()
{
    $listEpisodeManagers = new ModerateurPostManager(); 
    $listEpisode = $listEpisodeManagers->listEpisode();
    
    $nombreduDernierEpisodeManager = new ModerateurPostManager(); /* nombre du dernier épisode */
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();
    
    $postManager = new ModerateurPostManager(); /* récupération de l'épisode selon le choix de l'utilisateur*/
     if (isset($_GET['episode']))
    {
         $post = $postManager->lectureEpisode($_GET['episode']); 
    }
    
    
   
    require('view/moderateur/apercuDesEpisodes.php');
}

function ajouterUnEpisode()
{
    $ajoutEpisodeManagers = new ModerateurPostManager();
    
    $nombreduDernierEpisodeManager = new ModerateurPostManager();
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();
    
    $verificationEpisodeExistantManagers = new ModerateurPostManager(); // 
    
    
    require('view/moderateur/ajouterUnEpisode.php');
}

function modifierUnEpisode()
{
    $listEpisodeManagers = new ModerateurPostManager(); 
    $listEpisode = $listEpisodeManagers->listEpisode();
    
    $nombreduDernierEpisodeManager = new ModerateurPostManager();
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();
    
    $modificationEpisodeManagers = new ModerateurPostManager();
         $modifNumeroEpisode = isset($_POST['modifNumeroEpisode']) ? $_POST['modifNumeroEpisode'] : NULL;
         $modifTitre = isset($_POST['modifTitre']) ? $_POST['modifTitre'] : NULL;
         $modifDescription = isset($_POST['modifDescription']) ? $_POST['modifDescription'] : NULL;
         $modifTexte = isset($_POST['modifTexte']) ? $_POST['modifTexte'] : NULL;
    $modificationEpisode = $modificationEpisodeManagers->modificationEpisode($modifTitre,$modifDescription,$modifTexte,$modifNumeroEpisode);
    
    $donnéesEpisodeManager = new ModerateurPostManager();
        $getEpisode  = isset($_GET['episode']) ? $_GET['episode'] : NULL;
    $donnéesEpisode = $donnéesEpisodeManager->donnéesEpisode($getEpisode );
    
    require('view/moderateur/modifierUnEpisode.php');
}

function supprimerUnEpisode()
{
    $listEpisodeManagers = new ModerateurPostManager(); 
    $listEpisode = $listEpisodeManagers->listEpisode();
    
    $nombreduDernierEpisodeManager = new ModerateurPostManager();
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();
    
    $donnéesEpisodeManager = new ModerateurPostManager();
        $getEpisode  = isset($_GET['episode']) ? $_GET['episode'] : NULL;
    $donnéesEpisode = $donnéesEpisodeManager->donnéesEpisode($getEpisode );
    
    $suppressionEpisodeManagers = new ModerateurPostManager();
    
    $suppressionCommentaireManagers = new ModerateurPostManager();
    
    require('view/moderateur/supprimerUnEpisode.php');
}

function signalerUnCommentaire()
{
    $afficheLesCommentairesSignalerManager = new ModerateurPostManager();
    $afficheLesCommentairesSignaler = $afficheLesCommentairesSignalerManager->afficheLesCommentairesSignaler();
    
    $commentaireSelectionnerManager = new ModerateurPostManager();
        $idCommentaire  = isset($_GET['commentaire']) ? $_GET['commentaire'] : NULL;
    $commentaireSelectionner = $commentaireSelectionnerManager->commentaireSelectionner($idCommentaire);
    
    $supprimerUnCommentaireSignalerManager = new ModerateurPostManager();
    
    $conserverLeCommentairSignalerManager = new ModerateurPostManager();
    
    $aucunCommentaireSignalerManager = new ModerateurPostManager(); /* aperçu du premier épisode*/
    $aucunCommentaireSignaler = $aucunCommentaireSignalerManager->aucunCommentaireSignaler();
    
    require('view/moderateur/signalerUnCommentaire.php');
}

function moderateurPseudoMdp()
{
    $dataManager = new ModerateurPostManager(); /* récupération donnés modérateur */
    $data = $dataManager-> moderateurPseudoMdp();
    
    $modificationPseudoMdpManagers = new ModerateurPostManager();
        $pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
        $motDePasse = isset($_POST['motDePasse']) ? $_POST['motDePasse'] : NULL;        
    $modificationPseudoMdp = $modificationPseudoMdpManagers->modificationPseudoMdp($pseudo,$motDePasse);
        
    require('view/moderateur/moderateurPseudoMdp.php');
}
