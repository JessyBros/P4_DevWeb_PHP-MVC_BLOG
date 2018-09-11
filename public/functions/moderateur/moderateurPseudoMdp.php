<?php
if (isset($_POST['modifierAcces']))
{
     if(password_verify($motDePasseActuel, $data['motDePasse']))
    {
       if ($modificationPseudoMdp)
        {
            $messageAlerte=" Modification réussi ";
        }
        else
        {
            $messageAlerte="Erreur, la modification a échoué";
        }   
    }
    else
    {
        $messageAlerte="Erreur sur la saisie du mot de passe actuel";
    }
}
else
{
    $messageAlerte="";
}
?>
