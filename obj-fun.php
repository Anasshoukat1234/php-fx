<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
          class Student{
    
        var $name;
        var $major;
        var $gpa;
   
        function __construct($name, $major, $gpa){
      
            $this->name= $name;
            $this->major= $major;
            $this->gpa= $gpa;
       
        }
        function hasHonors(){
           if($this->gpa >= 2.5){
          return "true";
           }
           return "false";
            }
        }
         $student1 = new student("Anas", "business", 3.9);
         $student2 = new student("bilal", "baroker", 3.2);

        echo $student1->hasHonors();
    ?>
</body>
</html> 