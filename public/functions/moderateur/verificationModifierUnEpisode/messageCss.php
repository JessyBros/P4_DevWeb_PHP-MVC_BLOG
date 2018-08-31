<?php 
$message = "";
if (isset($_GET['episode']))
{
    if  ( $_GET['episode'] < "1" || $_GET['episode'] > $nombreduDernierEpisode['numeroEpisode'] )
    {
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
