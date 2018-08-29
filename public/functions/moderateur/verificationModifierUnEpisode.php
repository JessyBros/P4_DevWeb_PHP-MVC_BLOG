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
    #formEditionEpisode {
        display: none;
    }

    #message {
        display: block;
    }

</style>
<?php
    }           
}
else
{
    $message ="Choississez l'épisode que vous souhaitez modifier en utilisant la liste du bas.";
    ?>
    <style>
        #formEditionEpisode {
            display: none;
        }

        #message {
            display: block;
        }

    </style>
    <?php
}
?>
