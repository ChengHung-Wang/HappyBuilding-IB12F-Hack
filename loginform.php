<?php
require_once dirname(__FILE__) . '/no_php.php';
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=big5">
    <title>無標題文件</title>

    <style type="text/css">
        .style1 {
            font-family: "微軟正黑體";
            font-size: 15px;
            color: #333;
        }

        .style2 {
            font-family: "微軟正黑體";
            font-size: 15px;
            color: #333;
            text-align: center;
            background-color: #FFC;
        }

        .style3 {
            font-family: "微軟正黑體";
            font-size: 15px;
            color: #333;
            text-align: center;
            cursor: pointer;
        }

        .style4 {
            font-family: "微軟正黑體";
            font-size: 15px;
            color: #333;
            line-height: 24px;
        }
    </style>

    <script language="javascript">
        var w
        w = (screen.width - 980) / 2

        function q() {
            window.open('nonmanage/qroom.aspx', '', 'menubar=no,ststus=no,scrollbars=no,top=250,left=' + w + ',width=980,height=375')
        }
    </script>

</head>

<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<div align="center">

    <form id="app" name="form1" method="post" action="./logincnt.aspx">
        <div>
            <input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                   value="/wEPDwUKMTg4MzQxMjk1MmRkNp3UltJZZtnLX2oUBDTqKWg2bJeLQcO4aPsb5q+1fDA=">
        </div>


        <div>

            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="1FB25CB6">
            <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
            <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
            <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                   value="/wEdAAUByRxlIypdc+35JPrjajY8L/JIKhZFeEurTedRQGXGIe+Cl/eZi5AfCOzIy3chJVhfUkt1/aJBEd1U7sXAyB04EwecZPutJ1X8NeT3JkrkV0Vp/RZ1vaSZEHfbjABfagK+tLwsRCbdxwxH6r1iF3Bs">
        </div>

        <table width="1278" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
            <tbody v-loading="loading">
            <tr>
                <td height="130" align="top" valign="middle">

                    <table width="1278" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse"
                           class="style1">
                        <tbody>
                        <tr>
                            <td width="120" height="50" align="left" valign="middle">
                                &nbsp;帳號&nbsp;/&nbsp;Account
                            </td>
                            <td width="320" align="left" valign="middle">&nbsp;<input name="txt使用者" type="text"
                                                                                      id="txt使用者" tabindex="1"
                                                                                      class="style2" v-model="account"
                                                                                      style="height:25px;width:270px;">
                            </td>
                            <td width="135" align="left" valign="middle">
                                &nbsp;密碼&nbsp;/&nbsp;Password
                            </td>
                            <td width="320" align="left" valign="middle">&nbsp;
                                <input name="txt密碼" type="password" v-model="password" autocomplete="on"
                                       id="txt密碼" tabindex="2"
                                       class="style2"
                                       style="height:25px;width:270px;">
                            </td>
                            <td align="center" valign="middle">
                                <span id="lblMESSAGE" style="display:inline-block;color:Red;height:25px"></span>
                                <input type="submit" name="btn登入" value="登入 / Sign in" id="btn登入" tabindex="3"
                                       class="style3" style="height:30px;width:120px;">
                                <input type="button" name="btn註冊" value="註冊 / Register" id="btn註冊" tabindex="4"
                                       class="style3" style="height:30px;width:120px;" @click="register()">
                                <input type="reset" name="btn清除" value="清除 / Remove" id="btn清除" tabindex="5"
                                       class="style3" style="height:30px;width:120px;">
                            </td>
                        </tr>
                        <tr>
                            <td height="60" align="left" valign="middle" colspan="5" class="style4">
                                &nbsp;帳號：學生請輸入學號；教職員請輸入身分證字號
                                &nbsp;&nbsp;
                                &nbsp;Account: Student card number / Identity card number
                                <br>
                                &nbsp;密碼：學生資訊系統密碼或教職員資訊系統密碼
                                &nbsp;&nbsp;
                                &nbsp;Password: Student information system password / Faculty information system
                                password

                            </td>
                        </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
            <tr>
                <td height="540" align="left" valign="middle">

                    <table width="1278" border="0" cellspacing="0" cellpadding="0" class="style4">
                        <tbody>
                        <tr>
                            <td height="56" align="left" valign="middle">

                                <table width="1278" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                        <td align="left" valign="middle"><img src="images/abs.png" width="320"
                                                                              height="36">&nbsp;<img
                                                    src="images/qshd.png" width="320" height="36" style="cursor:pointer"
                                                    onclick="q()"></td>
                                        <td align="right"><a href="學習討論室借用管理規則.pdf" target="new"><img
                                                        src="images/mge.png"></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </td>
                        </tr>
                        <tr>
                            <td height="520" align="left" valign="top">

                                <table width="1278" border="0" cellspacing="0" cellpadding="0" class="style1">
                                    <tbody>
                                    <tr>
                                        <td width="26" align="center" valign="top">1.</td>
                                        <td width="1252" height="56" align="left" valign="top">
                                            開放時間：週一至週五09:00-21:00；週六13:00-21:00；週日13:00-1700。國定假日不開放，寒暑假開放時間另行公告。
                                            <br>
                                            Open time:Monday-Friday&nbsp;09:00-21:00；Saturday&nbsp;13:00-21:00；Sunday&nbsp;13:00-17:00&nbsp;(P.S.
                                            Not open on national holidays.)

                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top">2.</td>
                                        <td height="56" align="left" valign="top">
                                            借用人可於預約時段前10分鐘使用學生證或教職員證刷卡進入，若證件無法感應，亦可輸入申請時填寫的eMail帳號進行驗證進入使用。
                                            <br>
                                            Using the student ID or staff card to swipe to enter 10 minutes before the
                                            appointment time.If the card cannot be sensed,please enter the email which
                                            you applied.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top">3.</td>
                                        <td height="56" align="left" valign="top">
                                            每次借用最長以2小時為限，每人每週最多可預約2次。
                                            <br>
                                            The application is in hours, and each person can make reservations up to
                                            four hours a week.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top">4.</td>
                                        <td height="56" align="left" valign="top">
                                            提供教職員或學生進行課後輔導、課業討論或伴讀活動等學習相關之用，嚴禁任何其他非學習之活動
                                            。
                                            <br>
                                            Learning discussion rooms are only for learning related activities.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top">5.</td>
                                        <td height="56" align="left" valign="top">
                                            討論室禁止攜帶食物（飲用水除外）進入，請愛惜室內設備並保持清潔。
                                            <br>
                                            It is forbidden to bring food (except water) into the discussion room, and
                                            please keep the room clean.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top">6.</td>
                                        <td height="56" align="left" valign="top">
                                            個人隨身或貴重物品請妥善保管， 管理單位 不負保管責任。
                                            <br>
                                            Please take care of your personnel belongings, CTLD is not responsible for
                                            them.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top">7.</td>
                                        <td height="60" align="left" valign="top">
                                            如有使用相關問題，請至以下地點詢問：
                                            <br>
                                            If you have any problems, please contact us:
                                            <br>
                                            <table width="1100" border="1" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                <tr>
                                                    <td width="390" height="30" align="center" valign="middle">時間&nbsp;Time</td>
                                                    <td width="432" align="center" valign="middle">地點&nbsp;Location
                                                    </td>
                                                    <td width="270" align="center" valign="middle">連絡電話&nbsp;Contact
                                                        us
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="30" align="center" valign="middle">週一至週五&nbsp;Mon.
                                                        - Fri. 09:00-17:30
                                                    </td>
                                                    <td align="center" valign="middle">教務處選才專案辦公室&nbsp;&nbsp;(IB-1205)</td>
                                                    <td align="center" valign="middle">(02)2730-1191</td>
                                                </tr>
                                                <tr>
                                                    <td height="30" align="center" valign="middle">週一至週五&nbsp;Mon.
                                                        - Fri. 17:30-21:00
                                                    </td>
                                                    <td align="center" valign="middle">學習討論室夜間諮詢處&nbsp;Service
                                                        counter&nbsp;(IB-1221)
                                                    </td>
                                                    <td align="center" valign="middle">(02)2733-3141#5217</td>
                                                </tr>
                                                <tr>
                                                    <td height="30" align="center" valign="middle">週六及週日&nbsp;Weekend</td>
                                                    <td align="center" valign="middle"><span
                                                                style="vertical-align: inherit;"><span
                                                                    style="vertical-align: inherit;">学习讨论室夜间咨询处
                                                                Service counter (IB-1221)</span></span></td>
                                                    <td align="center" valign="middle"><span
                                                                style="vertical-align: inherit;"><span
                                                                    style="vertical-align: inherit;">(02)2733-3141#5217</span></span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </td>
                        </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
            </tbody>
        </table>
    </form>

