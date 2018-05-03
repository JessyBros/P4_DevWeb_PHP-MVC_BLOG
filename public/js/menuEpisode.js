
            var menuEpisode = document.getElementById("menuEpisode");
       
                menuEpisode = true;

        // fonction au clik de l'utilisateur
        document.getElementById("choixEpisode").addEventListener("click", function(e)
        {
            if (menuEpisode)
            {
                document.getElementById("menuEpisode").style.display="block";
                menuEpisode = false;
            }
            else
            {
                document.getElementById("menuEpisode").style.display="none";
                menuEpisode = true;
            }
        });
            