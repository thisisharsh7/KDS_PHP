<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form method="POST" >
        Enter your favourite color: 
        <input id="colors" name="color" placeholder="Enter color name" >
        <input type="submit" name="submit" id="submit" >
    </form>
    <p>
        Chosen color is 
        <?php
            if(isset($_POST['submit'])){
                $val = $_POST['color'];
                echo $val;
            }
        ?>
    </p>

</body>
</html>