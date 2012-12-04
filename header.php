<html>

<head>
    <title>Podcasts App Prototype</title>
    <link rel=stylesheet href="static/style.css" type="text/css" media="screen" />
</head>

<body>

<div id="container">
<div class="mask"></div>
<div id="phone-frame"></div>
<div id="phone-screen">

<div class="header-bar">
    <?php if ($title != "My Mixes") { ?>
    <a class="header-button back-button" onClick="history.go(-1);return false;">Back</a>
    <?php } ?>
    <h1><?php echo $title; ?></h1>
    <a class="header-button now-playing" href="playback.php">Now Playing</a>
</div>
<div id="content-scroller">
<div id="content">