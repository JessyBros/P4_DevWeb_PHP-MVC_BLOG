<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="public/css/listesEpisodes.css" rel="stylesheet" />
</head>

<body>
    <?php 
    require('public/textFunctions/header.php');
    require('public/textFunctions/formConnexion.php');
?>
<section id="corpsDeLaPage">
    <aside id="titre"> <h1>Les épisodes</h1></aside>

    <?php while ($listesEpisode = $listesEpisodes->fetch()) { ?>
    <aside class="blockEpisodes">
        <p>Episode : <?= $listesEpisode['numeroEpisode'] ?> - <?= $listesEpisode['titre'] ?> </p>
        <p><?= $listesEpisode['description'] ?></p>
        <p><?= $listesEpisode['datePublication'] ?></p>
        <a href="lireBlogController.php?episode=<?= $listesEpisode['numeroEpisode']?>">Lire l'épisode</a>
    </aside>
    <?php } $listesEpisodes->closeCursor(); ?>

</section>
    
    <style>
#titre
{
    font-size: 150%;
    text-align: center;
}
    
    .blockEpisodes
{
    position: relative;
    background-color: white;
    margin: 10px auto 10px auto;
    min-width: 250px;
    width: 60%;
}
    
    #corpsDeLaPage{
    position: relative;
    top: 80px;
    width: 100%;
    max-width: 1500px;
    margin: auto; 
    /*z-index: 1;*/
}</style>
</body>

</html>
