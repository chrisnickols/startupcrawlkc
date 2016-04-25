<?php
    if (!isset($p)) {
        $p = 'home';
    }

    $active = ' class="active"';
?>
<!doctype html>
<html lang="en-US">
<head>
    <base href="/">

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="description" content="Kansas City Startup Crawl showcases the best startups in the Kansas City meto area. " />
    <meta name="keywords" content="startup crawl, Kansas City, accelerator, incubator, entrepreneur" />

    <title>Startup Crawl KC 2016</title>

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="custom-styles.css" rel="stylesheet">

</head>

<body class="<?php echo $p ?>-page">

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TS65X8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TS65X8');</script>
<!-- End Google Tag Manager -->

<div class="register-banner hide">
    <a href="/register">Don't miss the Crawl. <strong>Register Today!</strong></a>
</div>

<nav class="lighten-1">
    <div class="nav-wrapper container">
        <div class="valign-wrapper">
            <div class="valign">
                <a href="." class="brand-logo">
                    <p>
                        STARTUP CRAWL KC<br>
                        <span class="highlight">MAY 20th, 2016</span>
                    </p>
                </a>
            </div>
        </div>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
        <ul class="right hide-on-med-and-down">
            <li<?php if ($p == 'sponsors') { echo $active; } ?>><a href="sponsors">Sponsors</a></li>
            <li<?php if ($p == 'locations') { echo $active; } ?>><a href="locations">Crawl Locations</a></li>
            <li<?php if ($p == 'startups') { echo $active; } ?>><a href="startups">Startups</a></li>
            <li<?php if ($p == 'blog') { echo $active; } ?>><a href="blog">Blog</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href=".">Home</a></li>
            <li<?php if ($p == 'sponsors') { echo $active; } ?>><a href="sponsors">Sponsors</a></li>
            <li<?php if ($p == 'locations') { echo $active; } ?>><a href="locations">Crawl Locations</a></li>
            <li<?php if ($p == 'startups') { echo $active; } ?>><a href="startups">Startups</a></li>
            <li<?php if ($p == 'blog') { echo $active; } ?>><a href="blog">Blog</a></li>
        </ul>
    </div>
</nav>