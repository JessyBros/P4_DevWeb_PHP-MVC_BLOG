      <?php
                 
        if (isset($_POST['connectezVous']))
        {          
            if( (!empty($_POST['pseudo'])) && (!empty($_POST['motDePasse'])) )
            {
                $pseudo = $_POST['pseudo'];
                $mdp = $_POST['motDePasse'];
                 
                if (  $pseudo==($connexion['pseudo']) && $mdp==($connexion['motDePasse']))
                {
                   ?> <script language="Javascript"> document.location.replace("controller/modifBlogController.php");  </script> <!-- Ne fonctionne que si l'utilisateur ne desactive pas le js--> <?php
                   
                }
                else if (  $pseudo!==($connexion['pseudo']) || $mdp!==($connexion['motDePasse']))
                {
                    echo "<p>Erreur sur le pseudo ou le mot de passe </p>";
                }
            }
             else if ( (empty($_POST['pseudo'])) && (empty($_POST['motDePasse'])))
                {
                    echo "<p>Oublie du pseudo et du mot de passe ! </p>";
                }  
            else if  (empty($_POST['pseudo']))  
                {
                    echo "<p>Oublie du pseudo !</p>";
                }
            else if  (empty($_POST['motDePasse'])) 
                {
                    echo "<p>Oublie du mot de passe ! </p>";
                } 
            }  
        ?>