  <section id="apercuDesEpisodes">        
    <?php while ($listEpisodes = $listEpisode->fetch()) { ?>
     <a href="modifBlogController.php?episode=<?= htmlspecialchars($listEpisodes['numeroEpisode']) ?>">
         <p onclick="episodeClickUtilisateur()"> Episode <?= htmlspecialchars($listEpisodes['numeroEpisode']) ?> :  <?= htmlspecialchars($listEpisodes['titre']) ?></p>
        </a>
    <?php } $listEpisode->closeCursor(); ?>  
    </section>