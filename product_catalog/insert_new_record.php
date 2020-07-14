<?php
    $PID=$_POST['PID'];
    $Pname=$_POST['Pname'];
    $Pprice=$_POST['Pprice'];
    $Pdesc=$_POST['Pdesc'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "product_catalog";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection

    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "insert into  product(productid, productname, productprice, productdescription) values ('$PID', '$Pname', '$Pprice', '$Pdesc')";

    if (mysqli_query($conn, $sql)) 
    {
        echo "<b><i>New record created successfully!!</i></b>";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>