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

            public function connexionDumoderateur() 
            {   
                $connexion = $this-> connexion();
                $req = $connexion->query('SELECT pseudo, motDePasse FROM moderateur');
                $req->execute(array());
                $post = $req->fetch();

                return $post;
            }
        
            //Page LectureDuBlog 
            public function lectureEpisode($postId) // renvoie l'épisode selon le choix de l'utilisateur
                {   
                    $connexion = $this-> connexion($postId);
                    $req = $connexion->prepare('SELECT id, numeroEpisode, titre, texte FROM tableepisode WHERE numeroEpisode = ?');
                    $req->execute(array($postId));
                    $post = $req->fetch();

                    return $post;
                }
    
            // LES COMMENTAIRES
            public function getComments($postId)
            {
                $connexion = $this->connexion();
                $commentaires = $connexion->prepare('SELECT id, autheur, commentaire, DATE_FORMAT(dateDuCommentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM commentaires WHERE post_id = ? ORDER BY dateDuCommentaire DESC');
                $commentaires->execute(array($postId));

                return $commentaires;
            }

            public function postComment()
            {
               $connexion = $this->connexion();
                $commentaires = $connexion->prepare(' INSERT INTO commentaires(post_id, autheur, commentaire, dateDuCommentaire) VALUES( "'.$_POST['numeroEpisode'].'", "'.$_POST['autheur'].'", "'.$_POST['commentaire'].'", NOW())');
                $commentaires->execute(array());

                return $commentaires;
            }


   
            //Page ModificationDuBlog
            public function ajoutEpisode() // renvoie l'épisode selon le choix de l'utilisateur
                {   
                    $connexion = $this-> connexion();
                    $req = $connexion->prepare('INSERT INTO tableepisode(numeroEpisode, titre, description, texte) VALUES("'.$_POST['numeroEpisode'].'", "'.$_POST['titre'].'", "'.$_POST['description'].'","'.$_POST['texte'].'")');
                    $req->execute(array());
                    return $req;
                }
                   
    
    
            public function nombreduDernierEpisode() // affiche le numéro correspondant au dernier épisode
                    {   
                        $connexion = $this-> connexion();
                        $req = $connexion->query('SELECT numeroEpisode FROM tableepisode ORDER BY numeroEpisode DESC Limit 1');
                        $req->execute(array());
                        $retour = $req->fetch();
                        return $retour;
                    }

public function choixEpisode() // affiche le numéro correspondant au dernier épisode
                    {   
                        $connexion = $this-> connexion();
                        $req = $connexion->query('SELECT numeroEpisode FROM tableepisode ORDER BY numeroEpisode ASC');
                        return $req;
                    }
} 
