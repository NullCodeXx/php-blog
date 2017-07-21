<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index files</title>
    <style>
        body {
    font-family: helvetica, arial, sans-serif;
    font-size: 10px;
    color: #fff;
    }
    img {
        background-size: 100%;
        background-repeat: no-repeat;
        position: fixed;
        z-index: 1;
        /* Flouter l'image */
        -webkit-filter: blur(2px);
        -moz-filter: blur(2px);
        -o-filter: blur(2px);
        -ms-filter: blur(2px);

        filter: blur(4px);
    }
    @font-face {
        src: url("../fontface/Pacifico.ttf");
        font-family: "Pacifico.ttf";
    }

    section {
        display: flex;
        justify-content: center;
        align-items: center; 
        width: 100%;
        height: 30vh;
        background-color: rgba(100,100,150,0.3);
        margin-top: -1%;
        position: relative;
        z-index: 2;
    }

    h1 {
        text-align: center;
        color: #ffffff;
        font-family: "Pacifico.ttf";
        font-size: 4em;
        letter-spacing: 8px;
        text-shadow: 5px 10px 12px black, 5px 6px 7px #2c3e50;
        position: relative;
        z-index: 2;
    }
    a  {
        text-align: center;
        color: rgba(100,100,100,0.3);
        font-family: "Pacifico.ttf";
        font-size: 1em;
        letter-spacing: 8px;
        text-shadow: 5px 10px 12px black, 5px 6px 7px #2c3e50;
        text-decoration: none;
        position: relative;
        z-index: 2;
        transition: 0.1s;
    }
    a:hover  {
        text-align: center;
        color: #ffffff;
        font-family: "Pacifico.ttf";
        font-size: 1em;
        letter-spacing: 8px;
        text-shadow: 5px 10px 12px black, 5px 6px 7px #2c3e50;
        text-decoration: none;
        position: relative;
        z-index: 2;
        transition: 0.9s;
    }
    /*Debut button*/
    .centerfile {
        text-align: center;
        border: none;
        width: auto;
        font-size: 3em;
        text-shadow: 5px 10px 12px black, 5px 6px 7px #2c3e50;
        position: relative;
        z-index: 2;
    }
    .centercontent {
        text-align: center;
        border: none;
        width: auto;
        font-size: 2em;
        text-shadow: 5px 10px 12px black, 5px 6px 7px #2c3e50;
        position: relative;
        z-index: 2;
        padding: 10px;
        background-color: rgba(100,110,100,0.2);
        width: 30%;
        height: auto;
        margin-left: 34%;
    }
    .centerdelete {
        text-align: center;
        border: none;
        background-color: rgba(255,0,0,0.1);
        width: auto;
        font-size: 2em;
        text-shadow: 5px 10px 12px black, 5px 6px 7px #2c3e50;
        color: #fff;
        position: relative;
        z-index: 2;
        transition: 0.1s;
    }
    .centerdelete:hover {
        text-align: center;
        border: none;
        background-color: rgba(255,0,0,0.1);
        width: auto;
        font-size: 2em;
        text-shadow: 0px 0px 2px #fff, 0px 0px 2px #2c3e50;
        color: red;
        position: relative;
        z-index: 2;
        transition: 0.3s;
    }
    .centermodif {
        text-align: center;
        border: none;
        background-color: rgba(0,255,0,0.1);
        width: auto;
        font-size: 2em;
        text-shadow: 5px 10px 12px black, 5px 6px 7px #2c3e50;
        color: #fff;
        position: relative;
        z-index: 2;
        transition: 0.1s;
    }
    .centermodif:hover {
        text-align: center;
        border: none;
        background-color: rgba(0,255,0,0.1);
        width: auto;
        font-size: 2em;
        text-shadow: 0px 0px 2px #fff, 0px 0px 2px #2c3e50;
        color: lime;
        position: relative;
        z-index: 2;
        transition: 0.3s;
    }
    /*Fin button*/
    /*Animation section*/
    .anim {
        animation: color 10s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        text-align: center;
        position: relative;
        z-index: 2;
    }
    @keyframes color {
        0%  {
            background-color: rgba(0,10,100,0.1);
            background-image: url("");
            background-size: 100%;
            background-repeat: no-repeat;
        }
        10% {
            background-color: rgba(10,10,90,0.1);
            background-image: url("");
            background-size: 100%;
            background-repeat: no-repeat;
        }
        20  {
            background-color: rgba(20,10,80,0.1);
            background-image: url("");
            background-size: 100%;
            background-repeat: no-repeat;
        }
        30% {
            background-color: rgba(30,10,70,0.1);
            background-image: url("");
            background-size: 100%;
            background-repeat: no-repeat;

        }
        40% {
            background-color: rgba(40,10,60,0.1);
            background-image: url("");
            background-size: 100%;
            background-repeat: no-repeat;
        }
        50% {
            background-color: rgba(50,10,50,0.1);
            background-image: url("");
            background-size: 100%;
            background-repeat: no-repeat;
        }
        60% {
            background-color: rgba(60,10,40,0.1);
            background-image: url("");
            background-size: 100%;
            background-repeat: no-repeat;
        }
        70% {
            background-color: rgba(70,10,30,0.1);
            background-image: url("");
            background-size: 100%;
            background-repeat: no-repeat;
        }
        80% {
            background-color: rgba(80,10,20,0.1);
            background-image: url("");
            background-size: 100%;
            background-repeat: no-repeat;
        }
        90% {
            background-color: rgba(90,10,10,0.1);
            background-image: url("");
            background-size: 100%;
            background-repeat: no-repeat;
        }
        100%{
            background-color: rgba(0,10,100,0.1);
            background-image: url("");
            background-size: 100%;
            background-repeat: no-repeat;
        }
    }
    </style>
