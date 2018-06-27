<?php
$etatConnexion = "";     
if (isset($_POST['connectezVous']))
{          
    if( (!empty($_POST['pseudo'])) && (!empty($_POST['motDePasse'])) )
    {
        $pseudo = $_POST['pseudo'];   
        $mdp = $_POST['motDePasse'];
                 
        if (  $pseudo==($connexion['pseudo']) &&  password_verify($mdp, $connexion['motDePasse']))
        {
            header("Location:espaceModerateur");                 
        }
        else if (  $pseudo!==($connexion['pseudo']) || $mdp!==($connexion['motDePasse']))
        {
            $etatConnexion = "Erreur sur le pseudo ou le mot de passe";
        }
    }
    else if ( (empty($_POST['pseudo'])) && (empty($_POST['motDePasse'])))
    {
        $etatConnexion = "Oublie du pseudo et du mot de passe !";
    }  
    else if  (empty($_POST['pseudo']))  
    {
        $etatConnexion = "Oublie du pseudo !";
    }
    else if  (empty($_POST['motDePasse'])) 
    {
        $etatConnexion = "Oublie du mot de passe !";
    } 
}  
?>
