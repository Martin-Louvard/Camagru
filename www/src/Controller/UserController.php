<?php
namespace App\Controller;

class UserController{
    private $currentDir = __DIR__;

    private function render($fileName)
    {
        $path = $this->currentDir.$fileName;
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

    public function signup()
    {
        $this->render('/../user_registration.php');
    }

    public function create()
    {
        $this->render('/../process_registration.php');
    }
}