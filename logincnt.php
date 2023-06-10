<?php
include_once dirname(__FILE__) . '/no_php.php';
include_once dirname(__FILE__) . '/conn.php';

if (isset($_POST['txt使用者']) && isset($_POST['txt密碼'])) {
    $account = $_POST['txt使用者'];
    $password = $_POST['txt密碼'];
    $result = login($account, $password);
    if (! $result->success) {
        login_err();
        echo "<iframe width='1278px' marginwidth='0' height='716px' marginheight='0' scrolling='no' frameborder='0' src='./loginform.aspx'></iframe>";
        die();
    }
    setcookie("user_id", $result->data->user->id);
    setcookie("account", $account);
    setcookie("password", $password);
    setcookie("name", $result->data->user->name);
    setcookie("token", $result->data->token);
    echo get_dom($result->data->user->name, $result->data->user->account, $result->data->user->permission == "1");
}else {
    echo "<iframe width='1278px' marginwidth='0' height='716px' marginheight='0' scrolling='no' frameborder='0' src='./loginform.aspx'></iframe>";
}

function login($account, $password) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost/ntust-ctf/public/api/v1/user/login',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('account' => $account,'password' => $password),
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return json_decode($response);
}

function get_dom(string $name, string $account, bool $admin = false) {
    return '<html><head>
    <title>國際大樓12樓會議室預約管理系統</title>
    <meta http-equiv="Content-Type" content="text/html; charset=big5">
    <script>
        document.cookie.split(";").forEach(e => {
            const key = e.split("=")[0].trim();
            const value = e.split("=")[1].trim();
            localStorage.setItem(key, value);
        })
        localStorage.setItem("hasLogin", "1");
    </script>
</head>

<frameset rows="40,676" frameborder="NO" border="0" framespacing="0">
    <frame src="' . ($admin ? '' : "non") . 'manage/fn.aspx?cname=' . $name . '&amp;idno=0440000000" name="fnFrame" scrolling="NO" noresize="">
    <frame src="' . ($admin ? '' : "non") . 'manage/cnt.aspx?cname=' . $name . '&amp;idno=0440000000&amp;sid=' . $account . '" name="cntFrame" scrolling="NO" noresize="">
</frameset>
<noframes><body>
</body></noframes>

</html>';
}

//if (!isset($_COOKIE["has_login"])) {
//} else {
//    if (isset($_POST['txt使用者']) && isset($_POST['txt密碼'])) {
//        $account = $_POST['txt使用者'];
//        $password = $_POST['txt密碼'];
//        var_dump($account, $password);
//    }
//}