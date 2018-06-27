function commande(nom, argument) {
    if (typeof argument === 'undefined') {
        argument = '';
    }
    switch (nom) {
        case "createLink":
            argument = prompt("Quelle est l'adresse du lien ?");
            break;
        case "insertImage":
            argument = prompt("Quelle est l'adresse de l'image ?");
            break;
    }
    // Exécuter la commande
    document.execCommand(nom, false, argument);
}


// récupère le text html brute et l'enregistre tel quel !
function ajoutEpisode() {
    document.getElementById("texte").value = document.getElementById("editeur").innerHTML;
}

function modifEpisode() {
    document.getElementById("modifTexte").value = document.getElementById("editeur").innerHTML;
}
