<?php

include "connect.php";

$sql = "SELECT id, nama, email, tel, umur "
     . "FROM bukutelepon";
$res = mysqli_query($link, $sql);
echo "<table border=1>";
echo "<tr>";
echo "<td>ID</td>";
echo "<td>Nama</td>";
echo "<td>Email</td>";
echo "<td>Tel</td>";
echo "<td>Umur</td>";
echo "<td>Action</td>";
echo "</tr>";
while($baris = mysqli_fetch_array($res)) {
    $id = $baris['id'];
    echo "<tr>";
    echo "<td>" . $id . "</td>";
    echo "<td>" . $baris['nama'] . "</td>";
    echo "<td>" . $baris['email'] . "</td>";
    echo "<td>" . $baris['tel'] . "</td>";
    echo "<td>" . $baris['umur'] . "</td>";
    echo '<td><a href="delete.php?id='.$id.'">Delete</a>
    <a href="edit.php?id='.$id.'">Edit</a></td>'; 

    echo "</tr>";
}
echo "</table>";
mysqli_close($link);