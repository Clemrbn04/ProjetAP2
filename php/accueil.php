<?php
$data=yaml_parse_file('data/accueil.yaml');
?>

<div class="master-title">
        <h1>Accueil</h1>
        <hr>
    </div>
    <div class="page-content first-content">
        <img class="profile-img" src="images/photo_moi.JPG" alt="Photo de profil"/>
        <div class="container" style="justify-content: space-between">
            <div class="content left w-50">
                <?php
                echo '<h2>'.$data['nom'].'</h2>';
                ?>
            </div>
            <div class="content right w-50">
                <?php
                echo '<h2>'.$data['formation'].'</h2>';
                ?>
            </div>
        </div>
        <hr class="blue">
        <div class="container" style="margin-bottom: 0">
            <div class="content w-100">
                <?php
                echo '<h3>'.$data['sujet'].'</h3>';
                ?>
            </div>
        </div>
    </div>
</div>