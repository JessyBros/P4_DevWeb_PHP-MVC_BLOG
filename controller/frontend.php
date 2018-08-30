<?php
require('model/utilisateur.php');
require('model/moderateur.php');

// Espace UTILISATEUR ! \\

function accueil()
{
    
    $commentManager = new Blog\Projet\Model\UtilisateurPostManager(); /* header */
    $choixEpisode = $commentManager->choixEpisode();

    $postManager = new Blog\Projet\Model\UtilisateurPostManager(); /* aperçu du premier épisode*/
    $data = $postManager->premierEpisode();

    $postManagers = new Blog\Projet\Model\UtilisateurPostManager(); // aperçu des trois derniers épisodes
    $episodes = $postManagers->dernierEpisode(); 

    require('view/utilisateur/accueil.php');
}

function connexion()
{
    $connexionManager = new Blog\Projet\Model\UtilisateurPostManager(); /* connexion à l'espace modérateur */
    $connexion = $connexionManager-> connexionDuModerateur();
    
    $commentManager = new Blog\Projet\Model\UtilisateurPostManager(); /* header */
    $choixEpisode = $commentManager->choixEpisode();

     require('public/functions/utilisateur/espaceConnexion.php');
    
    require('view/utilisateur/connexion.php');
   
}

function listesEpisodes()
{
    $commentManager = new Blog\Projet\Model\UtilisateurPostManager(); /* header */
    $choixEpisode = $commentManager->choixEpisode();

    $listesEpisodesManager = new Blog\Projet\Model\UtilisateurPostManager(); /* Listes de chaque épisodes crées*/
    $listesEpisodes = $listesEpisodesManager->listesEpisodes();

    require('view/utilisateur/listesDesEpisodes.php');

}

function lectureEpisode()
{
   
    
    $commentManager = new Blog\Projet\Model\UtilisateurPostManager(); /* header */
    $choixEpisode = $commentManager->choixEpisode();

    $postManager = new Blog\Projet\Model\UtilisateurPostManager(); /* récupération de l'épisode selon le choix de l'utilisateur*/
    if (isset($_GET['episode']))
    {
         $post = $postManager->lectureEpisode($_GET['episode']); 
    }
     

    $nombreduDernierEpisodeManager = new Blog\Projet\Model\UtilisateurPostManager(); /* nombre du dernier épisode */
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();


    $commentManager = new Blog\Projet\Model\UtilisateurPostManager();  /* récupère tous les commentaires selon l'épisodes*/
    if (isset($_GET['episode']))
    {
          $commentaires = $commentManager->getComments($_GET['episode']);
    }
   

    $commentManager = new Blog\Projet\Model\UtilisateurPostManager();  /* ajout un commentaire de la part de l'utilisateur */
    
    $signalementDuCommentaire  = new Blog\Projet\Model\UtilisateurPostManager();

    
    require('public/functions/utilisateur/ajouterUnCommentaire.php');
    require('public/functions/utilisateur/buttonEpisodeSuivPrec.php'); 
    require('public/functions/utilisateur/signalerUnCommentaire.php');
    $message = "";
    require('view/utilisateur/lecturesDesEpisodes.php');
    require('public/functions/utilisateur/verificationLecturesDesEpisodes.php');
    

}

// Espace MODERATEUR ! \\

function espaceModerateur()
{
    require('view/moderateur/espaceModerateur.php');
}

function apercuDesEpisodes()
{
    $listEpisodeManagers = new Blog\Projet\Model\ModerateurPostManager(); 
    $listEpisode = $listEpisodeManagers->listEpisode();
    
    $nombreduDernierEpisodeManager = new Blog\Projet\Model\ModerateurPostManager(); /* nombre du dernier épisode */
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();
    
    $postManager = new Blog\Projet\Model\ModerateurPostManager(); /* récupération de l'épisode selon le choix de l'utilisateur*/
     if (isset($_GET['episode']))
    {
         $post = $postManager->lectureEpisode($_GET['episode']); 
    }
    
    $message = "";
    require('view/moderateur/apercuDesEpisodes.php');
    require('public/functions/moderateur/verificationApercuDesEpisodes.php');
}

function ajouterUnEpisode()
{
    $ajoutEpisodeManagers = new Blog\Projet\Model\ModerateurPostManager();
    
    $nombreduDernierEpisodeManager = new Blog\Projet\Model\ModerateurPostManager();
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();
    
    $verificationEpisodeExistantManagers = new Blog\Projet\Model\ModerateurPostManager(); // 
    
    
    require('public/functions/moderateur/ajouterUnEpisode.php');
    
    require('view/moderateur/ajouterUnEpisode.php');
}

