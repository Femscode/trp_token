<!doctype html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>TRP | Home</title>
    <meta name='robots' content='max-image-preview:large' />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="alternate" type="application/rss+xml" title="IKO &raquo; Feed" href="feed//" />
    <link rel="alternate" type="application/rss+xml" title="IKO &raquo; Comments Feed" href="comments/feed//" />
    <script src="https://cdn.jsdelivr.net/npm/web3@1.7.0/dist/web3.min.js"></script>
    <script src="{{url('assets/js/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/iko.themegenix.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.2"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-family--inter: "Inter", sans-serif;
            --wp--preset--font-family--cardo: Cardo;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/stylese2db.css?ver=5.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css' href='wp-content/plugins/woocommerce/assets/css/woocommerce-layoutc60b.css?ver=9.3.3' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css' href='wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreenc60b.css?ver=9.3.3' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css' href='wp-content/plugins/woocommerce/assets/css/woocommercec60b.css?ver=9.3.3' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='slick-css' href='wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick109c.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='perfect-scrollbar-css' href='wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/css/perfect-scrollbar.min109c.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='perfect-scrollbar-wpc-css' href='wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/css/custom-theme109c.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css' href='wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/magnific-popup109c.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='woosq-feather-css' href='wp-content/plugins/woo-smart-quick-view/assets/libs/feather/feather109c.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='woosq-frontend-css' href='wp-content/plugins/woo-smart-quick-view/assets/css/frontenda352.css?ver=4.1.3' type='text/css' media='all' />
    <link rel='stylesheet' id='woosw-icons-css' href='wp-content/plugins/woo-smart-wishlist/assets/css/iconscbf4.css?ver=4.9.4' type='text/css' media='all' />
    <link rel='stylesheet' id='woosw-frontend-css' href='wp-content/plugins/woo-smart-wishlist/assets/css/frontendcbf4.css?ver=4.9.4' type='text/css' media='all' />
    <style id='woosw-frontend-inline-css' type='text/css'>
        .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-notice {
            background-color: #5fbd74;
        }

        .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-popup-content-bot-inner a:hover {
            color: #5fbd74;
            border-color: #5fbd74;
        }
    </style>
    <link rel='stylesheet' id='iko-custom-css' href='wp-content/themes/iko/assets/css/iko-custom109c.css?ver=6.6.2' type='text/css' media='all' />
    <style id='iko-custom-inline-css' type='text/css'>
        html:root {
            --tg-primary-color: #ebab21
        }

        html:root {
            --unit-primary-color: #ebab21
        }

        html:root {
            --tg-theme-color2: #5729D6
        }

        html:root {
            --tg-secondary-color: #0F101E
        }

        html:root {
            --unit-secondary-color: #0F101E
        }

        html:root {
            --tg-green: #010314
        }

        html:root {
            --tg-black: #010314
        }
    </style>
    <link rel='stylesheet' id='xotric-fonts-css' href='wp-content/themes/iko/assets/css/iko-fonts109c.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='wp-content/themes/iko/assets/css/bootstrap.min109c.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='iko-animate-css' href='wp-content/themes/iko/assets/css/animate.min109c.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-free-css' href='wp-content/themes/iko/assets/css/fontawesome-all.min109c.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='iko-default-css' href='wp-content/themes/iko/assets/css/default109c.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='iko-core-css' href='wp-content/themes/iko/assets/css/iko-core109c.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='iko-unit-css' href='wp-content/themes/iko/assets/css/iko-unit109c.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='iko-woo-css' href='wp-content/themes/iko/assets/css/iko-woo109c.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='iko-style-css' href='wp-content/themes/iko/style109c.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='iko-responsive-css' href='wp-content/themes/iko/assets/css/responsive109c.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min0fd8.css?ver=5.31.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='wp-content/uploads/elementor/css/custom-frontend.min517d.css?ver=1729978315' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css' href='wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' type='text/css' media='all' />
    <link rel='stylesheet' id='e-swiper-css' href='wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min52dd.css?ver=3.24.7' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-6-css' href='wp-content/uploads/elementor/css/post-6517d.css?ver=1729978315' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-global-css' href='wp-content/uploads/elementor/css/global517d.css?ver=1729978315' type='text/css' media='all' />
    <link rel='stylesheet' id='widget-heading-css' href='wp-content/plugins/elementor/assets/css/widget-heading.min52dd.css?ver=3.24.7' type='text/css' media='all' />
    <link rel='stylesheet' id='widget-image-css' href='wp-content/plugins/elementor/assets/css/widget-image.min52dd.css?ver=3.24.7' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-144-css' href='wp-content/uploads/elementor/css/post-1448bf8.css?ver=1729978316' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPlus+Jakarta+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COutfit%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-tg-flat-icons-css' href='wp-content/plugins/iko-core/assets/css/flaticon8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="text/template" id="tmpl-variation-template">

    </script>
    <script type="text/template" id="tmpl-unavailable-variation-template">
        <p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
    <script type="text/javascript" src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.mina7df.js?ver=2.7.0-wc.9.3.3" id="jquery-blockui-js" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/iko.themegenix.net\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.minc60b.js?ver=9.3.3" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.mine91a.js?ver=2.1.4-wc.9.3.3" id="js-cookie-js" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minc60b.js?ver=9.3.3" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="wp-includes/js/underscore.mind584.js?ver=1.13.4" id="underscore-js"></script>
    <script type="text/javascript" id="wp-util-js-extra">
        /* <![CDATA[ */
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="wp-includes/js/wp-util.min109c.js?ver=6.6.2" id="wp-util-js"></script>
    <link rel="https://api.w.org/" href="wp-json//" />
    <link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/144.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <meta name="generator" content="WordPress 6.6.2" />
    <meta name="generator" content="WooCommerce 9.3.3" />
    <link rel="canonical" href="/" />
    <link rel='shortlink' href='/' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="wp-json/oembed/1.0/embed91f9.json?url=https%3A%2F%2Fiko.themegenix.net%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="wp-json/oembed/1.0/embedb4ca?url=https%3A%2F%2Fiko.themegenix.net%2F&amp;format=xml" />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator" content="Elementor 3.24.7; features: additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
    <style id='wp-fonts-local' type='text/css'>
        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 300 900;
            font-display: fallback;
            src: url('wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt%2cwght.woff2') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
        }
    </style>
    <link rel="icon" href="/assets/images/trp.png" sizes="32x32" />
    <link rel="icon" href="/assets/images/trp.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="/assets/images/trp.png" />
    <meta name="msapplication-TileImage" content="/assets/images/trp.png" />
    <style id="kirki-inline-styles"></style>
