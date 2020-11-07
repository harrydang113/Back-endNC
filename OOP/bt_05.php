<form method="post">
<h3>Giåi phuong trinh bâc hai ax<sup>2</sup>+bx+c=0</h3>
Nhap cac he so:
a=<input type="text" name="a" size="5"/> 
b=<input type="text" name="b" size="5"/> 
c=<input type="text" name="c" size="5"/> 
<input type="submit" name="giai" value="Giai phuong trinh" >
</form><br><br>

<?php
class phuongtrinhbac2{
protected $a=1;
protected $b=3; 
protected $c=2; 
private function delta() { 
    return pow($this->b,2)-4*$this->a*$this->c;
}
protected function giai() { 
    if($this->delta()<0) 
    echo "Phuong trinh vô nghiem"; 
    else if ($this->delta()==0) { 
        echo "Nghiem kép: x<sub>1</sub>=x<sub>2</sub>=".$this->b/(2*$this->a);
} else {
$x1 = (-$this->b-sqrt($this->delta()))/(2*$this->a); 
$x2 = (-$this->b+sqrt($this->delta()))/(2*$this->a); 
echo "Phuong trình có 2 nghiëm phân biêt: <br>";
echo  "x<sub>1</sub>=$x1<br>x<sub>2</sub>=$x2";
        }
    }
} 
class phuongtrinh extends phuongtrinhbac2
{
public function gpt(){
    return $this->giai();}
public function seta($_a){
    $this->a=$_a; }
public function setb($_b){
    $this->b=$_b; }
public function setc($_c){
    $this->c=$_c; }
}

$g = new phuongtrinh;
if(isset($_POST['giai'])){
    $g->seta($_POST['a']);
    $g->setb($_POST['b']);
    $g->setc($_POST['c']);
    $g->gpt();
}
?>
