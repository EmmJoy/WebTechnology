<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
        $age=39;
        if($age>18 && $age<40)
        {
           echo " you are allow to go to the party";
        }
        else if($age==12)
        {
           echo " you are only 12 years old";
        }
        else if($age>40)
        {
           echo " You are a old man now..go and take rest";
        }
        else{
            echo " you are not allow for the party";
        }
        ?>
    </div>
</body>
</html>
