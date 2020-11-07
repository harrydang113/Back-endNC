

<?php
class PhuongTien 
{
    protected $bienso;
    protected $mauson;

     function phuongtien($bienso="69DX-3333",$mauson="vàng"){
        $this->bienso=$bienso;
        $this->mauson=$mauson;
    }
    public function getbienso($bienso){
         $this->bienso=$bienso;
        }
    public function getmauson($mauson){
         $this->mauson=$mauson;
    }

    public function showThongtin(){
        echo"<br /> Xe biển số: ".$this->bienso;
        echo"<br /> màu sơn: ".$this->mauson;
    }
}
?>
<?php
class XeKhach extends PhuongTien{
    public $socho;
  
    public function getsocho($socho){
        $this->socho=$socho;
    }
    public function showThongtin(){
        parent::showthongtin();
        echo"<br /> Số chổ: ".$this->socho;
    }
}
?>
