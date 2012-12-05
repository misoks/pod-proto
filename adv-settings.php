<?php 
$title = "Mix Settings";
$section = "Mixes";
include_once('header.php'); ?>

<table border="1" class="settings">
<tr class="on-off off" onclick="
                if(this.className == 'on-off on') {
                    this.className = 'on-off off';
                }
                else if (this.className == 'on-off off') {
                    this.className = 'on-off on';
                }
                "><td>Fill entire time with podcasts</td></tr>
<tr class="details"><td>Even if podcasts cannot be completed within the time limit, they will be included</td></tr>
<tr class="on-off on" onclick="
                if(this.className == 'on-off on') {
                    this.className = 'on-off off';
                }
                else if (this.className == 'on-off off') {
                    this.className = 'on-off on';
                }
                "><td>Fill spare time with songs</td></tr>

<tr class="on-off on" onclick="
                if(this.className == 'on-off on') {
                    this.className = 'on-off off';
                }
                else if (this.className == 'on-off off') {
                    this.className = 'on-off on';
                }
                "><td>Include similar podcasts</td></tr>
<tr class="on-off on" onclick="
                if(this.className == 'on-off on') {
                    this.className = 'on-off off';
                }
                else if (this.className == 'on-off off') {
                    this.className = 'on-off on';
                }
                "><td>Only include unplayed</td></tr>
</table>




<?php include_once('footer.php'); ?>