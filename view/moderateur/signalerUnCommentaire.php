<?php require('public/functions/supprimerUnCommentaire.php'); ?>
<?php require('public/functions/conserverUnCommentaire.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="public/css/moderateur/signalerUnCommentaire.css" rel="stylesheet" />
    <title>Mon blog</title>
    <script src="public/js/menuModerateur.js"></script>

</head>

<body>
    <?php require('public/textFunctions/headerModerateur.php'); ?>

    <section id="corpsDeLaPage">


        <h2>Liste des épisodes signalés par les internautes</h2>
        <!-- Afficher la liste des commentaires signalés-->
        <aside id="listeDesCommentairesSignales">

            <?php while ($commentaireSignaler = $afficheLesCommentairesSignaler->fetch()) { ?>
            <p>
                <a href="commentaire-<?= htmlspecialchars($commentaireSignaler['id'])?>">
                    <p>
                        <strong>
                        commentaire
                        <?= htmlspecialchars($commentaireSignaler['id']) ?> :
                    </strong>
                        <?= htmlspecialchars($commentaireSignaler['autheur']) ?>
                            <?= htmlspecialchars($commentaireSignaler['commentaire']) ?>
                    </p>
                </a>
            </p>
            <?php $aucunCommentaireSignaler; ?>
            <?php } $afficheLesCommentairesSignaler->closeCursor(); ?>
        </aside>

        <!-- Affiche un message d'erreur en cas de trafic d'url-->
        <?php require('public/functions/verificationSignalerUnCommentaire.php'); ?>
        <?php echo $message; ?>


        <!-- Afficher le commentaire sélectionné-->
        <form id="formEpisodeSignaler" action="commentaire-<?= htmlspecialchars($_GET['commentaire'])?>" method="post" id="formAjouter">
            <div>
                <p>Pseudo :</p>
                <p><em>
                    <?= htmlspecialchars($commentaireSelectionner['autheur'])?>
                </em></p>
                <p>Commentaire :</p>
                <p><em>
                    <?= htmlspecialchars($commentaireSelectionner['commentaire'])?>
                </em></p>
            </div>

            <p>Je souhaite supprimer définitivement ce commmentaire <input type="submit" name="supprimer" value="supprimer" /></p>
            <p>Ce commentaire est valide et je souhaite le conserver <input type="submit" name="conserver" value="conserver" /></p>
        </form>


    </section>

</body>

</html>
