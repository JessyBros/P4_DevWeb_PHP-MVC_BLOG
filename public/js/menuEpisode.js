menu = true;

// fonction au clik de l'utilisateur
function choixEpisode()
{
    if (menu) {
        document.getElementById("menuEpisode").style.display = "block";
        menu = false;
    } else {
        document.getElementById("menuEpisode").style.display = "none";
        menu = true;
    }
});
