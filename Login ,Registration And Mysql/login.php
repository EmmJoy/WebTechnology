<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-commerce site</title>
  <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>


<body class="background">
  <div class="center-container">
    <div class="container">
      <h1>Welcome To Our LogIn Page</h1>
      <p style="color: #99ff99;"><b><i>Thank you for visiting our shop. We’re delighted to have you here. Enjoy browsing our collection <br> And happy shopping!</b></i></p>
    </div>
    <form method="POST" action="log.php">
      <div>
        <label for="username" style="color:#cc0066"><b>Username:</b></label>
        <input type="text" id="username" name="username" required><br>
      </div>
      <div>
        <label for="password" style="color:#cc0066"><b>Password:</b></label>
        <input type="password" id="password" name="password" required><br>
      </div>

      <button class="button-85" role="button" value="Login">LogIn</button>
      

    </form>
  </div>

  </div>
</body>

</html>