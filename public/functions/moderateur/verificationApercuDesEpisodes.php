<!-- Gestion des erreurs-->
<?php 
$message = "";
if (isset($_GET['episode']))
{
    if  ( $_GET['episode'] < "1" || $_GET['episode'] > $nombreduDernierEpisode['numeroEpisode'] )
    {
        $message ="Désolé, cette épisode n'existe pas.";
        ?> 
        <style>
            #blockEpisode
            {
                display: none;
            }
            #message
            {
                display: block;
            }
           
        </style>  
        <?php
    }           
}
else
{
    $message ="Choississez votre épisode sur la liste du bas.";
    ?> 
    <style>
        #blockEpisode
        {
            display: none;
        }
        #message
        {
            display: block;
        }
           
    </style>  
    <?php
}
?>
    