  
<style>
#header
{ 
    height: 50px;
    width: 100%;
    position: fixed;
    z-index: 5;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 5px;
    background-color: #161b26;
    border-bottom: 2px solid #8b9937;
}
    #header #jeanForteroche
    {
        display: flex;
        align-items: center;
    }
    
         #header .jeanForterocheElement:nth-child(1) /* portrait JeanForteroche */
        {
            height: 50px;
            width: 100px;
        }
    
    #header #bouttonHeader
    {
       display: flex;
    }
    
    #header button
    {
        background-color: #161b26;
        
        color: #8b9937;
        border: 1px solid #8b9937;
        border-radius: 5px;
        margin-left: 5px;
        margin-right: 5px;
    }
    
    #header button:hover
    {
        
        background-color: #8b9937;
        color: #161b26;
    }
   
    #choixEpisode{
        display: none;
        position: fixed;
        top: 50px;
        z-index: 5;
        margin:0;
        padding:5px;
        list-style:none;
        background-color: #161b26;
       
    }
 
    @media (max-width: 500px) {
        
         #header .jeanForteroche:nth-child(1) 
        {
            display: none;
        }
       
</style>

<header id="header">
    
    <div class="headerElement" id="jeanForteroche">
        
        <a  href="index.php?action=accueil">
            <img class="jeanForterocheElement" src="public/images/jeanForteroche.jpg" />
        </a>
        
        <div class="jeanForterocheElement">
            <a href="index.php?action=accueil">Jean Forteroche</a>
        </div>
        
    </div>
    
    <div class="headerElement" id="bouttonHeader">
            
        <nav class="bouttonHeaderElement">
            
            <button  onclick="choixEpisode()">Choix de l'épisode</button>
            
            <ul id="choixEpisode">
                <li>
                    <a  href="index.php? action=listesEpisodes"> Listes des épisodes</a>
                </li>
                <hr>
                <?php while ($choixDeLepisode = $choixEpisode->fetch()) { ?>
                <li>
                    <a href="index.php?action=lectureEpisode&amp;episode=<?= $choixDeLepisode['numeroEpisode']?>">episode <?= $choixDeLepisode['numeroEpisode'] ?></a>
                 </li>
                <?php } $choixEpisode->closeCursor(); ?>
            </ul>
            
        </nav>
      
                   
        <a href="index.php?action=connexion"> 
            <button class="bouttonHeaderElement">Connexion</button>
        </a>
        
    </div>
        
</header>

  