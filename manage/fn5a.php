
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

    <form name="ctl00" method="post" action="./fn5a.aspx" id="ctl00">
        <div>
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTE1Nzk0MDkyODIPZBYCAgIPZBYEZg8PFgIeBFRleHRkZGQCAw8PFgIfAGRkZGQ+7lPmr4hL1ThXNetmg53k3IdsWLH/13W4EETUv274vw==" />
        </div>

        <div>

            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="B51D7EE9" />
            <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAWdH2qlcm5jd5MQI6PApMEwcIayRzXCO1Nk0a/+U9LuUFt5ZFsAEa25AKPs+8n6naNoWTt1IFRonYueu3J7k1dg2qJGGn5NNjZ/qAfmNGX/17ramDuOxAMzprC/EakND+bEmH5CTg+RlfcKsENslqFl" />
        </div>


        <table width="498" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
            <tr>
                <td height="668" align="center" valign="top">

                    <table width="490" border="0" cellspacing="0" cellpadding="0" class="style1">
                        <tr>
                            <td colspan="2" height="50" align="left" valign="middle">
                                <img src="../images/fn5btitle.png" />
                            </td>
                        </tr>
                        <tr>
                            <td width="90" height="50" align="left" valign="middle">起始日期</td>
                            <td width="400" align="left" valign="middle">
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
                            <td height="50" align="left" valign="middle">星期</td>
                            <td align="left" valign="middle">
                                <input name="w1" type="checkbox" class="style1" value="v" />一&nbsp;
                                <input name="w2" type="checkbox" class="style1" value="v" />二&nbsp;
                                <input name="w3" type="checkbox" class="style1" value="v" />三&nbsp;
                                <input name="w4" type="checkbox" class="style1" value="v" />四&nbsp;
                                <input name="w5" type="checkbox" class="style1" value="v" />五&nbsp;
                                <input name="w6" type="checkbox" class="style1" value="v" />六&nbsp;
                                <input name="w7" type="checkbox" class="style1" value="v" />日&nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td height="50" align="left" valign="middle">開始時間</td>
                            <td align="left" valign="middle">
                                <select name="h1" class="style1">

                                    <option value='9'>9：00</option>

                                    <option value='10'>10：00</option>

                                    <option value='11'>11：00</option>

                                    <option value='12'>12：00</option>

                                    <option value='13'>13：00</option>

                                    <option value='14'>14：00</option>

                                    <option value='15'>15：00</option>

                                    <option value='16'>16：00</option>

                                    <option value='17'>17：00</option>

                                    <option value='18'>18：00</option>

                                    <option value='19'>19：00</option>

                                    <option value='20'>20：00</option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td height="50" align="left" valign="middle">結束時間</td>
                            <td align="left" valign="middle">
                                <select name="h2" class="style1">

                                    <option value='10'>10：00</option>

                                    <option value='11'>11：00</option>

                                    <option value='12'>12：00</option>

                                    <option value='13'>13：00</option>

                                    <option value='14'>14：00</option>

                                    <option value='15'>15：00</option>

                                    <option value='16'>16：00</option>

                                    <option value='17'>17：00</option>

                                    <option value='18'>18：00</option>

                                    <option value='19'>19：00</option>

                                    <option value='20'>20：00</option>

                                    <option value='21'>21：00</option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td height="50" align="left" valign="middle">
                                <input name="btn" type="submit" class="style1" value="確定" style="cursor:pointer" />
                            </td>
                            <td align="left" valign="middle"></td>
                        </tr>
                        <tr bgcolor="#F4F4F4">
                            <td colspan="2" height="50" align="left" valign="middle">說明：星期選項未勾選，則在日期區間內，該日屬於不可預約。</td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>


    </form>

</div>
</body>
</html>
