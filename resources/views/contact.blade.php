<!DOCTYPE html>
<!-- saved from url=(0053)https://colorlib.com/etc/cf/ContactFrom_v7/index.html -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Contact V7</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="https://colorlib.com/etc/cf/ContactFrom_v7/images/icons/favicon.ico">

    <link rel="stylesheet" type="text/css" href="./Contact V7_files/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="./Contact V7_files/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="./Contact V7_files/icon-font.min.css">

    <link rel="stylesheet" type="text/css" href="./Contact V7_files/animate.css">

    <link rel="stylesheet" type="text/css" href="./Contact V7_files/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="./Contact V7_files/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="./Contact V7_files/select2.min.css">

    <link rel="stylesheet" type="text/css" href="./Contact V7_files/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="./Contact V7_files/util.css">
    <link rel="stylesheet" type="text/css" href="./Contact V7_files/main.css">

    <meta name="robots" content="noindex, follow">
    <script type="text/javascript" async="" src="./Contact V7_files/analytics.js.transferir"
        nonce="99b33201-ff77-4086-9b5f-354670a1483a"></script>
    <script defer="" referrerpolicy="origin" src="./Contact V7_files/s.js.transferir"></script>
    <script nonce="99b33201-ff77-4086-9b5f-354670a1483a">
        (function(w, d) {
            ! function(bb, bc, bd, be) {
                bb[bd] = bb[bd] || {};
                bb[bd].executed = [];
                bb.zaraz = {
                    deferred: [],
                    listeners: []
                };
                bb.zaraz.q = [];
                bb.zaraz._f = function(bf) {
                    return async function() {
                        var bg = Array.prototype.slice.call(arguments);
                        bb.zaraz.q.push({
                            m: bf,
                            a: bg
                        })
                    }
                };
                for (const bh of ["track", "set", "debug"]) bb.zaraz[bh] = bb.zaraz._f(bh);
                bb.zaraz.init = () => {
                    var bi = bc.getElementsByTagName(be)[0],
                        bj = bc.createElement(be),
                        bk = bc.getElementsByTagName("title")[0];
                    bk && (bb[bd].t = bc.getElementsByTagName("title")[0].text);
                    bb[bd].x = Math.random();
                    bb[bd].w = bb.screen.width;
                    bb[bd].h = bb.screen.height;
                    bb[bd].j = bb.innerHeight;
                    bb[bd].e = bb.innerWidth;
                    bb[bd].l = bb.location.href;
                    bb[bd].r = bc.referrer;
                    bb[bd].k = bb.screen.colorDepth;
                    bb[bd].n = bc.characterSet;
                    bb[bd].o = (new Date).getTimezoneOffset();
                    if (bb.dataLayer)
                        for (const bo of Object.entries(Object.entries(dataLayer).reduce(((bp, bq) => ({
                                ...bp[1],
                                ...bq[1]
                            })), {}))) zaraz.set(bo[0], bo[1], {
                            scope: "page"
                        });
                    bb[bd].q = [];
                    for (; bb.zaraz.q.length;) {
                        const br = bb.zaraz.q.shift();
                        bb[bd].q.push(br)
                    }
                    bj.defer = !0;
                    for (const bs of [localStorage, sessionStorage]) Object.keys(bs || {}).filter((bu => bu
                        .startsWith("_zaraz_"))).forEach((bt => {
                        try {
                            bb[bd]["z_" + bt.slice(7)] = JSON.parse(bs.getItem(bt))
                        } catch {
                            bb[bd]["z_" + bt.slice(7)] = bs.getItem(bt)
                        }
                    }));
                    bj.referrerPolicy = "origin";
                    bj.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bb[bd])));
                    bi.parentNode.insertBefore(bj, bi)
                };
                ["complete", "interactive"].includes(bc.readyState) ? zaraz.init() : bb.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body>
    <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container-contact100">
            <div class="wrap-contact100">
                <form class="contact100-form validate-form">
                    <span class="contact100-form-title">
                        Get in Touch
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <input class="input100" id="name" type="text" name="name" placeholder="Name">
                        <label class="label-input100" for="name">
                            <span class="lnr lnr-user"></span>
                        </label>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" id="email" type="text" name="email" placeholder="Email">
                        <label class="label-input100" for="email">
                            <span class="lnr lnr-envelope"></span>
                        </label>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="subject is required">
                        <input class="input100" id="phone" type="text" name="subject" placeholder="subject">
                        <label class="label-input100" for="phone">
                            <span class="lnr lnr-phone-handset"></span>
                        </label>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Message is required">
                        <textarea class="input100" name="message" placeholder="Your message..." style="height: 206px;"></textarea>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="subject is required">
                        <input type="file" name="files[]" multiple>
                    </div>

                    <div class="container-contact100-form-btn">
                        <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>
                            <button class="contact100-form-btn">
                                Send Email
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <div id="dropDownSelect1"></div>

    <script src="./Contact V7_files/jquery-3.2.1.min.js.transferir"></script>

    <script src="./Contact V7_files/animsition.min.js.transferir"></script>

    <script src="./Contact V7_files/popper.js.transferir"></script>
    <script src="./Contact V7_files/bootstrap.min.js.transferir"></script>

    <script src="./Contact V7_files/select2.min.js.transferir"></script>

    <script src="./Contact V7_files/moment.min.js.transferir"></script>
    <script src="./Contact V7_files/daterangepicker.js.transferir"></script>

    <script src="./Contact V7_files/countdowntime.js.transferir"></script>

    <script src="./Contact V7_files/main.js.transferir"></script>

    <script async="" src="./Contact V7_files/js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer="" src="./Contact V7_files/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon="{&quot;rayId&quot;:&quot;8204f2936f150131&quot;,&quot;version&quot;:&quot;2023.10.0&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;}"
        crossorigin="anonymous"></script>


</body>

</html>
