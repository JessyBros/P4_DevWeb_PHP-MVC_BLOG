<?php
if(isset($_POST['supprimer']))
{
    if ($suppressionEpisode)
    {
        echo"episode supprimer";
    }
    else
    {
        echo "episode non supprimer";
    }
}
?>