<?php
$data=yaml_parse_file('data/contact.yaml');
?>

<div class="secondary-title" style="padding-top: 20px;">
    <h1>Contact</h1>
    <hr>
    <div class="content">
        <div class="card bg-white" style="text-align: left;">
                <form action="php/envoi.php" method="post" class="container" style="margin-bottom: 10px;">
                    <div class="content w-50">
                        <label for="mail">Votre Email :</label>
                        <input name="mail" id="mail" type="mail" placeholder="Entrez votre Email">
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


