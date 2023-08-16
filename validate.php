<?php
$host = 'localhost';        // Database host
$dbname = 'new_database';   // Database name
$username = 'root';         // Database username
$password = '';        // Database password

session_start(); // Start the session

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Fetch user data from the database
        $selectQuery = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->prepare($selectQuery);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Set session variables to indicate user is logged in
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            // Redirect to the home page
            header("Location: Home.php");
            exit;
        } else {
            echo "<script>alert('Invalid Email or Password try again!!')</script>";
            // header("Location: Login.php");
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
