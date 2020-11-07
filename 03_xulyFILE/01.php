<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Bài tập Files</title>
	<link rel="stylesheet" href="css/main.css">	<!--link tới file CSS-->
</head>
<body>
	<div class="content">
		<h1>File PHP</h1>
	
		<form action="add.php" method="post" name="main-form" id="main-form">
			<input type="submit" value="New File" name="submit">
		</form>
		
		<?php
			require_once("lib/function.php"); 
			$data=scandir("./files");
			/*echo "<pre>";
				print_r($data);
			echo "</pre>";*/
			foreach ($data as $key => $value) {
				if ($value=='.'|| $value=='..'|| preg_match('#.txt$#imsU',$value)==false) {
					continue;
				}
				
				$content=file_get_contents("./files/$value");
				$content=explode('||',$content);
				/*echo "<pre>";
				print_r($content);
			echo "</pre>";*/
			
			$tit=$content[0];
			$desc=$content[1];
			$imga='';
			if(count($content)==3){
			$imga=$content[2];
			}
			$fName=$value;
			$fSize=convertSize(filesize("./files/$value"));
			
		?>
			<div class=rows>
				<div class="img_">
					<img src="<?php echo "img/".$imga;?>" alt="Ảnh" />					
				</div>
				<div class="cont">
					<div class="tit_cont">
						<h3><?php echo $tit; ?></h3>
						<span>
								<?php echo $desc;?>
						</span>
					</div>
					<div class="fileName"><?php echo $fName;?></div>
					<div class="fileSize"><?php echo $fSize;?></div>
					<div class="edit_del">
						<a href="edit.php?id=<?php echo $fName; ?>">Edit</a> | 
						<a href="delete.php?id=<?php echo $fName;?>">Delete</a>
					</div>					
				</div>
			</div>
<?php } ?>
		</div>
	
</body>
</html>