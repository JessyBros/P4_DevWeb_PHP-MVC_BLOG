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
            #blockEpisode, #blockEcrireCommentaire, #blockLireCommentaire
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
    $message ="Merci de bien vouloir choisir un épisode via le menu 'Choix del'épisode'";
    ?> 
    <style>
        #blockEpisode, #blockEcrireCommentaire, #blockLireCommentaire
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
    