<?php
/*Filename:post_rating.php
Target html: all product pages
Purpose: to send the ratings of each product to the database
Author:Kiwano
Date written: 27 May 2019
Revisions: Addition of Comments, 27/5/2019
*/

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

//Get the rating, name, comment and shoename input from the page
$rating = $_POST['rating'];
$name = $_POST['name'];
$comment = $_POST['comment'];
$shoename = $_POST['shoe'];

//initialise the comment length
$comment_length = strlen($comment);

//if the comment is longer than 100 characters, inform the user
if ($comment_length>100){
    echo "Reduce your comment length to just below 100 characters";
}else{
    //else add in the values to the user_ratings table in the rating_system database
    mysqli_query($conn,"INSERT INTO user_ratings(rating,username,Comment,shoe) VALUES('$rating','$name','$comment','$shoename')");
    header('location:'. $_SERVER['HTTP_REFERER']);//return back to the product page after done
}

?>