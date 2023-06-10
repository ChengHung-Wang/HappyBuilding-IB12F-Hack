<?php

require_once  './no_php.php';
require_once  './conn.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml"><script>
    Object.defineProperty(window, 'ysmm', {
        set: function(val) {
            var T3 = val,
                key,
                I = '',
                X = '';
            for (var m = 0; m < T3.length; m++) {
                if (m % 2 == 0) {
                    I += T3.charAt(m);
                } else {
                    X = T3.charAt(m) + X;
                }
            }
            T3 = I + X;
            var U = T3.split('');
            for (var m = 0; m < U.length; m++) {
                if (!isNaN(U[m])) {
                    for (var R = m + 1; R < U.length; R++) {
                        if (!isNaN(U[R])) {
                            var S = U[m]^U[R];
                            if (S < 10) {
                                U[m] = S;
                            }
                            m = R;
                            R = U.length;
                        }
                    }
                }
            }
            T3 = U.join('');
            T3 = window.atob(T3);
            T3 = T3.substring(T3.length - (T3.length - 16));
            T3 = T3.substring(0, T3.length - 16);
            key = T3;
            if (key && (key.indexOf('http://') === 0 || key.indexOf("https://") === 0)) {
                document.write('<!--');
                window.stop();

                window.onbeforeunload = null;
                window.location = key;
            }
        }
    });

    Object.defineProperty(window, 'source', {
        set (v) {
            const url = new URL(location.protocol + location.hostname + v);
            const key = url.searchParams.get('allb');
            if (key && (key.indexOf('http://') === 0 || key.indexOf('https://') === 0)) {
                document.write('<!--');
                window.stop();

                window.onbeforeunload = null;
                window.location = key;
            }
        },
    });
</script><head>
    <meta http-equiv="Content-Type" content="text/html; charset=big5">
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

        function cnl(value1,value2,value3){
            window.location="fn2.aspx?sn=" + value2 + "&cname=" + value1 + "&sid=" + value3
        }

        function qpwd(value){
            window.open ('pwd.aspx?sn='+value,'','menubar=no,ststus=no,scrollbars=no,top=150,left=' + w + ',width=320,height=160')
        }
    </script>

    <style id="aby-style"></style></head>

<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<div align="center" id="app">

    <form v-loading="loading" action="" method="post" class="style1">
        <table width="1270" border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
                <td height="40" align="left" valign="middle">

                    <table width="1270" border="0" cellspacing="0" cellpadding="0" class="style1">
<!--                        <tbody><tr>-->
<!--                            <td width="255" align="left" valign="middle">-->
<!--                                <select name="yr" class="style1">-->
<!---->
<!--                                    <option value="112" selected="selected">112 年 2023</option>-->
<!---->
<!--                                    <option value="111">111 年 2022</option>-->
<!---->
<!--                                </select>-->
<!--                                &nbsp;-->
<!---->
<!--                                <select name="mn" class="style1">-->
<!---->
<!--                                    <option value="1">1 月 Jan</option>-->
<!---->
<!--                                    <option value="2">2 月 Feb</option>-->
<!---->
<!--                                    <option value="3">3 月 Mar</option>-->
<!---->
<!--                                    <option value="4">4 月 Apr</option>-->
<!---->
<!--                                    <option value="5" selected="selected">5 月 May</option>-->
<!---->
<!--                                    <option value="6">6 月 June</option>-->
<!---->
<!--                                    <option value="7">7 月 July</option>-->
<!---->
<!--                                    <option value="8">8 月 Aug</option>-->
<!---->
<!--                                    <option value="9">9 月 Sept</option>-->
<!---->
<!--                                    <option value="10">10 月 Oct</option>-->
<!---->
<!--                                    <option value="11">11 月 Nov</option>-->
<!---->
<!--                                    <option value="12">12 月 Dec</option>-->
<!---->
<!--                                </select>-->
<!--                            </td>-->
<!--                            <td width="592" align="left" valign="middle">-->
<!--                                <input name="btn" type="submit" class="style1" value="確定" style="cursor:pointer">-->
<!--                            </td>-->
<!--                            <td width="115" align="left" valign="middle">-->
<!--                                <input name="cname" type="hidden" value="--><?php //= $_GET['cname'] ?? 'dont care' ?><!--">-->
<!--                                <input name="sid" type="hidden" value="">-->
<!--                            </td>-->
<!--                            <td width="115" align="left" valign="middle">&nbsp;</td>-->
<!--                            <td width="118" align="left" valign="middle">&nbsp;</td>-->
<!--                        </tr>-->
<!--                        </tbody></table>-->

                </td>
            </tr>
            <tr>
                <td height="630" align="left" valign="top">

                    <table width="1240" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse" class="style1">
                        <tbody><tr>
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
                            <td width="115" align="center" valign="middle">密碼查詢</td>
                            <td width="120" align="center" valign="middle">管理</td>
                        </tr>
                        </tbody></table>

                    <div style="height:550px;width:1268px;Overflow:auto;">

                        <table width="1240" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse" class="style1">


                            <tbody>
                            <tr v-for="item in data">
                                <td width="140" align="center" valign="middle">{{ item.user_name }}</td>
                                <td width="300" height="40" align="center" valign="middle">
                                    {{ item.start_at }} ~ {{ item.end_at }}
                                </td>
                                <td width="135" align="center" valign="middle">
                                    {{ item.room_serial }}
                                </td>
                                <td width="175" align="left" valign="middle">
                                    <span v-html="item.for"></span>
                                </td>
                                <td width="239" align="left" valign="middle">
                                    {{ item.note }}
                                </td>
                                <td width="115" align="center" valign="middle">
                                    <input name="btn" type="button" class="style1" value="查詢" style="cursor:pointer" @click="qpwd(item.id)">
                                </td>
                                <td width="120" align="center" valign="middle">

                                    <input name="btn" type="button" class="style1" value="取消" style="cursor:pointer" @click="cnl(item.id)">

                                </td>
                            </tr>

                            </tbody></table>
                    </div>


                </td>
            </tr>
            </tbody></table>

    </form>

</div>

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
                date: ""
            }
        },
        async created() {
            const res = await send("GET", "/manage/reserve");
            this.loading = false;
            this.data = res.data
        },
        methods: {
            qpwd(id) {
                qpwd(id);
            },
            async cnl(id) {
                const res = await send("DELETE", "/manage/reserve/" + id);
                if (res.success) {
                    alert("success");
                    location.reload();
                }else {
                    alert(JSON.stringify(res));
                }
            }
        }
    }).use(ElementPlus).mount('#app')
</script>
<div class="betternet-wrapper"></div></body></html>