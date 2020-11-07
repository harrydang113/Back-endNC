<?php
    class PhanSo
    {
        //properties
        public $_tuso;
        public $_mauso;

        //Method
        //hàm dựng __construct()
        function __construct($tuso, $mauso){
            $this->_tuso = $tuso;
            $this->_mauso = $mauso;
        }

        //hiển thị
        public function showPS(){
            $this->toigianPS();
            echo "Phân số: ".$this->_tuso."/".$this->_mauso;
        }

        //tối giản phân số
        public function toigianPS(){
            $ucln = $this->UCLN($this->_tuso, $this->_mauso);
            $this->_tuso = $this->_tuso/$ucln;
            $this->_mauso = $this->_mauso/$ucln;
        }

        //tổng 2 phân số
        public function tongPS($phanSO){
            //công thức tính: x/y+a/b=(x*b+a*y)/(y*b)
            $this->_tuso = ($this->_tuso*$phanSO->_mauso + $phanSO->_tuso*$this->_mauso);
            $this->_mauso = ($this->_mauso*$phanSO->_mauso);
            $this->toigianPS();
        }

        //hiệu 2 phân số
        public function hieuPS($phanSO){
            //công thức: x/y+a/b = (x*b - a*y)/(y*b)
            $this->_tuso = ($this->_tuso*$phanSO->_mauso - $phanSO->_tuso*$this->_mauso);
            $this->_mauso = ($this->_mauso*$phanSO->_mauso);
            $this->toigianPS();
        }

        //tích hai phân số
        public function tichPS($phanSO){
            //công thức: x/y*a/b = (x*a)/(y*b)
            $this->_tuso = ($this->_tuso*$phanSO->_tuso);
            $this->_mauso = ($this->_mauso*$phanSO->_mauso);
            $this->toigianPS();
        }

        //Thương hai phân số
        public function thuongPS($phanSO){
            //công thức: x/y:a/b = (x*b)/(y*a)
            $this->_tuso = ($this->_tuso*$phanSO->_mauso);
            $this->_mauso = ($this->_mauso*$phanSO->_tuso);
        }

        //tìm UCLN phân số
        private function UCLN($a, $b){
            //$min = ($a > $b) ? $a:$b; HOẶC
            $min = min(array($a, $b));
            while ($min > 0) {
                if($a % $min == 0 && $b % $min == 0)
                return $min;
                $min--;
            }
        }//end UCLN
    }//end CLASS
?>