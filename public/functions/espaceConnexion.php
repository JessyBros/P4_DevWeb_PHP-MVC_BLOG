      <?php
        $etatConnexion = "";     
        if (isset($_POST['connectezVous']))
        {          
            if( (!empty($_POST['pseudo'])) && (!empty($_POST['motDePasse'])) )
            {
                $pseudo = $_POST['pseudo'];
                $mdp = $_POST['motDePasse'];
                 
                if (  $pseudo==($connexion['pseudo']) && $mdp==($connexion['motDePasse']))
                {
                   ?> <script language="Javascript"> document.location.replace("index.php?action=modifEpisode");  </script> <!-- Ne fonctionne que si l'utilisateur ne desactive pas le js--> <?php
                   
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