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
            <h1>Central Government Scheme Categories</h1>

            <ul>
            <?php
echo '<li onclick="window.location.href=\'slist.php?type=agriculture&ve=' . $id . '\';"><img src="images/agri.svg">5 Scheme
        <button>Agriculture, Rural & Environment</button></li>';

echo '<li onclick="window.location.href=\'slist.php?type=bankings&ve=' . $id . '\';"><img src="images/bank.svg">3 Schemes<button>Banking, Financial Services & Insurance</button></li>';

echo '<li onclick="window.location.href=\'slist.php?type=business&ve=' . $id . '\';"><img src="images/business.svg">3 Schemes<button>Business & Entrepreneurship</button></li>';

echo '<li onclick="window.location.href=\'slist.php?type=education&ve=' . $id . '\';"><img src="images/Education.svg">3 Schemes<button>Education & Learning</button></li>';

echo '<li onclick="window.location.href=\'slist.php?type=health&ve=' . $id . '\';"><img src="images/Health.svg">3 Schemes<button>Health & Wellness</button></li>';

echo '<li onclick="window.location.href=\'slist.php?type=science&ve=' . $id . '\';"><img src="images/Science.svg">3 Schemes<button>Science, IT & Communications</button></li>';

echo '<li onclick="window.location.href=\'slist.php?type=housing&ve=' . $id . '\';"><img src="images/Housing.svg">2 Schemes<button>Housing & Shelter</button></li>';

echo '<li onclick="window.location.href=\'slist.php?type=sports&ve=' . $id . '\';"><img src="images/Sports.svg">3 Schemes<button>Sports & Culture</button></li>';

echo '<li onclick="window.location.href=\'slist.php?type=transport&ve=' . $id . '\';"><img src="images/Transport.svg">3 Schemes<button>Transport & Infrastructure</button></li>';

echo '<li onclick="window.location.href=\'slist.php?type=social&ve=' . $id . '\';"><img src="images/Social.svg">2 Schemes<button>Social welfare & Empowerment</button></li>';

echo '<li onclick="window.location.href=\'slist.php?type=women&ve=' . $id . '\';"><img src="images/Women.svg">3 Schemes<button>Women & Child</button></li>';

echo '<li onclick="window.location.href=\'slist.php?type=skills&ve=' . $id . '\';"><img src="images/Skills.svg">3 Schemes<button>Skills & Employment</button></li>';
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