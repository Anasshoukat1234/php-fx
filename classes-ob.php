<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class book {
        var $title;
        var $author;
        var $pages;
    }
    $book1 = new book;
    $book1 -> title = "harry poter";
    $book1 -> author  = "kin jhon";
    $book1 -> pages = "400";
     
    echo $book1 -> pages;
 echo"<br>";
    $book2 = new book;
    $book2 -> title = " mufasa ";
    $book2 -> author  = "mona";
    $book2 -> pages = "700";
     
    echo $book2 -> pages;
    
    
    ?>
</body>
</html>