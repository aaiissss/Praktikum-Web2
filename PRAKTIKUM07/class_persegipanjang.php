<?php
class persegiPanjang
{
    public $panjang, $lebar;

    function __construct($p, $l)
    {
        $this->panjang = $p;
        $this->lebar = $l;
    }

    function hitungLuas()
    {
        return $this->panjang * $this->lebar;
    }

    function hitungKeliling()
    {
        $panjang = $this->panjang;
        $lebar = $this->lebar;

        return 2 * ($panjang + $lebar);
    }
}
?>
