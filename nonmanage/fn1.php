<?php
require_once './no_php.php';
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
w=(screen.width-1272)/2

function q(){
	window.open ('qroom.aspx','','menubar=no,ststus=no,scrollbars=no,top=250,left=' + w + ',width=1272,height=365')
}

function restart(value1,value2){
	window.location="fn1.aspx?cname=" + value1 + "&idno=" + value2
}
</script>

</head>

<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<div id="fn1" align="center">

<form name="ctl00" method="post" action="./fn1.aspx?cname=<?= $_GET['cname'] ?? '這裡沒洞' ?>&amp;idno=0440000000&amp;sid=B11015018" id="ctl00" class="style1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTU1ODg2Nzg5NA9kFgICAg9kFgJmDw8WAh4EVGV4dGVkZGTzYTJa1NF4LRXup6q3YbdoYnc24Bq3m5wmHOBZqbM4RA==" />
</div>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="E01A1DF5" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAPI/IAezvXDtnedhCKUr+SMaFk7dSBUaJ2Lnrtye5NXYNqiRhp+TTY2f6gH5jRl/9ecqGQ4k0uqLpRrrAK23SRnIbPH2bySc44t0c/yVTZXkQ==" />
</div>



<table width="1272" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td height="110" align="center" valign="middle">

            <table width="1270" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
                <tr>
                    <td width="175" height="100" background="../images/msg.png">&nbsp;</td>
                    <td width="1089" align="center" valign="middle">
                    	<iframe src="msg.aspx" width="1075px" marginwidth="0" height="80px" marginheight="0" scrolling="no" frameborder="0"></iframe>
                    </td>
                </tr>
            </table>
        
        </td>
    </tr>
    <tr>
        <td height="560" align="center" valign="top">

            <table width="1270" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
                <tr>
                    <td width="215" height="60" align="left" valign="middle" bgcolor="#DCECFA">
                    &nbsp;姓名<br />
                    &nbsp;Name
                    </td>
                    <td width="597" align="left" valign="middle">
                    &nbsp;
                    <input name="cname" type="text" class="style2" value="<?= $_COOKIE['name'] ?? 'no flag here' ?>" size="30" readonly="readonly" />
                    <input name="uid" type="hidden" value="0440000000" />
                    <input name="sid" type="hidden" value="<?= $_COOKIE["account"] ?? 'b11015018' ?>" />
                    </td>
                    <td width="450" rowspan="6" background="../images/map.png" style="background-repeat:no-repeat; background-position:center">&nbsp;</td>
                </tr>
                <tr>
                    <td height="60" align="left" valign="middle" bgcolor="#DCECFA">
                    &nbsp;預約日期<br />
                    &nbsp;Reservation date
                    </td>
                    <td align="left" valign="middle">
                    &nbsp;
					<input name="dt2" v-model="data.date" type="date" id="dt2" class="style2" style="height:24px;width:120px;" />
                    </td>
                </tr>
                <tr>
                    <td height="60" align="left" valign="middle" bgcolor="#DCECFA">
                    &nbsp;預約時段<br />
                    &nbsp;Time
                    </td>
                    <td align="left" valign="middle">
                    &nbsp;
                    <select v-model="data.start_at" name="hr1" class="style1">
                        
                        		<option value=9>9</option>
                            
                        		<option value=10>10</option>
                            
                        		<option value=11>11</option>
                            
                        		<option value=12>12</option>
                            
                        		<option value=13>13</option>
                            
                        		<option value=14>14</option>
                            
                        		<option value=15>15</option>
                            
                        		<option value=16>16</option>
                            
                        		<option value=17>17</option>
                            
                        		<option value=18>18</option>
                            
                        		<option value=19>19</option>
                            
                        		<option value=20>20</option>
                            
                    </select>
                    時&nbsp;Hour
                    <select name="mn1" class="style1">
						
                            <option value="00" selected="selected">00</option>
                        
                    </select>
                    分&nbsp;Minute&nbsp;～&nbsp;
                    <select v-model="data.end_at" name="hr2" class="style1">
                        
                        		<option value=10>10</option>
                            
                        		<option value=11>11</option>
                            
                        		<option value=12>12</option>
                            
                        		<option value=13>13</option>
                            
                        		<option value=14>14</option>
                            
                        		<option value=15>15</option>
                            
                        		<option value=16>16</option>
                            
                        		<option value=17>17</option>
                            
                        		<option value=18>18</option>
                            
                        		<option value=19>19</option>
                            
                        		<option value=20>20</option>
                            
                        		<option value=21>21</option>
                            
                    </select>
                    時&nbsp;Hour
                    <select name="mn2" class="style1">
						
                            <option value="00" selected="selected">00</option>
                        
                    </select>
                    分&nbsp;Minute
                    </td>
                </tr>
                <tr>
                    <td height="60" align="left" valign="middle" bgcolor="#DCECFA">
                    &nbsp;參與人數<br />
                    &nbsp;The number of participants
                    </td>
                    <td align="left" valign="middle">
                    &nbsp;
                    <select name="pr" class="style1">
                    	
                            <option value="2" selected="selected">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">>6</option>
                        
                    </select>
                    </td>
                </tr>
                <tr>
                    <td height="60" align="left" valign="middle" bgcolor="#DCECFA">
                    &nbsp;會議名稱<br />
                    &nbsp;Purpose
                    </td>
                    <td align="left" valign="middle">
                    &nbsp;
					
                        <input v-model="data.for" type="radio" name="mtname" value="伴讀" id="m_0" />
                    
                    伴讀&nbsp;Learning partner program
                    
                        <input v-model="data.for" type="radio" name="mtname" value="學習討論" id="m_1" />
                    
                    學習討論&nbsp;Learning & Discussion
                    <br />
                    &nbsp;
                    
                        <input v-model="data.for" type="radio" name="mtname" value="課後輔導" id="m_2" />
                    
                    課後輔導&nbsp;After-school tutoring
                    </td>
                </tr>
                <tr>
                    <td height="60" align="left" valign="middle" bgcolor="#DCECFA">
                    &nbsp;電子郵件<br />
                    &nbsp;E-mail
                    </td>
                    <td align="left" valign="middle">
                    &nbsp;
                    <input name="email" type="text" class="style2" size="75" value='' require />
                    </td>
                </tr>
                <tr>
                    <td height="60" align="left" valign="middle" bgcolor="#DCECFA">
                    &nbsp;會議室<br />
                    &nbsp;Choose a room
                    </td>
                    <td colspan="2" align="left" valign="middle">
                    &nbsp;<!--<input type="radio" name="room" value="R1201" id="room_0" />R01（2~12 人 people）&nbsp;&nbsp;-->
                    
                    	<!--<input type="radio" name="room" value="R1202" id="room_1" />R02（2~10 人 people）-->
                    
                    	<input type="radio" v-model="data.room" name="room" value="R1203" id="room_2" />R03（2~10 人 people）&nbsp;&nbsp;
                    
                    	<input type="radio" v-model="data.room" name="room" value="R1204" id="room_3" />R04（2~5 人 people）&nbsp;&nbsp;

                        <input type="radio" v-model="data.room" name="room" value="R1205" id="room_3" />R05（2~5 人 people）&nbsp;&nbsp;
                        <input type="radio" v-model="data.room" name="room" value="R20" disabled id="room_4" />R20（2~5 人 people）&nbsp;&nbsp;
