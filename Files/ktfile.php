<?php
    $folderName='';
    $fileName='abc.docx';

    if (file_exists($fileName)) {
        echo "Tồn tại";
    }else {
        echo"Không tồn tại";
    }

    //type file
    $type=filetype($fileName);
    echo"<br/>file: ".$type;

    $type=filetype($folderName);
    echo"<br/> folder: ".$type;

    function convertSize($size,$totalDigit = 2)
    {
        $units= array('Byte','KB','MB','GB','TB');
        $length=count($units);
        for ($i=0; $i <$length ; $i++) { 
            if ($size > 1024) {
                $size=$size/1024;
            }else {
                $unit=$units[$i];
            break;
            }
        }
        return round($size,$totalDigit)."".$unit;
    }
    //size file
    $size=filesize($fileName);
    echo"<br/>size file:".convertSize($size);
    echo"<br/> Nội dung phần đường dẫn: ".$path="Files/abc.docx";

    //hiển thị tên file có phần mở rộng
    echo "<br/> Tên file: ".basename($path);
    //hiển thị tên file ko phần mở rộng
    echo"<br/> tên file: ".basename($path,'docx');
    //đường dẫn
    echo"<br/>Đường dẫn: ".dirname($path);
    echo"<br/>Đường dẫn: ".dirname("C:/xampp/htdocs/Back-endNC/Files/ktfile.php");

    //full thông tin
    $path="C:/xampp/htdocs/Back-endNC/Files/ktfile.php";
    $pathInfo=pathinfo($path);

    echo"<pre>";
        print_r($pathInfo);
    echo"</pre>";

    //pathInfo với các tham số
    $baseName=pathinfo($path,PATHINFO_BASENAME);
    $extension=pathinfo($path,PATHINFO_EXTENSION);
    $dirname=pathinfo($path,PATHINFO_DIRNAME);
    $fileName=pathinfo($path,PATHINFO_FILENAME);
    
    echo"<ul>";
        echo"<li>PATH:<b>".$path."</b></li>";
        echo"<li>PATHINFO_BASENAME:<b>".$baseName."</b></li>";
        echo"<li>PATHINFO_EXTENSION:<b>".$extension."</b></li>";
        echo"<li>PATHINFO_DIRNAME:<b>".$dirname."</b></li>";
        echo"<li>PATHINFO_FILENAME:<b>".$fileName."</b></li>";
    echo"</ul>";



?>