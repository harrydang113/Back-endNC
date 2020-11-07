<?php
require_once 'meo_class.php';
class Sutu extends Meo{
public $Cao = '1m2';
//overwrite method showThongtin()

public function showThongtin1(){ 
    echo "<br/> Ten: " .$this->Ten; 
    echo "<br/> Mau Long: ". $this->Mau; 
    echo "<br/> Tuoi: " .$this->Tuoi; 
    echo "<br/> Can Nang: " .$this->Nang;
    echo "<br/> Chieu Cao: " .$this->Cao;
}

//(2)
 public function showThongtin() { 
     parent::showThongtin();
     echo "<br /> Chieu cao: " .$this->Cao;
 }
} //end CLASS
?>