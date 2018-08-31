<?php
require('model/Utilisateur.php');
require('model/Moderateur.php');

use \Blog\Projet\Model\UtilisateurPostManager;
use \Blog\Projet\Model\ModerateurPostManager;

// Espace UTILISATEUR ! \\

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

     require('public/functions/utilisateur/espaceConnexion.php');
    
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

    require('public/functions/utilisateur/verificationLecturesDesEpisodes/message.php');
    require('public/functions/utilisateur/ajouterUnCommentaire.php');
    require('public/functions/utilisateur/buttonEpisodeSuivPrec.php'); 
    require('public/functions/utilisateur/signalerUnCommentaire.php');
    require('view/utilisateur/lecturesDesEpisodes.php');
    require('public/functions/utilisateur/verificationLecturesDesEpisodes/messageCss.php');
    require('public/functions/utilisateur/messageAlerteCss.php');
    
    

}

// Espace MODERATEUR ! \\

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
    
    require('public/functions/moderateur/verificationApercuDesEpisodes/message.php');
    require('view/moderateur/apercuDesEpisodes.php');
    require('public/functions/moderateur/verificationApercuDesEpisodes/messageCss.php');
    
}

function ajouterUnEpisode()
{
    $ajoutEpisodeManagers = new ModerateurPostManager();
    
    $nombreduDernierEpisodeManager = new ModerateurPostManager();
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();
    
    $verificationEpisodeExistantManagers = new ModerateurPostManager(); // 
    
    
    require('public/functions/moderateur/ajouterUnEpisode.php');
    
    require('view/moderateur/ajouterUnEpisode.php');
    require('public/functions/moderateur/messageAlerteCss.php');
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
         $modifImageApercu = isset($_POST['modifImageApercu']) ? $_POST['modifImageApercu'] : NULL;
    $modificationEpisode = $modificationEpisodeManagers->modificationEpisode($modifTitre,$modifDescription,$modifTexte,$modifImageApercu,$modifNumeroEpisode);
    
    $donneesEpisodeManager = new ModerateurPostManager();
        $getEpisode  = isset($_GET['episode']) ? $_GET['episode'] : NULL;
    $donneesEpisode = $donneesEpisodeManager->donneesEpisode($getEpisode );
    
    require('public/functions/moderateur/verificationModifierUnEpisode/message.php');
    require('public/functions/moderateur/modifierUnEpisode.php');
    require('view/moderateur/modifierUnEpisode.php');
    require('public/functions/moderateur/verificationModifierUnEpisode/messageCss.php');
    require('public/functions/moderateur/messageAlerteCss.php');
    
}

function supprimerUnEpisode()
{
    $listEpisodeManagers = new ModerateurPostManager(); 
    $listEpisode = $listEpisodeManagers->listEpisode();
    
    $nombreduDernierEpisodeManager = new ModerateurPostManager();
    $nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();
    
    $donneesEpisodeManager = new ModerateurPostManager();
        $getEpisode  = isset($_GET['episode']) ? $_GET['episode'] : NULL;
    $donneesEpisode = $donneesEpisodeManager->donneesEpisode($getEpisode );
    
    $suppressionEpisodeManagers = new ModerateurPostManager();
    
    $suppressionCommentaireManagers = new ModerateurPostManager();
    
    require('public/functions/moderateur/verificationSupprimerUnEpisode/message.php');
    require('public/functions/moderateur/supprimerUnEpisode.php');
    require('view/moderateur/supprimerUnEpisode.php');
    require('public/functions/moderateur/verificationSupprimerUnEpisode/messageCss.php');
    require('public/functions/moderateur/messageAlerteCss.php');
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
    
    
    require('public/functions/moderateur/verificationSignalerUnCommentaire/message.php');
    require('public/functions/moderateur/supprimerUnCommentaire.php');
    require('public/functions/moderateur/conserverUnCommentaire.php'); 
    require('view/moderateur/signalerUnCommentaire.php');
    require('public/functions/moderateur/verificationSignalerUnCommentaire/messageCss.php');
    require('public/functions/moderateur/messageAlerteCss.php');
}

function moderateurPseudoMdp()
{
    $dataManager = new ModerateurPostManager(); /* récupération données modérateur */
    $data = $dataManager-> moderateurPseudoMdp();
    
    $modificationPseudoMdpManagers = new ModerateurPostManager();
        $pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
        $motDePasse = isset($_POST['motDePasse']) ? $_POST['motDePasse'] : NULL;        
    $modificationPseudoMdp = $modificationPseudoMdpManagers->modificationPseudoMdp($pseudo,$motDePasse);
        
    require('public/functions/moderateur/moderateurPseudoMdp.php');
    
    require('view/moderateur/moderateurPseudoMdp.php');
    require('public/functions/moderateur/messageAlerteCss.php');
}
