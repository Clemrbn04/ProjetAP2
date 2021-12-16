
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<meta charset="utf-8">
		<title>Site</title>
	</head>


	<body>
		<header>
		<?php include("php/menu.php"); ?>
		</header>
		<?php
			$data=yaml_parse_file("data/menu.yaml");
			foreach($data AS $cle=>$val){
				echo '<section id="'.$cle.'">';
				include('php/'.$cle.'.php');
				echo '</section>';
			}
		?>

		
		<footer>
            Développé par Clément ROBINE - © All Right Reserved
        </footer>
	</body>
</html>
