<!DOCTYPE html>
<html>

<head>
    <title>Insert data</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => kalonda
        $conn = mysqli_connect("localhost", "root", "", "kalonda");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $gender =  $_REQUEST['gender'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];
        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO registration  VALUES ('$first_name', 
            '$last_name','$gender','$address','$email')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>candidate successfully registered." 
                . " " 
                . "Ndalumba kapati</h3>"; 

            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>