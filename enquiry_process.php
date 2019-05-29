<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="utf-8"/>
            <title>Enquiry Submission</title>
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

        //Remove HTML characters
        function sanitise_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        //Checks if the comments are set to a variable, is not null and it is filled
        if (isset($_POST['comments']) && strlen($_POST['comments'])>0) {
            $comments=$_POST['comments']; //assigns the comment variable from the form to another variable
            $comments = sanitise_input($comments); //runs the sanitise function

        }else{
            $err_msg .= "<p>Please fill in the comment section</p>"; //Add to error message if does not fullfill the criteria
        }

        //Checks if the fname is set to a variable, is not null and it is filled
        if (isset($_POST['fname']) && strlen($_POST['fname'])>0) {
            $fname=$_POST['fname'];//assigns the fname variable from the form to another variable
            $fname = sanitise_input($fname);//runs the sanitise function
                if(!preg_match("/^[a-zA-Z ]{0,25}$/",$fname)){ //Test if it fulfills the RegEx
                    $err_msg .= "<p>Only characters and apace allowed for name </p>"; //Add error message if it does not
                }

        }else{
            $err_msg .= "<p>Please enter a first name</p>";//Add to error message if does not fullfill the criteria
        }


    //Checks if the lname is set to a variable and is not null 
        if (isset($_POST['lname'])) {
            $lname=$_POST['lname'];//assigns the lname variable from the form to another variable
            $lname = sanitise_input($lname);//runs the sanitise function
                if(!preg_match("/^[a-zA-Z ]{0,25}$/",$lname)){//Test if it fulfills the RegEx
                    $err_msg .= "<p>Only characters and apace allowed for name </p>";//Add error message if it does not
                }

        }else{
            $err_msg .= "<p>Please enter a last name</p>";
        }


