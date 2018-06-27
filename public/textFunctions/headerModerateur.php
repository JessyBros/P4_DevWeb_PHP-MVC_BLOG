<style>
    #header {
        top: 0;
        height: 50px;
        width: 100%;
        position: fixed;
        z-index: 5;
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 5px;
        background-color: #0a385b;
        border-bottom: 2px solid #161b26;
        background-color: #0a385b;
        color: #0F056B;
        text-shadow: 1px 1px 2px white;
    }

    #menuModerateur {
        display: none;
        position: fixed;
        top: 50px;
        z-index: 5;
        margin: 0;
        padding: 5px;
        list-style: none;
        background-color: #0a385b;

    }

    #header button {
        background-color: white;
        color: #0F056B;
        border: 1px solid #0c3c60;
        border-radius: 5px;
        margin-left: 5px;
        margin-right: 5px;
        text-shadow: 1px 1px 2px white;
    }


    #header button:hover {

        background-color: white;
        border: 1px solid white;
        color: #161b26;
    }


    #menuModerateur a,
    .headerElement a {
        text-decoration: none;

        background-color: #0a385b;
        color: #0F056B;
        text-shadow: 1px 1px 2px white;
    }

    @media (max-width: 500px) {

</style>

<header id="header">

    <div class="headerElement">

        <div onclick="menuModerateur()">Menu</div>

        <ul id="menuModerateur">
            <li>
                <a href="apercuDesEpisodes">Aperçu des épisodes</a>
            </li>

            <li>
                <a href="ajouterUnEpisode">Ajouter un épisode</a>
            </li>

            <li>
                <a href="modifierUnEpisode">Modifier un épisode</a>
            </li>

            <li>
                <a href="supprimerUnEpisode">supprimer un épisode</a>
            </li>

            <li>
                <a href="signalerUnCommentaire">Les commentaires signalés</a>
            </li>

            <li>
                <a href="moderateurPseudoMdp">modification : Pseudo / Mot de passe</a>
            </li>
        </ul>

    </div>

    <div class="headerElement">

        <a href="espaceModerateur">
            Espace Modérateur
        </a>

    </div>

    <div class="headerElement">
        <a href="http://localhost/blogphpoc/">
            <button>Déconnexion</button>
        </a>
    </div>

</header>
