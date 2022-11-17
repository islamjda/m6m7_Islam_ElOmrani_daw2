<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 1 Islam EOA</title>
</head>
    <body>
        <?php
        if($_SERVER["REQUEST_METHOD" == "POST"]){
        	if (isset($_POST["email"]) and isset($_POST["pwd"])){
        		$email = $_POST["email"];
        		$pass = $_POST["pwd"];
        		echo $email." ".$pass;
        		exit();
        	} else {
        		echo "esta en blanco";
        		exit();
        	}
        }else{
        	echo "no post";
        	exit();
        }				
            /*$usuari = $_POST['user'];
		    $email = $_POST['email'];
		    $pwd = $_POST['pwd'];
	
		    echo "<a href=\"#\">Anar a informació 1</a>";
                echo("<br>");
                echo("<a href=\"#\">Anar a informació 2</a>");
                echo("User= " + $usuari + " Pwd= " + $pwd);*/
        ?>
    </body>
</html>
