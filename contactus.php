<?php
if (isset($_GET['ve'])){
    $id=$_GET['ve'];
}
else{
    $id ="";
}
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <title>Schemes and Exams | Official Government Website</title>
    <link rel="stylesheet" href="kie.css">
</head>
<body>
    <header>
    <nav>
        <?php echo '<a href="Untitled.php?ve='.$id.'">'?>
                <div>
                    <span>GOV</span>HUB
                </div>
            </a>
            <ul>
            <?php echo '<li class="und"><a href="schemes.php?ve='.$id.'">Schemes</a></li>'?>
            <?php echo '<li class="und"><a href="exams.php?ve='.$id.'">Exams</a></li>'?>
                <?php echo '<li class="und"><a href="contactus.php?ve='.$id.'">Contact Us</a></li>'?>
                <?php echo '<li class="und"><a href="myprofile.php?ve='.$id.'">User Profile</a></li>'?>
                <li class="real"><a href="Untitled.html">Sign Out</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <div class='bimg' style="background-image: url('images/social.webp');"><h1>Get in Touch</h1><h2>Want to get in touch? We'd love to hear from you. Here's how you can reach us.</h2>
    
        <div class="division">
        <span class="block"><h2>Contact us</h2>
            <div class="bullock"><img onclick="window.location.href='https://www.instagram.com/tanawlakhe/'"src="images/instagram.jpg"><img onclick="window.location.href='https://www.facebook.com/TanmayNawlakhe/'"src="images/facebook.webp"><img src="images/pinterest.svg"><img onclick="window.location.href='https://www.linkedin.com/in/tanmay-nawlakhe/'"src="images/linkedin.png"><img onclick="window.location.href='https://github.com/TanmayNawlakhe'" src="images/github.webp"></div>

            </span>
        <span class="block bloc-b"><h2>Talk to Developer</h2>
            <div class="jiha">
            <div class="sp"><p>Email : tanawlakhe@gmail.com</p>
                <p>Github : https://github.com/TanmayNawlakhe</p>
            <p>Linked-In : https://linkedin.com/in/tanmay-nawlakhe</p></div></div>
        </span>
                
    </div>
</div>
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