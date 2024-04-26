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
      <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    <link rel="stylesheet" href="je.css">
</head>

<body>
    <header>
        <nav>
            <?php echo '<a href="Untitled.php?ve='.$id.'">'?>
                <div>
                      <img href="images/android-chrome-512x512.png">
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
        <div class="bg" style="background-image: url(images/parliament.png);"></div>
        <div class="content">
            <h2>All the Information about Schemes and Exams of Central Government on a Single Platform</h2>
            <p>GOV HUB stores and provides useful information about all the available and legal Schemes and Exams of
                Central Government.</p>
            <span><button onclick="window.location.href='<?php echo 'schemes.php?ve='.$id ?>';">Explore Schemes <img src="images/arrow.png"></button>
            <button onclick="window.location.href='<?php echo 'exams.php?ve='.$id ?>';">Explore Exams <img src="images/arrow.png"></button></span>
        </div>
        <div class="spaces"></div>
        <div class="material">
            <ul  class="firs">
                <li><img src="images/fast.jpg"></li>
                <li class="drr"> Fast and Secure</li>
            </ul>
            <ul > <li><div class="kiri"></div></li></ul>
            <ul>
                <li><img src="images/exams.jpg"></li>
                <li class="drr"> Explore Exams</li>
            </ul>
            <ul > <li><div class="kiri"></div></li></ul>
            <ul>
                <li class="super"><img src="images/Beautifulint.jpg"></li>
                <li class="drr"> Beautiful Interface</li>
            </ul>
            <ul > <li><div class="kiri"></div></li></ul>
            <ul class="las">
                <li class="special"><img src="images/schemes.png"></li>
                <li class="drr"> 500+ Schemes </li>
            </ul>
        </div>
        <div class="spaces"></div>
        <div class="rating">

            <h1>Reviews</h1>
            <div class="lists">
                <ul>
                    <li>"Wonderful Website with Wonderful Interface and Data."</li>
                    <li><img src="images/5star.jpeg"></li>
                    <li>--- Naruto Uzumaki</li>
                </ul>

                <ul>
                    <li>"Wonderful Website with Wonderful Interface and Data."</li>
                    <li><img src="images/5star.jpeg"></li>
                    <li>--- Yuji Itadori</li>
                </ul>
                <ul>
                    <li>"Wonderful Website with Wonderful Interface and Data."</li>
                    <li><img src="images/5star.jpeg"></li>
                    <li>--- Satoru Gojo</li>
                </ul>
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