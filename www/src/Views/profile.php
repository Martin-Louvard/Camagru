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
            if (!(isset($_SESSION['userId'])))
                header("Location: /");
            $controller = new App\Controllers\UserController();
            $user = $controller->read($_SESSION['userId']);
            echo '<div class="auth-form">';
            echo '<h3>Edit your informations</h3>';
            echo '<form method="post" action="profile">';
            echo '    <input type="text" id="username" name="username" placeholder="Username: '.$user['username'].'"><br><br>';
            echo '    <input type="email" id="email" name="email" placeholder="Email: '.$user['email'].'"><br><br>';
            echo '    <input type="password" id="password" name="password" placeholder="Password"><br><br>';
            echo '    <input type="submit" value="Modify">';
            echo '</form>';
            echo '</div>';
        ?>
   </div>
</body>
</html>
