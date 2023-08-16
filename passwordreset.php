<?php
$host = 'localhost';        // Database host
$dbname = 'new_database';  // Database name
$username = 'root'; // Database username
$password = ''; // Database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected to the database successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 function send_password_reset()

if(isset($_POST("password_rest_link"))){
    $email = mysqli_real_escape_string($pdo, $_POST['email']);
    $token = md5(rand()); 

    $check_email = "SELECT email FROM uesrs WHERE email= '$email' LIMIT 1";
    $check_email_run = mysqli_query($pdo , $check_email);

    if(mysqli_num_rows($check_email_run)>0){
        $row = mysqli_fetch_array($check_email_run);
        $get_name = $row['name'];
        $get_name = $row['email'];

        $update_token = "UPDATE users SET Verified_Token ='$token' WHERE email = '$get_email' LIMIT 1";
        $update_token_run = mysqli_query($pdo,$update_token);

        if($update_token_run){
            send_password_reset($get_name, $get_email,$token);
            $_SESSION['status'] = "We sent you a password reest link";
            header("Loaction: passwordreset.php");
            exit(0);
        }

    }
    else{
        $_SESSION['status'] = 'No email found!!';
        header('location: ResetPage.php');
        exit(0);
    }
}
?>
