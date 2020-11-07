<?php
require 'top.php';
?>

<?php
    class pheptoan
    {
        private $a;
        protected $b;
        public $c=20;
        public $d=77;

        public function TONG($x,$y){
            return $x+$y;
        }
    }
?>

<?php
    $toan=new pheptoan;
        echo"</br>".$toan->c."+".$toan->d."=".$toan->TONG($toan->c,$toan->d);

    $toan->c=5;
    $toan->d=100;
    echo "</br> gán biến c-d bên ngoài class:".$toan->c."+".$toan->d."=".$toan->TONG($toan->c,$toan->d);
?>

 <?php 
 require 'bottom.php';
 ?>