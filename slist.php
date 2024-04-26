<?php 
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$type = $_GET['type'];
$id=$_GET['ve'];
$db_name = "schemes";
$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if (!$conn ) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}
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

    <link rel="stylesheet" href="m.css">
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
    <div id="resultimg" style="background-image: url('images/<?php echo $type; ?>.webp')">
    <h1><?php echo strtoupper($type); ?> SCHEMES</h1>
</div>
        <div class="material">
            <div class="filter"><div class="risk">SEARCH SCHEMES</div>
                <form action="reswin.php?ve=<?php echo $id;?>&type=<?php echo $type;?>" method="post">
                <div>
        <label for="CentralGovernment">Scheme Type</label><br>
        <input name="CentralGovernment" type="checkbox" value="YES">Central Government<br>
        <input name="CentralGovernment" type="checkbox" value="NO">State<br>
    </div>
    
    <div>
        <label for="GenderAll">Gender</label><br>
        <input name="GenderAll" type="checkbox" value="YES">All<br>
        <input name="Gender" type="checkbox" value="Male">Male<br>
        <input name="Gender" type="checkbox" value="Female">Female<br>
    </div>
    
    <div>
        <label for="BenefitType">Benefit Type</label><br>
        <input name="BenefitType" type="checkbox" value="In Kind">In Kind<br>
        <input name="BenefitType" type="checkbox" value="Composite">Composite<br>
        <input name="BenefitType" type="checkbox" value="Cash">Cash<br>
    </div>
    
    <div>
        <label for="DiffAbled">Differentially Abled</label><br>
        <input name="DiffAbled" type="checkbox" value="NO">NO<br>
        <input name="DiffAbled" type="checkbox" value="YES">YES<br>
    </div>
    
    <div class="submit">
        <button type="submit">Search</button>
    </div>

                </form>
            </div>
            <div class="list">
                <ul><?php
            
            while ($row = $result->fetch_assoc()) {
                $k = strtok($row['details'], '.');
                echo '<li><a href="sos.php?value=' . $row['sr_no'].'&db=schemes&type='.$type.'&ve=' . $id . '"><div><h1 id="hee">' . $row['name'] . '</h1><p id="haa">' . $k . '</p></div></a></li>';
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