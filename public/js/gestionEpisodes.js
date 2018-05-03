var formAjouter = true;
var formEditer = true;
var formModifier = true; 
var formSupprimer = true;

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
 function modifierUnEpisode()
{
    if (formModifier)
    {
        /*code*/
        formModifier  = false;
    }
    else
    {
        /*code*/
        formModifier  = true;
    }
}
function supprimerUnEpisode()
{
    if (formSupprimer)
    {
        /*code*/
        formSupprimer  = false;
    }
    else
    {
        /*code*/
        formSupprimer  = true;
    }
}