<?php
require_once dirname(__FILE__) . '/no_php.php';
function getScript(string $number, int|string $target): string
{
    $active = $number == $target || ($number == 6 && $target == 8);
//    $others = $active ? 'onmouseout="src=&quot;../images/fn1' . $number . 'a.png&quot;" onmouseover="src=&quot;../images/fn12b.png&quot;" style="cursor:pointer" onclick="fnsel2(this.form)"';
    $script = 'onmouseout="src=&quot;../images/fn' . $target . ($active ? 'b' : 'a') . '.png&quot;" onmouseover="src=&quot;../images/fn' . $target . ($active ? 'b' : 'a') . '.png&quot;"  style="cursor:pointer" onclick="fnsel' . $target . '(this.form)"';
    $dom = '<img src="../images/fn' . $target . ($active ? 'b' : 'a') . '.png" ' . ($active ? '' : $script) . ' />';
    return $dom;
}
?>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=big5">
    <title>無標題文件</title>

    <script language="javascript">
        function fnsel1(form){
            window.location="fn.aspx?fn=1&cname=" + q.cname1.value;
            parent.cntFrame.window.location=("cnt.aspx?fn=1" + "&cname=" + q.cname1.value)
        }
        function fnsel2(form){
            window.location="fn.aspx?fn=2&cname=" + q.cname1.value;
            parent.cntFrame.window.location=("cnt.aspx?fn=2" + "&cname=" + q.cname1.value)
        }
        function fnsel3(form){
            window.location="fn.aspx?fn=3&cname=" + q.cname1.value;
            parent.cntFrame.window.location=("cnt.aspx?fn=3" + "&cname=" + q.cname1.value)
        }
        function fnsel4(form){
            window.location="fn.aspx?fn=4&cname=" + q.cname1.value;
            parent.cntFrame.window.location=("cnt.aspx?fn=4" + "&cname=" + q.cname1.value)
        }
        function fnsel5(form){
            window.location="fn.aspx?fn=5&cname=" + q.cname1.value;
            parent.cntFrame.window.location=("cnt.aspx?fn=5" + "&cname=" + q.cname1.value)
        }
        function fnsel6(form){
            window.location="fn.aspx?fn=6&cname=" + q.cname1.value;
            parent.cntFrame.window.location=("cnt.aspx?fn=6" + "&cname=" + q.cname1.value)
        }
        function fnsel8(form){
            window.location="fn.aspx?fn=6&cname=" + q.cname1.value;
            parent.cntFrame.window.location=("cnt.aspx?fn=6" + "&cname=" + q.cname1.value)
        }
        function fnsel7(form){
            window.location="fn.aspx?fn=7&cname=" + q.cname1.value;
            parent.cntFrame.window.location=("cnt.aspx?fn=7" + "&cname=" + q.cname1.value)
        }

        function lout(){
            top.window.location=("../index.aspx")
        }

    </script>

</head>

<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<form action="" method="post" name="q">
    <table width="1278" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
            <td width="160" height="36" align="left" valign="middle">

<!--                <img src="../images/fn11b.png">-->
                <?= getScript($_GET['fn'] ?? "1", 1) ?>
            </td>
            <td width="160" align="left" valign="middle">

                <?= getScript($_GET['fn'] ?? "1", 2) ?>

            </td>
            <td width="160" align="left" valign="middle">

                <?= getScript($_GET['fn'] ?? "1", 3) ?>

            </td>
            <td width="160" align="left" valign="middle">

                <?= getScript($_GET['fn'] ?? "1", 4) ?>

            </td>
            <td width="160" align="left" valign="middle">

                <?= getScript($_GET['fn'] ?? "1", 5) ?>

            </td>
            <td width="160" align="left" valign="middle">

                <?= getScript($_GET['fn'] ?? "1", 8) ?>

            </td>
            
            <td align="right" valign="middle">
                <input name="cname1" type="hidden" value="<?= $_GET['cname'] ?? '這裡沒答案' ?>">
                <input name="idno1" type="hidden" value="0440000000">
                <img src="../images/logout.png" style="cursor:pointer" onclick="lout()">
            </td>
        </tr>
        </tbody></table>
</form>


</body></html>