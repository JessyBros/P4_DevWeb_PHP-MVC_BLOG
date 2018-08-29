<!-- Pages lectures des épisodes pour les utilisateur
     Fais disparaître le boutton précédent à l'épisode 1, et le boutton suivant au dernier épisode crée.-->

<?php
if (isset($post['numeroEpisode']))
{
    if ( $post['numeroEpisode'] == 1 )
    {
        ?>
        <style>
            .episodePrec{display: none;}
        </style>
        <?php 
    }
    elseif ( $post['numeroEpisode'] === $nombreduDernierEpisode['numeroEpisode'] ) 
    {
        ?>
        <style>
            .episodeSuiv{display: none;}
        </style>
        <?php
    }
}
?>
