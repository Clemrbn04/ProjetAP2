<?php
$data=yaml_parse_file('data/experiences.yaml');
?>

<div class="secondary-title">
    <h1>Expériences</h1>
    <hr>
    <div class="container">
    <?php
        foreach($data AS $cle=>$val){
            ?>
            <div class="content">
                <div class="card bg-white">
                    <?php 
                    echo '<h3 class="title">'.$val['poste'].'</h3>';
                    ?>
                    <hr class="blue">
                    <?php
                    echo '<center><p>'.$val['descriptif'].'</center></p>';
                    ?>
                    <hr>
                    <?php
                    echo '<i>'.$val['caption'].'</i>';
                    ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>