<!--                        <input type="radio" v-model="data.room" name="room" value="216" id="room_5" />R05（2~5 人 people）&nbsp;&nbsp;-->

                    </td>
                </tr>
                <tr>
                    <td height="60" align="left" valign="middle" bgcolor="#DCECFA">
                    &nbsp;備註<br />
                    &nbsp;Remark
                    </td>
                    <td colspan="2" align="left" valign="middle">
                    &nbsp;
                    <input v-model="data.note" name="note" type="text" class="style1" size="140" value='' />
                    </td>
                </tr>
                <tr>
                    <td height="60" colspan="3" align="left" valign="middle">
        &nbsp;               <input name="btn1" @click="submit()" type="button" class="style1" value="確定 Enter" style="cursor:pointer" />
                        <input name="btn3" type="reset" class="style1" style="cursor:pointer" value="取消 Cancel" />
                        <input name="btn2" type="button" class="style1" style="cursor:pointer" value="目前預約狀況 Reservation schedule" onclick="q()" />
                    </td>
                </tr>

            </table>
        
        </td>
    </tr>
</table>

</form>

</div>
</body>
<script src="../js/global.js"></script>
<script src="../js/vue.global.js"></script>
<script src="../js/element-ui_plus.js"></script>
<script src="../js/moment.min.js"></script>
<script type="module">
    Vue.createApp({
        data() {
            return {
                loading: false,
                data: {
                    room: "R1203",
                    for: "伴讀",
                    start_at: "9",
                    end_at: "10",
                    date: "",
                    note: ""
                }
            }
        },
        created() {
            this.data.date = moment().format("Y-MM-DD");
        },
        methods: {
            async submit() {
                const res = await send("POST", "/manage/reserve", this.data)
                if (res.success) {
                    alert('success!');
                    location.href='fn2.aspx'
                }else {
                    alert(JSON.stringify(res));
                }
            }
        }
    }).use(ElementPlus).mount('#fn1')
</script>
</html>
