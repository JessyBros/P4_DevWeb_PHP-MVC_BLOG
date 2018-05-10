<?php
class PostManager{

    
     private function connexion()// connexion à la base de donné
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

            public function connexionDumoderateur() // permet à Jean Forteroche de se connecter
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
            public function getComments($postId) // montre les commentaire du plus récents au plus ancien
            {
                $connexion = $this->connexion();
                $commentaires = $connexion->prepare('SELECT id, autheur, commentaire, DATE_FORMAT(dateDuCommentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM commentaires WHERE post_id = ? ORDER BY dateDuCommentaire DESC');
                $commentaires->execute(array($postId));

                return $commentaires;
            }

            public function postComment() // insère un commentaire
            {
               $connexion = $this->connexion();
                $commentaires = $connexion->prepare(' INSERT INTO commentaires(post_id, autheur, commentaire, dateDuCommentaire) VALUES( "'.$_POST['numeroEpisode'].'", "'.$_POST['autheur'].'", "'.$_POST['commentaire'].'", NOW())');
                $commentaires->execute(array());

                return $commentaires;
            }

            public function choixEpisode() // affiche le numéro correspondant au dernier épisode
                    {   
                        $connexion = $this-> connexion();
                        $req = $connexion->query('SELECT numeroEpisode FROM tableepisode ORDER BY numeroEpisode ASC');
                        return $req;
                    }
   
            //Page ModificationDuBlog
            public function ajoutEpisode($postNumeroEpisode,$postTitre,$postDescription,$postTexte) // renvoie l'épisode selon le choix de l'utilisateur
                {   
                    $connexion = $this-> connexion($postNumeroEpisode,$postTitre,$postDescription,$postTexte);
                    $req = $connexion->prepare('INSERT INTO tableepisode(numeroEpisode, titre, description, texte) VALUES(?,?,?,?)');
                    $req->execute(array(
                        $postNumeroEpisode,
                        $postTitre,
                        $postDescription,
                        $postTexte
                    ));
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

            public function listEpisode() // affiche tous les épisodes seulement numéro et son titre
            {   
                $connexion = $this-> connexion();
                $req = $connexion->query('SELECT numeroEpisode, titre FROM tableepisode ORDER BY id ASC');
                return $req;
            }
            
            public function donnéesEpisode($postId) // renvoie l'épisode selon le choix de l'utilisateur
                {   
                    $connexion = $this-> connexion($postId);
                    $req = $connexion->prepare('SELECT * FROM tableepisode WHERE numeroEpisode = ?');
                    $req->execute(array($postId));
                    $post = $req->fetch();

                    return $post;
                }
      public function modificationEpisode($titre,$description,$texte) // ne fonctionne pas
            {   
                $connexion = $this-> connexion();
                $req = ('UPDATE tableepisode SET titre = $titre ,description = $description ,texte = $texte WHERE numeroEpisode = "$_POST["modifNumeroEpisode"]"');
                $retour= $connexion->exec($req);
                return $retour;
            }
 
    
        
       public function suppressionEpisode() // en beta
            {
                $connexion = $this-> connexion();
                $req=('DELETE FROM tableepisode WHERE numeroEpisode = ?');
                $retour=$connexion->exec($req);
                return $retour; 
            }
}