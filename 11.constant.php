<?php
    // define('NAMA', 'MR. Hasan');
    // echo NAMA;

    // echo "<br>";

    // const UMUR = 32;
    // echo UMUR;

    // class Coba {
    //     const NAMA = 'Hasan';
    // }
    // echo Coba::NAMA;

    function Coba() {
        return __FUNCTION__;
    }
    echo Coba();

    echo "<br>";
    class apaCoba {
        public $kelas = __CLASS__;
    }
    $obj = new apaCoba;
    echo $obj->kelas;
?>