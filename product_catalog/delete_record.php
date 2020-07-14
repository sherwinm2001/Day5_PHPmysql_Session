<?php
    $Pname=$_POST['DelProduct'];

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

    // sql to delete a record
    $sql = "delete from product where productname='$Pname'";

    if (mysqli_query($conn, $sql)) 
    {
        echo "<b><i>Record deleted successfully!!</i></b>";
    } 
    else 
    {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>