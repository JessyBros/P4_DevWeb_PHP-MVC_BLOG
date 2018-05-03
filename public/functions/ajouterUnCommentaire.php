<?php
 
if (isset($_POST['publie']))   
{
    if ( isset($_POST['numeroEpisode']) && isset($_POST['autheur']) && isset($_POST['commentaire']) )
    {
        
        
        if ($postComment)
        {
    ?>
    <script language="Javascript">
        document.location.replace("lireBlogController.php?episode=<?= $post['numeroEpisode']?>");
    </script>
    <!-- Ne fonctionne que si l'utilisateur ne desactive pas le js-->
    <?php

            echo"commentaire ajouté";        
        }
        else
        {
            echo"commentaire non ajouté";  
        }
    }
}
?>
