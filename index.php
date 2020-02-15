<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>$_POST</title>
</head>
<body>
    <?php
	
		interface Zarowka{
			const MOC=12;//W
			function zaswiec($t);
		}
		//echo Zarowka::MOC;
		class Lampa implements Zarowka{
			function zaswiec($czas){//Ta funkcja musi być zdefiniowana.
				return Zarowka::MOC*$czas." J<br />";
			}
		}
		$Lampa=new Lampa();
		echo $Lampa->zaswiec(5);
		echo $Lampa->zaswiec(41);
	?>
</body>
</html>
