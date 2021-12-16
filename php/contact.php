<?php
$data=yaml_parse_file('data/contact.yaml');
?>

<div class="secondary-title" style="padding-top: 20px;">
    <h1>Contact</h1>
    <hr>
    <div class="content">
        <div class="card bg-white" style="text-align: left;">
                <form action="post" class="container" style="margin-bottom: 10px;">
                    <div class="content w-50">
                        <label for="mail">Votre Email :</label>
                        <input name="mail" id="email" type="mail" placeholder="Entrez votre Email">
                        <label for="nom">Votre Nom :</label>
                        <input name="nom" id="name" type="text" placeholder="Entrez votre Nom">
                        <label for="object">Objet :</label>
                        <input name="object" id="objet" type="text" placeholder="Votre Objet">
                    </div>
                    <div class="content w-50">
                        <label for="message">Votre Message :</label>
                        <textarea name="mess" id="message" cols="30" rows="10" placeholder="Entrez votre message"></textarea>
                        <button type="submit">Envoyer</button>
                    </div>
                </form>
        </div>
    </div>
</div>


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(!empty($_POST)){
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';               //Adresse IP ou DNS du serveur SMTP
    $mail->Port = 465;                          //Port TCP du serveur SMTP
    $mail->SMTPAuth = 1;                        //Utiliser l'identification
    $mail->CharSet = 'UTF-8';

    if($mail->SMTPAuth){
    $mail->SMTPSecure = 'ssl';               //Protocole de sécurisation des échanges avec le SMTP
    $mail->Username   =  'clement.robine@sts-sio-caen.info';    //Adresse email à utiliser
    $mail->Password   =  'Password';         //Mot de passe de l'adresse email à utiliser
    }

    $mail->From       = trim($_POST["mail"]);                //L'email à afficher pour l'envoi
    $mail->FromName   = trim($_POST["nom"]);          //L'alias de l'email de l'emetteur

    $mail->AddAddress(trim($_POST["nom"]));

    $mail->Subject    =  $_POST["object"];                      //Le sujet du mail
    $mail->WordWrap   = 50; 			       //Nombre de caracteres pour le retour a la ligne automatique
    $mail->AltBody = $_POST["mess"]; 	       //Texte brut
    $mail->IsHTML(false);                                  //Préciser qu'il faut utiliser le texte brut

    if (!$mail->send()) {
        echo $mail->ErrorInfo;
    } else{
        echo 'Message bien envoyé';
    }
}
?>