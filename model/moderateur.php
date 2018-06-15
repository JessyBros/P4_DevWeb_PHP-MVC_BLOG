<?php
class ModerateurPostManager{

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
    
    
       public function lectureEpisode($postId) // renvoie l'épisode selon le choix de l'utilisateur
    {   
        $connexion = $this-> connexion($postId);
        $req = $connexion->prepare('SELECT id, numeroEpisode, titre, texte FROM tableepisode WHERE numeroEpisode = ?');
        $req->execute(array($postId));
        $post = $req->fetch();
        return $post;
    }

   
    // + function listEpisode() + nombreduDernierEpisode()
    
    public function listEpisode() // affiche tous les épisodes seulement numéro et son titre
    {   
        $connexion = $this-> connexion();
        $req = $connexion->query('SELECT numeroEpisode, titre FROM tableepisode ORDER BY numeroEpisode ASC');
        return $req;
    }
    
     
    
    // page ajouterUnEpisode \\
    
     // + function listEpisode()
    
    public function ajoutEpisode($postNumeroEpisode,$postTitre,$postDescription,$postTexte) 
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
    
    public function nombreduDernierEpisode()
    {   
        $connexion = $this-> connexion();
        $req = $connexion->query('SELECT numeroEpisode FROM tableepisode ORDER BY numeroEpisode DESC Limit 1');
        $req->execute(array());
        $retour = $req->fetch();
        return $retour;
    }
    
     public function verificationEpisodeExistant($numeroEpisode) // dont work
    {   
        $connexion = $this-> connexion($numeroEpisode);
        $req = $connexion->query('SELECT numeroEpisode FROM tableepisode where numeroEpisode = $numeroEpisode');
        return $req;
    }
    
    
    
    // page modifierUnEpisode \\
    
    // + fuction listEpisode() + nombreduDernierEpisode()
    
    public function modificationEpisode($modifTitre,$modifDescription,$modifTexte,$modifNumeroEpisode)
    {   
        $connexion = $this-> connexion($modifTitre,$modifDescription,$modifTexte,$modifNumeroEpisode);
        $req = $connexion->prepare('UPDATE tableepisode SET titre = ? ,description = ? ,texte = ? WHERE id = ?');
        $req->execute(array(
            $modifTitre,
            $modifDescription,
            $modifTexte,
            $modifNumeroEpisode
            
        ));
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
    
    // page supprimerUnEpisode \\
    public function suppressionEpisode($supEpisode) 
    {
        $connexion = $this-> connexion($supEpisode);
        $req= $connexion->prepare('DELETE FROM tableepisode WHERE numeroEpisode = ?');
        $req->execute(array($supEpisode));
        return $req; 
    }
    
    public function suppressionCommentaire($supCommentaire) 
    {
        $connexion = $this-> connexion($supCommentaire);
        $req= $connexion->prepare('DELETE FROM commentaires WHERE post_id = ?');
        $req->execute(array($supCommentaire));
        return $req; 
    }
    
    // page signalerUnCommentaire \\
    
    public function afficheLesCommentairesSignaler() 
    {   
        $connexion = $this-> connexion();
        $req = $connexion->query('SELECT id, autheur, commentaire FROM commentaires WHERE commentaireSignaler = "signaler"');
        return $req;
    }
    
     public function commentaireSelectionner($idCommentaire) // renvoie l'épisode selon le choix de l'utilisateur
    {   
        $connexion = $this-> connexion($idCommentaire);
        $req = $connexion->prepare('SELECT id, autheur, commentaire, commentaireSignaler FROM commentaires WHERE id = ?');
        $req->execute(array($idCommentaire));
        $post = $req->fetch();
        return $post;
    }
    
   public function supprimerUnCommentaireSignaler($idCommentaire) 
    {
        $connexion = $this-> connexion($idCommentaire);
        $req= $connexion->prepare('DELETE FROM commentaires WHERE id = ?');
        $req->execute(array($idCommentaire));
        return $req; 
    }
    
     public function conserverLeCommentairSignaler($idCommentaire) // insère un commentaire
    {
        $connexion = $this->connexion($idCommentaire);
        $commentaires = $connexion->prepare(' UPDATE commentaires SET commentaireSignaler = "nonSignaler" WHERE id = ?');
        $commentaires->execute(array(
            $idCommentaire
        ));
        return $commentaires;
    }
    
     public function aucunCommentaireSignaler() // affiche le premier episode
    {
        $connexion = $this-> connexion();
        $req = $connexion->query('SELECT * FROM commentaires WHERE commentaireSignaler = "signaler" Limit 1');
        $req->execute(array());
        $post = $req->fetch();
        return $post;
    }
    
    // page moderateurPseudoMdp \\
    
    public function moderateurPseudoMdp()
    {   
        $connexion = $this-> connexion();
        $req = $connexion->query('SELECT pseudo, motDePasse FROM moderateur');
        $req->execute(array());
        $retour = $req->fetch();
        return $retour;
    }
    
    
       public function modificationPseudoMdp($pseudo,$motDePasse)
    {   
        $connexion = $this-> connexion($pseudo,$motDePasse);
        $motDePasse = password_hash($motDePasse, PASSWORD_DEFAULT);
        $req = $connexion->prepare('UPDATE moderateur SET pseudo = ?, motDePasse = ?');
        $req->execute(array(
            $pseudo,
            $motDePasse
        ));
        return $req;
    }
}
