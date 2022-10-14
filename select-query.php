<?php

require_once('inc/connection.php');

?>


<?php

    $query = "SELECT * FROM user";

    $result_set = mysqli_query($connection, $query);

    if($result_set){
        echo mysqli_num_rows($result_set), " Records Found";
        echo "<br>";

        while($record=mysqli_fetch_assoc($result_set)){

        echo $record['first_name']; echo "<br>";


        }

        

    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Query</title>
</head>
<body>
    


</body>
</html>

<?php

mysqli_close($connection);

?>