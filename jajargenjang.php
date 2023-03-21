<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Jajar Genjang</title>
</head>
<body>
	<h1>Kalkulator Jajar Genjang</h1>
    <form method="post" action="">
    <table>
        <tr>
            <td>
                <label for="alas">Masukkan Alas:</label>
            </td>
            <td>
                <input type="number" id="alas" name="alas" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="tinggi">Masukkan Tinggi:</label>
            </td>
            <td>
                <input type="number" id="tinggi" name="tinggi" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="sisi">Masukkan Sisi Miring:</label>
            </td>
            <td>
                <input type="number" id="sisi" name="sisi" required />
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Hitung" />
            </td>
        </tr>
    </table>
</form>

	<?php
		if(isset($_POST['submit'])){
			$alas = $_POST['alas'];
			$tinggi = $_POST['tinggi'];
			$sisi = $_POST['sisi'];

			$luas = $alas * $tinggi;
			$keliling = 2 * ($alas + $sisi);

            echo"<br>Diketahui" ;
            echo"<br>Alas = " . $alas;
            echo"<br>Tinggi = " . $tinggi;
            echo"<br>Sisi Miring = " . $sisi . "<br>";

			echo "<br>Jadi";
            echo "<br>Luas jajar genjang adalah : " . $luas;
			echo "<br>Keliling jajar genjang adalah : " . $keliling;
		}
	?>
</body>
</html>