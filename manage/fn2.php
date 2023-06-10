<?php
require_once dirname(__FILE__) . '/no_php.php';
?>

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

    <script language="javascript">
        var w
        w=(screen.width-320)/2

        function cnl(value2){
            window.location=("fn2.aspx?sn=" + value2)
        }

        function qpwd(value){
            window.open ('password.aspx?sn='+value,'','menubar=no,ststus=no,location=no,scrollbars=no,top=150,left=' + w + ',width=320,height=160')
        }

    </script>

</head>

<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<div align="center" id="fn2">

    <form name="ctl00" v-loading="loading" method="post" action="./fn2.aspx?cname=%u738b%u6b63%u5b8f&amp;idno=0445368690" id="ctl00" class="style1">
        <div>
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJNDMwNjIzODgxZGS91oDk+6RYnZ/qAyDjMsssQwYzFxtfHN4DUgmDTEPtYA==" />
        </div>

        <div>

            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="39965167" />
        </div>



        <table width="1270" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td height="40" align="left" valign="middle">

<!--                    <table width="1270" border="0" cellspacing="0" cellpadding="0" class="style1">-->
<!--                        <tr>-->
<!--                            <td width="75" height="36" align="left" valign="middle">查詢日期</td>-->
<!--                            <td width="200" align="left" valign="middle">-->
<!--                                <select name="yr" class="style1">-->
<!---->
<!--                                    <option value='112' selected="selected">112 年</option>-->
<!---->
<!--                                    <option value='111'>111 年</option>-->
<!---->
<!--                                </select>-->
<!--                                &nbsp;-->
<!--                                <select name="mn" class="style1">-->
<!---->
<!--                                    <option value='1'>1 月</option>-->
<!---->
<!--                                    <option value='2'>2 月</option>-->
<!---->
<!--                                    <option value='3'>3 月</option>-->
<!---->
<!--                                    <option value='4'>4 月</option>-->
<!---->
<!--                                    <option value='5' selected="selected">5 月</option>-->
<!---->
<!--                                    <option value='6'>6 月</option>-->
<!---->
<!--                                    <option value='7'>7 月</option>-->
<!---->
<!--                                    <option value='8'>8 月</option>-->
<!---->
<!--                                    <option value='9'>9 月</option>-->
<!---->
<!--                                    <option value='10'>10 月</option>-->
<!---->
<!--                                    <option value='11'>11 月</option>-->
<!---->
<!--                                    <option value='12'>12 月</option>-->
<!---->
<!--                                </select>-->
<!--                            </td>-->
<!--                            <td width="647" align="left" valign="middle">-->
<!--                                <input name="btn" type="submit" class="style1" value="確定" style="cursor:pointer" />-->
<!--                            </td>-->
<!--                            <td width="115" align="left" valign="middle">&nbsp;</td>-->
<!--                            <td width="115" align="left" valign="middle">&nbsp;</td>-->
<!--                            <td width="118" align="left" valign="middle">&nbsp;</td>-->
<!--                        </tr>-->
<!--                    </table>-->
                </td>
            </tr>
            <tr>
                <td height="630" align="left" valign="top">

                    <table width="1240" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse" class="style1">
                        <tr>
                            <td height="40" colspan="7" align="center" valign="middle" bgcolor="#7ABACE">
                                預約使用資訊
                            </td>
                        </tr>
                        <tr bgcolor="#C8E3E7">
                            <td width="140" align="center" valign="middle">預約人</td>
                            <td width="300" height="40" align="center" valign="middle">使用期間</td>
                            <td width="135" align="center" valign="middle">會議室</td>
                            <td width="175" align="center" valign="middle">會議名稱</td>
                            <td width="239" align="center" valign="middle">備註</td>
                        </tr>
                    </table>

                    <div STYLE="height:550px;width:1268px;Overflow:auto;">
                        <table v-for="item in data" width="1240" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse" class="style1">
                            <tr>
                                <td width="140" align="center" valign="middle">{{ item.user_name }}</td>
                                <td width="300" height="40" align="center" valign="middle">
                                    {{ item.start_at }} ~ {{ item.end_at }}
                                </td>
                                <td width="135" align="center" valign="middle">
                                    {{ item.room_serial }}
                                </td>
                                <td width="175" align="left" valign="middle" v-html="item.for">¸</td>
                                <td width="239" align="left" valign="middle">
                                    {{ item.note }}
                                </td>
                            </tr>
                        </table>
                    </div>


                </td>
            </tr>
        </table>

    </form>

</div>
</body>
<link rel="stylesheet" href="../css/element-ui_plus.css">
<script src="../js/global.js"></script>
<script src="../js/vue.global.js"></script>
<script src="../js/element-ui_plus.js"></script>
<script>
    Vue.createApp({
        data() {
            return {
                loading: true,
                data: [],
            }
        },
        async created() {
            let params = new URL(location.href).searchParams;
            const res = await send("PATCH", "/manage/reserve");
            this.data = res.data;
            this.loading = false;
        }
    }).use(ElementPlus).mount('#fn2')
</script>
</html>

</html>
