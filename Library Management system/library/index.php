<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <style>
        body {
            text-align: center;
        }

        .image-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        figure {
            margin: 0;
            text-align: center;
        }

        figcaption {
            margin-top: 5px;
        }

        .left-division {
            text-align: left;
            margin: 50px;
        }

        .example {
            margin-top: -20px;
            margin-left: -15px;
            margin-right: -18px;
            margin-bottom: -20px;
        }
    </style>
</head>

<body style="background-color: #07EAEA">
    <div class="example">
        <b>
            <h1 style="background-color: #EB3A0F">Book Borrowing System</h1>
        </b>
    </div>
    <hr>
    <div class="image-container" style="background-color: #EB3A0F;">
        <figure>
            <img src="j.jpg" height="200" width="300" alt="Zen Buddhist teacher">
            <figcaption>The thing you can see only when you slow down</figcaption>
        </figure>
        <figure>
            <img src="22.jpg" height="200" width="300" alt="Incomplete view of the world">
            <figcaption>THE PSYCHOLOGY OF MONEY</figcaption>
        </figure>
        <figure>
            <img src="11.jpg" height="200" width="300" alt="Third image">
            <figcaption>The playbook</figcaption>
        </figure>
    </div>
    <div style="background-color: #a7ebcb;"><br><br></div>

    <div class="image-container" style="background-color: #EB3A0F;">
        <figure>
            <img src="10.jpg" height="200" width="300" alt="Zen Buddhist teacher">
            <figcaption>The Literature of Japanese American Incarceration</figcaption>
        </figure>
        <figure>
            <img src="111.jpg" height="200" width="300" alt="Incomplete view of the world">
            <figcaption>Vagabonds</figcaption>
        </figure>
        <figure>
            <img src="150.jpg" height="200" width="300" alt="Third image">
            <figcaption>The Invention of the Darling </figcaption>
        </figure>
    </div>
    <br><br>
    <div class="left-division" style="background-color: #cf0c5a;">
        <form action="process.php" method="post">
        <label for="id">ID:</label><br>
        <input type="number" id="id" name="id" required><br><br>
            
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="book-title">Book Title:</label><br>
            <select id="book-title" name="book-title" required>
                <option value="">Select a book</option>
                <option value="The thing you can see only when you slow down">The thing you can see only when you slow down</option>
                <option value="THE PSYCHOLOGY OF MONEY">THE PSYCHOLOGY OF MONEY</option>
                <option value="The playbook">The playbook</option>
                <option value="The Literature of Japanese American Incarceration">The Literature of Japanese American Incarceration</option>
                <option value="Vagabonds">Vagabonds</option>
                <option value="The Invention of the Darling">The Invention of the Darling </option>

            </select><br><br>

            <label for="borrow-date">Borrow Date:</label><br>
            <input type="date" id="borrow-date" name="borrow-date" required><br><br>

            <label for="return-date">Return Date:</label><br>
            <input type="date" id="return-date" name="return-date" required><br><br>

            <input type="submit" value="submit">
        </form>
    </div>
</body>

</html>