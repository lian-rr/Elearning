$(document).ready(function () {
    var ip;

    /**
     * Get the client ip
     */
    $.get("http://ipinfo.io", function(response) {
        ip = response.ip;
    }, "jsonp");

    /**
     * Login post request
     */
    $('#btn-login').click(function () {
        $.ajax({
            url: 'login',
            type: "post",
            data: {
                'email': $('input[name=email]').val(),
                'password': $('input[name=password]').val(),
                'ip': ip,
                'browser': detectBrowser(),
                'os': detectOs(),
                '_token': $('input[name=_token]').val()
            },
            success: function (data) {
                window.location.href = 'login';
            },
            error: function (err) {
                console.log(err);
            }
        });
    });
});


/**
 * Browser detection
 * @returns browser and version{string}
 */
function detectBrowser() {
    var ua = navigator.userAgent, tem,
        M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
    if (/trident/i.test(M[1])) {
        tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
        return 'IE ' + (tem[1] || '');
    }
    if (M[1] === 'Chrome') {
        tem = ua.match(/\b(OPR|Edge)\/(\d+)/);
        if (tem != null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
    }
    M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
    if ((tem = ua.match(/version\/(\d+)/i)) != null) M.splice(1, 1, tem[1]);
    return M.join(' ');
}

/**
 * Operating System detection
 * @returns os{string}
 */
function detectOs() {
    var OSName = "Unknown OS";
    if (navigator.appVersion.indexOf("Win") != -1) OSName = "Windows";
    if (navigator.appVersion.indexOf("Mac") != -1) OSName = "MacOS";
    if (navigator.appVersion.indexOf("Linux") != -1) OSName = "Linux";
    if (navigator.appVersion.indexOf("X11") != -1) OSName = "UNIX";
    return OSName;
}