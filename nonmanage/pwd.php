<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=big5" />
    <title>無標題文件</title>

    <style type="text/css">
        .style1 {
            font-family:"微軟正黑體";
            font-size: 15px;
            color: #F00;
        }
    </style>

</head>

<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<div align="center" id="pwd">


    <table v-loading="loading" width="300" border="0" cellspacing="0" cellpadding="0" class="style1">
        <tr>
            <td height="70" align="center" valign="bottom">{{ data }}</td>
        </tr>
    </table>

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
                data: "",
            }
        },
        async created() {
            let params = new URL(location.href).searchParams;
            for (let pair of params.entries()) {
                if (pair[0] === "sn") {
                    const res = await send("GET", "/manage/reserve/" + pair[1] + "/password");
                    if (res.data.password[0].password) {
                        this.data = res.data.password[0].password
                    }
                }
            }
            this.loading = false;
        }
    }).use(ElementPlus).mount('#pwd')
</script>
</html>
