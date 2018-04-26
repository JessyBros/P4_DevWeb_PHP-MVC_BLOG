<?php
class PostManager{

    // connexion à la base de donné
     private function connexion()
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=billetalaska;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        return $db;
    }
            //Page d'accueil
            public function premierEpisode() // affiche le premier episode
            {
                $connexion = $this-> connexion();
                $req = $connexion->query('SELECT * FROM tableepisode Limit 1');
                $req->execute(array());
                $post = $req->fetch();

                return $post;
            }


            public function dernierEpisode() // affiche les trois dernier episode
            {   
                $connexion = $this-> connexion();
                $req = $connexion->query('SELECT * FROM tableepisode ORDER BY id DESC Limit 3');
                return $req;
            }

            public function moderateur() 
            {   
                $connexion = $this-> connexion();
                $req = $connexion->query('SELECT pseudo, motDePasse FROM moderateur');
                return $req;
            }
        
            //Page LectureDuBlog NE FONCTIONNE TOUJOURS PAS!
            public function lectureEpisode($postId) // renvoie l'épisode selon le choix de l'utilisateur
                {   
                    $connexion = $this-> connexion($postId);
                    $req = $connexion->prepare('SELECT id, numeroEpisode, titre, texte FROM tableepisode WHERE numeroEpisode = ?');
                    $req->execute(array($postId));
                    $post = $req->fetch();

                    return $post;
                }
    
            //Page ModificationDuBlog
            public function ajoutEpisode() // renvoie l'épisode selon le choix de l'utilisateur
                {   
                    $connexion = $this-> connexion($numeroEpisode, $titre, $description, $texte);
                    $req = $connexion->query('INSERT INTO tableepisode(numeroEpisode, titre, description, texte) VALUES($numeroEpisode, $titre, $description, $texte)');
                    $retour = $connexion->exec($req);
                    return $req;
                }
            public function TousLesEpisode() // affiche les trois dernier episode
                    {   
                        $connexion = $this-> connexion();
                        $req = $connexion->query('SELECT numeroEpisode FROM tableepisode ');
                        return $req;
                    }

} 
