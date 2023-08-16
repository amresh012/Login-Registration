<?php
$host = 'localhost';        // Database host
$dbname = 'new_database';   // Database name
$username = 'root';         // Database username
$password = '';        // Database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
        $Confirm_password = password_hash($_POST['confirm-password'], PASSWORD_DEFAULT); // Hash the password
        if($password!=$Confirm_password){
            echo "<script>alert('Password not matched!!')</script>";
        }


        // Insert data into the database
        $insertQuery = "INSERT INTO users (name, email, password , confirmPass) VALUES (:name, :email, :password , :confirmPass)";
        $stmt = $pdo->prepare($insertQuery);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':confirmPass', $Confirm_password);


        $stmt->execute();

        header("Location: Home.php");
        exit;
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
