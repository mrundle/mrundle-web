<?php
    $pics_dir = "./pics";
    $pics = scandir($pics_dir, SCANDIR_SORT_ASCENDING);
    foreach ($pics as $pic) {
        if (strcmp($pic, ".") == 0 || strcmp($pic, "..") == 0) {
            continue;
        }
        echo "<img src=\"$pics_dir/$pic\" alt=\"$pic\" style=\"width:375px;height:567px;\">";
    }
?>
