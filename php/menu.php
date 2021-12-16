<?php


    $content=\file_get_contents('data/menu.yaml');
    $data=yaml_parse($content);

?>
    <header>
        <nav>
        <ul>
        <?php
            foreach($data as $cle=>$val){
        ?>
            <li class="selected">
                <?php echo("<a href='#".$cle."'>".$val."</a>"); ?>
            </li>
        <?php
            }
        ?>
        </ul>
    </nav>
    </header>
<?php


?>

