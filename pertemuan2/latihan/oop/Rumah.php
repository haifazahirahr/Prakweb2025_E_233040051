<?php

//Definisi class Rumah
class Rumah
{

    public $warna;
    public $jumlahKamar;
    public $alamat;

    //BAGIAN CONSTRUCTOR
    public function __construct($warna, $alamat)
    {
        $this->warna = $warna;
        $this->alamat = $alamat;
    }


    //BAGIAN METHOD
    public function kunciPintu()
    {
        return "Pintu sudah dikunci.";
    }
}

function pasangListrik(Rumah $dataRumah)
{
    return "Listrik sedang dipasang di rumah " . $dataRumah->warna . " yang beralamat di " . $dataRumah->alamat;
}

// BAGIAN OBJECT

$rumahSaya = new Rumah("Merah", "Jln. Merdeka No. 10");

echo pasangListrik($rumahSaya);
echo "<br>";

$teksBiasa = "Ini cuma string";
