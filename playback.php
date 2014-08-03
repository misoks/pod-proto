<html>

<head>
    <title>Podcasts App Prototype</title>
    <link rel=stylesheet href="static/style.css" type="text/css" media="screen" />
</head>

<body>
<div class="name-box">Podcasts</div>
<div id="container" class="playback">
<div class="mask"></div>
    <div id="phone-frame"></div>
    <div id="phone-screen">
        <div class="playhead"></div>
        <div class="header-bar">
            <a class="back-button header-button" onClick="history.go(-1);return false;">Back</a>
            <a class="home-button header-button" href="index.php">Home</a>
            <h1>
            <span class="h3">Now Playing</span><br>
            Comedy Bang Bang...</h1>
        </div>
        <div id="content-scroller">
            <div class="scrollbar"></div> 
            <div id="content">
                
            </div>
        </div>
        <div class="controls">
            <img src="static/arc.png" class="arc">
            <div class="pp-button pause" draggable="true" onclick="
                if(this.className == 'pp-button play') {
                    this.className = 'pp-button pause';
                }
                else if (this.className == 'pp-button pause') {
                    this.className = 'pp-button play';
                }
                ">
            </div>
            <img src="static/volume.png" class="volume">
        </div>
    </div>
</div>
</body>
</html>