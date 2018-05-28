<?php require('public/functions/verificationSignalerUnCommentaire.php'); ?> 
<?php require('public/functions/supprimerUnCommentaire.php'); ?> 
<?php require('public/functions/conserverUnCommentaire.php'); ?>
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
        
        
        <!-- Afficher la liste des commentaires signalés-->
        <aside id="listeDesCommentairesSignales">
            <h2>Liste des épisodes signalés par les internautes</h2>
            <?php while ($commentaireSignaler = $afficheLesCommentairesSignaler->fetch()) { ?>
            <p>
            <a  href="index.php?action=signalerUnCommentaire&amp;commentaire=<?= htmlspecialchars($commentaireSignaler['id'])?>">
                <p>
                    commentaire
                    <?= htmlspecialchars($commentaireSignaler['id']) ?> :
                    <?= htmlspecialchars($commentaireSignaler['autheur']) ?>
                    <?= htmlspecialchars($commentaireSignaler['commentaire']) ?>
                </p>                 
            </a>            
            </p>
            <?php $aucunCommentaireSignaler; ?>
            <?php } $afficheLesCommentairesSignaler->closeCursor(); ?>
        </aside>
        
        <?php echo $message; ?>
        
        
       
        
        <!-- Afficher le commentaire sélectionné-->        
        <form id="formEpisodeSignaler" action="index.php?action=signalerUnCommentaire&amp;commentaire=<?= htmlspecialchars($_GET['commentaire'])?>" method="post" id="formAjouter">
            <div>
                <p>Pseudo :<p>
                <p><?= htmlspecialchars($commentaireSelectionner['autheur'])?></p>
                <p>Commentaire :</p>
                <p><?= htmlspecialchars($commentaireSelectionner['commentaire'])?></p> 
            </div>
            
            <p>Je souhaite supprimer définitivement ce commmentaire <input type="submit" name="supprimer" value="supprimer" /></p>
            <p>Ce commentaire est valide et je souhaite le conserver <input type="submit" name="conserver" value="conserver" /></p>
       </form>
        
        
    </section>

</body>

</html>
