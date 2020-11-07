<?php
	require 'top.php';
?>
<br>

	<h1>Du lịch Cà Mau</h1>
	<?php
	$content= file('gioi_thieu.txt')  or die('Không thể mở file');
	//kiểm tra file
	/*echo "<pre>";
	print_r($content);
	echo "<pre>";*/
	$content=implode("",$content);

	$pattern ='#Cà Mau#i';
	$replacement = '<a href="http://dulichcamau.info">Cà Mau</a>';
	$kq =preg_replace($pattern,$replacement,$content);
	//echo"<br/><b>KẾT QUẢ SAU KHI REPLACE:</b><br>";
	echo $kq;


	?>

<?php
	require 'bottom.php';
?>







