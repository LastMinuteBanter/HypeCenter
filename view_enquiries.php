<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="utf-8"/>
            <title>Enquiry Confirmation</title>
            <link rel="stylesheet" type="text/css" href="styles/style.css"/>
            <link rel="icon" href="images/HypeIcon.jpg"/>
            <script src="script/enhancement.js"></script>
    </head>
    <body class="confirm_page">
    <header>
        <nav>
            <a href="index.html"><img src="images/HypeCentre.jpg" alt="HypeCenter logo"/></a>
        </nav>
        </header>

    <article id="view_enquiry_article">
        <?php
            $servername= "localhost";  
            $username= "root";  
            $password= "";  
            $dbname= "enquiry";  
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);  
            // Check connection  
            if(!$conn){
                die("Connection failed: " . mysqli_connect_error());  
            }else{
                echo "Successfully connecting to the database\n";
                echo "<br />";
            }

            $sql = "SELECT * FROM enquiry";
            $result = $conn->query($sql);


            echo "<h1 id='enquiry-us'>VIEW ENQUIRIES</h1>";
            echo "<fieldset id='view_enquiry_field'>";
            echo "<legend>Customer Records</legend>";
            if ($result->num_rows>0){
                echo "<table id='view_enquiry_table'><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone Number</th><th>Street Address</th><th>City</th><th>State</th><th>Postcode</th><th>Shoe Model</th><th>Shoe Colour</th><th>Size</th><th>Duration</th><th>Subject</th><th>Comment</th></tr>";

                while($row = $result->fetch_assoc()){
                    echo "<tr><td>".$row["userID"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["phonenumber"]."</td><td>".$row["stradd"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["post"]."</td><td>".$row["shoemodel"]."</td><td>".$row["shoecolour"]."</td><td>".$row["size"]."</td><td>".$row["duration"]."</td><td>".$row["subject"]."</td><td>".$row["comment"]."</td></tr>";
                }
                echo "</table>";
            }else{
                echo "0 results";
            }

            echo "</fieldset>";
            mysqli_close($conn);
        ?>
    </article>

    </body>
</html>
