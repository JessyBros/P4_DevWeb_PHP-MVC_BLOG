<?php
class UtilisateurPostManager{

    // connexion à la BASE DE DONNE
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
    
    
      public function nombreduDernierEpisode() // affiche le numéro correspondant au dernier épisode
    {   
        $connexion = $this-> connexion();
        $req = $connexion->query('SELECT numeroEpisode FROM tableepisode ORDER BY numeroEpisode DESC Limit 1');
        $req->execute(array());
        $retour = $req->fetch();
        return $retour;
    }
    
    
    // Header Menu \\
    public function choixEpisode() // affiche le numéro correspondant au dernier épisode
    {   
        $connexion = $this-> connexion();
        $req = $connexion->query('SELECT numeroEpisode FROM tableepisode ORDER BY numeroEpisode ASC');
        return $req;
    }
    
     // page connexion \\
    
    public function connexionDumoderateur() // permet à Jean Forteroche de se connecter
    {   
        $connexion = $this-> connexion();
        $req = $connexion->query('SELECT pseudo, motDePasse FROM moderateur');
        $req->execute(array());
        $post = $req->fetch();
        return $post;
    }
    
    // page d'accueil \\
    
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
        $req = $connexion->query('SELECT * FROM tableepisode ORDER BY numeroEpisode DESC Limit 3');
        return $req;
    }

           
    
    // page lectureDesEpisodes \\
    
    public function lectureEpisode($postId) // renvoie l'épisode selon le choix de l'utilisateur
    {   
        $connexion = $this-> connexion($postId);
        $req = $connexion->prepare('SELECT id, numeroEpisode, titre, texte FROM tableepisode WHERE numeroEpisode = ?');
        $req->execute(array($postId));
        $post = $req->fetch();
        return $post;
    }
    
    // les commentaires
    public function getComments($postId) // montre les commentaire du plus récents au plus ancien selon l'épisode
    {
        $connexion = $this->connexion();
        $commentaires = $connexion->prepare('SELECT id, autheur, commentaire, DATE_FORMAT(dateDuCommentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM commentaires WHERE post_id = ? ORDER BY dateDuCommentaire DESC');
        $commentaires->execute(array($postId));
        return $commentaires;
    }

    public function postComment($postNumeroEpisode,$postAutheur,$postCommentaire) // insère un commentaire
    {
        $connexion = $this->connexion($postNumeroEpisode,$postAutheur,$postCommentaire);
        $commentaires = $connexion->prepare(' INSERT INTO commentaires(post_id, autheur, commentaire, dateDuCommentaire) VALUES(?,?,?, NOW())');
        $commentaires->execute(array(
            $postNumeroEpisode,
            $postAutheur,
            $postCommentaire
        ));
        return $commentaires;
    }

    
    
    // page ListesDesEpisodes \\
    
    public function listesEpisodes() // affiche la lite de chaque épisode
    {   
        $connexion = $this-> connexion();
        $req = $connexion->query('SELECT numeroEpisode, titre, description, datePublication FROM tableepisode ORDER BY numeroEpisode ASC');
        return $req;
    }
   
}
