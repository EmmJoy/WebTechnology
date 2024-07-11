<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start(); // Start the session

// Collect form data
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Check if the form data is provided
if (empty($username) || empty($password)) {
    die("Please provide both username and password.");
}

// Database connection settings
$dsn = 'mysql:host=localhost;dbname=e-commerce';
$db_username = 'root';
$db_password = '';

try {
    // Attempt database connection
    $pdo = new PDO($dsn, $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SQL statement to fetch user
    $sql = "SELECT * FROM reg WHERE fname = :username";
    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':username', $username);

    // Execute statement
    $stmt->execute();

    // Fetch the user record
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $user['password'] === $password) { // Change this line if you hash passwords
        // Set session variables
        $_SESSION['username'] = $user['fname'];

        // Redirect to a welcome page or dashboard
        echo "Login Successful. Welcome, " . $_SESSION['username'];
    } else {
        echo "Invalid username or password";
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$pdo = null;
?>
