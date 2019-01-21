<?php

// executing a system command

// $cmd = "dir"; // windows
$cmd = "ls"; // Linux, Unix & mac

exec(escapeshellcmd($cmd), $output, $status);

if ($status) {
    echo "Exec command failed";
} else {
    echo "<pre>";
    foreach($output as $line) {
        echo htmlspecialchars("$line\n");
    }
    echo "</pre>";
}