<?php
require_once dirname(__FILE__) . '/no_php.php';
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
</script>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>會議室預約查詢</title>

<style type="text/css">
.style1 {
	font-family: "微軟正黑體";
	font-size: 15px;
	color: #333;
}

.style2 {
	font-family: "微軟正黑體";
	font-size: 15px;
	color:#F00;
}

.style3 {
	font-family: "微軟正黑體";
	font-size: 15px;
	color:#C30;
}

.style4 {
	font-family: "微軟正黑體";
	font-size: 15px;
	color: #AAA;
}

</style>



<script language="javascript">
var w
w=(screen.width-400)/2
function note(value){
	window.open ('detail.php?sn=' + value,'','menubar=no,ststus=no,scrollbars=no,top=5,left=' + w + ',width=400,height=340')
}
</script>

<style id="aby-style"></style></head>

<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<div id="qroom" align="center">
    <form style="width: 100vw; height: 100vh;" v-loading="loading" name="ctl00" action="./qroom.aspx" id="ctl00">
        <br><br><br>

        <div v-for="item in data">
            <p>房間號碼：{{ item.room_serial }}</p>
            <p>開始時間：{{ item.start_at }}</p>
            <p>結束時間：{{ item.end_at }}</p>
            <hr>
        </div>

        <input type="date" v-model="date" name="date" required>
        <input type="submit">
    </form>
</div>


<div class="betternet-wrapper"></div></body>
<link rel="stylesheet" href="../css/element-ui_plus.css">
<script src="../js/global.js"></script>
<script src="../js/vue.global.js"></script>
<script src="../js/element-ui_plus.js"></script>
<script src="../js/moment.min.js"></script>
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
            this.date = moment().format("Y-MM-DD");
            let params = new URL(location.href).searchParams;
            for (let pair of params.entries()) {
                if (pair[0] === "date") {
                    this.date = pair[1];
                }
            }
            const res = await send("GET", "/manage/reserve/" + this.date);
            this.loading = false;
            this.data = res.data
        }
    }).use(ElementPlus).mount('#qroom')
</script>
</html>