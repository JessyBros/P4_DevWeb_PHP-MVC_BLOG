<header id="header">
    <div class="headerElement" id="underHeader">
        
        <a href="index.php?action=accueil">
            <img class="underHeaderElement" src="public/images/jeanForteroche.jpg" />
        </a>
        <div class="underHeaderElement">
            <a href="index.php?action=accueil">Jean Forteroche</a>
        </div>
    </div>
    <div class="headerElement">
        <button id="choixEpisode" onclick="choixEpisode()">Choix de l'épisode
            <ul id="menuEpisode" style="display:none;">
                <?php while ($choixDeLepisode = $choixEpisode->fetch()) { ?>
                <li><a href="lireBlogController.php?episode=<?= $choixDeLepisode['numeroEpisode']?>">episode <?= $choixDeLepisode['numeroEpisode'] ?></a></li>
                <?php } $choixEpisode->closeCursor(); ?>
            </ul>
        </button>
        <button id="connexion" onclick="connexion()">Connexion</button>
    </div>
    
</header>

<style>
    #header
    { 
        width: 100%;
        position: fixed;
        z-index: 1000;
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 5px;
        background-color: #161b26;
        border-bottom: 2px solid #8b9937;
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
    
    #underHeader
    {
        display: flex;
        align-items: center;
    }
    
    .underHeaderElement:nth-child(1) /* portrait JeanForteroche */
    {
        height: 50px;
        width: 100px;
    }
    
    @media (max-width: 500px) {
        
        .underHeaderElement:nth-child(1) 
        {
            display: none;
        }
       
</style>