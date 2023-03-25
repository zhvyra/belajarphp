<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <table>
            <tr>
                <td>
                    <label>Masukkan Nama</label>
                </td>
                <td>
                    <input type="text" id="" name="nama" required />
                </td>
            </tr>

            <tr>
                <td>
                    <label>Status</label>
                </td>
                <td>
                    <select name="status" required>
                        <option>--Status--</option>
                        <option value="menikah">Menikah</option>
                        <option value="lajang">Lajang</option>

                    </select>
                </td>
            </tr>
            </tr>
            <td>
                <label>Jabatan</label>
            </td>
            <td>
                <select name="jabat" required>
                    <option>--Jabatan--</option>
                    <option value="manager">Manager</option>
                    <option value="asisten">Asisten</option>
                    <option value="kabag">Kabag</option>
                    <option value="staff">Staff</option>
                </select>
            </td>
            </tr>
            </tr>
            <td>
                <label>Agama</label>
            </td>
            <td>
                <select name="agama" required>
                    <option>--Agama--</option>
                    <option value="manager">Islam</option>
                    <option value="asisten">Kristen</option>
                </select>
            </td>
            </tr>
            <tr>
                <td>
                    <button name="submit">Hitung</button>

                </td>
            </tr>
        </table>
    </form>


    <?php
    if (isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $status_nikah = $_POST["status"];
        $jabatan = $_POST["jabat"];
        $agama = $_POST["agama"];


        $gaji_pokok = 0;
        $tunjangan_jabatan = 0;
        $tunjangan_keluarga = 0;
        $jumlah_anak = 3;
        $gaji_kotor = 0;
        $zakat_profesi = 0;
        $take_home_pay = 0;

        switch ($jabatan) {
            case "manager":
                $gaji_pokok = 20000000;
                break;
            case "asisten":
                $gaji_pokok = 15000000;
                break;
            case "kabag":
                $gaji_pokok = 10000000;
                break;
            case "staff":
                $gaji_pokok = 4000000;
                break;
            default:
                echo "Jabatan tidak dikenal.";
                exit();
        }

        $tunjangan_jabatan = 0.2 * $gaji_pokok;

        if ($status_nikah == "menikah") {
            if ($jumlah_anak <= 2) {
                $tunjangan_keluarga = 0.05 * $gaji_pokok;
            } elseif ($jumlah_anak >= 3 && $jumlah_anak <= 5) {
                $tunjangan_keluarga = 0.1 * $gaji_pokok;
            }
        }

        $gaji_kotor = $gaji_pokok + $tunjangan_jabatan + $tunjangan_keluarga;

        $zakat_profesi = ($gaji_kotor >= 6000000 && $agama == "islam") ? 0.025 * $gaji_kotor : 0;

        $take_home_pay = $gaji_kotor - $zakat_profesi;

        echo "Nama Pegawai: $nama <br>";
        echo "Jabatan: $jabatan <br>";
        echo "Gaji Pokok: " . number_format($gaji_pokok, 0, ',', '.') . "<br>";
        echo "Tunjangan Jabatan: " . number_format($tunjangan_jabatan, 0, ',', '.') . "<br>";
        echo "Tunjangan Keluarga: " . number_format($tunjangan_keluarga, 0, ',', '.') . "<br>";
        echo "Gaji Kotor: " . number_format($gaji_kotor, 0, ',', '.') . "<br>";
        echo "Zakat Profesi: " . number_format($zakat_profesi, 0, ',', '.') . "<br>";
        echo "Take Home Pay: " . number_format($take_home_pay, 0, ',', '.');
    }
    ?>

</body>

</html>