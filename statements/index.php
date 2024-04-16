<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional statements</title>
</head>
<body>
    <pre>
    <?php
      // if statement
      if(11 > 9) {
           echo "Its Break time!";
      }

      $time = 1;
      if ($time == 1) {
           echo "Home time, have a good day!";
      }
    // if...else statement
    $t = date("H");
    if ($t < "20") {
        echo "Have a good day!";
    }else {
        echo "Have a good night!";
    }
     //if...elseif...else
     if ($t < "10") {
         echo "Have a good morning!";
     }elseif ($t < "20") {
         echo "Have a good day!";
     }else {
         echo "Have a good night!";
     }
     // switch
     $favcolor = "yellow";

     switch ($favcolor){
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green";
        echo "Your favorite color is green!";
        break;
    case "purple":
         "Your favorite color is purple!";
         break;
    default:
        echo "Your favorite color is neither blue, green, nor purple!";
     }
        ?>
     </pre>
</body>
</html>