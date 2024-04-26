<?php 
$username=$_POST['username'];
$name = $_POST['user'];
$password =$_POST['password'];
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "users";
$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}

$check_sql = "SELECT * FROM users WHERE username='$username'";
$check_result = mysqli_query($conn, $check_sql);
?>



<!DOC<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <title>Schemes and Exams | Official Government Website</title>
      <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    <link rel="stylesheet" href="rj.css">
</head>
<body>
    <header>
        <nav>
            <a href="Untitled.html">
                <div>
                    <span>GOV</span>HUB
                </div>
            </a>
            <ul>
                <li><a href="schemes.html">Schemes</a></li>
                <li><a href="#">Exams</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
                <li class="real"><a href="singup.html">Sign In</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="filter"><h1 class="quer"><?php if (mysqli_num_rows($check_result) > 0) {
    echo "Username already registered. Please choose a different username.";
} else {
    $sql = "INSERT INTO users(name, username, password) VALUES ('$name', '$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo '✔ Registration successful!';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?></h1><h2>SIGN IN</h2> <h3>Access your account by entering your username and password</h3>
    <form action="login.php" method = "post">
        <div><label>Username</label><input type="text" name="username" placeholder="Enter new Username" required></div><br>
        <div><label>Password </label><input type="password" name="password" placeholder="Enter new Password" required></div><br>
        <div class="submit"><button type="submit">Log In</button><br></div>


    </form></div>
    <div class="imagee"><img src="images/login.webp"></div>

    </main>
    <footer id="footer">
        <div class="quick">
            <h4>Quick Links</h4>
            <ul>
                <?php echo '<li ><a href="schemes.php?ve='.$id.'">Schemes</a></li>'?>
                <?php echo '<li ><a href="exams.php?ve='.$id.'">Exams</a></li>'?>
                <?php echo '<li ><a href="contactus.php?ve='.$id.'">Contact Us</a></li>'?>
                <?php echo '<li ><a href="myprofile.php?ve='.$id.'">User Profile</a></li>'?>
                <li ><a href="Untitled.html">Sign Out</a></li>
            </ul>
        </div>

        <div class="copyright">
            <p>© All rights reserved | GOV HUB.</p>

            <ul class="contact">
                <li>
                    <a href="https://www.facebook.com/TanmayNawlakhe/"> <img src="images/facebook.webp"></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/tanawlakhe/"> <img src="images/instagram.jpg"></a>
                </li>

                <li>
                    <a href="https://github.com/TanmayNawlakhe/"> <img src="images/github.webp"></a>
                </li>

                <li>
                    <a href="https://www.linkedin.com/in/tanmay-nawlakhe/"> <img src="images/linkedin.png"></a>
                </li>
            </ul>
        </div>
    </footer>


</body>