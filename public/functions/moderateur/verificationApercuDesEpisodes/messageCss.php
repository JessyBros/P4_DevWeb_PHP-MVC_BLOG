<?php 

if (isset($_GET['episode']))
{
    if  ( $_GET['episode'] < "1" || $_GET['episode'] > $nombreduDernierEpisode['numeroEpisode'] )
    {
        ?>
<style>
    #blockEpisode {
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
        #blockEpisode {
            display: none;
        }

        #message {
            display: block;
        }

    </style>
    <?php
}
?>
