<?php
include "connect.php";
$id = $_GET['id'];
  ?>
<html>
    <body>
        <form action="update.php" method="POST">
            Nama: <input type="text" 
                    name="nama" ><br>
            Email: <input type="email" 
                    name="email"><br>
            Phone: <input type="tel" 
                    name="phone"><br>
            Umur: <input type="integer" 
                     name="umur"><br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" value="Edit!">
        </form>
    </body>
</html>
