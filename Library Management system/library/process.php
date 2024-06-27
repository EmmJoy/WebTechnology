<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function canBorrowBook($name) {
    return !isset($_COOKIE['borrowed_book']) || $_COOKIE['borrowed_book_user'] !== $name;
}

function borrowBook($id, $name) {
    setcookie("borrowed_book", $id, time() + 60);
    setcookie("borrowed_book_user", $name, time() + 60);
    return "Book borrowed successfully!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow book now!!!</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .message { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h2>Submitted Details</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        if (canBorrowBook($name)) {
            $id = htmlspecialchars($_POST['id']);
            $email = htmlspecialchars($_POST['email']);
            $bookTitle = htmlspecialchars($_POST['book-title']);
            $borrowDate = htmlspecialchars($_POST['borrow-date']);
            $returnDate = htmlspecialchars($_POST['return-date']);


            echo "<p><strong>ID_NO:</strong> $id</p>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Book Title:</strong> $bookTitle</p>";
            echo "<p><strong>Borrow Date:</strong> $borrowDate</p>";
            echo "<p><strong>Return Date:</strong> $returnDate</p>";
            echo "<p class='message'>" . borrowBook($id, $name) . "</p>";


        } else {
            echo "<p class='message'>Cannot borrow another book within 1 minute using the same ID.</p>";
        }
    } else {
        echo "<p>No data submitted.</p>";
    }

    if (isset($_COOKIE['borrowed_book']) && isset($_COOKIE['borrowed_book_user'])) {
        echo "<p><strong>User_ID:</strong> " . htmlspecialchars($_COOKIE['borrowed_book']) . "</p>";
        echo "<p><strong>User:</strong> " . htmlspecialchars($_COOKIE['borrowed_book_user']) . "</p>";
    }
    ?>
</body>
</html>
