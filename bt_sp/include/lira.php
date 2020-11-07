<?php
function checkData($value,$type="macode")
{
    $pattenrn='';
    switch ($type) {
        case 'macode':
            $pattenrn='#^(X1|W1|S2|L1|M2|N2|D1)\d{5}(20)$#';
            break;
            
                
    }
    return preg_match($pattenrn,$value);
}

//kiểm tra hàm
/*if(checkData('D11254420','password'))
    echo"email  hợp lệ";
    else {
        echo"email không hợp lệ";*/
    
?>