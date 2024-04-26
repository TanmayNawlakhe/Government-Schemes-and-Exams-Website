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

    <link rel="stylesheet" href="k.css">
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
        <div class="categories">
            <h1>Central Government Exam Categories</h1>

            <ul>
            <?php
echo '<li onclick="window.location.href=\'examlist.php?type=banking&ve=' . $id . '\';"><img src="images/bankexm.svg">6 Exams<button>Banking Exams</button></li>';

echo '<li onclick="window.location.href=\'examlist.php?type=defence&ve=' . $id . '\';"><img src="images/defexm.svg">5 Exams<button>Defence Exams</button></li>';

echo '<li onclick="window.location.href=\'examlist.php?type=psu&ve=' . $id . '\';"><img src="images/psuexm.svg">5 Exams<button>PSU Exams</button></li>';

echo '<li onclick="window.location.href=\'examlist.php?type=ssc&ve=' . $id . '\';"><img src="images/sscexm.svg">5 Exams<button>SSC Exams</button></li>';

echo '<li onclick="window.location.href=\'examlist.php?type=upsc&ve=' . $id . '\';"><img src="images/upscexm.svg">5 Exams<button>UPSC Exams</button></li>';

echo '<li onclick="window.location.href=\'examlist.php?type=railway&ve=' . $id . '\';"><img src="images/railexm.svg">5 Exams<button>Railway Exams</button></li>';

echo '<li onclick="window.location.href=\'examlist.php?type=teaching&ve=' . $id . '\';"><img src="images/teachingexm.svg">5 Exams<button>Teaching Exams</button></li>';

echo '<li onclick="window.location.href=\'examlist.php?type=statepsu&ve=' . $id . '\';"><img src="images/statepsuexm.svg">5 Exams<button>State PSU Exams</button></li>';
?>

               
            </ul>
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