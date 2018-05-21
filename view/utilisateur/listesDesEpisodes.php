<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="public/css/utilisateur/listesDesEpisodes.css" rel="stylesheet" />
    <script src="public/js/menuEpisode.js"></script>
</head>

<body>
    <?php 
    require('public/textFunctions/header.php');
 
?>
<section id="corpsDeLaPage">
    <aside id="titre"> <h1>Les épisodes</h1></aside>

    <?php while ($listesEpisode = $listesEpisodes->fetch()) { ?>
    <aside class="blockEpisodes">
        <p>Episode : <?= $listesEpisode['numeroEpisode'] ?> - <?= $listesEpisode['titre'] ?> </p>
        <p><?= $listesEpisode['description'] ?></p>
        <p><?= $listesEpisode['datePublication'] ?></p>
        <a href="index.php? action=lectureEpisode&amp;episode=<?= $listesEpisode['numeroEpisode']?>">Lire l'épisode</a>
    </aside>
    <?php } $listesEpisodes->closeCursor(); ?>

</section>

</body>

</html>
