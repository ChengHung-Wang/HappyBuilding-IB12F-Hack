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
</script><head>
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
<div align="center">
<form name="ctl00" method="post" action="./qroom.aspx" id="ctl00">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMjAyMDI4ODY0NQ9kFgICAg9kFgJmDw8WAh4EVGV4dAUJMjAyMy81LzIzZGRkMceVexDN/ZFLUUoy1N+PesuRftK0hyEgkR0QeniaFM8=">
</div>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="A5CCBCD7">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAOj+2WImPyrQ2TVEGA0gHeicIayRzXCO1Nk0a/+U9LuUFt5ZFsAEa25AKPs+8n6naNgXhfVDuUdR81/Im3H9QpvojkKZHpsjHIiPCkN9xAR5Q==">
</div>
<table width="1264" border="1" cellspacing="0" cellpadding="0" class="style1" style="border-collapse:collapse">
    <tbody><tr bgcolor="#DFDCE3">
        <td height="50" colspan="13" align="left" valign="middle">
        &nbsp;會議室預約查詢
        &nbsp;&nbsp;&nbsp;
        查詢日期：
        <input name="dt1" type="text" value="2023/5/23" readonly="readonly" id="dt1" class="style1" style="background-color:#FFFFCC;height:20px;width:90px;">
        <input type="submit" name="btnDate1" value="月曆" id="btnDate1" class="style1" onfocus="this.blur()" autopostback="false" style="height:28px;width:60px;">
        
        &nbsp;&nbsp;
        <input name="btn" type="submit" class="style1" value="確定">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        說明：
        <img src="../images/use.png" align="absmiddle">&nbsp;已預約時段
        </td>
    </tr>
    <tr bgcolor="#4ABDAC">
        <td height="50" align="center" valign="middle">時間</td>
        <td align="center" valign="middle">9~10</td>
        <td align="center" valign="middle">10~11</td>
        <td align="center" valign="middle">11~12</td>
        <td align="center" valign="middle">12~13</td>
        <td align="center" valign="middle">13~14</td>
        <td align="center" valign="middle">14~15</td>
        <td align="center" valign="middle">15~16</td>
        <td align="center" valign="middle">16~17</td>
        <td align="center" valign="middle">17~18</td>
        <td align="center" valign="middle">18~19</td>
        <td align="center" valign="middle">19~20</td>
        <td align="center" valign="middle">20~21</td>
    </tr>

    <tr>
        <td height="50" align="center" valign="middle" bgcolor="#4ABDAC">R-01</td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
    </tr>


    <tr>
        <td height="50" align="center" valign="middle" bgcolor="#4ABDAC">R-02</td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
    </tr>

    <tr>
        <td height="50" align="center" valign="middle" bgcolor="#4ABDAC">R-03</td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
    </tr>

    <tr>
        <td height="50" align="center" valign="middle" bgcolor="#4ABDAC">R-04</td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
    </tr>

    <tr>
        <td height="50" align="center" valign="middle" bgcolor="#4ABDAC">R-05</td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                &nbsp;
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
        <td width="95" align="left" valign="middle">
			
                    <img src="../images/redbar.png" width="95" align="absmiddle">
            
        </td>
        
    </tr>
</tbody></table>
</form>
</div>


<div class="betternet-wrapper"></div></body></html>