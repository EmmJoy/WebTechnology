<?php
// Check if POST variables are set before using them
$fname = isset($_POST['username']) ? $_POST['username'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$number = isset($_POST['phone']) ? $_POST['phone'] : null;
$address = isset($_POST['address']) ? $_POST['address'] : null;
$blood = isset($_POST['blood']) ? $_POST['blood'] : null;
$gender = isset($_POST['gender']) ? $_POST['gender'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

// Debugging: Output the values to check if they are being set
echo "username: $fname<br>";
echo "email: $email<br>";
echo "phone: $number<br>";
echo "address: $address<br>";
echo "blood: $blood<br>";
echo "gender: $gender<br>";
echo "password: $password<br>";

// Validate the required fields
if (is_null($fname) || is_null($email) || is_null($number) || is_null($address) || is_null($blood) || is_null($gender) || is_null($password)) {
    die('All fields are required.');
}

$conn = new mysqli('localhost', 'root', '', 'e-commerce');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO reg (fname, email, number, address, blood, gender, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die('Prepare failed: ' . $conn->error);
    }

    $bind = $stmt->bind_param("ssissss", $fname, $email, $number, $address, $blood, $gender, $password);
    if ($bind === false) {
        die('Bind failed: ' . $stmt->error);
    }

    $execute = $stmt->execute();
    if ($execute === false) {
        die('Execute failed: ' . $stmt->error);
    }

    echo "Registration Successful";
    $stmt->close();
    $conn->close();
}
?>
