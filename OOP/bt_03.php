<?php
    require 'top.php';
?>

<?php

    require_once 'phanso_class.php';
    $psA= new PhanSo(9,5);
    $psB= new PhanSo(7,5); 
    $psC= new PhanSo(3,4);  
    $psD= new PhanSo(5,4); 

    echo "<br/> TONG(1): ";
    $ps1 = new PhanSo(4,7);
    $ps2 = new PhanSo(5,3);

    $ps1->tongPS($ps2);
    $ps1->showPS();

    echo "<br/> TONG(2): ";
    $ps1->_tuso = 2;
    $ps1->_mauso = 7;
    $ps2->_tuso = 3;
    $ps2->_mauso = 14;

    $ps1->tongPS(($ps2));
    $ps1->showPS();

    echo "<br/> HIEU: ";
    $ps1->_tuso = 2;
    $ps1->_mauso = 7;

    $ps1->hieuPS($ps2);
    $ps1->showPS();

    echo "<br/> TICH: ";
    $ps1->_tuso = 2;
    $ps1->_mauso = 7;

    $ps1->tichPS($ps2);
    $ps1->showPS();

    echo "<br/> THUONG: ";
    $ps1->_tuso = 2;
    $ps1->_mauso = 7;

    $ps1->thuongPS($ps2);
    $ps1->showPS();

    echo "<br/> TONG(3): ";
    $ps1->_tuso = 9;
    $ps1->_mauso = 5;
    $ps2->_tuso = 7;
    $ps2->_mauso = 5;

    $ps1->tongPS(($ps2));
    $ps1->showPS();

    echo "<br/> TONG(4): ";
    $ps1->_tuso = 3;
    $ps1->_mauso = 4;
    $ps2->_tuso = 5;
    $ps2->_mauso = 4;

    $ps1->tongPS(($ps2));
    $ps1->showPS();
    
    echo "<br/> THUONG: ";


    $ps1->thuongPS($ps2);
    $ps1->showPS();

   

?>


<?php 
    require 'bottom.php';
?>