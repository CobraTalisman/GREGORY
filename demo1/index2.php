<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data types</title>

    <style>
        .greeting{
            color:green;
            font-size:50px;
            text-transform: none;
        }
    </style>
</head>
<body>
    <h1>Data types</h1>

    <?php
    $birthyear=1995; // My Birth Year(Integer)
    $currentyear=date("Y"); // Current Year(Integer)
    $name = Null; // My Name(String)
    $height=6.0;//My Height(Float)
    $age=$currentyear-$birthyear; //Calculation of my Current Age(Integer)
    $hobbies=["Reading","Coding", "Sleeping", "Eating", "Gaming"]; // Array
    $age_above_30 =$age>30;// setting the Age above 30 to True(Boolean)
    $greeting = "Hello, My name is $name and I am $age years old. My height is $height meters"; //Statement(String)

    echo "<p class='greeting'>$greeting</p>"; // Output
    echo "<p>My Hobbies are: ";
    echo implode(",", $hobbies);//We use implode function to Display individual item from the Array 
    echo"</p>";
    

        
      if($age_above_30){
        echo "<p>This person is over 30 years old,thus exempt them</p>"; //if the condition is True
      } else{
        echo "<p>This person is qualified</p>"; //if the condition is false
      }

    ?>
</body>
</html>