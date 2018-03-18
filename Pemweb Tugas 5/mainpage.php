<html>
    <head>
  	<title>Login Page</title> 
    <link href="style1.css" rel="stylesheet" type="text/css" >
    </head>
    <body>
  	<div class="form">

    <?php
// Deklarasi untuk mengambil nilai user agent
$agent = $_SERVER['HTTP_USER_AGENT'];

// Deklarasi untuk mengeset dan mengambil waktu sesuai pc 
date_default_timezone_set("Asia/Jakarta");
$b = time();
$hour = date("G",$b);
 
// Kondisi untuk Mendeteksi Browser
	if (preg_match('/Firefox/i',$agent)) $br = 'Firefox'; 
  		elseif(preg_match('/Mac/i',$agent)) $br = 'Mac';
  		elseif(preg_match('/Chrome/i',$agent)) $br = 'Chrome'; 
 		elseif(preg_match('/Opera/i',$agent)) $br = 'Opera'; 
 		elseif(preg_match('/MSIE/i',$agent)) $br = 'IE'; 
  		else $bs = 'Unknown';
	
    if(isset($_COOKIE))
        $sudahLogin = $_COOKIE['login'];
        
    	if($sudahLogin == true) {
       		if ($hour>=0 && $hour<=11)
				{
				echo "<h3>Selamat Pagi! Semangat Menyambut Hari!</h3><br>";
				}
			elseif ($hour >=12 && $hour<=14)
				{
				echo "<h3>Selamat Siang! Sudah Makan Siang?</h3><br>";
				}
			elseif ($hour >=15 && $hour<=17)
				{
				echo "<h3>Selamat Sore! Sebentar Jam Lagi Pulang</h3> <br>";
				}
			elseif ($hour >=17 && $hour<=18)
				{
				echo "<h3>Selamat Petang! Hati- Hati di Perjalanan Pulang</h3><br>";
				}
			elseif ($hour >=19 && $hour<=23)
				{
				echo "<h3>Selamat Malam! Selamat Beristirahat<h3> <br>";
				}

// Kondisi saat browser ditemukan
 
			if ($br=='Firefox')
  			{
    			echo 'Browser yang anda gunakan adalah Firefox';
  			}
 			elseif ($br=='Chrome')
  			{
    			echo 'Browser yang anda gunakan adalah Chrome';
  			}
 			elseif ($br=='Opera')
  			{
    			echo 'Browser yang anda gunakan adalah Opera';
 			}
			elseif ($br=='MSIE')
  			{
    			echo 'Browser yang anda gunakan adalah Microsoft Internet Explorer';
  			}
 			elseif ($br=='Unknown')
  			{
    			echo 'Browser yang anda gunakan TIDAK DIKETAHUI! HATI-HATI!';
  			}
  		} else {
        echo "Maaf Login dulu dengan benar ya";
    }
    ?>

    </form>
  	</div>
	</div>
    
    </body>
</html>



