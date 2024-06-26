<?php
include("database.php");

// Check if 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $ad_id = mysqli_real_escape_string($conn, $_GET['id']);
    
    // SQL query to delete the ad
    $sql_delete = "DELETE FROM attack WHERE id = '$ad_id'";
    
    // Execute the delete query
    if (mysqli_query($conn, $sql_delete)) {

        header("Location: /admin_panal/index.php");
        exit(); // Terminate script after redirection
    } else {
        echo "Error deleting ad: " . mysqli_error($conn);
    }
} else {
    echo "No ad ID specified.";
}

mysqli_close($conn);
?>