</head>

<body class="home page-template page-template-elementor_header_footer page page-id-144 wp-embed-responsive theme-iko woocommerce-no-js no-sidebar elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-144">





    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner">
            <img src="/assets/images/trp.png" alt="TRP" style='width:70px'>
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
    <!-- Preloader -->


    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->


    <div data-elementor-type="wp-post" data-elementor-id="121" class="elementor elementor-121">
        <div class="elementor-element elementor-element-aa37635 e-con-full e-flex e-con e-parent" data-id="aa37635" data-element_type="container">
            <div class="elementor-element elementor-element-8e54fb7 elementor-widget elementor-widget-tg-header" data-id="8e54fb7" data-element_type="widget" data-widget_type="tg-header.default">
                <div class="elementor-widget-container">



                    <header id="header" class="header-layout1">
                        <div id="sticky-header" class="menu-area transparent-header">
                            <div class="container custom-container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="menu-wrap">
                                            <nav class="menu-nav">
                                                <div class="logo">
                                                    <a href="/">
                                                        <img src="/assets/images/trp.png" alt="TRP" style='width:70px'>
                                                    </a>
                                                </div>
                                                <div class="navbar-wrap main-menu m-auto d-none d-lg-flex">
                                                    <ul id="menu-1-8e54fb7" class="navigation">
                                                        <li id="menu-item-865" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-144 current_page_item menu-item-865"><a href="/" aria-current="page">Home</a></li>
                                                        <li id="menu-item-867" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-867"><a href="#whitepaper" aria-current="page">WhitePaper</a></li>

                                                        <li id="menu-item-872" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-872"><a href="mailto:support@trpdigital.com">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="header-action">
                                                    <ul class="list-wrap">
                                                        <li class="header-login">
                                                            <a class="btn1 btn btn-dark" target='_blank' href="https://raydium.io/swap/?inputMint=sol&outputMint=3xrGhsbQhoTG6pL23zr2ogpMuEZjHGDuMD1tAQ8mbf1W">Buy TRP</a>
                                                        </li>

                                                        <li class="header-login">
                                                            <a class="btn2" target='_blank' href="#">Stake Token</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>

                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fas fa-times"></i></div>
                            <div class="nav-logo mobile-logo">
                                <a href="/">
                                    <img src="/assets/images/trp.png" width='50px' alt="trp">
                                </a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix list-wrap">
                                   
                                    <li>
                                        <a href="https://x.com/trumpcointoken" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M9.52219 6.77491L15.4786 0H14.0671L8.89518 5.88256L4.76438 0H0L6.24657 8.89547L0 16H1.41155L6.87322 9.78779L11.2356 16H16L9.52219 6.77491ZM7.58888 8.97384L6.95597 8.08805L1.92015 1.03974H4.08821L8.15218 6.72796L8.78508 7.61374L14.0677 15.0076H11.8997L7.58888 8.97384Z" fill="currentColor"></path>
                                            </svg> </a>
                                    </li>
                                  
                                    <li>
                                        <a href="https://t.me/TRP_Community" target="_blank">
                                            <i aria-hidden="true" class="fab fa-telegram-plane"></i> </a>
                                    </li>
                                    <li>
                                        <a href="https://discord.com/invite/ksrWcrUaqV" target="_blank">
                                            <i aria-hidden="true" class="fab fa-discord"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>

                </div>
            </div>
        </div>
    </div>


    <!-- main-area -->
    <main class="main-area">

        <div data-elementor-type="wp-page" data-elementor-id="144" class="elementor elementor-144">
            <div class="elementor-element elementor-element-0c23b95 e-con-full e-flex e-con e-parent" data-id="0c23b95" data-element_type="container">
                <div class="elementor-element elementor-element-72a2b97 elementor-widget elementor-widget-html" data-id="72a2b97" data-element_type="widget" data-widget_type="html.default">
                    <div class="elementor-widget-container">
                        <div class="hero-bg-gradient">
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-9953db4 elementor-widget elementor-widget-html" data-id="9953db4" data-element_type="widget" data-widget_type="html.default">
                    <div class="elementor-widget-container">
                        <div class="ripple-shape">
                            <span class="ripple-1"></span>
                            <span class="ripple-2"></span>
                            <span class="ripple-3"></span>
                            <span class="ripple-4"></span>
                            <span class="ripple-5"></span>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-3d0811c e-flex e-con-boxed e-con e-child" data-id="3d0811c" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-6d06e52 e-con-full e-flex e-con e-child" data-id="6d06e52" data-element_type="container">
                            <div class="elementor-element elementor-element-3d7800e elementor-widget elementor-widget-heading" data-id="3d7800e" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    @if(isset($connected_address))

                                    <h3 class="elementor-heading-title elementor-size-default">Wallet Already Connected!</h3>
                                    @else
                                    <h3 class="elementor-heading-title elementor-size-default">Connect Your Wallet!</h3>

                                    @endif
                                    <!-- <p>Discover TRP, a revolutionary digital asset designed to simplify, secure, and enhance global transactions. Built on cutting-edge blockchain technology, TRP offers faster, more reliable transactions, reduced fees, and scalability that can support your financial needs today and in the future. Join us in shaping the future of decentralized finance.</p> -->
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3c4530f e-con-full e-flex e-con e-child" data-id="3c4530f" data-element_type="container">
                                <div class="elementor-element elementor-element-25c5cc6 elementor-widget elementor-widget-tg-btn" data-id="25c5cc6" data-element_type="widget" data-widget_type="tg-btn.default">
                                    <div class="elementor-widget-container">


                                        <div class="text-center">
                                            @if(isset($connected_address))

                                            <div class="alert alert-warning">
                                                Wallet Address: {{ substr($connected_address, 0, 4) . '...' . substr($connected_address, -4) }}
                                            </div>

                                            @else
                                            <button id="connectWalletButton" class="btn btn2 show-arrow">Connect Wallet</button>
                                            @endif
                                            <button id="disconnectWalletButton" class="btn btn-danger d-none">Disconnect Wallet</button>
                                            <p id="walletAddress" class="mt-3 text-white"></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="elementor-element elementor-element-ce736bd e-con-full e-flex e-con e-child" data-id="ce736bd" data-element_type="container">
                            <div class="elementor-element elementor-element-ef75eed alltuchtopdown elementor-widget elementor-widget-image" data-id="ef75eed" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img fetchpriority="high" decoding="async" width="400" height="398" src="assets/images/trp.png" class="attachment-full size-full wp-image-179" alt="" srcset="assets/images/trp.png 400w, assets/images/trp.png 300w, assets/images/trp.png 150w" sizes="(max-width: 400px) 100vw, 400px" />
                                    <!-- <img fetchpriority="high" decoding="async" width="400" height="398" src="wp-content/uploads/2024/03/roket.png" class="attachment-full size-full wp-image-179" alt="" srcset="https://iko.themegenix.net/wp-content/uploads/2024/03/roket.png 400w, https://iko.themegenix.net/wp-content/uploads/2024/03/roket-300x300.png 300w, https://iko.themegenix.net/wp-content/uploads/2024/03/roket-150x150.png 150w" sizes="(max-width: 400px) 100vw, 400px" /> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-be3031f e-flex e-con-boxed e-con e-child" data-id="be3031f" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-b387ef4 e-con-full e-flex e-con e-child" data-id="b387ef4" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-element elementor-element-0e0a34b elementor-widget elementor-widget-heading" data-id="0e0a34b" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">ICO will start in..</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-9fde14e elementor-widget elementor-widget-tg-progressbar" data-id="9fde14e" data-element_type="widget" data-widget_type="tg-progressbar.default">
                                <div class="elementor-widget-container">

                                    <div class="hero-countdown-wrap">
                                        <ul class="skill-feature_list mt-0">
                                            <li><span>Onboarding</span></li>
                                            <li><span>Pre sale</span></li>
                                            <li>
                                                <h4>ICO</h4>
                                            </li>
                                        </ul>
                                        <div class="skill-feature">
                                            <div class="progress">
                                                <div class="progress-bar"></div>
                                            </div>
                                            <div class="progress-value-max">Two(2) Billion TRP</div>
                                        </div>
                                        <!-- <ul class="skill-feature_list style2 mb-0">
                                            <li></li>
                                            <li></li>
                                            <li>Ten(10) Billion TRP</li>
                                        </ul> -->
                                    </div>

                                </div>
                            </div>
                            <div class="elementor-element elementor-element-46ba6cd elementor-widget elementor-widget-banner-countdown" data-id="46ba6cd" data-element_type="widget" data-widget_type="banner-countdown.default">
                                <div class="elementor-widget-container">

                                    <script>
                                        jQuery(document).ready(function($) {

                                            /*===========================================
                                                =           Countdown Active      =
                                            =============================================*/
                                            $('[data-countdown]').each(function() {
                                                var $this = $(this),
                                                    finalDate = $(this).data('countdown');
                                                $this.countdown(finalDate, function(event) {
                                                    $this.html(event.strftime('<div class="time-count day"><span>%D</span>Days</div><div class="time-count hour"><span>%H</span>Hours</div><div class="time-count min"><span>%M</span>Minute</div><div class="time-count sec"><span>%S</span>Second</div>'));
                                                });
                                            });

                                        });
                                    </script>


                                    <div class="banner-countdown-wrap">
                                        <div class="coming-time" data-countdown="2025/02/29 12:34:56"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </main>
    <!-- main-area-end -->

    <div id='faq' data-elementor-type="wp-post" data-elementor-id="539" class="elementor elementor-539">
        <div class="elementor-element elementor-element-c71504e e-con-full e-flex e-con e-parent" data-id="c71504e" data-element_type="container">
            <div class="elementor-element elementor-element-bf386d7 e-flex e-con-boxed e-con e-child" data-id="bf386d7" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-e0c9e93 e-con-full e-flex e-con e-child" data-id="e0c9e93" data-element_type="container">
                        <div class="elementor-element elementor-element-a2e6693 elementor-widget elementor-widget-heading" data-id="a2e6693" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Frequently Asked Questions</h2>
                            </div>
                        </div>

                        <div class="elementor-element elementor-element-9f66f03 elementor-widget elementor-widget-image" data-id="9f66f03" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img width="441" height="435" src="wp-content/uploads/2024/04/faq.png" class="attachment-full size-full wp-image-541" alt="" srcset="https://iko.themegenix.net/wp-content/uploads/2024/04/faq.png 441w, https://iko.themegenix.net/wp-content/uploads/2024/04/faq-300x296.png 300w" sizes="(max-width: 441px) 100vw, 441px" />
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-13b070a e-con-full e-flex e-con e-child" data-id="13b070a" data-element_type="container">
                        <div class="elementor-element elementor-element-1f3b63e elementor-widget elementor-widget-genix-faq" data-id="1f3b63e" data-element_type="widget" data-widget_type="genix-faq.default">
                            <div class="elementor-widget-container">



                                <div class="accordion-area accordion" id="faqAccordion">

                                    <div class="accordion-card active">
                                        <h2 class="accordion-header" id="headingOne-0">
                                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-0" aria-expanded="true" aria-controls="collapseOne-0">
                                                <span class="number">1</span> What is TRP? </button>
                                        </h2>
                                        <div id="collapseOne-0" class="accordion-collapse collapse show" aria-labelledby="headingOne-0" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>TRP is a decentralized digital asset designed for fast, low-cost transactions, offering greater accessibility and ease of use for people around the world.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-card ">
                                        <h2 class="accordion-header" id="headingOne-1">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne-1">
                                                <span class="number">2</span> How can I participate in the ICO? </button>
                                        </h2>
                                        <div id="collapseOne-1" class="accordion-collapse collapse " aria-labelledby="headingOne-1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Simply register, deposit funds, and buy TRP tokens on our ICO platform during the ICO period.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-card ">
                                        <h2 class="accordion-header" id="headingOne-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">
                                                <span class="number">3</span> Is TRP secure? </button>
                                        </h2>
                                        <div id="collapseOne-2" class="accordion-collapse collapse " aria-labelledby="headingOne-2" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes, TRP uses advanced encryption and blockchain technology to ensure the security and transparency of every transaction.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-card ">
                                        <h2 class="accordion-header" id="headingOne-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-3" aria-expanded="true" aria-controls="collapseOne-3">
                                                <span class="number">4</span> What wallets support TRP? </button>
                                        </h2>
                                        <div id="collapseOne-3" class="accordion-collapse collapse " aria-labelledby="headingOne-3" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>TRP can be stored in any compatible digital wallet that supports.</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-52de041 e-flex e-con-boxed e-con e-child" data-id="52de041" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-69ab5a8 e-con-full e-flex e-con e-child" data-id="69ab5a8" data-element_type="container">
                        <div class="elementor-element elementor-element-5b03894 elementor-widget elementor-widget-iconlist" data-id="5b03894" data-element_type="widget" data-widget_type="iconlist.default">
                            <div class="elementor-widget-container">

                                <div class="social-btn justify-content-center justify-content-lg-start">
                                    <!-- <a href="#">
                                        <i aria-hidden="true" class="fab fa-telegram"></i> </a> -->
                                    <a href="https://x.com/trumpcointoken ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M9.52219 6.77491L15.4786 0H14.0671L8.89518 5.88256L4.76438 0H0L6.24657 8.89547L0 16H1.41155L6.87322 9.78779L11.2356 16H16L9.52219 6.77491ZM7.58888 8.97384L6.95597 8.08805L1.92015 1.03974H4.08821L8.15218 6.72796L8.78508 7.61374L14.0677 15.0076H11.8997L7.58888 8.97384Z" fill="currentColor"></path>
                                        </svg> </a>
                                    <a href="https://t.me/TRP_Community">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.297 1.705a1.432 1.432 0 0 0-1.607-.292L1.665 10.299a1.432 1.432 0 0 0 .108 2.66l4.738 1.24 2.055 6.782a1.432 1.432 0 0 0 2.312.632l3.104-3.004 4.657 3.376a1.432 1.432 0 0 0 2.265-.81L23.83 3.167a1.432 1.432 0 0 0-.533-1.462zm-6.59 15.469-3.923-2.844a.72.72 0 0 0-.933.05l-2.59 2.507-.919-3.034 7.04-5.586c.365-.29-.04-.727-.404-.512l-8.23 4.927-3.868-1.012 16.2-7.229-4.373 13.733z" fill="#0088CC" />
                                        </svg>

                                    </a>


                                    <a href="https://discord.gg/ksrWcrUaqV">
                                        <i aria-hidden="true" class="fab fa-discord"></i> </a>
                                    <!-- <a href="#">
                                        <i aria-hidden="true" class="fab fa-linkedin-in"></i> </a> -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-d87db7d e-con-full e-flex e-con e-child" data-id="d87db7d" data-element_type="container">
                        <div class="elementor-element elementor-element-864a6b2 elementor-icon-list--layout-inline elementor-align-right elementor-tablet-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="864a6b2" data-element_type="widget" data-widget_type="icon-list.default">
                            <div class="elementor-widget-container">
                                <ul class="elementor-icon-list-items elementor-inline-items">
                                    <li class="elementor-icon-list-item elementor-inline-item">
                                        <a href="#">

                                            <span class="elementor-icon-list-text">HOME</span>
                                        </a>
                                    </li>
                                    <li class="elementor-icon-list-item elementor-inline-item">
                                        <a href="#">

                                            <span class="elementor-icon-list-text">OUR PROJECTS</span>
                                        </a>
                                    </li>

                                    <li class="elementor-icon-list-item elementor-inline-item">
                                        <a href="#faq">

                                            <span class="elementor-icon-list-text">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="elementor-icon-list-item elementor-inline-item">
                                        <a href="/downloadWhitepaper">

                                            <span class="elementor-icon-list-text">DOWNLOAD WHITEPAPER</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-454e661 e-flex e-con-boxed e-con e-child" data-id="454e661" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-6198e6d e-con-full e-flex e-con e-child" data-id="6198e6d" data-element_type="container">
                        <div class="elementor-element elementor-element-ababd61 e-con-full e-flex e-con e-child" data-id="ababd61" data-element_type="container">
                            <div class="elementor-element elementor-element-b444d9a elementor-widget elementor-widget-heading" data-id="b444d9a" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">Copyright © <?php echo Date('Y'); ?> TRPtoken.net. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-5597aaa e-con-full e-flex e-con e-child" data-id="5597aaa" data-element_type="container">
                            <div class="elementor-element elementor-element-8b9300e elementor-icon-list--layout-inline elementor-align-right elementor-tablet-align-center elementor-hidden-mobile elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="8b9300e" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items elementor-inline-items">

                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <a href="#">

                                                <span class="elementor-icon-list-text">Terms and Condition</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <a href="mailto:support@trptoken.net">

                                                <span class="elementor-icon-list-text">Help Center</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-6613275 elementor-absolute right-0 elementor-widget elementor-widget-tg-gradient" data-id="6613275" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="tg-gradient.default">
                <div class="elementor-widget-container">


                    <div class="tg-bg-gradient bg-gradient-1">
                        <img src="wp-content/uploads/2024/04/bg-gradient1.png" alt="Background">
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div id="woosw_wishlist" class="woosw-popup woosw-popup-center"></div>
    <script type='text/javascript'>
        jQuery(function($) {
            if (!String.prototype.getDecimals) {
                String.prototype.getDecimals = function() {
                    var num = this,
                        match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                    if (!match) {
                        return 0;
                    }
                    return Math.max(0, (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0));
                }
            }
            // Quantity "plus" and "minus" buttons
            $(document.body).on('click', '.plus, .minus', function() {
                var $qty = $(this).closest('.quantity').find('.qty'),
                    currentVal = parseFloat($qty.val()),
                    max = parseFloat($qty.attr('max')),
                    min = parseFloat($qty.attr('min')),
                    step = $qty.attr('step');

                // Format values
                if (!currentVal || currentVal === '' || currentVal === 'NaN') currentVal = 0;
                if (max === '' || max === 'NaN') max = '';
                if (min === '' || min === 'NaN') min = 0;
                if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN') step = 1;

                // Change the value
                if ($(this).is('.plus')) {
                    if (max && (currentVal >= max)) {
                        $qty.val(max);
                    } else {
                        $qty.val((currentVal + parseFloat(step)).toFixed(step.getDecimals()));
                    }
                } else {
                    if (min && (currentVal <= min)) {
                        $qty.val(min);
                    } else if (currentVal > 0) {
                        $qty.val((currentVal - parseFloat(step)).toFixed(step.getDecimals()));
                    }
                }

                // Trigger change event
                $qty.trigger('change');
            });
        });
    </script>

    <script type='text/javascript'>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <script type='text/javascript'>
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <link rel='stylesheet' id='wc-blocks-style-css' href='wp-content/plugins/woocommerce/assets/client/blocks/wc-blockse2cc.css?ver=wc-9.3.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-121-css' href='wp-content/uploads/elementor/css/post-1218bf8.css?ver=1729978316' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-539-css' href='wp-content/uploads/elementor/css/post-5398bf8.css?ver=1729978316' type='text/css' media='all' />
    <link rel='stylesheet' id='widget-icon-list-css' href='wp-content/uploads/elementor/css/custom-widget-icon-list.min517d.css?ver=1729978315' type='text/css' media='all' />
    <script type="text/javascript" src="wp-includes/js/dist/hooks.min2757.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
    <script type="text/javascript" src="wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */
    </script>
    <script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/swv/js/indexe2db.js?ver=5.9.8" id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/iko.themegenix.net\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/js/indexe2db.js?ver=5.9.8" id="contact-form-7-js"></script>
    <script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_variation_params = {
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
            "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
            "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.minc60b.js?ver=9.3.3" id="wc-add-to-cart-variation-js" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick.mina352.js?ver=4.1.3" id="slick-js"></script>
    <script type="text/javascript" src="wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/js/perfect-scrollbar.jquery.mina352.js?ver=4.1.3" id="perfect-scrollbar-js"></script>
    <script type="text/javascript" src="wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/jquery.magnific-popup.mina352.js?ver=4.1.3" id="magnific-popup-js"></script>
    <script type="text/javascript" id="woosq-frontend-js-extra">
        /* <![CDATA[ */
        var woosq_vars = {
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "nonce": "f2a3b3ecb7",
            "view": "popup",
            "effect": "mfp-3d-unfold",
            "scrollbar": "yes",
            "auto_close": "yes",
            "hashchange": "no",
            "cart_redirect": "no",
            "cart_url": "https:\/\/iko.themegenix.net\/cart\/",
            "close": "Close (Esc)",
            "next_prev": "yes",
            "next": "Next (Right arrow key)",
            "prev": "Previous (Left arrow key)",
            "thumbnails_effect": "no",
            "related_slick_params": "{\"slidesToShow\":2,\"slidesToScroll\":2,\"dots\":true,\"arrows\":false,\"adaptiveHeight\":true,\"rtl\":false}",
            "thumbnails_slick_params": "{\"slidesToShow\":1,\"slidesToScroll\":1,\"dots\":true,\"arrows\":true,\"adaptiveHeight\":false,\"rtl\":false}",
            "thumbnails_zoom_params": "{\"duration\":120,\"magnify\":1}",
            "quick_view": "0"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="wp-content/plugins/woo-smart-quick-view/assets/js/frontenda352.js?ver=4.1.3" id="woosq-frontend-js"></script>
    <script type="text/javascript" id="woosw-frontend-js-extra">
        /* <![CDATA[ */
        var woosw_vars = {
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "nonce": "7efd0341cc",
            "page_myaccount": "yes",
            "menu_action": "open_page",
            "reload_count": "no",
            "perfect_scrollbar": "yes",
            "wishlist_url": "https:\/\/iko.themegenix.net\/wishlist\/",
            "button_action": "list",
            "message_position": "right-top",
            "button_action_added": "popup",
            "empty_confirm": "This action cannot be undone. Are you sure?",
            "delete_confirm": "This action cannot be undone. Are you sure?",
            "copied_text": "Copied the wishlist link:",
            "menu_text": "Wishlist",
            "button_text": "Add to wishlist",
            "button_text_added": "Browse wishlist",
            "button_normal_icon": "woosw-icon-5",
            "button_added_icon": "woosw-icon-8",
            "button_loading_icon": "woosw-icon-4"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="wp-content/plugins/woo-smart-wishlist/assets/js/frontendcbf4.js?ver=4.9.4" id="woosw-frontend-js"></script>
    <script type="text/javascript" src="wp-content/themes/iko/assets/js/bootstrap.min109c.js?ver=6.6.2" id="bootstrap-bundle-js"></script>
    <script type="text/javascript" src="wp-content/themes/iko/assets/js/jquery.countdown.min109c.js?ver=6.6.2" id="countdown-js"></script>
    <script type="text/javascript" src="wp-content/themes/iko/assets/js/jquery.easing109c.js?ver=6.6.2" id="easing-js"></script>
    <script type="text/javascript" src="wp-content/themes/iko/assets/js/main109c.js?ver=6.6.2" id="iko-main-js"></script>
    <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.minc60b.js?ver=9.3.3" id="sourcebuster-js-js"></script>
    <script type="text/javascript" id="wc-order-attribution-js-extra">
        /* <![CDATA[ */
        var wc_order_attribution = {
            "params": {
                "lifetime": 1.0e-5,
                "session": 30,
                "base64": false,
                "ajaxurl": "https:\/\/iko.themegenix.net\/wp-admin\/admin-ajax.php",
                "prefix": "wc_order_attribution_",
                "allowTracking": true
            },
            "fields": {
                "source_type": "current.typ",
                "referrer": "current_add.rf",
                "utm_campaign": "current.cmp",
                "utm_source": "current.src",
                "utm_medium": "current.mdm",
                "utm_content": "current.cnt",
                "utm_id": "current.id",
                "utm_term": "current.trm",
                "utm_source_platform": "current.plt",
                "utm_creative_format": "current.fmt",
                "utm_marketing_tactic": "current.tct",
                "session_entry": "current_add.ep",
                "session_start_time": "current_add.fd",
                "session_pages": "session.pgs",
                "session_count": "udata.vst",
                "user_agent": "udata.uag"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.minc60b.js?ver=9.3.3" id="wc-order-attribution-js"></script>
    <script type="text/javascript" src="wp-content/plugins/iko-core/assets/js/hello-world109c.js?ver=6.6.2" id="genixcore-js"></script>
    <script type="text/javascript" src="wp-content/plugins/elementor/assets/js/webpack.runtime.min52dd.js?ver=3.24.7" id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend-modules.min52dd.js?ver=3.24.7" id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3" id="jquery-ui-core-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                },
                "hasCustomBreakpoints": true
            },
            "version": "3.24.7",
            "is_static": false,
            "experimentalFeatures": {
                "additional_custom_breakpoints": true,
                "container": true,
                "container_grid": true,
                "e_swiper_latest": true,
                "e_nested_atomic_repeaters": true,
                "e_onboarding": true,
                "home_screen": true,
                "ai-layout": true,
                "landing-pages": true,
                "link-in-bio": true,
                "floating-buttons": true
            },
            "urls": {
                "assets": "https:\/\/iko.themegenix.net\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/iko.themegenix.net\/wp-admin\/admin-ajax.php",
                "uploadUrl": "https:\/\/iko.themegenix.net\/wp-content\/uploads"
            },
            "nonces": {
                "floatingButtonsClickTracking": "f6843ea36e"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet", "viewport_laptop"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 144,
                "title": "IKO%20%E2%80%93%20ICO%20%26%20Crypto%20Landing%20WordPress%20Theme",
                "excerpt": "",
                "featuredImage": false
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend.min52dd.js?ver=3.24.7" id="elementor-frontend-js"></script>

    <script>
        $(document).ready(function() {
            const walletAddressElement = $('#walletAddress');
            const connectWalletButton = $('#connectWalletButton');
            const disconnectWalletButton = $('#disconnectWalletButton');
            const walletTypeSelect = $('#walletType');

            // Set up CSRF token for all AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            if (typeof window.ethereum !== 'undefined') {
                connectWalletButton.on('click', async function() {
                    const selectedWalletType = walletTypeSelect.val(); // Get selected wallet type

                    try {
                        const accounts = await ethereum.request({
                            method: 'eth_requestAccounts'
                        });
                        const account = accounts[0];

                        walletAddressElement.text("Connected Wallet: " + account);
                        connectWalletButton.addClass('d-none');
                        disconnectWalletButton.removeClass('d-none');

                        // Send POST request to connect_wallet route with wallet type and address
                        $.post("connect_wallet_address", {
                                type: selectedWalletType,
                                address: account
                            })
                            .done(function(response) {
                                Swal.fire('Wallet Connected', 'Wallet Connected Successfully', 'success')
                                location.reload();
                                // console.log("Wallet connected successfully:", response);
                            })
                            .fail(function(jqXHR, textStatus, errorThrown) {
                                Swal.fire('Wallet Not Connected', 'Try again later!', 'error')
                                // console.error("Failed to connect wallet:", textStatus, errorThrown);
                            });

                    } catch (error) {
                        console.error("User denied wallet connection", error);
                    }
                });

                disconnectWalletButton.on('click', function() {
                    walletAddressElement.text("");
                    connectWalletButton.removeClass('d-none');
                    disconnectWalletButton.addClass('d-none');
                });
            } else {
                alert("Please install MetaMask or another Ethereum wallet provider to use this feature.");
            }
        });
    </script>
</body>

<!-- Mirrored from iko.themegenix.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Nov 2024 11:35:51 GMT -->

</html>


<!-- Page cached by LiteSpeed Cache 6.5.2 on 2024-11-11 22:41:17 -->