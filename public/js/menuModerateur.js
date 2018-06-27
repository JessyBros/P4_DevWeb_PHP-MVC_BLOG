// fonction au clik de l'utilisateur, permet d'affichier le menu ou de le faire disparaître au click de l'utilisateur.


var menu = true;


function menuModerateur() {
    if (menu) {
        document.getElementById("menuModerateur").style.display = "block";
        menu = false;
    } else {
        document.getElementById("menuModerateur").style.display = "none";
        menu = true;
    }
}
