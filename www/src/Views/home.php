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
    <div class="nav-items">
        <a href="/"><svg aria-label="Home" class="_ab6-" color="rgb(245, 245, 245)" fill="rgb(245, 245, 245)" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M22 23h-6.001a1 1 0 0 1-1-1v-5.455a2.997 2.997 0 1 0-5.993 0V22a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V11.543a1.002 1.002 0 0 1 .31-.724l10-9.543a1.001 1.001 0 0 1 1.38 0l10 9.543a1.002 1.002 0 0 1 .31.724V22a1 1 0 0 1-1 1Z"></path></svg>  Home</a>
        <a><svg aria-label="New Post" class="_ab6-" color="rgb(245, 245, 245)" fill="rgb(245, 245, 245)" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M2 12v3.45c0 2.849.698 4.005 1.606 4.944.94.909 2.098 1.608 4.946 1.608h6.896c2.848 0 4.006-.7 4.946-1.608C21.302 19.455 22 18.3 22 15.45V8.552c0-2.849-.698-4.006-1.606-4.945C19.454 2.7 18.296 2 15.448 2H8.552c-2.848 0-4.006.699-4.946 1.607C2.698 4.547 2 5.703 2 8.552Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="6.545" x2="17.455" y1="12.001" y2="12.001"></line><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12.003" x2="12.003" y1="6.545" y2="17.455"></line></svg>  Create</a>
        <a>   Profile</a>
    </div>
    <div>
    <?php
        if (isset($_SESSION['user']))
            echo 'Connected as ' . $_SESSION['user'] . '  <a href="/logout">Logout</a>'  ;
        else
            echo 'Not Connected <a href="/login">Login</a>  ';
        ?>
    </div>
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
