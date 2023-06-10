
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

        .style2 {
            font-family:"微軟正黑體";
            font-size: 15px;
            color: #333;
            text-align:center;
        }
    </style>



</head>

<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<div align="center">

    <form name="ctl00" method="post" action="./fn4a.aspx" id="ctl00">
        <div>
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTQzNzcyNzI2NQ9kFgICAg9kFgRmDw8WAh4EVGV4dGRkZAIDDw8WAh8AZGRkZKaBmk+uINW22Nusdl7MiXToLTcGpB7VShPE1UE6WH2R" />
        </div>

        <div>

            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="95909AB3" />
            <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAUrtBM0UVi3zlTlj6J05PcacIayRzXCO1Nk0a/+U9LuUFt5ZFsAEa25AKPs+8n6naNoWTt1IFRonYueu3J7k1dg2qJGGn5NNjZ/qAfmNGX/1yvqx7wGjg+RBPoFv8aeZkmKPAcoz5BSmuKcRY4KQP0M" />
        </div>


        <table width="633" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
            <tr>
                <td height="668" align="center" valign="top">

                    <table width="450" border="0" cellspacing="0" cellpadding="0" class="style1">
                        <tr>
                            <td colspan="2" height="50" align="left" valign="middle">
                                <img src="../images/fn4btitle.png" width="450" height="50" />
                            </td>
                        </tr>
                        <tr>
                            <td width="90" height="50" align="left" valign="middle">起始日期</td>
                            <td width="360" align="left" valign="middle">
                                <input name="dt1" type="text" readonly="readonly" id="dt1" class="style1" style="background-color:#FFFFCC;height:20px;width:90px;" />
                                <input type="submit" name="btnDate1" value="月曆" id="btnDate1" class="style1" onfocus="this.blur()" AutoPostBack="false" style="height:28px;width:60px;" />

                            </td>
                        </tr>
                        <tr>
                            <td height="50" align="left" valign="middle">結束日期</td>
                            <td align="left" valign="middle">
                                <input name="dt2" type="text" readonly="readonly" id="dt2" class="style1" style="background-color:#FFFFCC;height:20px;width:90px;" />
                                <input type="submit" name="btnDate2" value="月曆" id="btnDate2" class="style1" onfocus="this.blur()" AutoPostBack="false" style="height:28px;width:60px;" />

                            </td>
                        </tr>
                        <tr>
                            <td height="50" align="left" valign="middle">會議室</td>
                            <td align="left" valign="middle">
                                <input name="r2" type="checkbox" value="1" />R02&nbsp;&nbsp;&nbsp;
                                <input name="r3" type="checkbox" value="1" />R03&nbsp;&nbsp;&nbsp;
                                <input name="r4" type="checkbox" value="1" />R04&nbsp;&nbsp;&nbsp;
                                <input name="r5" type="checkbox" value="1" />R05
                            </td>
                        </tr>
                        <tr>
                            <td height="50" align="left" valign="middle">
                                <input name="btn" type="submit" class="style1" value="確定" style="cursor:pointer" />
                            </td>
                            <td align="left" valign="middle">結束日期需大於起始日期，但不包含結束日期。</td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>


    </form>

</div>
</body>
</html>
