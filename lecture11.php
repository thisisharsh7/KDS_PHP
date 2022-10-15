<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div>
        <h1>PHP Calculator</h1>
        <form method = "POST">
            <input name = "firstNum" id="firstNum" placeholder = "Enter first Number" >
            <input name = "secondNum" id="secondNum" placeholder = "Enter second Number" >
            <select name = "operations" id="operations">
                <option value = "add"> add </option>
                <option value = "sub"> sub </option>
                <option value = "multi"> multi </option>
                <option value = "divide"> divide </option>
            </select>
            <input type="submit" name = "submit" >
        </form>
    </div>
    <p>
        <?php
            if(isset($_POST['submit'])){
                $fnum = $_POST['firstNum'];
                $lnum = $_POST['secondNum'];
                $val = $_POST['operations'];
                switch($val){
                    case "add":
                        $add = $fnum + $lnum;
                        echo "<p>Addition of two no. is $add.</p>";
                        break;
                    case "sub":
                        $sub = $fnum - $lnum;
                        echo "<p>Subtraction of two no. is $sub.</p>";
                        break;
                    case "multi":
                        $multi = $fnum * $lnum;
                        echo "<p>Multiplication of two no. is $multi.</p>";
                        break;
                    case "divide":
                        $divide = $fnum / $lnum;
                        echo "<p>division of two no. is $divide.</p>";
                        break;
                }
            }
        ?>
    </p>
</body>
</html>