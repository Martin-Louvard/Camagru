<!DOCTYPE html>
<html>
<head>
    <title>Camagru</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
</head>
<body>
   <nav class="navbar">
    <div class="logo">Camagru</div>
    <?php
        if (isset($_SESSION['user']))
            echo 'Connected as ' . $_SESSION['user'];
        else
            echo 'Not Connected';
        ?>
    <?php
        if (isset($_SESSION['user']))
            echo '<a href="/logout">Logout</a>';
        else
            echo '<a href="/login">Login</a>';
        ?>
   </nav>
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
