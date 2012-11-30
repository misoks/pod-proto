<?php 
$title = "Create New Mix";
$section = "Mixes";
include_once('header.php'); ?>

<h2>Library</h2>

<table class="library-list" border="1">
    <tr><td><img src="images/icon_tal.jpg" class="small"></td>
    <td>This American Life</td>
    <td><input type="checkbox"></td>
    
    <tr><td><img src="images/icon_rad.jpg" class="small"></td>
    <td>Radiolab</td>
    <td><input type="checkbox"></td>
    
    <tr><td><img src="images/icon_nv.jpg" class="small"></td>
    <td>Welcome to Night Vale</td>
    <td><input type="checkbox"></td>
    
    <tr><td><img src="images/icon_wtf.jpg" class="small"></td>
    <td>WTF with Marc Maron</td>
    <td><input type="checkbox"></td>
    
    <tr><td><img src="images/icon_cbb.jpg" class="small"></td>
    <td>Comedy Bang Bang</td>
    <td><input type="checkbox"></td>
    
    <tr><td><img src="images/icon_bjt.jpg" class="small"></td>
    <td>Bullseye with Jesse Thorn</td>
    <td><input type="checkbox"></td>
</table>

<a class="button big bottom" href="create-summary.php">Continue</a>

<?php include_once('footer.php'); ?>