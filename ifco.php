<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get max</title>
</head>
<body>

  <?php
//   function getMax($num1, $num2 , $num3){
       
//     if($num1 > $num2){
      
//          return $num1;
//     } 
//     else{
//         return $num2;
//     }
  
//   echo getMax(80 , 900);
// }
       //if there are three number//
function getMax($num1, $num2 , $num3){

    if($num1>=$num2 && $num1>=$num3){
return $num1;
    }
    elseif($num2 >= $num1 && $num2 >= $num3){
   return $num2;
    }
    elseif($num3 >= $num1 && $num3 >= $num2){
        return $num3;
}
}
echo getMax(1 , 10 , 18);
  ?>
</body>
</html>