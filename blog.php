<!--FORMULAIRE-->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog formulaire</title>
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
            <?php
                // On crée les 2 variable que l'on a ajouter ci dessous dans l'input et le textarea.
                $titre = "";
                $text = "";
                // isset = test le formulaire ; is_dir= verifie si la variable correspont a isset.
                if(isset($_GET["nameFile"])) {
                    //On récupere la input namefile du formulaire
                   $recup = $_GET["nameFile"];
                    //On ajoute ce que l'on récupere soit la valeur et on la place dans la varible titre qui est de plus placer a l'endroit du input ci dessous et on lui enleve l'extension .txt'
                   $titre = basename( $recup , ".txt");
                    //On recupere le contenus text et on le met dans une variable
                   $recupContent = file_get_contents("directorymkdir/" . $recup);
                    //on ajoute ce que l'on a recuperer dans le text qui est aussi placer dans le textarea.'
                   $text = $recupContent;
                    //On supprimer le fichier que l'on avais. du coup c'est comme si sa le remplace.
                   unlink("directorymkdir/" . $recup);
                }
            ?>

            <form action="blogsend.php" method="POST">
                <fieldset>
                    <label for="nameFile" style="display: flex;">ENTRER LE NOM DU FICHIER</label>
                    <input type="text" id="nameFile" name="nameFile" value="<?php echo $titre ?>"> <!-- valuer pour ajouter la varibale text a l'endoirt de l'input -->
                </fieldset>
                <fieldset>
                    <label for="textContent" class="label2" style="display: flex;">ENTRER LE CONTENUS DU TEXT</label>
                    <!--textarea permet d'avoir un champ de text -->
                    <textarea id="textContent" name="textContent" cols="70" rows="10"><?php echo $text ?></textarea> <!-- ajout du php a cette endroit pour que la varibale text y soit a l'interieur du textarea -->
                </fieldset>
                <button type="submit" class="btn-valid">ENVOYER</button> <!-- Si plusieur button mettre un name -->
            </form>
        </div>
    </section>
</body>
</html>
