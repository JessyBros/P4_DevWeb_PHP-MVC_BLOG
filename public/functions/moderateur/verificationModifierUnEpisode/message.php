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
    $message ="Choississez l'épisode que vous souhaitez modifier en utilisant la liste du bas.";
}
?>