</head>
<body>
    <img src="wallpaper03.jpg" alt="wallpaper street" />
    <section class="anim">
        <div>
            <h1>ALL FILES // <a href="blog.php" title="Redirection vers le blog">ADD FILE</a></h1>
        </div>
    </section>
    <?php
    // is_dir //existe
    // opendir //Si existe ouvre toi.
    // readdir //lire continuelement sans savoir quand il doit s'arreter donc boucle while.
    // closedir //fermer
    $directory = "directorymkdir";
    
    $files = scandir($directory); //renvoie les fichier dans le dossier sous forme de tableau, liste les fichier.
    foreach($files as $file) { //itére chaque fichier dans $file.
        if(!is_dir($file)) { //Vérifie si c'est un dossier ou pas.'
            echo "<h2 class='centerfile'>" . $file . "</h2>\n";
            $content = file_get_contents("directorymkdir/" . $file); //
            echo "<p class='centercontent'>" . $content . "</p>\n";

            //Supprimer le fichier.
            echo "<form action='delete.php' method='GET' class='centerdelete'>
            <input type='hidden' name='nameFile' class='centerdelete' value='".$file."'>
            <input type='submit' value='delete' class='centerdelete'>
            </form>\n";

            //Modificaton du fichier
            echo "<form action='blog.php' method='GET' class='centermodif'>
            <input type='hidden' name='nameFile' class='centermodif' value='".$file."'>
            <input type='submit' value='modifier' class='centermodif'>
            </form>\n";
        }
    }

    $mdp = "admin";
    echo "<p style='color: red;'>" . md5($mdp) . "<br/>" . "</p>";
    echo "<p style='color: red;'>" . ($mdp) . "<br/>" . "</p>";
    echo "<p style='color: red;'>" . sha1($mdp) . "<br/>" . "</p>";
    echo "<p style='color: red;'>" . sha1($mdp) . "<br/>" . "</p>";

    // Pour rendre le hash plus compliquer il faut saler le cryptage.
    //Pour ce faire on crée une variable qui contient une function random en une chaine de charactere.
    $random = "chaine de charactere dans une fonction";
    // crypt.
    $crytpt = md5($md5 . $random);
    echo "<p style='color: red;'>" . $crytpt . "</p>";
   ?>
</body>
</html>
    
