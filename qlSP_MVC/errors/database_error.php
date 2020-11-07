<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Sản phẩm Điện máy</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
    <div id="page">
        <div id="header">
            <h1>Điện Máy</h1>
        </div>

        <div id="main">
            <h1>Lỗi kết nối cơ sở dữ liệu</h1>
            <p>Vui lòng kiểm tra csdl đã được cài đặt hay chưa?</p>
            <p>Đồng thời MySQL cần được khởi động.</p>
            <p>Thông báo lỗi: <?php echo $error_message; ?></p>
            <p>&nbsp;</p>
        </div><!-- end main -->

        <div id="footer">
            <p class="copyright">
                &copy; <?php echo date("Y"); ?>
            </p>
        </div>

    </div>
</body>
</html>