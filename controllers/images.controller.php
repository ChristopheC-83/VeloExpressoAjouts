<?php

require_once("./models/images.model.php");


function ajoutImage($file, $repertoire)
{

    if (!isset($file['name']) || empty($file['name'])) {
        throw new Exception("Vous devez sélectionner une image.");
    }

    if (!file_exists($repertoire)) mkdir($repertoire, 0777);

    $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $random = rand(0, 999999);
    $target_file = $repertoire . $random . "_" . $file['name'];

    if (!getimagesize($file["tmp_name"]))
        throw new Exception("Le fichier n'est pas une image");
        header('location:' . URL . "admin/accueilAdmin");
    if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
        throw new Exception("L'extension du fichier n'est pas reconnu");
        header('location:' . URL . "admin/accueilAdmin");
    if (file_exists($target_file))
        throw new Exception("Le fichier existe déjà.");
        header('location:' . URL . "admin/accueilAdmin");
    if ($file['size'] > 750000)
        throw new Exception("Le fichier est trop volumineux (750ko maximum).");
        header('location:' . URL . "admin/accueilAdmin");
    if (!move_uploaded_file($file['tmp_name'], $target_file))
        throw new Exception("l'ajout de l'image n'a pas fonctionné");
    else return ($random . "_" . $file['name']);
}

function suppressionImageUtilisateur($login)
{
    if (!getImageUser($login)) {
        $ancienne_image = getImageUser($login);
        unlink("public/assets/images/" . $ancienne_image);
    }
}


