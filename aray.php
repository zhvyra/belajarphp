<?php
$m1 = ['NIM' => '01111021', 'nama' => 'Aan', 'nilai' => 83];
$m2 = ['NIM' => '01111022', 'nama' => 'Alin', 'nilai' => 70];
$m3 = ['NIM' => '01111023', 'nama' => 'Mika', 'nilai' => 90];
$m4 = ['NIM' => '01111024', 'nama' => 'Roma', 'nilai' => 78];
$m5 = ['NIM' => '01111025', 'nama' => 'Awan', 'nilai' => 45];
$m6 = ['NIM' => '01111026', 'nama' => 'Saki', 'nilai' => 66];
$m7 = ['NIM' => '01111027', 'nama' => 'Toma', 'nilai' => 88];
$m8 = ['NIM' => '01111028', 'nama' => 'Tedi', 'nilai' => 52];
$m9 = ['NIM' => '01111029', 'nama' => 'Vivo', 'nilai' => 99];
$m10 = ['NIM' => '01111030', 'nama' => 'Jalu', 'nilai' => 85];
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];
$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat']

/* Tugas 
1. Buat grade 
2. Buat Keterangan jumlah mahasiswa, nilai tertinggi, nilai terendah, rata rata Masukan kedalam tfoot
3. Buat predikat dari nilai menggunakan switch case
*/
?>

<table border="1px" width="100%"  bgcolor="blue" style="text-align: center;">
    <thead>

        <tr>
            <?php
            foreach ($ar_judul as $judul) {
            ?>
                <th><?= $judul ?></th>
            <?php } ?>
        </tr>

    </thead>
    <tbody>
        <?php
        $no = 1;
        $listNilai = [];
        foreach ($mahasiswa as $mhs) {
            $ket = ($mhs['nilai'] >= 70) ? 'Lulus' : 'Tidak lulus';

            $listNilai = [...$listNilai, $mhs['nilai']];

            //grade 
            if ($mhs['nilai'] >= 91 && $mhs['nilai'] <= 100) $grade = 'A';
            else if ($mhs['nilai'] >= 80 && $mhs['nilai'] <= 90) $grade = 'B';
            else if ($mhs['nilai'] >= 60 && $mhs['nilai'] <= 79) $grade = 'C';
            else if ($mhs['nilai'] >= 31 && $mhs['nilai'] <= 59) $grade = 'D';
            else if ($mhs['nilai'] >= 0 && $mhs['nilai'] <= 30) $grade = 'E';
            else $grade = '';

            switch ($grade) {
                case "A":
                    $predikat = "Sangat Baik";
                    break;
                case "B":
                    $predikat = "Baik";
                    break;
                case "C":
                    $predikat = "Cukup";
                    break;
                case "D":
                    $predikat = "Kurang";
                    break;
                case "E":
                    $predikat = "Sangat Kurang";
                    break;
                default:
                    $predikat = "";
                    exit();
            }
        ?>
            <tr>
                <td><?= $no ?> </td>
                <td><?= $mhs['NIM'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['nilai'] ?></td>
                <td><?= $ket ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
    <tfoot style="background: blue;">
        <tr>
            <td colspan="6">Jumlah Mahasiswa </td>
            <td><?= count($mahasiswa) ?></td>
        </tr>
        <tr>
            <td colspan="6">Nilai Tertinggi </td>
            <td><?= max($listNilai); ?></td>
        </tr>
        <tr>
            <td colspan="6">Nilai Terendah </td>
            <td><?= min($listNilai); ?></td>
        </tr>
        <tr>
            <td colspan="6">Nilai Rata Rata </td>
            <td><?= array_sum($listNilai) / count($listNilai); ?></td>
        </tr>
    </tfoot>
</table>