<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Xử lý file trong PHP</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />

    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#cancel-button').click(function(){
                window.location = "01.php";
            });
            //clear tên file ảnh củ
             //$('#btnImg').click(function){
           // $("#textImg").text("");
           //  });

        });
    </script>

</head>

<body>
<?php
require_once("lib/function.php");
$id=$_GET['id'];
$content = file_get_contents("files/$id");
$content = explode('||', $content); 
/*echo "<pre>";
 print_r($content);
  echo"</pre>";*/
  $title=$content[0];
  $description = $content[1];
  $imga='';
   if(count($content)==3){ 
       $imga = $content[2];
   }
$flag = false;
//$title=""; 
//$description="";
//$errorTitle="<p class='error'>Tiêu đề không được rỗng</p><p class='error'>Tiêu đề dài 5 -> 200 ký tự</p>";
//$errorDescription="<p class='error'>Nội dung không được rỗng</p><p class='error'>Nội dung từ 10 -> 5000 ký tự</p>";
 
if(isset($_POST['title']) && isset($_POST['description'])){ 
    $title=$_POST['title'];
    $description = $_POST['description'];
    //kiểm tra phần lỗi title
    $errorTitle ="";
    if(checkEmpty($title)) $errorTitle="<p class='error'>Tiêu đề không được rỗng rðng</p>";
       if(checkLength($title,5,200)) $errorTitle.="<p class='error'>Tiêu đề dài từ 5 -> 100 ký tự</p>";
         //kiêm tra 1ỗi phần description
          $errorDescription ="";
          if(checkEmpty($description)) $errorDescription="<p class='error'>Nội dung không được rðng</p>";
          if(checkLength($description, 10,5000)) $errorDescription.="<p class='error'>Nội dung từ 10 -> 5000 ký tự</p>";
         if($errorTitle=="" && $errorDescription==""){ 
              $data = $title . '||' .$description;
              $fileUpload =$_FILES['file-upload'];
              if($fileUpload['name'] != null){
                $filename = $fileUpload['tmp_name'];
                $filenameNew = randomString(6) .$fileUpload['name']; 
                $destination = "img/" .$filenameNew;
                if(copy($filename, $destination)){
                    //đổi  kích thước hinh ảnh
                     process_image('img/', $filenameNew);
                      $data = $data ."||". $filenameNew;
                    }
                    else 
                    if($imga !=null){
                        $filenameNew=$imga;
                        $data=$data."||".$filenameNew;
                    }
                    $filename='files/'.$id;
                    if(file_put_contents($filename,$data)){
                        $title = "";
                        $description = "";
                        $fileUpload ="";
                        $flag = true;
                        //echo $errorTitle ." ". $errorDescription ."--SAVE XONG--";
                    }
                }
                    }
                }

?>
<div id="wrapper">
        <div class="title">PHP FILE - EDIT</div>
        <div id="form">
            <form action="add.php" method="post" name="add-form" enctype="multipart/form-data">
                <div class="row">
                    <p>Title</p>
                    <input type="text" name="title" value="<?php echo $title; ?>">
                    <p class='error'><?php echo @$errorTitle;?></p>
                   <!-- <p class='error'>Tiêu đề dài từ 5 -> 100 ký tự</p>-->
                </div>
                <div class="row">
                    <p>Description</p>
                    <textarea name="description" rows="5" cols="100"><?php echo $description;?></textarea>
                    <p class='error'><?php echo @$errorDescription;?></p>
                   <!-- <p class='error'>Nội dung từ 10 -> 5000 ký tự</p>-->
                </div>
                <div class="row">
                    <p id="textImg"><?php echo @"Ảnh cũ: ".$imga;?></p>
                    </div>
                <div class="row">
                    <p>Image</p>
                    <input type="file" name="file-upload" accept="image/png,image/jpeg" id="btnlmg"/>
                    </div></br>
                <div class="row">
                    <input type="submit" value="Save" name="submit">
                    <input type="button" value="Cancel" name="cancel" id="cancel-button">
                </div>
                <?php
                  if ($flag==true) {
                        echo '<div class="row"><p> Dữ liệu đã lưu thành công!!!</p></div>';
                    }
                ?>
            </form>
        </div>        
    </div><!-- end div wrapper -->

</body>
</html>