<!DOCTYPE html>
<html>

    <head>
      
        <meta charset="utf-8">
        <title>Accueil</title>
    
        <link rel="stylesheet" type="text/css" href="Styles/style.css">
    
    </head>
    
    <body>
    
        <!-- header -->
    
       
        <header class="header">
            <div class="container">
                <a href="index.php" class="logo"><img src="Images/logo.png" width=40px alt="logo du site" style="margin-top: 7px;"/></a> 
                <p class="logo" style="margin-left: 50px; margin-top: 0;">CVVEN</p>

                
                
                <nav class="menu">
                    <a href="index.php"> Accueil </a>
                    <a href="Voyage.php"> Hotels </a>
                    <a href="MesReserv.php"> Reservations </a>

                    <?php
                    session_start();

                    if (isset($_SESSION["login"]))
                    {
                        echo "<a style='margin-right: 40px;'>";
                        echo ($_SESSION["login"]);
                        echo "</a>";
                        echo "<a href='logout.php'><img src='Images/deconnexion.png' width=25px style='margin-top: 10px; position: absolute;'/></a>";
                    }
                    else
                    {
                        echo "<a href='SeConnecter.php'> Authentification </a>";
                    }
                    ?>
 
                </nav>

            </div>
        </header>
        <!-- fin header -->
    
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <center>

        <div style="width: 80%; background: radial-gradient(rgb(48, 48, 48,0.6)40%,rgb(167, 29, 29,0),rgb(167, 29, 29,0)100%); height: 600px; border-radius: 60px;">

        <br>
        <br>
        <br>

        <table>
            <tr>

                <td id="titre_1">

                </td>

                <td width="500px">

                    <h1 id="titre_2" style="font-size: 200%; text-align: center;" >CVVEN<br>Vous revez d'évasions, vous souhaitez découvrir de nouveux paysage et de nouvelles cultures ou vivre un séjour innoubliable que ce soit seul, à deux ou en famille</br></h1>

                </td>

            </tr>

        </table>

        </div>

        </center> 

 
        
        <div style="height: 300px;">
        

        </div>
        

        <footer id="footer">

            <center> 
            <br>
            <br>

            <hr style="color: #ffffff; width: 80%;">
            <br>
            Site CVVEN
            <br> 
            <br>
            Réalisé par Achraf fadli et HAKIM CHOURA
            <br>
            <br>
            <br>
            <br>
            </center> 

        </footer>
</body>
</html>
