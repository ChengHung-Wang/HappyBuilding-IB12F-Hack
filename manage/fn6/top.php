

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=big5" />
    <title>無標題文件</title>

    <style type="text/css">
        .style1 {
            font-family:"微軟正黑體";
            font-size: 15px;
            color: #333;
        }

    </style>

    <script language="javascript">
        var f,yy,mm
        function readdata(form)
        {
            f=form.fn.value;

            window.location="top.aspx?fn=" + f
        }

        function q(form)
        {
            f=form.fn.value;
            yy=form.yr.value;
            mm=form.mn.value;

            window.location="top.aspx?fn=" + f + "&yr=" + yy + "&mn=" + mm
            parent.bottomFrame.window.location="bottom.aspx?fn=" + f + "&yr=" + yy + "&mn=" + mm
        }

    </script>

</head>

<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<div align="center">

    <form action="" method="post">


        <table width="1272" border="0" cellspacing="0" cellpadding="0" class="style1">
            <tr>
                <td width="80" height="38" align="left" valign="middle">功能選擇</td>
                <td width="145" align="left" valign="middle">
                    <select name="fn" class="style1" onchange="readdata(this.form)">

                        <option value='a' selected="selected">管理規則上傳</option>

                        <option value='b'>系統公告設定</option>

                        <option value='c'>報到時間查詢</option>

                        <option value='d'>會議室使用率</option>

                        <option value='e'>管理者設定</option>

                    </select>
                </td>

                <td width="140" align="center" valign="middle">
                    <input name="btn" type="button" class="style1" value="確定"  onclick="q(this.form)" style="cursor:pointer" />
                    <input name="yr" type="hidden" value='112' />
                    <input name="mn" type="hidden" value='5' />
                </td>

                <td align="left" valign="middle">&nbsp;</td>
            </tr>
        </table>


    </form>

</div>
</body>
</html>
