<?php

   $link =  mysqli_connect("79.170.40.38", "cl11-users-aoc", "4mr.rz2VD", "cl11-users-aoc");
    
if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    } 

 //$query = "INSERT INTO `cl11-users-aoc`.`Users` (`ID`, `Email`, `Password`) VALUES (NULL, 'no@gmial.com', 'alskdjf')";

 
 $query = "UPDATE `cl11-users-aoc`.`users` SET password = 'uedjUFH7^%' WHERE users.id=1";
$QUERY = "UPDATE  `cl11-users-aoc`.`Users` SET  `Password` =  'dsds' WHERE  `Users`.`ID` =1";

    mysqli_query($link, $query);

    $query = "SELECT * FROM `cl11-users-aoc`.`users";

    if ($result = mysqli_query($link, $query)) {
        
        $row = mysqli_fetch_array($result);
        
        echo "Your email is ".$row[1]." and your password is ".$row[2];
        
    }


?>

