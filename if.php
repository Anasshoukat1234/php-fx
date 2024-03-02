<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if else</title>
</head>
<body>
    <?php
    $isMale = false;
    $isTall = false;
    if($isMale && $isTall){
  echo "you are Tall male";
    }
    elseif($isMale && !$isTall){
        echo "you are short male";
    }
    elseif(!$isMale && $isTall){
         echo "you are not male but are tall";
    }
    else{
        echo "you are not male and not tall";
    }
    
    ?>
</body>
</html>