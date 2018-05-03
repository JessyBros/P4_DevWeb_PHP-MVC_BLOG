var menuEpisode = document.getElementById("menuEpisode");
menu = true;

// fonction au clik de l'utilisateur
document.getElementById("choixEpisode").addEventListener("click", function (e) {
    if (menu) {
        menuEpisode.style.display = "block";
        menu = false;
    } else {
        menuEpisode.style.display = "none";
        menu = true;
    }
});
