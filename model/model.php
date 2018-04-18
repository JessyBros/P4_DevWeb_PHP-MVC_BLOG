<?php
class PostManager{
    
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

    public function getPost() // affiche le premier episode
    {
        $connexion = $this-> connexion();
        $req = $connexion->query('SELECT * FROM tableepisode Limit 1');
        return $req;
    }


    public function getPosts() 
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

} 
