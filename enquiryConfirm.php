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

        <?php
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email=$_POST['c_email'];  
        $contact=$_POST['pcontact'];
        $stradd=$_POST['street_address'];
        $town=$_POST['town'];
        $state=$_POST['state'];
        $postcode=$_POST['postcode'];
        $shoemodel = $_POST['shoe1_model'];
        $shoecolour = $_POST['shoe1_colour_way'];
        $shoesize = $_POST['shoe1_size'];
        $duration = $_POST['duration'];
        $subject = $_POST['subject'];
        $comments = $_POST['comments'];
        ?>


        <article id="enquiry-page">
                <h1 id="enquiry-us">ENQUIRIES SUMMARY</h1>

            <div id="form-background">
                <form id="confirm_survey" method="post" novalidate="novalidate" action="enquiry_process.php">
                        <input type="hidden" name="fname" value="<?php echo $fname; ?>"> 
                        <input type="hidden" name="lname" value="<?php echo $lname;?>"> 
                        <input type="hidden" name="email" value="<?php echo $email;?>">
                        <input type="hidden" name="contact" value="<?php echo $contact; ?>"> 
                        <input type="hidden" name="stradd" value="<?php echo $stradd;?>"> 
                        <input type="hidden" name="town" value="<?php echo $town;?>">
                        <input type="hidden" name="state" value="<?php echo $state; ?>"> 
                        <input type="hidden" name="postcode" value="<?php echo $postcode;?>"> 
                        <input type="hidden" name="shoemodel" value="<?php echo $shoemodel;?>">
                        <input type="hidden" name="shoecolour" value="<?php echo $shoecolour; ?>"> 
                        <input type="hidden" name="shoesize" value="<?php echo $shoesize;?>"> 
                        <input type="hidden" name="duration" value="<?php echo $duration;?>">
                        <input type="hidden" name="subject" value="<?php echo $subject; ?>"> 
                        <input type="hidden" name="comments" value="<?php echo $comments;?>"> 
                    <fieldset id="personal_details_field">
                        <legend>Personal Details:</legend>
                        <p>First Name: <span id="confirm_fname"></span></p>
                        <p>Last Name: <span id="confirm_lname"></span></p>
                        <p>Email: <span id="confirm_email"></span></p>
                        <p>Mobile Number: <span id="confirm_number"></span></p> 
                    </fieldset>

                    <fieldset id="customer_address">
                        <legend>Address</legend>
                        <p>Street Address: <span id="confirm_str"></span></p>
                        <p>City/Town: <span id="confirm_town"></span></p>
                        <p>State: <span id="confirm_state"></span></p>
                        <p>Postcode: <span id="confirm_postcode"></span></p>
                    </fieldset>
                    
                    <fieldset id="shoe_model_field">
                        <legend> Shoe model and details </legend>
                        <p>Shoe Model: <span id="confirm_shoe"></span></p>
                        <p>Colourway of shoe: <span id="confirm_colour"></span></p>
                        <p>Size(US): <span id="confirm_size"></span></p>
                        <p>Rental Duration (Days): <span id="confirm_duration"></span></p>
                            
                    </fieldset>
                    
                    <fieldset>
                        <legend>Comment Section</legend>
                        <p>Subject: <span id="confirm_subject"></span></p>
                        <p>Description:<span id="confirm_desc"></span></p>
                        	
                    </fieldset>

                    <input type="reset" value="Cancel" id="cancel_survey" onclick="cancel_book()"/>
                    <input type="submit" value="Confirm" />
                    
                    </form>
                </div>
        </article>
        
    </body>
</html>
