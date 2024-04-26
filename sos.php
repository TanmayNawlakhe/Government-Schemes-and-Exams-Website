<?php 
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$type = $_GET['type'];
if(isset($_GET['ve'])){
    $id = $_GET['ve'];
}else{
    $id ="";
};
$value = $_GET['value'];

if(isset($_GET['db'])){
    $db_name = $_GET['db'];
}else{
    $db ="";
};
$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}

$sql = "SELECT * FROM $type WHERE sr_no = $value";

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

    <link rel="stylesheet" href="mie.css">
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
    <img id="resultimg" src="images/<?php echo $type; ?>.webp" alt="Description of the image">
        <div class="material">
            
            <div class="list">
    <ul>
        <?php $row = $result->fetch_assoc()?>
        <li><div class="hea"><h1><?php echo $row['name'];?></h1></div></li>
        
        <?php 
        $fent = preg_split('/(?<!\w\.\w.)(?<![A-Z][a-z]\.)(?<=\.|\?)\s/', $row['details']);
        $rentence_blocks = array_chunk($fent, 2);
        echo '<li><div><h2>Details</h2>';
        foreach ($rentence_blocks as $j => $dock) {
            echo '<p>' . implode(' ', $dock) .'</p>';
        }  echo  '</div></li>';

        $jent = preg_split('/(?<!\w\.\w.)(?<![A-Z][a-z]\.)(?<=\.|\?)\s/', $row['benefits']);
        $jentence_blocks = array_chunk($jent, 2);
        echo '<li><div><h2>Benefits</h2>';
        foreach ($jentence_blocks as $j => $lock) {
            echo '<p>' . implode(' ', $lock) .'</p>';
        }  echo  '</div></li>';

        $cent = preg_split('/(?<!\w\.\w.)(?<![A-Z][a-z]\.)(?<=\.|\?)\s/', $row['application_process']);
        $sentence_blocks = array_chunk($cent, 5);
        echo '<li><div><h2>Application Process</h2>';
        foreach ($sentence_blocks as $j => $block) {  
            echo '<p>' . implode(' ', $block) .'</p>';
        }  echo  '</div></li>';

        $tent = preg_split('/(?<!\w\.\w.)(?<![A-Z][a-z]\.)(?<=\.|\?)\s/', $row['eligibility']);
        $sentence_blocks = array_chunk($tent, 4);
        echo '<li><div><h2>Eligiblility</h2>';
        foreach ($sentence_blocks as $j => $block) {  
            echo '<p>' . implode(' ', $block) .'</p>';
        }  echo  '</div></li>';

        $sent = preg_split('/(?<!\w\.\w.)(?<![A-Z][a-z]\.)(?<=\.|\?)\s/', $row['documents_required']);
        $sentence_blcks = array_chunk($sent, 1);
        echo '<li><div><h2>Documents Required</h2>';
        foreach ($sentence_blcks as $j => $blok) {
            echo '<p>' . implode(' ', $blok) .'</p>';
        }  echo  '</div></li>';   ?>
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