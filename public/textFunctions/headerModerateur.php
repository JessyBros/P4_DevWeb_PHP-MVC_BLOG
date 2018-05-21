  
<style>
#header
{ 
    top: 0;
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
    
  #menuModerateur{
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
        
       
</style>

<header id="header">
    
    <div class="headerElement">
        
        <div onclick="menuModerateur()">Menu</div>
       
        <ul id="menuModerateur">
            <li>
                <a href="index.php? action=apercuDesEpisodes">Aperçu des épisodes</a>
            </li>
                
            <li>
                <a href="index.php? action=ajouterUnEpisode">Ajouter un épisode</a>
            </li>
            
            <li>
                <a href="index.php? action=modifierUnEpisode">Modifier un épisode</a>
            </li>
            
            <li>
                <a href="index.php? action=supprimerUnEpisode">supprimer un épisode</a>
            </li>
            
            <li>
                <a href="index.php? action=signalerUnCommentaire">Les commentaires signalés</a>
            </li>
        </ul>
        
    </div>
    
    <div class="headerElement">
        
        <a href="index.php? action=espaceModerateur">
            <p>Espace Modérateur</p>
        </a>
        
    </div>
    
    <div class="headerElement">
        <a href="index.php? action=accueil">
            <button>Déconnexion</button>
        </a>
    </div>
        
</header>

  