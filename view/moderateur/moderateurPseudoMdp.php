<?php require('public/functions/moderateurPseudoMdp.php'); ?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="public/css/moderateur/moderateurPseudoMdp.css" rel="stylesheet" />
    <title>modifier un épisode</title>
    <script src="public/js/menuModerateur.js"></script>
    
</head>


<body>
   <?php  require('public/textFunctions/headerModerateur.php'); ?>
    
<section id="corpsDeLaPage">

    <h1>Changement du pseudo et/ou du mot de passe</h1>
    
    <form action="index.php?action=moderateurPseudoMdp" method="post">
        <p>Pseudo : <input name="pseudo" value="<?= htmlspecialchars($data['pseudo']) ?>" required="" type="text"></p>
        <p>Mot de passe : <input name="motDePasse" value="<?php /* $data['motDePasse'] */ ?>" required="" type="text"></p>
        
        <input type="submit" name="modifier" value="modifier" />
        
    </form>
    
</section>
<style>#corpsDeLaPage{
    position: relative;
    top:100px;
    width: 60%;
    min-width: 245px;
    margin: auto;
    text-align: center;
    background-color: #0c3c60;
    color: #0F056B;
    border: 1px solid #0c3c60;
    border-radius: 5px;
    text-shadow: 1px 1px 2px white;
    padding: 10px;

}
    #corpsDeLaPage h1{margin:0;}
    
    
     #corpsDeLaPage input[type="submit"] {
        background-color: #0a385b;
        color: #0F056B;
        border: 1px solid #0c3c60;
        border-radius: 5px;
        margin-left: 5px;
        margin-right: 5px;
        text-shadow: 1px 1px 2px white;
    }


    #corpsDeLaPage input[type="submit"]:hover {

        background-color: white;
        color: #161b26;
    }
</style>
</body>

</html>






