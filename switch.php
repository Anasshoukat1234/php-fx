<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>

<form action="" method="post">

<input type="text" name="grade"><br>
<input type="submit">




</form>
    <?php
    $grade=$_POST["grade"];
    switch ($grade){
        case "A":
            echo "you did Amazing";
            break;
            case "B":
            echo "you did better";
            break;

            case "C":
                echo "you did good";
                break;

                case "D":
                    echo "you did poor";
                    break;

                    case "F":
                        echo "better luck next time";
                        break;

                        default:
                        echo "Invalid grade";
    }
    
    
    ?>
</body>
</html>