<?php 
$title = "Create New Mix";
$section = "Mixes";
include_once('header.php'); ?>

<h2>Mix Length</h2>
<div class="scroll-container">
    <div class="scroll-highlighter"></div>
    <div class="scrolling-box hour">
        <ul>
            <li>
            <li>00
            <li>01
            <li>02
            <li>03
            <li>04
            <li>05
            <li>06
            <li>07
            <li>08
            <li>09
            <li>10
            <li>
        </ul>
    </div>
    <div class="scrolling-box minute">
        <ul>
            <li>
            <li>00
            <li>05
            <li>10
            <li>15
            <li>20
            <li>25
            <li>30
            <li>35
            <li>40
            <li>45
            <li>50
            <li>55
            <li>
        </ul>
    </div>
</div>
<p>
    <span class="hours-label">Hours</span><span class="minutes-label">Minutes</span>
</p>

<a class="button big bottom" href="create-type.php">Continue</a>

<?php include_once('footer.php'); ?>