<?php

$servername= "localhost";  
$username= "root";  
$password= "";  
$dbname= "rating_system";  
// Create connection  
$conn= mysqli_connect($servername,$username,$password,$dbname);  
// Check connection  
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());  
}else{
    echo "Successfully connecting to the database\n";
    echo "<br />";
}

$rating = $_POST['rating'];
$name = $_POST['name'];
$comment = $_POST['comment'];
$shoename = $_POST['shoe'];

$comment_length = strlen($comment);

if ($comment_length>100){
    echo "too long";
}else{
    mysqli_query($conn,"INSERT INTO user_ratings(rating,username,Comment,shoe) VALUES('$rating','$name','$comment','$shoename')");
    header('location:'. $_SERVER['HTTP_REFERER']);
}

?>