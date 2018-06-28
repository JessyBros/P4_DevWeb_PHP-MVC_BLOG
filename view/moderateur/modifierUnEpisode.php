<!-- Permet à l'utilisateur de modifié un épisode en ayant un bref aperçu de celui-ci -->
<?php require('public/functions/modifierUnEpisode.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="public/css/moderateur/modifierUnEpisode.css" rel="stylesheet" />
    <title>modifier un épisode</title>
    <link rel="icon" type="image/png" href="public/images/faviconAlaska.png" />
    <script src="public/js/menuModerateur.js"></script>
    <script src="public/js/editeurDeTexte.js"></script>
</head>


<body>
    <?php require('public/textFunctions/headerModerateur.php'); ?>

    <section id="corpsDeLaPage">

        <h1>Modifier un épisode</h1>

        <!-- Affiche un message d'erreur en cas de trafic d'url-->
        <?php require('public/functions/verificationModifierUnEpisode.php'); ?>
        <div id="message">
            <?php echo $message ?>
        </div>

        <!-- Montre le formulaire préremplis avec la fonction get-->
        <form action="modifier-episode-<?= htmlspecialchars($donneesEpisode['numeroEpisode']) ?>" method="post" id="formEditionEpisode">
            <p>Episode
                <?= htmlspecialchars($donneesEpisode['numeroEpisode']) ?>
            </p>
            <input name="modifNumeroEpisode" value="<?= htmlspecialchars($donneesEpisode['numeroEpisode']) ?>" id="numeroEpisode" required="" type="hidden">
            <input name="modifNumeroEpisode" value="<?= htmlspecialchars($donneesEpisode['id']) ?>" id="numeroEpisode" required="" type="hidden">
            <p>titre : <input name="modifTitre" value="<?= htmlspecialchars($donneesEpisode['titre']) ?>" required="" type="text"></p>
            <p>description : <input name="modifDescription" value="<?= $donneesEpisode['description'] ?>" required="" type="text"></p>
            <p>Url de l'image d'aperçu : <input name="modifImageApercu" value="<?= $donneesEpisode['imageApercu'] ?>" required="" type="text"></p>

            <?php require('public/textFunctions/editeurHTML.php'); ?>

            <div id="editeur" contentEditable>
        
                <article>
                    <?= $donneesEpisode['texte'] ?>
                </article>
               
            </div>

            <input name="modifTexte" id="modifTexte" required="" type="hidden">


            <input onclick="modifEpisode();" type="submit" name="modifier" value="modifier l'épisode" />

        </form>

        <!-- Listes des épisodes-->
        <nav id="listesDesEpisodes">
            <h2>Listes des épisodes</h2>


            <div id="apercuDesEpisodes">
                <?php while ($listEpisodes = $listEpisode->fetch()) { ?>
                <a href="modifier-episode-<?= htmlspecialchars($listEpisodes['numeroEpisode']) ?>">
                    <p onclick="episodeClickUtilisateur()"> Episode
                        <?= htmlspecialchars($listEpisodes['numeroEpisode']) ?> :
                            <?= htmlspecialchars($listEpisodes['titre']) ?>
                    </p>
                </a>
                <?php } $listEpisode->closeCursor(); ?>
            </div>
        </nav>


    </section>
<style>html,
body,
p,
h1,
h2,
h3 {
    margin: 0;
    padding: 0;

}

body {
    font-family: Verdana, sans-serif;
    font-size: 100%;
    height: 100vh;
    width: 100%;
    background-color: #0c3c60;
    text-shadow: 1px 1px 2px white;
    color: #0c3c60;
    word-wrap: break-word;
}

a {
    text-decoration: none;
}

/*header {
    position: fixed;
    z-index: 2;
    top: 0;
    height: 40px;
    width: 100%;
    background-color: #4D6568;
    border-bottom: 2px solid #8b9937;
    display: flex;
    justify-content: space-around;

}*/

#corpsDeLaPage {
    position: relative;
    top: 60px;
    width: 95%;
    max-width: 1500px;
    margin: auto;
    background-color: #0c3c60;
}

#blockEpisode {
    margin: auto;
    background-color: #d1e0eb;
    position: relative;
    top: 10px;
    width: 100%;
    border-radius: 10px;
    overflow: hidden;
}

.headerEpisode {
    display: flex;
    flex-wrap: wrap;
}

.imageEpisode {
    height: 300px;
    width: 284px;
    flex: 1;
    border-top-left-radius: 10px;
}

.libeleEpisode {
    align-self: center;
    font-size: 150%;
    text-align: center;
    flex: 2;
}

.textEpisode {
    text-align: left;
    
}

#conteneurEpisodeSuivPrec {
    display: flex;
    justify-content: space-between;
}

.episodeSuiv {
    margin: 5px;
    border-radius: 10px;
}

.episodePrec {
    margin: 5px;
    border-radius: 10px;
}


#blockEcrireCommentaire {
    background-color: #d1e0eb;
    position: relative;
    top: 20px;
    border-radius: 10px;
}

#miniBlockEcrireCommentaire {
    padding: 20px;
}

#miniBlockEcrireCommentaire input {
    width: 100%;
}

#miniBlockEcrireCommentaire textarea {
    width: 100%;
    height: 100px;
}

#conteneurButtonEnvoyerUnCommentaire {
    display: flex;
    justify-content: flex-end;
    width: 100%;
}

#ButtonEnvoyezUnCommentaire {
    border-radius: 5px;
}

#blockLireCommentaire {
    background-color: #d1e0eb;
    position: relative;
    top: 30px;
    border-radius: 10px;
    padding: 2px;
}

.miniBlockLireCommentaire {
    background-color: white;
    margin: 10px;
    padding: 20px;
    display: flex;
    justify-content: space-between;
}

.miniBlockLireCommentaire form input,
button {
    background-color: white;
    text-shadow: 1px 1px 2px white;
    color: #0c3c60;
}


.pseudo {
    color: white;
    text-shadow: 1px 1px 2px #0c3c60
}

#lesCommentaires {
    padding: 20px 20px 20px;
}


#message {
    /*message lors que l'utilisateur trafic l'url*/
    display: none;
    height: 400px;
    line-height: 400px;
    font-size: 150%;
    text-align: center;
}

footer {
    position: relative;
    width: 100%;
    margin: auto;
    top: 100px;
    border-top: 2px solid #8b9937;
}
</style>
</body>

</html>
