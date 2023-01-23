<?php
$link = mysqli_connect("localhost", "root", "thesis123", "account");
if($link === false){
    die("Error: Could not connect." . mysqli_connect_error());
}
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$type = mysqli_real_escape_string($link, $_REQUEST['type']);
$sql = "INSERT INTO user(first_name, last_name, username, pass, type)
VALUES('$first_name'  '$last_name', '$username', '$password', '$type')";
if(mysqli_query($link, $sql)){
    echo "Successfully Saved";
}else{
    echo "Error: Could not connect";
}
mysqli_close($link);
?>

<br><br>
<a href=index.php>Home</a>