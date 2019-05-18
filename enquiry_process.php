<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="utf-8"/>
            <title>Enquiry Summary</title>
            <link rel="stylesheet" type="text/css" href="styles/style.css"/>
            <link rel="icon" href="images/HypeIcon.jpg"/>
            <script src="script/enhancement.js"></script>
    </head>
    <body>
    <header>
        <nav>
            <a href="index.html"><img src="images/HypeCentre.jpg" alt="HypeCenter logo"/></a>
        </nav>
        </header>

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

        $fname=$_POST['fname'];  
        $lname = $_POST['lname'];
        $email=$_POST['email'];  
        $contact=$_POST['contact'];
        $stradd=$_POST['stradd'];
        $town=$_POST['town'];
        $state=$_POST['state'];
        $postcode=$_POST['postcode'];
        $shoemodel = $_POST['shoemodel'];
        $shoecolour = $_POST['shoecolour'];
        $shoesize = $_POST['shoesize'];
        $duration = $_POST['duration'];
        $subject = $_POST['subject'];
        $comments = $_POST['comments'];

        $sql= "INSERT INTO enquiry (firstname, lastname, email, phonenumber, stradd, city, state, post, shoemodel, shoecolour,size, duration, subject, comment)          
        VALUES ('$fname', '$lname', '$email','$contact', '$stradd', '$town', '$state', '$postcode', '$shoemodel', '$shoecolour', '$shoesize', '$duration', '$subject', '$comments')";

        if(mysqli_query($conn,$sql)){
            echo "New record created successfully\n";  
        }else{
            echo "Error: " .$sql. "<br>" . mysqli_error($conn);  
        }
        ?>

        <article id="enquiry-page">
                <h1 id="enquiry-us">ENQUIRIES SUMMARY</h1>

            <div id="form-background">
                <form id="confirm_survey" method="post" novalidate="novalidate">
                    <fieldset id="personal_details_field">
                        <legend>Personal Details:</legend>
                        <p>First Name: <?php echo $fname; ?></p>
                        <p>Last Name: <?php echo $lname; ?></p>
                        <p>Email: <?php echo $email; ?></p>
                        <p>Mobile Number: <?php echo $contact; ?></p> 
                    </fieldset>

                    <fieldset id="customer_address">
                        <legend>Address</legend>
                        <p>Street Address: <?php echo $stradd; ?></p>
                        <p>City/Town: <?php echo $town; ?></p>
                        <p>State: <?php echo $state; ?></p>
                        <p>Postcode: <?php echo $postcode; ?></p>
                    </fieldset>
                    
                    <fieldset id="shoe_model_field">
                        <legend> Shoe model and details </legend>
                        <p>Shoe Model: <?php echo $shoemodel; ?></p>
                        <p>Colourway of shoe: <?php echo $shoecolour; ?></p>
                        <p>Size(US): <?php echo $shoesize; ?></p>
                        <p>Rental Duration (Days): <?php echo $duration; ?></p>
                            
                    </fieldset>
                    
                    <fieldset>
                        <legend>Comment Section</legend>
                        <p>Subject: <?php echo $subject; ?></p>
                        <p>Description:<?php echo $comments; ?></p>
                        	
                    </fieldset>                    
                    </form>
                </div>
                <?php mysqli_close($conn);?>
        </article>
    </body>
</html>
