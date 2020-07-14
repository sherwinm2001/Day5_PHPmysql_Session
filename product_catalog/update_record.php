<?php
    $Pname=$_POST['UpdateProduct'];
    $Pprice=$_POST['UpdatePrice'];

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

    $sql = "update product SET productprice='$Pprice' where productname='$Pname'";

    if (mysqli_query($conn, $sql)) 
    {
    echo "<b><i>Record updated successfully!!</i></b>";
    } 
    else 
    {
    echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>