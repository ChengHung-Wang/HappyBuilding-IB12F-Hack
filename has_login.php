<?php
require_once dirname(__FILE__) . '/conn.php';
require_once dirname(__FILE__) . '/no_php.php';
$this_user = f("SELECT * FROM `users` WHERE `permission` = 1 AND `account` = '" . $_COOKIE["account"] . "'")
?>
<html><head>
    <title>國際大樓12樓會議室預約管理系統</title>
    <meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<frameset rows="40,676" frameborder="NO" border="0" framespacing="0">
    <frame src="nonmanage/fn.aspx?cname=努估誰唷&amp;idno=0440000000" name="fnFrame" scrolling="NO" noresize="">
    <frame src="nonmanage/cnt.aspx?cname=努估誰唷&amp;idno=0440000000&amp;sid=B11015018" name="cntFrame" scrolling="NO" noresize="">
</frameset>
<noframes><body>
</body></noframes>

</html>