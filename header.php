<html>

<head>
    <title>Podcasts App Prototype</title>
    <link rel=stylesheet href="style.css" type="text/css" media="screen" />
</head>

<body>

<div class="mask"></div>
<div id="container">
<div id="phone-frame"></div>
<div id="phone-screen">

<div class="header-bar">
    <?php if ($title != "My Mixes") { ?>
    <form class="back-button"><input class="header-button" type="button" value="Back" onClick="history.go(-1);return true;"></form>
    <?php } ?>
    <h1><?php echo $title; ?></h1>
    <div class="now-playing header-button"><a href="playback.php">Now Playing</a></div>
</div>
<div id="content-scroller">
<div id="content">