<?php

require_once('inc/connection.php');

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Query</title>
</head>
<body>
    
</body>
</html>



<?php

    $first_name='sdsdds';
    $last_name='Fsdo';
    $email='sgom';
    $password='Pdrads230';
    $is_deleted=0;

    $hashed_password = sha1($password);

    $query = "INSERT INTO user (first_name, last_name, email, password, 
    is_deleted) VALUES ('{$first_name}','{$last_name}','{$email}',
    '{$password}',{$is_deleted})";

  

    //echo $hashed_password;

    //print_r($connection);

    $result = mysqli_query ( $connection,$query );

   

 if($result) {
 	echo "1 Record added";
 } else {
 	echo "Database Failed ";
 }


?>



<?php

mysqli_close($connection);

?>