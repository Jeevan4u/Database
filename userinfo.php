<?php
$con = mysqli_connect('localhost' ,'root');
if ($con) {
    echo "Connection Sucessfull";
    
}else{
    echo "Connection failed";
}


mysqli_select_db($con,'anyqueries');
$firstname = $_POST['FirstName'];
$lastname = $_POST['LastName'];
$Email = $_POST['Email'];
$comments = $_POST['comments'];

$query = "insert into getuserdata (Firstname,Lastname, Email, comments) values ('$firstname','$lastname','$Email', '$comments') ";

echo "$query";
mysqli_query($con, $query);
header('location:index.php');

?>