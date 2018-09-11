<?php

namespace Blog\Projet\Model;

class Manager
{
    
     protected function connexion()
    {
        try
        {
           $db = new \PDO('mysql:host=localhost;dbname=u747361221_ryru','u747361221_ryru','rafalef1');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        return $db;
    }
}
