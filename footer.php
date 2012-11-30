<?php
function navLink($url, $linktext, $section) {
    if ($linktext == $section) {
        return '<li><a class="selected '.$linktext.'">'.$linktext.'</a>';
    }
    else {
        return '<li><a href="'.$url.'" class="'.$linktext.'">'.$linktext.'</a>';
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