<?php
    $pics_dir = "./pics";
    $pics = scandir($pics_dir, SCANDIR_SORT_ASCENDING);
    foreach ($pics as $pic) {
        if (strcmp($pic, ".") == 0 || strcmp($pic, "..") == 0) {
            continue;
        }
        //$title = str_replace('_', ' ', $pic);
        $title = preg_replace('/[_-]/', ' ', $pic);
        $title = preg_replace('/\..*$/', '', $title);
        $title = ucwords($title);
        echo "<center>";
        echo "<h2>$title</h2>";
        echo "<div>";
        echo "<img src=\"$pics_dir/$pic\" alt=\"$pic\" style=\"width:375px;height:567px;\">";
        echo "</div>";
        echo "<center>";
    }
?>
