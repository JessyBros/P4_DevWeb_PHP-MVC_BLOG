<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="public/css/moderateur/signalerUnCommentaire.css" rel="stylesheet" />
    <title>Mon blog</title>
    <script src="public/js/menuModerateur.js"></script>
    <script src="../public/js/supprimerUnCommentaire.js"></script>
    <script src="../public/js/validerUnCommentaire.js"></script>
</head>

<body>
    <?php require('public/textFunctions/headerModerateur.php'); ?>

    <section id="corpsDeLaPage">
        
        <aside>
            <p>Le commentaire X</p>
            <p>associé à l'épisode X</p>
            <button onclick="supprimerUnCommentaire()">Supression du commentaire</button>
            <button onclick="validerUnCommentaire()">Commentaire valide</button>

            <div id="supprimerUnCommentaire">
                <p>Souhaitez-vous réellement supprimer ce comentaire?</p>
                <button onclick="supprimerOui()">Oui</button>
                <span>ou</span>
                <button onclick="supprimerNon()">Non</button>
            </div>

            <div id="validerUnCommentaire">
                <p>Validez-vous ce comentaire?</p>
                <button onclick="validerOui()">Oui</button>
                <span>ou</span>
                <button onclick="validerNon()">Non</button>
            </div>

        </aside>
        
    </section>

</body>

</html>
