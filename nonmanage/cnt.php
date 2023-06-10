<?php
require_once dirname(__FILE__) . '/no_php.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title>無標題文件</title>
</head>

<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">

	<iframe src="fn<?= $_GET['fn'] ?? "1" ?>.aspx?cname=<?= $_GET['name'] ?? "努估誰唷" ?>&idno=0440000000&sid=<?= $_GET['account'] ?? '' ?>" width="1278px" marginwidth="0" height="676px" marginheight="0" scrolling="no" frameborder="0"></iframe>
</body>
</html>
