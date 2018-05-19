var menu = true;

// fonction au clik de l'utilisateur
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
