<?php

use Random\Engine\Secure;

require_once "./controllers/functions.controller.php";
require_once "./models/visiteurs.model.php";



function mailContact()
{
    afficherTableau($_POST);
    if (!empty($_POST['nomFormulaire']) && !empty($_POST['mailFormulaire']) && !empty($_POST['messageFormulaire'])) {
        $nom = htmlentities($_POST['nomFormulaire']);
        $mail = htmlentities($_POST['mailFormulaire']);
        $message = htmlentities($_POST['messageFormulaire']);
        $destinataire = "velo-expresso@orange.fr";
        $sujet = "Mail de " . $nom . " : " . $mail . " => ";
        $message = $sujet ." ".$message;

        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
           
            $headers = "From : " . $mail;
            if (mail($destinataire, $sujet, $message, $headers)) {
                ajouterMessageAlerte("Mail envoyé. Il sera lu dès que possible.", "vert");
            } else {
                ajouterMessageAlerte("Mail non parti à " . $destinataire . " ! <br> Merci de réessayer.", "rouge");
            }
            header('location:' . URL . "accueil");
        } else {
            header('location:' . URL . "accueil");
            ajouterMessageAlerte("Adresse mail non valide.", "orange");
        }
    } else {
        header('location:' . URL . "accueil");
        ajouterMessageAlerte("Il faut remplir les 3 champs de contact !", "orange");
    }
}
