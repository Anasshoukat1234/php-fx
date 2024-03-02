<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
     <form action="" method="post">
     first number: <input type="number" step="0.1" name="num1"> <br>
     Op: <input type="text" name="op"><br>
    second number: <input type="number" name="num2"><br>
      <input type="submit">
</form>
    <?php 
       $num1 = $_POST["num1"];
       $num2 = $_POST["num2"];
       $op = $_POST["op"];
          if($op == "+"){
        echo $num1 + $num2;
    }
    elseif($op == "-"){
        echo $num1 - $num2;
    }
    elseif($op == "/"){
        echo $num1 / $num2;
    }
    elseif($op == "*"){
        echo $num1 * $num2;
    }
    else{
        echo "invalid operator";
    }
    
    ?>
</body>
</html>