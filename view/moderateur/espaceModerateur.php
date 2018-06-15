<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="public/css/moderateur/espaceModerateur.css" rel="stylesheet" />
    <title>EspaceDuModérateur</title>
    <script src="public/js/menuModerateur.js"></script>
</head>


<body>
   <?php require('public/textFunctions/headerModerateur.php'); ?>
    
<section id="corpsDeLaPage">
    
    <a  href="index.php? action=apercuDesEpisodes">
        <p>Aperçu des épisodes</p>
    </a>
     
    <a  href="index.php? action=ajouterUnEpisode">
        <p>Ajouter un épisode</p>
    </a>
    
    <a  href="index.php? action=modifierUnEpisode">
        <p>Modifier un épisode</p>
    </a>
    
    <a  href="index.php? action=supprimerUnEpisode">
        <p>supprimer un épisode</p>
    </a>
    
    <a  href="index.php? action=signalerUnCommentaire">
        <p>Les commentaires signalés</p>
    </a>
    
    <a  href="index.php? action=moderateurPseudoMdp">
        <p>Modification : <br> Pseudo / Mot de passe</p>
    </a>

</section>

</body>

</html>