function modifierUnEpisode()
{
    $listEpisodeManagers = new Blog\Projet\Model\ModerateurPostManager(); 
    $listEpisode = $listEpisodeManagers->listEpisode();
    
    $nombreduDernierEpisodeManager = new Blog\Projet\Model\ModerateurPostManager();
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();
    
    $modificationEpisodeManagers = new Blog\Projet\Model\ModerateurPostManager();
         $modifNumeroEpisode = isset($_POST['modifNumeroEpisode']) ? $_POST['modifNumeroEpisode'] : NULL;
         $modifTitre = isset($_POST['modifTitre']) ? $_POST['modifTitre'] : NULL;
         $modifDescription = isset($_POST['modifDescription']) ? $_POST['modifDescription'] : NULL;
         $modifTexte = isset($_POST['modifTexte']) ? $_POST['modifTexte'] : NULL;
         $modifImageApercu = isset($_POST['modifImageApercu']) ? $_POST['modifImageApercu'] : NULL;
    $modificationEpisode = $modificationEpisodeManagers->modificationEpisode($modifTitre,$modifDescription,$modifTexte,$modifImageApercu,$modifNumeroEpisode);
    
    $donneesEpisodeManager = new Blog\Projet\Model\ModerateurPostManager();
        $getEpisode  = isset($_GET['episode']) ? $_GET['episode'] : NULL;
    $donneesEpisode = $donneesEpisodeManager->donneesEpisode($getEpisode );
    
    require('public/functions/moderateur/modifierUnEpisode.php');
    $message = "";
    require('view/moderateur/modifierUnEpisode.php');
    require('public/functions/moderateur/verificationModifierUnEpisode.php');
}

function supprimerUnEpisode()
{
    $listEpisodeManagers = new Blog\Projet\Model\ModerateurPostManager(); 
    $listEpisode = $listEpisodeManagers->listEpisode();
    
    $nombreduDernierEpisodeManager = new Blog\Projet\Model\ModerateurPostManager();
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();
    
    $donneesEpisodeManager = new Blog\Projet\Model\ModerateurPostManager();
        $getEpisode  = isset($_GET['episode']) ? $_GET['episode'] : NULL;
    $donneesEpisode = $donneesEpisodeManager->donneesEpisode($getEpisode );
    
    $suppressionEpisodeManagers = new Blog\Projet\Model\ModerateurPostManager();
    
    $suppressionCommentaireManagers = new Blog\Projet\Model\ModerateurPostManager();
    
    require('public/functions/moderateur/supprimerUnEpisode.php');
    
    require('view/moderateur/supprimerUnEpisode.php');
}

function signalerUnCommentaire()
{
    $afficheLesCommentairesSignalerManager = new Blog\Projet\Model\ModerateurPostManager();
    $afficheLesCommentairesSignaler = $afficheLesCommentairesSignalerManager->afficheLesCommentairesSignaler();
    
    $commentaireSelectionnerManager = new Blog\Projet\Model\ModerateurPostManager();
        $idCommentaire  = isset($_GET['commentaire']) ? $_GET['commentaire'] : NULL;
    $commentaireSelectionner = $commentaireSelectionnerManager->commentaireSelectionner($idCommentaire);
    
    $supprimerUnCommentaireSignalerManager = new Blog\Projet\Model\ModerateurPostManager();
    
    $conserverLeCommentairSignalerManager = new Blog\Projet\Model\ModerateurPostManager();
    
    $aucunCommentaireSignalerManager = new Blog\Projet\Model\ModerateurPostManager(); /* aperçu du premier épisode*/
    $aucunCommentaireSignaler = $aucunCommentaireSignalerManager->aucunCommentaireSignaler();
    
    require('public/functions/moderateur/supprimerUnCommentaire.php');
    require('public/functions/moderateur/conserverUnCommentaire.php'); 
    $message = "";
    require('view/moderateur/signalerUnCommentaire.php');
    require('public/functions/moderateur/verificationSignalerUnCommentaire.php');
}

function moderateurPseudoMdp()
{
    $dataManager = new Blog\Projet\Model\ModerateurPostManager(); /* récupération données modérateur */
    $data = $dataManager-> moderateurPseudoMdp();
    
    $modificationPseudoMdpManagers = new Blog\Projet\Model\ModerateurPostManager();
        $pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
        $motDePasse = isset($_POST['motDePasse']) ? $_POST['motDePasse'] : NULL;        
    $modificationPseudoMdp = $modificationPseudoMdpManagers->modificationPseudoMdp($pseudo,$motDePasse);
        
    require('public/functions/moderateur/moderateurPseudoMdp.php');
    
    require('view/moderateur/moderateurPseudoMdp.php');
}
