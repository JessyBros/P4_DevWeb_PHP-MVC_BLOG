<?php require('public/functions/moderateurPseudoMdp.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="public/css/moderateur/moderateurPseudoMdp.css" rel="stylesheet" />
    <title>modifier un épisode</title>
    <script src="public/js/menuModerateur.js"></script>

</head>


<body>
    <?php  require('public/textFunctions/headerModerateur.php'); ?>

    <section id="corpsDeLaPage">

        <h1>Changement du pseudo et/ou du mot de passe</h1>

        <form action="index.php?action=moderateurPseudoMdp" method="post">
            <p>Pseudo : <input name="pseudo" value="<?= htmlspecialchars($data['pseudo']) ?>" required="" type="text"></p>
            <p>Mot de passe : <input name="motDePasse" value="<?php /* $data['motDePasse'] */ ?>" required="" type="text"></p>

            <input type="submit" name="modifier" value="modifier" />

        </form>

    </section>

</body>

</html>
