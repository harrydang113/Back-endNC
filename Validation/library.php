<?php
function checkData($value,$type="email")
{
    $pattenrn='';
    switch ($type) {
        case 'email':
            $pattenrn='#^[a-z][a-z0-9_\.]{4,32}@[a-z0-9]{3,}(\.[a-z]{2,4}){1,2}$#';
            break;
            case 'username':
                $pattenrn='#^[a-z_][a-z0-9_\.\s]{4,32}$#';
                break;
            case 'password':
                $pattenrn='#^(?=.*\d)(?=.*\W)(?=.*[A-Z]).{8}$#';
                break;
            case 'web':
                $pattenrn='#^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$#';
                break;
                
    }
    return preg_match($pattenrn,$value);
}

//kiểm tra hàm
/*if(checkData('P@ssw0rd','password'))
    echo"email  hợp lệ";
    else {
        echo"email không hợp lệ";
    }*/
?>