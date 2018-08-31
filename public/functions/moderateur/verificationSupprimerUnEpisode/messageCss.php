<!-- Gestion des erreurs-->
<?php 
$message = "";
if (isset($_GET['episode']))
{
    if  ( $_GET['episode'] < "1" || $_GET['episode'] > $nombreduDernierEpisode['numeroEpisode'] )
    {
        ?>
<style>
    #message {
        display: block;
    }

</style>
<?php
    }
    elseif ($_GET['episode'] > 0 && $_GET['episode'] <= $nombreduDernierEpisode['numeroEpisode'] )
    {
        
        ?>
    <style>
        #apercuDesEpisodes {
            display: none;
        }

        #confirmationSuppressionEpisode {
            display: block;
        }

    </style>
    <?php
    }
        
}
else
{
    ?>
        <style>
            #message {
                display: block;
            }

        </style>
        <?php
}
?>
