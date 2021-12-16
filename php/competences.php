<?php
$data=yaml_parse_file('data/competences.yaml');
?>

<div class="secondary-title">
        <h1>Compétences</h1>
        <hr>
    </div>
    <div class="page-content second-content">
        <div class="profile-img bg-white" style="display: flex; justify-content: center; align-items: center">
            <i class="fas fa-star star" style="font-size: 100px; padding-bottom: 10px;"></i>
        </div>
        <div style="margin-top: 70px;">
            <?php
                foreach($data AS $cle=>$val){
                    ?>
                    <section class="content">
                        <?php echo '<h3 class="title">'.$val['name'].'</h3>'; ?>
                        <hr class="blue">

                        <div class="container">
                        <?php
                            foreach($val['skills'] AS $cle1=>$val1){
                                ?>
                            <div class="content">
                                <div class="card bg-blue">
                                    <?php echo '<i class="'.$val1['icon'].'" style="font-size: 55px"></i>'; ?>
                                    <?php echo '<h3>'.$val1['name'].'</h3>'; ?>
                                    <div class="container" style="margin-top: 20px; justify-content: space-evenly">
                                        <?php 
                                        $stars = $val1['stars'];
                                        for($i = 1; $i < 6; ++$i) { 
                                            $classe = 'far fa-star';
                                            if ($stars >= $i) {
                                                $classe = 'fas fa-star';
                                            } elseif ($stars == ($i - 0.5)) {
                                                $classe = 'fas fa-star-half-alt';
                                            }
                                            echo '<i class="'.$classe.' star" style="font-size: 25px"></i>';
                                        } ?>
                                    </div>
                                    <?php if (array_key_exists('certification', $val1)) { ?>
                                                <i>Certification Microsoft</i>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </section>
                    <?php
                }
            ?>
        </div>
    </div>

</div>