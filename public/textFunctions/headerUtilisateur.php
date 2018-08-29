<style>
    a {
        color: #0F056B;
    }

    #header {
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
    }

    #header #jeanForteroche {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #1798ca;
        text-shadow: 1px 1px 2px white;
    }

    #header .jeanForterocheElement:nth-child(1)
    /* portrait JeanForteroche */

        {
        height: 62px;
        width: 100px;
    }


    #header #bouttonHeader {
        display: flex;
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

    #choixEpisode {
        display: none;
        position: fixed;
        top: 50px;
        z-index: 5;
        margin: 0;
        padding: 5px;
        list-style: none;
        background-color: #0c3c60;
    }

    li :hover {
        color: white;
    }

    @media (max-width: 500px) {

        #header .jeanForteroche:nth-child(1) {
            display: none;
        }
        #header #bouttonHeader {
            flex-direction: column;
        }
         .bouttonHeaderElement:nth-child(1) {
            order: 2;
        }
         .bouttonHeaderElement:nth-child(2) {
            order: 1;
        }
        #choixEpisode {
            top: 59px;
        }
    }

</style>

<header id="header">

    <div class="headerElement" id="jeanForteroche">

        <a href="http://www.localhost/blogphpoc/">
            <!-- faux lien -->
            <img class="jeanForterocheElement" src="public/images/jeanForteroche.jpg" />
        </a>

        <div class="jeanForterocheElement">
            <a href="http://www.localhost/blogphpoc/">Jean Forteroche</a>
            <!-- faux lien -->
        </div>

    </div>

    <div class="headerElement" id="bouttonHeader">

        <nav class="bouttonHeaderElement">

            <button onclick="choixEpisode()">Choix de l'épisode</button>

            <ul id="choixEpisode">
                <li>
                    <a href="listesDesEpisodes"> Listes des épisodes</a>
                </li>
                <hr>
                <?php while ($choixDeLepisode = $choixEpisode->fetch()) { ?>
                <li>
                    <a href="episode-<?= $choixDeLepisode['numeroEpisode']?>">episode <?= $choixDeLepisode['numeroEpisode'] ?></a>
                </li>
                <?php } $choixEpisode->closeCursor(); ?>
            </ul>

        </nav>


        <a href="connexion"> 
            <button class="bouttonHeaderElement">Connexion</button>
        </a>

    </div>

</header>
