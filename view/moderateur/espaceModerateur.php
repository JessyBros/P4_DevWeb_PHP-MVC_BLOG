<!-- Menu d'accueil de l'écrivain lors de sa connexion -->
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

        <a href="apercuDesEpisodes">
            <p>Aperçu des épisodes</p>
        </a>

        <a href="ajouterUnEpisode">
            <p>Ajouter un épisode</p>
        </a>

        <a href="modifierUnEpisode">
            <p>Modifier un épisode</p>
        </a>

        <a href="supprimerUnEpisode">
            <p>supprimer un épisode</p>
        </a>

        <a href="signalerUnCommentaire">
            <p>Les commentaires signalés</p>
        </a>

        <a href="moderateurPseudoMdp">
            <p>Modification : <br> Pseudo / Mot de passe</p>
        </a>

    </section>

</body>

</html>
