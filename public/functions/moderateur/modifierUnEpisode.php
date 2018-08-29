<!-- Modifie l'épisode après vérification -->
<?php 
$messageAlerte="";
if (isset($_POST['modifier']))
{
    if ($modificationEpisode)
    {
         $messageAlerte=" L'épisode " . $donneesEpisode['numeroEpisode'] . " a été modifié !";
    }
    else
    {
         $messageAlerte=" Erreur, aucun épisode n'a été modifié !";
    } 
     ?>
<style>
    #alerte {
        display: block;
    }

</style>
<?php
}
?>
