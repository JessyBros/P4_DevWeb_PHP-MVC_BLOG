<?php $css = "public/css/utilisateur/accueil.css" ?>
<?php $menu = "public/js/menuEpisode.js" ?>
<?php $description = "Page d'accueil. Blog de Jean Forteroche qui écris un livre s'intitulant 'un billet simple pour l'alaska' Description courte du premier et des trois derniers épisodes publié par l'auteur." ?>
<?php $keywords = "blog, alaska, episodes, description" ?>

<?php ob_start(); ?>


<?php require('public/textFunctions/headerUtilisateur.php'); ?>

<!-- image de fond avec titre du livre -->
<section id="page1">
    <h1>Un billet simple pour l'alaska</h1>
</section>

<section id="page2">

    <!-- Aperçu du premier épisode -->
    <h2>Le commencement ce fait toujours par le premier épisode :)</h2>

    <a href="episode-<?= htmlspecialchars($data['numeroEpisode']) ?>">
        <aside id="blockPremierEpisode">
            <h3 class="numeroEpisode">Episode
                <?= htmlspecialchars($data['numeroEpisode']) ?>
            </h3>
            <h4 class="titreEpisode">
                <?= htmlspecialchars($data['titre']) ?>
            </h4>
            <img class="imagePremierEpisode" src="<?= $data['imageApercu']?>" alt="ErreurAffichage : <?= htmlspecialchars($data['titre']) ?>">

            <p class="textEpisode">
                <?= htmlspecialchars($data['description']) ?>
            </p>
            <p class="dateEpisode">publié le
                <?= htmlspecialchars($data['datePublication']) ?>
            </p>

        </aside>
    </a>


    <!-- Aperçu des trois derniers épisodes -->
    <h2>Les trois derniers épisodes actuels</h2>

    <section id="conteneurBlockLastEpisode">
        <?php  foreach ($episodes as $episode): ?> 

        <aside class="blockLastEpisode">
            <a href="episode-<?= $episode['numeroEpisode'] ?>">
                <nav class="LastEpisode">
                    <h3 class="titreEpisode">Episode
                        <?= htmlspecialchars($episode['numeroEpisode']) ?>
                    </h3>
                    <img class="imageEpisode" src="<?= $episode['imageApercu']?>" alt="ErreurAffichage : <?= htmlspecialchars($episode['titre']) ?>">
                    <p class="dateEpisode">publié le
                        <?= htmlspecialchars($episode['datePublication']) ?>
                    </p>
                    <p class="textEpisode">
                        <?= htmlspecialchars($episode['description']) ?>
                    </p>
                </nav>
            </a>
        </aside>

        <?php endforeach; ?>

        <!-- block listes des épisodes -->
    </section>
    <a href="listesDesEpisodes">
        <div id="conteneurListeDesEpisodes">Tous les épisodes</div>
    </a>

</section>
<hr>
<footer>© 2018 - Mentions Légales -</footer>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
