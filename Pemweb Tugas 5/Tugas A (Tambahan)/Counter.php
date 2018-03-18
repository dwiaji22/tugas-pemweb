<html> 
    <head> 
        <title>Count Page dan Last Time Visit</title> 
        <style>
body {
    background-color: lightblue;
}

</style>
   </head> 
    
    <div align="center"><?php 
    if (!isset($_COOKIE['count']))
    {
        ?> 
        Ini pertama kali anda mengunjungi page. 
        <?php 
        $cookie = 1;
        setcookie("count", $cookie);
    }
    else
    {
        $cookie = ++$_COOKIE['count'];
        setcookie("count", $cookie);
        ?> 
    <h3>Anda telah mengunjungi page ini sebanyak <?= $_COOKIE['count'] ?> kali. </h2></div>


    <div align="center" ><?php  }?> 
    <br>
        <?php
        date_default_timezone_set("Asia/Jakarta");
        $b = time();
        $hour = date("G",$b);
        $waktu = 60 * 60 * 24 * 60 + time();
        setcookie('kunjungan', date("G:i - d/m/y"), $waktu);
            if(isset($_COOKIE['kunjungan']))
             
            {
                 $visit = $_COOKIE['kunjungan'];
                 echo "Terakhir kali anda mengunjungi page- ". $visit;
            }
            else
            echo "";
?></div>
   </body> 
</html>