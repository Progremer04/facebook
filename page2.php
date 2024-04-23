<?php
 //Assuming you have already established a database connection
include("database.php");
 //Query to select the last row from the table
$sql = "SELECT * FROM attack ORDER BY id DESC LIMIT 1";  //Assuming 'id' is the primary key column

$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $lastLink = $row['link'];  //Assuming 'link' is the column name containing the link
  //   Redirect to the last element in the table's link column
    header("Location: $lastLink");
    exit();
} else {
//     Handle if no rows are found
    echo "No rows found";
}

mysqli_close($conn);
?>
