<?php
	session_start();
	
	$_SESSION["user"] = "Adin";
	$_SESSION["bahasa"] = "US";
?>

<html>
<head>
	<title>Session</title>
</head>

<body>
	<?php
		if (isset($_SESSION["user"])) {
			echo "Nilai user : ".$_SESSION["user"];
			echo "<br/>";
			echo "Nilai bahasa : ".$_SESSION["bahasa"];
			
			echo "<br/>";
			
			if ($_SESSION["bahasa"] == "Indonesia") {
				echo "hai, Selamat datang";
			} else {
				echo "Welcome . . .";
			}


		} else {
			echo "Belum ada nilai session";
		}
	
	?>
</body>
</html>