<?php 
    @$alas = $_GET['alas'];
    @$tinggi = $_GET['tinggi'];
    @$sisi_miring = $_GET['sisi_miring'];
    @$sisi_atas = $_GET['sisi_atas'];
    @$luas = ($alas + $sisi_atas) * $tinggi / 2;
    @$keliling = $tinggi + $sisi_miring + $alas + $sisi_atas;
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <style>
        div {
        background-color: lightgrey;
        width: 300px;
        border: 10px solid green;
        padding: 10px;
        margin: 10px;
        }
        input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 8px 15px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}

        </style>
        <title>TRAPESIUM</title>

    </head>
    <body>
        <div>
        <form method="GET">
            <H4>YUK HITUNG LUAS & KELILING TRAPESIUM</H4>
            <table>
                <tr>
                    <td><strong>Alas</strong></td>
                    <td>:</td>
                    <td><input type="text" name="alas" value="<?php echo $alas; ?>"/> cm<br/></td>
                </tr>
                <tr>
                    <td><strong>Tinggi</strong></td>
                    <td>:</td>
                    <td><input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/> cm<br/></td>
                </tr>
                <tr>
                    <td><strong>Sisi Miring</strong></td>
                    <td>:</td>
                    <td><input type="text" name="sisi_miring" value="<?php echo $sisi_miring; ?>"/> cm<br/></td>
                </tr>
                <tr>
                    <td><strong>Sisi Atas</strong></td>
                    <td>:</td>
                    <td><input type="text" name="sisi_atas" value="<?php echo $sisi_atas; ?>"/> cm<br/></td>
                </tr>
            </table>
             <input type="submit" name="submit" value="SUBMIT"/><br/>
             <table>
                <tr>
                <td>    <?php
                    echo "<strong>Luas : </strong> $luas cm^2<br/>";
                    echo "<strong>Keliling : </strong> $keliling cm";
                    ?>
                </td>
                </tr>
             </table>
        </form>
        </div>
    </body>
</hmtl>