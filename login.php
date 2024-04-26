<?php
$username=$_POST['username'];
$password =$_POST['password'];
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "users";
$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

$sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($password === $row["password"]) {
                header("Location: Untitled.php?ve=" . $row["id"]);
                exit();
                } 
        } else {
            echo "User not found. Please check your username.";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
?>
