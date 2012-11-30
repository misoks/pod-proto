<html>

<head>
    <title>Podcasts App Prototype</title>
    <link rel=stylesheet href="style.css" type="text/css" media="screen" />
</head>

<body>
<div class="mask"></div>
<div id="container" class="playback">
    <div id="phone-frame"></div>
    <div id="phone-screen">
        <div class="playhead"></div>
        <div class="header-bar">
            <div class="back-button"><a href="index.php" class="header-button">Home</a></div>
            <h3>Now Playing</h3>
            <h1>Comedy Mega-Mix</h1>
        </div>
        <div id="content-scroller">
            <div class="scrollbar"></div> 
            <div id="content">
                
            </div>
        </div>
        <div class="controls">
            <img src="arc.png" class="arc">
            <div class="pp-button play" onclick="
                if(this.className == 'pp-button play') {
                    this.className = 'pp-button pause';
                }
                else if (this.className == 'pp-button pause') {
                    this.className = 'pp-button play';
                }
                ">
            </div>
            <img src="volume.png" class="volume">
        </div>
    </div>
</div>
</body>
</html>