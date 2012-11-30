<?php 
$title = "Create New Mix";
$section = "Mixes";
include_once('header.php'); ?>

<p>Play podcasts like:</p>

<a href="create-library.php" class="button big">Select from Library</a>

<p>Or choose by category:</p>

<div class="scroll-container">
<div class="scroll-highlighter"></div>
<div class="scrolling-box">
    
    <ul>
        <li>
        <li>Arts
        <li>Business
        <li>Comedy
        <li>Education
        <li>Games
        <li>Music
        <li>News
        <li>Technology
        <li>
    </ul>
</div>
</div>

<a class="button big bottom" href="create-summary.php">Continue</a>

<?php include_once('footer.php'); ?>