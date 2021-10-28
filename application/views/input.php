<html>
<head>
    <title>Tutorial Membuat Script PHP Menghitung Luas Lingkaran</title>
</head>
<body>
    <h1>Program Menghitung Luas Lingkaran</h1>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Input Jari-jari Lingkaran</td>
                <td>:</td>
                <td><input type="text" name="jari" required></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $jari   =$_POST['jari'];
            $phie    =22/7;
            
            // menghitung luas lingkaran
            $luas_lingkaran = $phie*($jari*$jari);
            echo "Diketahui;<br />":
            echo "Jari-jari lingkaran = $jari<br />";
            echo "Phie = $phie<br />";
            echo "Luas dari Lingkaran adalah [ $phie x $jari x $jari ] = $luas_lingkaran";
        }
    ?>
</body>
</html>