</div>


</body>
<script type="text/javascript">
    //<![CDATA[
    var theForm = document.forms['form1'];
    if (!theForm) {
        theForm = document.form1;
    }

    function __doPostBack(eventTarget, eventArgument) {
        if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
            theForm.__EVENTTARGET.value = eventTarget;
            theForm.__EVENTARGUMENT.value = eventArgument;
            theForm.submit();
        }
    }

    //]]>
</script>


<script src="./WebResource.axd?d=fCe5s1PfTh6_o1TUiCIFgIIdDHNspvWxWRfBDY-TcxiA1S_lTVfrElL5SKFD3LASviHtUavrJSzHZIyBjY9DkpkdKwMpLPWWexHRRQIr2FQ1&amp;t=636856665104809496"
        type="text/javascript"></script>


<script src="./WebResource.axd?d=6p505oU7eC7JuZ4y82Y5kGeDq65dAIU21DVxfFAUL6TCo3dt94LOvlb0IBe2sU-J70OzKeHpSCLEN7bijQ0XNhHvqO2-wZyrhLclUA2agzM1&amp;t=636856665104809496"
        type="text/javascript"></script>
<script type="text/javascript">
    //<![CDATA[
    WebForm_AutoFocus('txt使用者');//]]>
</script>

<link rel="stylesheet" href="./css/element-ui_plus.css">
<script src="./js/global.js"></script>
<script src="./js/vue.global.js"></script>
<script src="./js/element-ui_plus.js"></script>
<script>
    Vue.createApp({
        data() {
            return {
                account: "",
                password: "",
                loading: false
            }
        },
        methods: {
            async register() {
                const name = prompt("用戶姓名 Name:");
                if (this.account === "" || this.password === "" || name === "") {
                    alert("empty field");
                }
                this.loading = true;
                const res = await send("POST", "/user/register", {
                    account: this.account,
                    password: this.password,
                    name: name
                });
                this.loading = false;
                if (res.success) {
                    alert("success, 請用新帳號登入");
                    location.reload();
                } else {
                    alert(JSON.stringify(res));
                }
            }
        }
    }).use(ElementPlus).mount('#app')
</script>
</html>