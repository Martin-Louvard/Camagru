<?php

function render($fileName)
{
    $currentDir = __DIR__;
    $path = $currentDir.$fileName;
    if (file_exists($path)) {
        // Start output buffering to capture the output
        ob_start();
        // Include the file
        include $path;
        // Get the contents of the included file and echo it
        $fileContents = ob_get_clean();
        echo $fileContents;
    }
}