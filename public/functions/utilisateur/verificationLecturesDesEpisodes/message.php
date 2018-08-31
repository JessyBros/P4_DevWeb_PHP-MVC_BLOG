<?php 
$message = "";
if (isset($_GET['episode']))
{
    if  ( $_GET['episode'] < "1" || $_GET['episode'] > $nombreduDernierEpisode['numeroEpisode'] )
    {
        $message ="Désolé, cette épisode n'existe pas.";
    }           
}
else
{
    $message ="Merci de bien vouloir choisir un épisode via le menu 'Choix del'épisode'";
}
?>
