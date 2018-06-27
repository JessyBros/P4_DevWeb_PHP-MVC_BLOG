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
           
            #message
            {
                display: block;
            }
           
        </style>  
        <?php
    }
    elseif ($_GET['episode'] > 0 && $_GET['episode'] <= $nombreduDernierEpisode['numeroEpisode'] )
    {
        ?> 
        <style>
            #apercuDesEpisodes
            {
                display: none;
            }
            
            #confirmationSuppressionEpisode{
                display:block;
            }       
        </style>  
        <?php
    }
        
}
else
{
    $message ="Choississez l'épisode que vous souhaitez supprimer en utilisant la liste du bas.";
    ?> 
    <style>
        #message
        {
            display: block;
        }
           
    </style>  
    <?php
}
?>
    