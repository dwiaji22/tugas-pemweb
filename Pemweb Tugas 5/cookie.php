<html>
    <head>
  	<title>Login Page</title> 
    <link href="style1.css" rel="stylesheet" type="text/css" >
    </head>
    <body>
  	<div class="form">

    <?php
    $username = $_REQUEST['usr'];
    $password = $_REQUEST['pwd'];

    if($username == "pemweb" and 
        $password == "pemwebasik") {
            setcookie('login', true, time() + 60);
            echo "Hore Kamu berhasil login!";
        }
        else echo "Yah Kamu gagal Login :(";
		?>

		<br><br/>
		<strong> Lanjut Ke <a href="mainpage.php">Halaman Selanjutnya</a> </strong>
    </form>
  	</div>
	</div>
    
    </body>
</html>
