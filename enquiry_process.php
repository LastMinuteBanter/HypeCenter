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
        <?php include 'include/nav.php'; ?>
        <form id="search_field" action="results.php" method="GET">
                <input type="text" name="k"  placeholder="Quick Search" />
                <input id="search_btn" type="submit" value="Search" />
        </form>
    </header>

        <?php  
        $servername= "localhost";  
        $username= "root";  
        $password= "";  
        $dbname= "enquiry";  
        $err_msg = "";
        // Create connection  
        $conn= mysqli_connect($servername,$username,$password,$dbname);  
        // Check connection  
        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());  
        }else{
            echo "Successfully connected to the database\n";
            echo "<br />";
        }

        function sanitise_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if (isset($_POST['comments']) && strlen($_POST['comments'])>0) {
            $comments=$_POST['comments'];
            $comments = sanitise_input($comments);

        }else{
            $err_msg .= "<p>Please fill in the comment section</p>";
        }

        if (isset($_POST['fname']) && strlen($_POST['fname'])>0) {
            $fname=$_POST['fname'];
            $fname = sanitise_input($fname);
                if(!preg_match("/^[a-zA-Z ]{0,25}$/",$fname)){
                    $err_msg .= "<p>Only characters and apace allowed for name </p>";
                }

        }else{
            $err_msg .= "<p>Please enter a first name</p>";
        }

        if (isset($_POST['lname'])) {
            $lname=$_POST['lname'];
            $lname = sanitise_input($lname);
                if(!preg_match("/^[a-zA-Z ]{0,25}$/",$lname)){
                    $err_msg .= "<p>Only characters and apace allowed for name </p>";
                }

        }else{
            $err_msg .= "<p>Please enter a last name</p>";
        }

        if (isset($_POST['email'])) {
            $email=$_POST['email'];
            $email = sanitise_input($email);
                if(!preg_match("/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-za-zA-Z0-9.-]{1,4}$/",$email)){
                    $err_msg .= "<p>Please enter a valid email </p>";
                }

        }else{
            $err_msg .= "<p>Please enter an email</p>";
        }

        if (isset($_POST['contact'])) {
            $contact=$_POST['contact'];
            $contact = sanitise_input($contact);
                if(!preg_match("/^(\+?6?01)[0-46-9]-*[0-9]{7,8}$/",$contact)){
                    $err_msg .= "<p>Please enter a valid phone number </p>";
                }

        }else{
            $err_msg .= "<p>Please enter an phone nunber</p>";
        }

        if (isset($_POST['stradd'])) {
            $stradd=$_POST['stradd'];
            $stradd = sanitise_input($stradd);
                if(!preg_match("/^[a-zA-Z0-9\s,.'-]{3,40}$/",$stradd)){
                    $err_msg .= "<p>Please enter a valid address </p>";
                }

        }else{
            $err_msg .= "<p>Please enter an address</p>";
        }


        if (isset($_POST['town'])) {
            $town=$_POST['town'];
            $town = sanitise_input($town);
                if(!preg_match("/^[a-zA-Z ]{0,20}$/",$town)){
                    $err_msg .= "<p>Please enter a valid town name/p>";
                }

        }else{
            $err_msg .= "<p>Please enter a town name</p>";
        }

        if (isset($_POST['state'])) {
            $state=$_POST['state'];
            $state = sanitise_input($state);

        }else{
            $err_msg .= "<p>Please enter a state name</p>";
        }

        if (isset($_POST['postcode'])) {
            $postcode=$_POST['postcode'];
            $postcode = sanitise_input($postcode);
            if(!preg_match("/^[0-9]{5}$/",$postcode)){
                $err_msg .= "<p>Please enter a valid postcode/p>";
            }

        }else{
            $err_msg .= "<p>Please enter a postcode</p>";
        }

        if (isset($_POST['shoemodel'])) {
            $shoemodel=$_POST['shoemodel'];
            $shoemodel = sanitise_input($shoemodel);

        }else{
            $err_msg .= "<p>Please enter a postcode</p>";
        }

        if (isset($_POST['shoecolour'])) {
            $shoecolour=$_POST['shoecolour'];
            $shoecolour = sanitise_input($shoecolour);
            if(!preg_match("/^(?=.*\d)(?=.*[a-zA-Z]).{2,}$/",$shoecolour)){
                $err_msg .= "<p>Please enter a valid shoe colour name/p>";
            }

        }else{
            $err_msg .= "<p>Please enter a shoe colour name</p>";
        }

        if (isset($_POST['shoesize'])) {
            $shoesize=$_POST['shoesize'];
            $shoesize = sanitise_input($shoesize);

        }else{
            $err_msg .= "<p>Please enter a shoe size</p>";
        }

        if (isset($_POST['duration'])) {
            $duration=$_POST['duration'];
            $duration = sanitise_input($duration);

        }else{
            $err_msg .= "<p>Please enter a duration</p>";
        }

        if (isset($_POST['subject'])) {
            $subject=$_POST['subject'];
            $subject = sanitise_input($subject);

        }else{
            $err_msg .= "<p>Please enter a Subject</p>";
        }

        
            
        if ($err_msg==""){

            $sql= "INSERT INTO enquiry (firstname, lastname, email, phonenumber, stradd, city, state, post, shoemodel, shoecolour,size, duration, subject, comment)          
            VALUES ('$fname', '$lname', '$email','$contact', '$stradd', '$town', '$state', '$postcode', '$shoemodel', '$shoecolour', '$shoesize', '$duration', '$subject', '$comments')";
             if(mysqli_query($conn,$sql)){
                echo "New record created successfully\n";  
            }else{
                echo "Error: " .$sql. "<br>" . mysqli_error($conn);  
            }
        }else{
            echo $err_msg;
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

        <footer>
            <?php include 'include/footer.php'; ?>
        </footer>
    </body>
</html>
