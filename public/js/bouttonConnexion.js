var buttonConnexion = true; 

function connexion()
{
    if (buttonConnexion)
    {
        document.getElementById('conteneurConnexion').style.display = "block";
        buttonConnexion  = false;
    }
    else
    {
        document.getElementById('conteneurConnexion').style.display = "none";
        buttonConnexion  = true;
    }
    
}
