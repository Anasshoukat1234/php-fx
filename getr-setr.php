<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Movie{
        public $title;
        private $rating;

        function __construct($title , $rating){
       $this -> title =$title;
       $this -> rating =$rating;

        }
          function getRating(){
       return $this -> rating;
          }
          function setRating($rating){
            return $this -> rating =$rating;
               }
    }
    $avangers = new Movie ("Avangers" , "PG-13");
    // $avangers -> rating = "DOG";
   $avangers  -> setRating ("Dog");
    
    echo $avangers->getRating();
    
    
    ?>
</body>
</html>