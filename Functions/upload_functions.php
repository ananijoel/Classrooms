<?php
function uploader(){
    $message = '';
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si le fichier a été uploadé sans erreur.
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $filename = $_FILES["file"]["name"];
        $filetype = $_FILES["file"]["type"];
        $filesize = $_FILES["file"]["size"];
        // Vérifie si le fichier existe avant de le télécharger.
        if(file_exists("../Upload//")){
            if (file_exists("../Upload//" . $_FILES["file"]["name"])) {
                $message =  '<div class="uploadstate halfFail">'.$_FILES["file"]["name"].' existe deja</div>';
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], "../Upload//" . $_FILES["file"]["name"]);
                $message =  '<div class="uploadstate succes">Votre fichier a été téléchargé avec succès.</div>';
            }
        }else{
            $message =  '<div class="uploadstate succes">le dossier de telechargement n\'existe pas.</div>';
            mkdir("../Upload/",777);
        }
    }
    return $message;
}

}