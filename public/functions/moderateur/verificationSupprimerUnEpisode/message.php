<!-- Gestion des erreurs-->
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
    $message ="Choississez l'épisode que vous souhaitez supprimer en utilisant la liste du bas.";
}
?>
