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
    <style id="aby-style"></style></head>

<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<div align="center">

    <table width="1272" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
        <tbody><tr>
            <td height="630" align="center" valign="middle">

                <iframe src="a.aspx" width="1264px" marginwidth="0" height="620px" marginheight="0" scrolling="no" frameborder="0"></iframe>

            </td>
        </tr>
        </tbody></table>

</div>


<div class="betternet-wrapper"></div></body></html>