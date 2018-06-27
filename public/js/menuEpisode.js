// fonction au clik de l'utilisateur, permet d'affichier le menu ou de le faire disparaître au click de l'utilisateur.
var menu = true;


function choixEpisode()
{
    if (menu)
    {
        document.getElementById("choixEpisode").style.display = "block";
        menu = false;
    }
    else
    {
        document.getElementById("choixEpisode").style.display = "none";
        menu = true;
    }
}
