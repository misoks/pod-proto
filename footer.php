<?php
function navLink($url, $linktext, $section) {
    $textlower = strtolower($linktext);
    if ($linktext == $section) {
        return '<li><a class="selected '.$textlower.'"><img class="footer-icon" src="static/'.$textlower.'.png">'.$linktext.'</a>';
    }
    else {
        return '<li><a href="'.$url.'" class="'.$textlower.'"><img class="footer-icon" src="static/'.$textlower.'.png">'.$linktext.'</a>';
    }
}
?>
</div>
</div>
<div id="footer">
    <ul>
    <?php
        echo navLink('index.php', 'Mixes', $section);
        echo navLink('#', 'Library', $section);
        echo navLink('#', 'Discover', $section);
        echo navLink('#', 'Settings', $section);
    ?>
    </ul>
</div>
</div>
</div>
</body>
</html>