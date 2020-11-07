<?php
require 'top.php';
?>
<?php
require_once 'sutu_class.php';
$sutuSIMBA = new Sutu('Simba', 'vàng', 2,'30kg'); 
echo "<br /> <b>Näm 2 tuði: </b>";
$sutuSIMBA->showThongtin();

$sutuSIMBA->Ten='Vua Simba';
$sutuSIMBA->Mau='khét';
$sutuSIMBA->Tuoi = 3; 
$sutuSIMBA->Nang = '40kg'; 
$sutuSIMBA->Cao = '1m25';
echo "<br /> <b>Näm 3 tuði: </b>";
$sutuSIMBA->showThongtin1();
?>
<?php
require 'bottom.php';
?>