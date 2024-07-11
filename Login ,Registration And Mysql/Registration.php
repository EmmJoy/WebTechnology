<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
    <p id='head1' class='header'>Hello,sir</p>
    <p id='head2' class='header'>Just</p>
    <p id='head3' class='header'>Give your all</p>
    <p id='head4' class='header'>Information</p>
    <p id='head5' class='header'>Welcome to our website</p>
    <div class="container">

        <b>
            <h1 style="color: aqua;">Registration Page</h1>
        </b>
    </div>
    <form method="POST" action="reg.php">
    <input type="text" class="styled-textbox" name="username" id="username" placeholder="Enter Your name.....">
    <input type="text" class="styled-textbox" name="email" id="email" placeholder="Enter Your email.....">
    <input type="text" class="styled-textbox" name="phone" id="phone" placeholder="Enter Your phone number.....">
    <input type="text" class="styled-textbox" name="address" id="address" placeholder="Enter Your address.....">

    <div class="particular">
        <h1>Select Your Gender</h1>
        <label for="male"><input type="radio" id="male" name="gender" value="m">Male</label>
        <label for="female"><input type="radio" id="female" name="gender" value="f">Female</label>
        <label for="custom"><input type="radio" id="custom" name="gender" value="c">Custom</label>
    </div>

    <div class="cc">
        <h3 style="color: aquamarine;">Blood Group</h3>
        <select name="blood">
            <option value="" id="blood">Select Blood Group</option>
            <option value="A+">A+</option>
            <option value="A">A</option>
            <option value="A-">A-</option>
            <option value="B">B</option>
            <option value="B+">B+</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="F">F</option>
        </select>
        <br>
    </div>

    <input type="password" id="password" name="password" minlength="8" placeholder="Enter your password here"><br><br>
    <button class="button-86" role="button">Confirm</button>
</form>
<div class='light x1'></div>
<div class='light x2'></div>
<div class='light x3'></div>
<div class='light x4'></div>
<div class='light x5'></div>
<div class='light x6'></div>
<div class='light x7'></div>
<div class='light x8'></div>
<div class='light x9'></div>

</body>

</html>