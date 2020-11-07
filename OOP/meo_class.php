
<?php
    class meo
    {
        public $ten;
        public $mau;
        public $tuoi; 
        public $nang;
        public function meo($ten='doremon',$mau='xanh',$tuoi='200',$nang='2kg'){
         //   echo'_construct() default parameter';
            $this->ten=$ten;
            $this->mau=$mau;
            $this->tuoi=$tuoi;
            $this->nang=$nang;
        }
    
    public function getten() {
        return $this->ten; }
    public function getmau() {
        return $this->mau; }
    public function gettuoi() {
        return $this->tuoi; }
        public function getnang() {
            return $this->nang; }
    public function setten($value){
         $this->ten=$value;}
    public function setmau($value){ 
        $this->mau=$value;}
    public function settuoi($value){
         $this->tuoi=$value;}
    public function setnang($value){
        $this->nang=$value;}

    public function showthongtin(){
        echo"<br/>Ten:".$this->ten;
        echo"<br/>Mau Long:".$this->mau;
        echo"<br/>Tuoi:".$this->tuoi;
        echo"<br/>Nang:".$this->nang;
    }
}
?>

