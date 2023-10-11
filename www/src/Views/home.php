<!DOCTYPE html>
<html>
<head>
    <title>Camagru</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
</head>
<body>
<?php
include('navbar.php');

generateNavbar();
?>
   <div class="main">
    <?php 
        function displayImages() {
            $imagePaths = [
                "assets/images/favicon.png",
                "assets/images/favicon.png",
                "assets/images/favicon.png",
                "assets/images/favicon.png",
                "assets/images/favicon.png",
                "assets/images/favicon.png",
                "assets/images/favicon.png",
                "assets/images/favicon.png",
                "assets/images/favicon.png",
                "assets/images/favicon.png"
            ];
        
            foreach ($imagePaths as $path) {
                echo "<div class=\"card\"><img src=\"$path\" alt=\"Image\"></div>";
            }
        }
        
        // Call the function to display the images
        displayImages();
    ?>
   </div>
</body>
</html>
