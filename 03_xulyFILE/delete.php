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
        });
    </script>

</head>
<body>
    <?php
        $id=$_GET['id'];
        $content= file_get_contents("files/$id");
        $content=explode('||',$content);
       /*echo "<pre>";
            print_r($content);
        echo "</pre>";*/
        $title=$content[0];
        $description=$content[1];
        $imga='';
        if(count($content)==3){
			$imga=$content[2];
            }
            $flag=false;
            if(isset($_POST['submit'])){
                //echo'delete';
                @unlink("files/$id");
                if($imga !=null){
                    @unlink("./img/$imga");
                }
                $flag=true;

            }
    
    ?>
    <div id="wrapper">
        <div class="title">PHP FILE - DELETE</div>
        <div id="form"><?php if($flag==false){?>
            <form action="#" method="post" name="add-form">
                <div class="row">
                    <p>fILE:</p>
                    <span><?php echo realpath(".files/$id");?></span>
                </div>
                <div class="row">
                    <p>Title</p>
                    <span><?php echo $title;?></span>
                </div>
                <div class="row">
                    <p>Description</p>
                    <span><?php echo $description;?></span>                    
                </div>
                <div class="row">                    
                    <p>Image</p>
                    <span><?php echo $imga==null?:realpath("/.img/$imga");?></span>
                </div><br />
                <div class="row">
                    <input type="submit" value="Save" name="submit">
                    <input type="button" value="Cancel" name="cancel" id="cancel-button">
                </div>                
            </form>
            <?php
        }else {
            echo'<p>Dữ liệu đã xóa thành công? Click vào <a href="01.php">đây</a>để trở lại trang chủ.</p>';
        
        }
        ?>
        </div>
    </div><!-- end div wrapper -->
</body>
</html>