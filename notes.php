<?php
    $note_dir = "./notes";
    $notes = scandir($note_dir, SCANDIR_SORT_ASCENDING);
    foreach ($notes as $note) {
        if (strcmp($note, ".") == 0 || strcmp($note, "..") == 0) {
            continue;
        }
        $title = shell_exec("grep  -i '!Title' $note_dir/$note 2>&1");
        $title = str_replace('!Title ', '', $title);
        echo "<h2>$title</h2>";
        $output = shell_exec("grep -v '!Title' $note_dir/$note 2>&1");
        echo "<pre>$output</pre>";
        #echo file_get_contents($note_dir/$note
        #cat $note;
    }
?>
