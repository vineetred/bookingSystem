

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "vistaar");
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // MySQL INJECTION
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$date = mysqli_real_escape_string($link, $_REQUEST['date']);

$sql = "INSERT INTO appointments (name,email, date) VALUES ('$name', '$email', '$date')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
