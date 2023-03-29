<?php
$m1 = ['NIM' => '02023111', 'NAMA' => 'Ahmad Budiman', 'JK' => 'L', 'PRODI' => 'TI', 'SKILL' => 'HTML, CSS, JavaScript, RWD Bootstrap, Python', 'SK' => 90, 'EMAIL' => 'abudiman@gmail.com'];
$mahasiswa = [$m1];
?>

<form style="border-style: solid; width: 30%; margin:auto; ">
<table>
    <?php
    $listnilai = [];
    foreach ($mahasiswa as $mhs) {
        $listnilai = [...$listnilai, $mhs['SK']];
        if ($mhs['SK'] >= 100 && $mhs['SK'] <= 150) $grade = 'Sangat';
        else if ($mhs['SK'] >= 60 && $mhs['SK'] <= 99) $grade = 'Baik';
        else if ($mhs['SK'] >= 40 && $mhs['SK'] <= 59) $grade = 'Cukup';
        else if ($mhs['SK'] >= 0 && $mhs['SK'] <= 39) $grade = 'Kurang';
        else if ($mhs['SK'] = 0) $grade = 'Tidak Memadai';
        else $grade = '';
    }
    ?>
    <tr>
        <td>NIM : <?= $mhs['NIM'] ?></td>
    </tr>
    <tr>
        <td>Nama : <?= $mhs['NAMA'] ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin : <?= $mhs['JK'] ?></td>
    </tr>
    <tr>
        <td>Program Studi : <?= $mhs['PRODI'] ?></td>
    </tr>
    <tr>
        <td>Skill : <?= $mhs['SKILL'] ?></td>
    </tr>
    <tr>
        <td>Skor Skill : <?= $mhs['SK'] ?></td>
    </tr>
    <tr>
        <td>Kategori Skill : <?= $grade ?></td>
    </tr>
    <tr>
        <td>Email : <?= $mhs['EMAIL'] ?></td>
    </tr>
</table>
</form>