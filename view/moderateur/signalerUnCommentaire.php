<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="public/css/signaler.css" rel="stylesheet" />
    <script src="../public/js/supprimerUnCommentaire.js"></script>
    <script src="../public/js/validerUnCommentaire.js"></script>
</head>

<body>
    <header>
        <h1>Les épisodes signaler</h1>
    </header>
    
    <section>
        <aside>
            <p>Le commentaire X</p>
            <p>associé à l'épisode X</p>
            <button onclick="supprimerUnCommentaire()">Supression du commentaire</button>
            <button onclick="validerUnCommentaire()">Commentaire valide</button>
            
            <div id="supprimerUnCommentaire">
                <p>Souhaitez-vous réellement supprimer ce comentaire?</p>
                <button onclick="supprimerOui()">Oui</button>
                <span>ou</span>
                <button onclick="supprimerNon()">Non</button>
            </div>
            
            <div id="validerUnCommentaire">
                <p>Validez-vous ce comentaire?</p>
                <button onclick="validerOui()">Oui</button>
                <span>ou</span>
                <button onclick="validerNon()">Non</button>
            </div>
            
        </aside>
    </section>
    
    <style>
        #supprimerUnCommentaire, #validerUnCommentaire
        {
            display: none;
        }
    </style>
</body>
</html>