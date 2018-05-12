<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="../public/css/listesEpisodes.css" rel="stylesheet" />
</head>

<body>
<header> <h1>Les épisodes</h1></header>
<section>
    <?php while ($listesEpisode = $listesEpisodes->fetch()) { ?>
    <aside class="blockEpisodes">
        <p>Episode : <?= $listesEpisode['numeroEpisode'] ?> - <?= $listesEpisode['titre'] ?> </p>
        <p><?= $listesEpisode['description'] ?></p>
        <p><?= $listesEpisode['datePublication'] ?></p>
        <a href="lireBlogController.php?episode=<?= $listesEpisode['numeroEpisode']?>">Lire l'épisode</a>
        
    </aside>
    <?php } $listesEpisodes->closeCursor(); ?>
</section>
</body>

</html>
