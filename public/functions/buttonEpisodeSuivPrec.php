<?php
if (isset($post['numeroEpisode']) <2)
{
?>
<style>
    .episodePrec{display: none;}
</style>
<?php 
}
else if ( $post['numeroEpisode'] === $nombreduDernierEpisode['numeroEpisode'] ) // episode n = n.. ex : 2 =2; 3=3  
{
?>
<style>
    .episodeSuiv{display: none;}
</style>
<?php
}
?>
