var formAjouter = true;
var formEditer = true;
var episodeClickUtilisateur = true;

 function ajouterUnEpisode()
{
    if (formAjouter)
    {
        document.getElementById("formAjouter").style.display = "block";
        formAjouter  = false;
    }
    else
    {
        document.getElementById("formAjouter").style.display = "none";
        formAjouter  = true;
    }
}
function editerUnEpisode()
{
     if (formEditer)
    {
        document.getElementById("apercuDesEpisodes").style.display = "inline-block";
        formEditer  = false;
    }
    else
    {
        document.getElementById("apercuDesEpisodes").style.display = "none";
        formEditer  = true;
    }
    
}
 /* DONT WORK !
function episodeClickUtilisateur()
{
    if (episodeClickUtilisateur)
    {
        document.getElementById("formEditionEpisode").style.display = "inline-block";
        episodeClickUtilisateur  = false;
    }
    else
    {
        document.getElementById("formEditionEpisode").style.display = "none";
        episodeClickUtilisateur  = true;
    }
}

*/