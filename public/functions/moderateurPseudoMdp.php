<?php 
if (isset($_POST['modifier']))
{
    if ($modificationPseudoMdp)
    {
        echo '<script>alert(" Modification réussi ");</script>';
    }
    else
    {
        echo '<script>alert(" Erreur, la modification a échoué ");</script>';
    }  

}
?>