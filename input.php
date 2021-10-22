<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "staff");
            if($conn === false)
            {
                die("ERROR: Could not connect. " 
                    . mysqli_connect_error());
            }
            $input =  $_REQUEST['input'];
            $sql = "INSERT INTO college  VALUES ('$input')";

            if(mysqli_query($conn, $sql))
            {
                echo "<h3>data stored in a database successfully." 
                    . " Please browse your localhost php my admin" 
                    . " to view the updated data</h3>"; 
      
                echo nl2br("\n$first_name\n $last_name\n "
                    . "$gender\n $address\n $email");
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
            mysqli_close($conn);

        ?>
    </center>
</body>

</html>