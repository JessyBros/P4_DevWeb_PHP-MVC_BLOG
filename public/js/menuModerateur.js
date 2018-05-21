var menu = true;

// fonction au clik de l'utilisateur
function menuModerateur()
{
    if (menu)
    {
        document.getElementById("menuModerateur").style.display = "block";
        menu = false;
    }
    else
    {
        document.getElementById("menuModerateur").style.display = "none";
        menu = true;
    }
}
