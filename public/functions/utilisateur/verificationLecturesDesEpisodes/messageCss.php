<?php 
if (isset($_GET['episode']))
{
    if  ( $_GET['episode'] < "1" || $_GET['episode'] > $nombreduDernierEpisode['numeroEpisode'] )
    {
        ?>
<style>
    #blockEpisode,
    #blockEcrireCommentaire,
    #blockLireCommentaire {
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
        #blockEpisode,
        #blockEcrireCommentaire,
        #blockLireCommentaire {
            display: none;
        }

        #message {
            display: block;
        }

    </style>
    <?php
}
?>
