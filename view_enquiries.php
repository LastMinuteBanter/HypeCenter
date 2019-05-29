<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="utf-8"/>
            <title>View Enquiries</title>
            <link rel="stylesheet" type="text/css" href="styles/style.css"/>
            <link rel="icon" href="images/HypeIcon.jpg"/>
            <script src="script/enhancement.js"></script>
    </head>
    <body class="confirm_page">
    <header>
        <?php include 'include/nav.php'; ?>
        <form id="search_field" action="results.php" method="GET">
                <input type="text" name="k"  placeholder="Quick Search" />
                <input id="search_btn" type="submit" value="Search" />
        </form>
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
                echo "Successfully connected to the database\n";
                echo "<br />";
            }

            $sql = "SELECT * FROM enquiry";
            $result = mysqli_query($conn,$sql);

            echo "<h1 id='enquiry-us'>VIEW ENQUIRIES</h1>";
            echo "<fieldset id='view_enquiry_field'>";
            echo "<legend>Customer Records</legend>";
            if ($result){
                echo "<table id='view_enquiry_table'>";
                echo "<tr><th>ID</th>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Email</th>";
                echo "<th>Phone Number</th>";
                echo "<th>Street Address</th>";
                echo "<th>City</th>";
                echo "<th>State</th>";
                echo "<th>Postcode</th>";
                echo "<th>Shoe Model</th>"; 
                echo "<th>Shoe Colour</th>";
                echo "<th>Size</th>";
                echo "<th>Duration</th>"; 
                echo "<th>Subject</th>";
                echo "<th>Comment</th></tr>";

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr><td>".$row["userID"]."</td>";
                    echo "<td>".$row["firstname"]."</td>";
                    echo "<td>".$row["lastname"]."</td>";
                    echo "<td>".$row["email"]."</td>";
                    echo "<td>".$row["phonenumber"]."</td>";
                    echo "<td>".$row["stradd"]."</td>";
                    echo "<td>".$row["city"]."</td>";
                    echo "<td>".$row["state"]."</td>";
                    echo "<td>".$row["post"]."</td>";
                    echo "<td>".$row["shoemodel"]."</td>";
                    echo "<td>".$row["shoecolour"]."</td>";
                    echo "<td>".$row["size"]."</td>";
                    echo "<td>".$row["duration"]."</td>";
                    echo "<td>".$row["subject"]."</td>";
                    echo "<td>".$row["comment"]."</td></tr>";
                }
                echo "</table>";
            }else{
                echo "0 results";
            }

            echo "</fieldset>";
            mysqli_close($conn);
        ?>
    </article>

    <footer>
        <?php include 'include/footer.php'; ?>
    </footer>

    </body>
</html>
