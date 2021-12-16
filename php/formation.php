<?php
$data=yaml_parse_file('data/formation.yaml');
?>

<div class="secondary-title">
    <h1>Formations</h1>
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
                    echo '<p>'.$val['descriptif'].'</p>';
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