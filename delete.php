<!--Delete file-->

<?php
    if(isset($_GET["nameFile"])) {
        $varFile = $_GET["nameFile"];
        $ok = unlink("directorymkdir/". $varFile);
        if($ok) {
            echo "le fichier a été supprimer";
            header("location: index.php");
        }else {
            echo "Le fichier n'as pas été supprimer";
        }
    }
?>