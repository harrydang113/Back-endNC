<?php
function checkData($value,$type="macd")
{
 
            $pattenrn='#^(X1|W1|S2|L1|M2|N2|D1)\d{5}(20)$#';  
    
    return preg_match($pattenrn,$value);
}

//kiểm tra hàm
/*if(checkData('D11254420','macode')){
    echo"mã code  hợp lệ";}
    else {
        echo"mã code không hợp lệ";}*/
    
?>