<?php

abstract class Bentuk2D
{
    abstract protected function luasBidang();
    abstract protected function kelilingBidang();
}


class Lingkaran extends Bentuk2D
{
    public $jari2;

    public function __construct($jari2)
    {
        $this->jarijari = $jari2;
    }

    public function namaBidang()
    {
        return "Lingkaran";
    }

    public function luasBidang()
    {
        return 3.14 * $this->jarijari * $this->jarijari;
    }

    public function kelilingBidang()
    {
        return 2 * $this->jarijari * 3.14;
    }
}

class PersegiPanjang extends Bentuk2D
{
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang()
    {
        return "Persegi Panjang";
    }

    public function luasBidang()
    {
        return $this->panjang * $this->lebar;
    }

    public function kelilingBidang()
    {
        return ($this->panjang + $this->lebar) * 2;
    }
}

class Segitiga extends Bentuk2D
{
    public $alas;
    public $tinggi;
    public $sisi;

    public function __construct($alas, $tinggi, $sisi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi = $sisi;
    }

    public function namaBidang()
    {
        return "Segitiga";
    }

    public function luasBidang()
    {
        return ($this->alas * $this->tinggi) / 2;
    }

    public function kelilingBidang()
    {
        return $this->sisi * 3;
    }
}

$lingkaran = new Lingkaran(15);
$persegipanjang= new PersegiPanjang(12, 8);
$segitiga = new Segitiga(16, 9, 12);

$data = [$lingkaran, $persegipanjang, $segitiga];

?>

<table border="1" cellpadding="20" cellspacing="0" width="100%">
    <tr>
        <th>Nama Bidang</th>
        <th>Luas Bidang</th>
        <th>Keliling Bidang</th>
    </tr>
    <?php foreach ($data as $data) : ?>
        <tr>
            <td><?= $data->namaBidang(); ?></td>
            <td><?= $data->luasBidang(); ?></td>
            <td><?= $data->kelilingBidang(); ?></td>
        </tr>
    <?php endforeach ?>
</table>