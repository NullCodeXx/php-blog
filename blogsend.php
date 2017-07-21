<!--RECEPTIONNE L'INFORMATION DU FORMULAIRE-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reception du Formulaire</title>
    <style>
    body {
    font-family: helvetica, arial, sans-serif;
    font-size: 10px;
    background-image: url("wallpaper.jpg");
    background-size: 100%;
    background-repeat: no-repeat;
    
    }
    @font-face {
        src: url("../fontface/Pacifico.ttf");
        font-family: "Pacifico.ttf";
    }
    h1 {
        text-align: center;
        color: #ffffff;
        font-family: "Pacifico.ttf";
        font-size: 4em;
        letter-spacing: 5px;
        text-shadow: 5px 10px 12px black, 5px 6px 7px #2c3e50;
    }
    section {
        margin: auto;
        max-width: 55%;
    }

    div {
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
    }

    fieldset {
        border: none;
        display: flex;
        justify-content: center;
    }
    
    label{
        color: #ffffff;
        position: relative;
        left: 34%;
        font-size: 2em;
        text-shadow: 0px 3px 6px black, 3px 3px 0px #2c3e50;
    }
    label.label2 {
        color: #ffffff;
        position: relative;
        left: 32%;
        font-size: 2em;
    }
    input {
        background-color: rgba(255,60,155,0.1);
        color: #ffffff;
        border: none;
        position: relative;
        left: 40%;
        padding: 15px;
    }

    textarea {
        width: 100%;
        background-color: rgba(255,60,155,0.1);
        color: #ffffff;
        border: none;
        font-size: 16px;
        text-shadow: 0px 3px 6px black, 3px 3px 0px #2c3e50;        
    }
    button {
        color: #ffffff;
        background-color: rgba(255,60,155,0.1);
        font-family: helvetica;
        font-size: 2em;
        border-radius: 10px;
        border: none;
        padding: 15px;   
    }
    button:hover {
        color: #ffffff;
        background-color: rgba(255,60,155,0.4);
        font-family: helvetica, arial, sans-serif;
        font-size: 2em;
        border-radius: 10px;
        border: none;
        padding: 15px;   
    }

    button.btn-valid {
        position: relative;
        left: 42%;
        text-shadow: 0px 3px 6px black, 3px 3px 0px #2c3e50;
    }
    </style>
</head>
<body>
     <h1>MON PREMIER BLOG</h1>
    <section>
        <div>
            <form action="blogsend.php" method="POST">
                <fieldset>
                    <label for="nameFile" style="display: flex;">ENTRER LE NOM DU FICHIER</label>
                    <input type="text" id="nameFile" name="nameFile">
                </fieldset>
                <fieldset>
                    <label for="textContent" class="label2" style="display: flex;">ENTRER LE CONTENUS DU TEXT</label>
                    <!--textarea permet d'avoir un champ de text -->
                    <textarea id="textContent" name="textContent" cols="70" rows="10">Text...</textarea>
                </fieldset>
                <button type="submit" class="btn-valid">ENVOYER</button> <!-- Si plusieur button mettre un name -->
            </form>
        </div>
    </section>


    <?php 
    //tester le fomulaire champ.
    if(!isset($_POST["nameFile"])) {
        echo "La fiche est pas renseigner veuiller la compléter.";
        exit(1); //termine le script courant.
    } 
        echo "<h2 style='text-align: center;
        color: #ecf0f1;
        font-family: Helvetica;
        font-size: 3em;
        letter-spacing: 5px;
        text-shadow: 5px 10px 12px black, 5px 6px 7px #2c3e50;'>" . "NOM DU FICHIER" . " : " . $_POST["nameFile"] ."</h2>";
        echo "<p style='text-align: center;font-size: 13px;
        text-shadow: 1px 2px 1px black, 1px 1px 1px #2c3e50;color: #ffffff'>" . "CONTENUS DU FICHIER" . " : " . $_POST["textContent"] . "</p>";
    $var1 = $_POST["nameFile"];
    $var2 = $_POST["textContent"];

    //vérifie si le dossier éxiste.
    if(!is_dir("directorymkdir")) {
        //Crée le dossier.
        mkdir("directorymkdir");
    }
    // Create file with function fopen.
    //ajoute le fichier au dossier crée avec l'extension et le mode.
    $createFile = fopen("directorymkdir/" . $var1 . ".txt", "w+");
    //Ouvrir le fichier.
    opendir($createFile); 
    //Ecrire dans le fichier. et lui ajoute le contenus text soit la $var2.
    fwrite($createFile , $var2);
    //Ferme le fichier.
    fclose($createFile);
    //Lien vers l'index. 
    echo '<a href="index.php" style="text-decoration: none;font-family: Helvetica;
        font-size: 18px;text-align: center;text-shadow: 1px 2px 1px black, 1px 1px 1px #2c3e50;color: #ffffff;margin-left: 47%;">INDEX ALL</a>';
    
?>












<!--
donner les permission d'ecriture a un dossier ou x chose.
ls -ld sert a afficher les droits.
chmod o+w . sert a faire la modification. 
//IMPORTANT NE PAS OUBLIER LE "." A LA FIN, IL SPECIFIE LE DOSSIER COURANT.

rwx         rwx         r-x
user        group       other
_____________________________
commande chmod o + w .
a la place du o pon peut ecrire = o > other ; u > user ; g > group ; a > all
a la place du w pon peut ecrire = w > write ; r > read ; x > execute ;

-->    
</body>
</html>
