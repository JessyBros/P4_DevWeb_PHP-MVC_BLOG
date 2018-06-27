<!-- Modifie l'épisode après vérification -->
<?php 
if (isset($_POST['modifier']))
{
    if ($modificationEpisode)
    {
        echo '<script>alert(" L\'épisode ' . $donneesEpisode['numeroEpisode'] . ' a été modifié ");</script>';
    }
    else
    {
        echo '<script>alert(" Erreur, aucun épisode n\'a été modifié ");</script>';
    }   
}
?>