//Checks if the email is set to a variable and is not null 
        if (isset($_POST['email'])) {
            $email=$_POST['email'];//assigns the email variable from the form to another variable
            $email = sanitise_input($email);//runs the sanitise function
                //Test if it fulfills the RegEx
                if(!preg_match("/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-za-zA-Z0-9.-]{1,4}$/",$email)){
                    $err_msg .= "<p>Please enter a valid email </p>";//Add error message if it does not
                }

        }else{
            $err_msg .= "<p>Please enter an email</p>";
        }


        //Checks if the contact is set to a variable and is not null 
        if (isset($_POST['contact'])) {
            $contact=$_POST['contact'];//assigns the contact variable from the form to another variable
            $contact = sanitise_input($contact);//runs the sanitise function
                if(!preg_match("/^(\+?6?01)[0-46-9]-*[0-9]{7,8}$/",$contact)){//Test if it fulfills the RegEx
                    $err_msg .= "<p>Please enter a valid phone number </p>";//Add error message if it does not
                }

        }else{
            $err_msg .= "<p>Please enter an phone nunber</p>";
        }

        //Checks if the stradd is set to a variable and is not null 
        if (isset($_POST['stradd'])) {
            $stradd=$_POST['stradd'];//assigns the stradd variable from the form to another variable
            $stradd = sanitise_input($stradd);//runs the sanitise function
                if(!preg_match("/^[a-zA-Z0-9\s,.'-]{3,40}$/",$stradd)){//Test if it fulfills the RegEx
                    $err_msg .= "<p>Please enter a valid address </p>";//Add error message if it does not
                }

        }else{
            $err_msg .= "<p>Please enter an address</p>";
        }

        //Checks if the town is set to a variable and is not null 
        if (isset($_POST['town'])) {
            $town=$_POST['town'];//assigns the town variable from the form to another variable
            $town = sanitise_input($town);//runs the sanitise function
                if(!preg_match("/^[a-zA-Z ]{0,20}$/",$town)){//Test if it fulfills the RegEx
                    $err_msg .= "<p>Please enter a valid town name/p>";//Add error message if it does not
                }

        }else{
            $err_msg .= "<p>Please enter a town name</p>";
        }


        //Checks if the state is set to a variable and is not null 
        if (isset($_POST['state'])) {
            $state=$_POST['state'];//assigns the state variable from the form to another variable
            $state = sanitise_input($state);//runs the sanitise function

        }else{
            $err_msg .= "<p>Please enter a state name</p>";
        }

         //Checks if the postcode is set to a variable and is not null 
        if (isset($_POST['postcode'])) {
            $postcode=$_POST['postcode'];//assigns the postcode variable from the form to another variable
            $postcode = sanitise_input($postcode);//runs the sanitise function
            if(!preg_match("/^[0-9]{5}$/",$postcode)){//Test if it fulfills the RegEx
                $err_msg .= "<p>Please enter a valid postcode/p>";
            }

        }else{
            $err_msg .= "<p>Please enter a postcode</p>";
        }

         //Checks if the shoemodel is set to a variable and is not null 
        if (isset($_POST['shoemodel'])) {
            $shoemodel=$_POST['shoemodel'];//assigns the shoemodel variable from the form to another variable
            $shoemodel = sanitise_input($shoemodel);//runs the sanitise function
            //This method is specially added since some of the product names contain apostrophes in them
            //This method helps to encode the string into an escaped mysql string
            $shoemodel = mysqli_real_escape_string($conn,$shoemodel);

        }else{
            $err_msg .= "<p>Please enter a postcode</p>";
        }

        //Checks if the shoecolour is set to a variable and is not null 
        if (isset($_POST['shoecolour'])) {
            $shoecolour=$_POST['shoecolour'];//assigns the shoecolour variable from the form to another variable
            $shoecolour = sanitise_input($shoecolour);//runs the sanitise function
            //Test if it fulfills the RegEx
            if(!preg_match("/^(?=.*\d)(?=.*[a-zA-Z]).{2,}$/",$shoecolour)){
                $err_msg .= "<p>Please enter a valid shoe colour name/p>";
            }

        }else{
            $err_msg .= "<p>Please enter a shoe colour name</p>";
        }

            //Checks if the shoesize is set to a variable and is not null 
        if (isset($_POST['shoesize'])) {
            $shoesize=$_POST['shoesize'];//assigns the shoesize variable from the form to another variable
            $shoesize = sanitise_input($shoesize);//runs the sanitise function

        }else{
            $err_msg .= "<p>Please enter a shoe size</p>";
        }

        //Checks if the duration is set to a variable and is not null 
        if (isset($_POST['duration'])) {
            $duration=$_POST['duration'];//assigns the duration variable from the form to another variable
            $duration = sanitise_input($duration);//runs the sanitise function

        }else{
            $err_msg .= "<p>Please enter a duration</p>";
        }


        //Checks if the subject is set to a variable and is not null 
        if (isset($_POST['subject'])) {
            $subject=$_POST['subject'];//assigns the subject variable from the form to another variable
            $subject = sanitise_input($subject);//runs the sanitise function
            //This method is specially added since some of the product names contain apostrophes in them
            //This method helps to encode the string into an escaped mysql string
            $subject = mysqli_real_escape_string($conn,$subject);

        }else{
            $err_msg .= "<p>Please enter a Subject</p>";
        }

        
        // if there is no error message
        if ($err_msg==""){
            #query to insert the values into the enquiry table
            $sql= "INSERT INTO enquiry(firstname, lastname, email, phonenumber, stradd, city, state, post, shoemodel, shoecolour, size, duration, subject, comment) VALUES('$fname', '$lname', '$email','$contact', '$stradd', '$town', '$state', '$postcode', '$shoemodel', '$shoecolour', '$shoesize', '$duration', '$subject', '$comments')";
             

             if(mysqli_query($conn,$sql)){ # if successfully inserted, return a message saying successful
                echo "New record created successfully\n";  
            }else{
                echo "Error: " .$sql. "<br>" . mysqli_error($conn);#else return an error message
            }
        }else{
            #If there are error messages(s), show the error messages
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
