<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bài tập Regular Expression - quét tin Dantri.com.vn</title>
	<link rel="stylesheet" href="style2.css">
	<!--link tới file CSS-->
</head>
<body>

	<?php
	$arrContextOptions=array(
		"ssl"=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
		),
	);  
		$content= file_get_contents('https://dantri.com.vn/the-thao/chau-au.htm',false, stream_context_create($arrContextOptions));
		//echo $content;
		$pattern='#<div class="news-item news-item--timeline news-item--left2right">(.*)</div>\s*</div>#imsU';
		preg_match_all($pattern,$content,$matches);
		/*echo"<pre>";
		print_r($matches);
		echo"<pre>";*/
		$kq= array();
		foreach ($matches[0] as $key => $value) {
			//tìm các đường link
			$pattern='#href="(.*)"#imsU';
			preg_match($pattern,$value,$link);
			$kq[$key]['link']= $link[1];
			//tìm hình
			$pattern='#src="(.*)"#imsU';
			preg_match($pattern,$value,$image);
			$kq[$key]['image']= $image[1];
			//tìm tiêu đề
			$pattern='#title="(.*)"#imsU';
			preg_match($pattern,$value,$title);
			$kq[$key]['title']= $title[1];
			//tìm nội dung
			$pattern='#<a .*class="news-item__sapo" .*>(.*)</a>#imsU';
			preg_match($pattern,$value,$descrip);
			$kq[$key]['descrip']= $descrip[1];

		}
		/*	echo"<pre>";
		print_r($kq);
		echo"<pre>";*/

		foreach ($kq as $key => $value) {

	?>

	<!-- đưa ra html -->
	<div class='tintuc'>
		<div class="tintuc_1">
			<img src="<?php echo $value['image']; ?>" alt="Tin tức" />
		</div>
		<div class="tintuc_2">
			<div class="tintuc_21"><h3><a href="<?php echo $value['link'];?>" ><?php echo $value['title'];?></a></h3></div>
			<div class="tintuc_22"> <p><?php echo $value['descrip'];?> </p></div>
		</div>		
	</div>
	
		<?php } ?>
</body>
</html>