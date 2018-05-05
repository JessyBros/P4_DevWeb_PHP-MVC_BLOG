<?php 
if (isset($_POST['modifier']))
{
    if( isset($_POST["modifNumeroEpisode"]) && isset ($_POST["modifTitre"]) && isset ($_POST["modifDescription"]) && isset($_POST["modifTexte"]) )
    {
        $titre = $_POST["modifTitre"];
        $description = $_POST["modifDescription"];
        $texte = $_POST["modifTexte"];
        
        if($modificationEpisode)
        {
            echo "épisode modifier";
        }
        else
        {
            echo "épisode non modifier";
        }
    } 
}
?>