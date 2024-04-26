<?php 
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$type = $_GET['type'];
$id=$_GET['ve'];
$db_name = "test";
$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if (!$conn ) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}
$sql2 ="SELECT ";
$sql = "SELECT name,sr_no, details FROM $type" ;

$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}    
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schemes and Exams | Official Government Website</title>
      <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    <link rel="stylesheet" href="mjev.css">
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
            <?php echo '<li class="und"><a href="schemes.php?ve='.$id.'">Schemes</a></li>
                <li class="und"><a href="exams.php?ve='.$id.'">Exams</a></li>
                <li class="und"><a href="contactus.php?ve='.$id.'">Contact Us</a></li>
                <li class="und"><a href="myprofile.php?ve='.$id.'">User Profile</a></li>'?>
                <li class="real"><a href="Untitled.html">Sign Out</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <img id="resultimg" src="images\<?php echo $type; ?>.webp" alt="the image">
        <div class="material">
        <div class="filter"><img src="images/greenwall.jpg">
            </div>
            
            <div class="list">
                <ul><?php
            
            while ($row = $result->fetch_assoc()) {
                $k = strtok($row['details'], '.');

                echo '<li><a href="gos.php?value='.$row['sr_no'].'&ve='.$id.'&type='.$type.'"><div><h1 id="hee">' . $row['name'] . '</h1><p id="haa">' . $k . '</p></div></a></li>';
            }       
            ?>
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

</html>