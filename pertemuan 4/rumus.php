<?php
class kubus {
    public $sisi;

    public function luas(){
        $hasil = 6*$this->sisi*$this->sisi;
        return $hasil;
    }

    public function volume(){
        $hasil = $this->sisi*$this->sisi*$this->sisi;
        return $hasil;
    }
}
?>