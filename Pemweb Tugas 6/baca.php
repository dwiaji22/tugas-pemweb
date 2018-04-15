<?php
$file = "data.txt";
$data = file_get_contents($file);

$baris = explode("[R]", $data);
echo "<table border=1>";
echo "<tr>";
echo "  <td>Nama</td><td>Email</td>";
echo "  <td>Phone</td><td>Umur</td><td>Action</td>";
echo "</tr>";
for($i =0; $i<count($baris)-1; $i++) {
    $col = explode("|F|", $baris[$i]);
    echo "<tr>";
    echo "  <td>" . $col[0] . "</td>";
    echo "  <td>" . $col[1] . "</td>";
    echo "  <td>" . $col[2] . "</td>";
    echo "  <td>" . $col[3] . "</td>";
    echo '  <td> <a href="delete.php?row='.$i.'">DELETE</a>
    			<a href="edit.php?row='.$i.'">EDIT</a> </td>'; 

    echo "</tr>";
}
echo "</table>";
