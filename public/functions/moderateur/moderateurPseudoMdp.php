<!-- Modification du pseudo et mdp de connexion cote modérateur-->
<?php 
$messageAlerte="";
if (isset($_POST['modifierAcces']))
{
    if ($modificationPseudoMdp)
    {
        $messageAlerte=" Modification réussi ";
    }
    else
    {
        $messageAlerte=" Erreur, la modification a échoué ";
    }  
}
?>
