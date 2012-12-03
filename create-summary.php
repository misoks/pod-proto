<?php 
$title = "Create New Mix";
$section = "Mixes";
include_once('header.php'); ?>

<p>Your new mix will play</p>
<p class="emphasis">2 hours, 15 minutes</p> 
<p>of</p> 
<p class="emphasis">Comedy</p>
<p>podcasts. If the podcasts don't
fill the time exactly, any spare
time will be filled with music from
your library.</p>

<input type="textbox" class="name-mix" value="Name your new mix" onclick="if(this.value == 'Name your new mix') {this.value=''; this.className +=' clicked'}"></input>

<a href="playback.php" class="button create special">Create Mix</a><a href="adv-settings.php" class="button little">Settings</a>

<?php include_once('footer.php'); ?>