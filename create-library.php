<?php 
$title = "Create New Mix";
$section = "Mixes";
include_once('header.php'); ?>

<h2>Library</h2>

<table class="library-list" border="1">
    <tr class="unselected" onclick="
                if(this.className == 'unselected') {
                    this.className = 'selected';
                }
                else if (this.className == 'selected') {
                    this.className = 'unselected';
                }
    "><td><img src="static/icon_tal.jpg" class="small"></td>
    <td>This American Life</td>

    
    <tr class="unselected" onclick="
                if(this.className == 'unselected') {
                    this.className = 'selected';
                }
                else if (this.className == 'selected') {
                    this.className = 'unselected';
                }
    "><td><img src="static/icon_rad.jpg" class="small"></td>
    <td>Radiolab</td>
    
    <tr class="unselected" onclick="
                if(this.className == 'unselected') {
                    this.className = 'selected';
                }
                else if (this.className == 'selected') {
                    this.className = 'unselected';
                }
    "><td><img src="static/icon_nv.jpg" class="small"></td>
    <td>Welcome to Night Vale</td>

    
    <tr class="unselected" onclick="
                if(this.className == 'unselected') {
                    this.className = 'selected';
                }
                else if (this.className == 'selected') {
                    this.className = 'unselected';
                }
    "><td><img src="static/icon_wtf.jpg" class="small"></td>
    <td>WTF with Marc Maron</td>

    
    <tr class="unselected" onclick="
                if(this.className == 'unselected') {
                    this.className = 'selected';
                }
                else if (this.className == 'selected') {
                    this.className = 'unselected';
                }
    "><td><img src="static/icon_cbb.jpg" class="small"></td>
    <td>Comedy Bang Bang</td>

    
    <tr class="unselected" onclick="
                if(this.className == 'unselected') {
                    this.className = 'selected';
                }
                else if (this.className == 'selected') {
                    this.className = 'unselected';
                }
    "><td><img src="static/icon_bjt.jpg" class="small"></td>
    <td>Bullseye with Jesse Thorn</td>

</table>

<a class="button big bottom" href="create-summary.php">Continue</a>

<?php include_once('footer.php'); ?>