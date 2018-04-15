<?php
$file = "data.txt";
$data = file_get_contents($file);
$row = $_GET['row'];
$baris = explode("[R]", $data);
$cols = explode("|F|", $baris[$row]);

  ?>
<html>
    <body>
        <form action="update.php" method="POST">
            Nama: <input type="text" 
                    name="nama" value="<?php echo $cols[0] ?>"><br>
            Email: <input type="email" 
                    name="email" value="<?php echo $cols[1] ?>"><br>
            Phone: <input type="tel" 
                    name="phone" value="<?php echo $cols[2] ?>"><br>
            Umur: <input type="number" 
                    name="umur" value="<?php echo $cols[3] ?>"><br>
            <input type="hidden" name="row" value="<?php echo $row ?>">
            <input type="submit" value="Edit!">
        </form>
    </body>
</html>
