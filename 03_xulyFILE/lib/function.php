<?php 
	//sinh ngẫu nhiên 1 chuổi chiều dài length
	function randomString($length=6)
	{
		$arrCharacter = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
		$arrCharacter = implode($arrCharacter, '');
		$arrCharacter = str_shuffle($arrCharacter);

		$result = substr($arrCharacter, 0, $length);
		return $result;
	}

	//kiểm tra dữ liệu có rỗng ko
	function checkEmpty($value){
		$flag = false;
		if(!isset($value) || trim($value)==""){
			$flag=true;
		}
		return $flag;
	}

	//kiểm tra chiều dài chuỗi
	function checkLength($value,$min,$max){
		$flag = false;
		$length = strlen(trim($value));
		if(($length<$min) || ($length>$max)){
			$flag=true;
		}
		return $flag;
	}

	function convertSize($size, $totalDigit=2){
		$units = array('Byte', 'KB', 'MB', 'GB', 'TB');
		$length = count($units);
		for($i=0; $i<$length; $i++){
			if($size > 1024){
				$size = $size/1024;
			}else{
				$unit = $units[$i];
				break;
			}
		}
	
		return round($size, $totalDigit) ." " .$unit;
	}

?>