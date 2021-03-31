
<?php require 'rumus.php'; ?>
<html>
<head>
    <title>praktikum</title>
</head>
<body>
    <h2>Form Hitung Volume Kubus</h2>
    <h3>Isi Data:</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Sisi</td>
                <td>:</td>
                <td><input type="number" name="sisi" required ></td>
            </tr>
            <tr>
                <td>Volume/Luas</td>
                <td>:</td>
                <td>
                    <select name="rumus">
                        <option value="volume">Volume</option>
                        <option value="luas">Luas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <?php
            if(isset($_POST['submit'])){
                $kubus = new kubus();
                $kubus->sisi    =$_POST['sisi'];
                if($_POST['rumus'] === "volume"){
                    $volume_kubus      = $kubus->volume();
                    echo "Hasil hitung volume kubus adalah sebagai berikut:<br />";
                    echo "Diketahui;<br />";
                    echo "Panjang = $kubus->sisi <br />";
                    echo "Maka volume kubus sama dengan = $volume_kubus";
                }else{
                    $luas_kubus  = $kubus->luas();
                    echo "Hasil hitung luas kubus adalah sebagai berikut:<br />";
                    echo "Diketahui;<br />";
                    echo "Panjang = $kubus->sisi <br />";
                    echo "Maka luas kubus sama dengan = $luas_kubus";
                }
            }
        ?>
</body>
</html>