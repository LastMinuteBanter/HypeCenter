<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="utf-8"/>
            <title>Enquiry</title>
            <link rel="stylesheet" type="text/css" href="styles/style.css" />
            <link rel="icon" href="images/HypeIcon.jpg"/>
            <script src="script/script.js"></script>
    </head>
    <body>
    <header>
<?php include 'include/nav.php'; ?>
</header>
        <form id="search_field" action="results.php" method="GET">
            <input type="text" name="k" value='<?php echo isset($_GET['k']) ? $_GET['k'] : ''; ?>'  placeholder="Quick Search" />
            <input id="search_btn" type="submit" name="" value="Search" />
        </form>

        <article id="enquiry-page">
                <h1 id="enquiry-us">ENQUIRIES</h1>

            <div id="form-background">
                <form id="survey" method="post" novalidate="novalidate" action="enquiryConfirm.php">
                    <fieldset id="personal_details_field">
                        <legend>Personal Details:</legend>
                        
                        <table>
                            <tr>
                                <td><label for="firstname">First Name:</label></td>
                                <td><input type = "text" name="firstname" placeholder="Your name" id="firstname" required="required" pattern="[a-zA-Z]+"/></td>
                            </tr>
                            <tr>
                                <td><label for="lastname">Last Name:</label></td>
                                <td><input type = "text" name="lastname" placeholder="Your name" id="lastname" required="required"  pattern="[a-zA-Z]+"/></td>
                            </tr>

                            <tr>
                                <td><label for="c_email">Email:</label></td>
                                <td><input type = "text" name="c_email" placeholder="Your email" id="c_email" required="required"/></td>
                            </tr>

                            <tr>
                                <td><label for="c_contact"> Mobile Number:</label></td>
                                <td><input type = "text" name="pcontact" required="required" id="c_contact"  placeholder="0123456789"/></td>
                            </tr>
                            
                            
                        </table>   
                    </fieldset>

                    <fieldset id="customer_address">
                        <legend>Address</legend>
                        <table>
                            <tr>
                                <td><label for="street_address">Street Address</label></td>
                                <td><input type="text" id="street_address" name="street_address" size="40"/></td>
                            </tr>
                            <tr>
                                <td><label for="town">City/Town: </label></td>
                                <td><input type="text" id="town" name="town" size="40"/></td>
                            </tr>
                            <tr>
                                <td><label for="state">State:</label></td>
                                <td>
                                    <select name="state" id="state">
                                        <option value="first">-Choose State-</option>
                                        <option value="Sarawak">Sarawak</option>
                                        <option value="Sabah">Sabah</option>
                                        <option value="Johor">Johor</option>
                                        <option value="Melaka">Melaka</option>
                                        <option value="N9">Negeri Sembilan</option>
                                        <option value="Pahang">Pahang</option>
                                        <option value="Selangor">Selangor</option>
                                        <option value="KL">Federal Territory of Kuala Lumpur</option>
                                        <option value="Kelantan">Kelantan</option>
                                        <option value="Terengganu">Terengganu</option>
                                        <option value="Perlis">Perlis</option>
                                        <option value="Penang">Penang</option>
                                        <option value="Kedah">Kedah</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="postcode">Postcode:</label></td>
                                <td><input type="text" name="postcode" id="postcode" pattern="\d{5}" size="40"/></td>
                            </tr>
                        </table>
                    </fieldset>
                    
                    <fieldset id="shoe_model_field">
                        <legend> Shoe model and details </legend>
                            
                            <table>
                                <tr>
                                    <td><label for="shoe1_model">Shoe model:</label></td>      
                                    <td>
                                        <select name="shoe1_model" id="shoe1_model">
                                            <option value="first">-Choose One-</option>
                                            <optgroup label="Adidas">
                                        </optgroup>
                                        </select>
                                    </td>
                                </tr>
                            
                                <tr>
                                    <td><label for="shoe1_colour_way">Colourway of shoe :</label></td>
                                    <td><input type="text" id="shoe1_colour_way" name="shoe1_colour_way" placeholder="Example: Beluga 2.0"/></td>
                                </tr>

                                <tr>
                                    <td ><label for="shoe1_size">Size (US):</label></td>
                                    <td><input type="text" name="shoe1_size" id="shoe1_size"/></td>
                                </tr>

                                <tr>
                                    <td><label for="duration">Rental duration (days):</label></td>
                                    <td><input type="text" name="duration" id="duration"/></td>
                                </tr>
                            </table> 
                            
                            <br>
                            
                        </fieldset>
                    
                    <fieldset>
                        <legend>Comment Section</legend>
                            <p>If you have any enquiries on how our rental services work such as more details on pricing and terms and conditions, please do fill in the comment section below.</p>
                            <label for="subject">Subject: </label>
                            <input type="text" id="subject" name="subject" size="90"/>
                            <br/>
                        <label>Enter description below:
                            <br/>
                            <textarea name="comments" id="comments" placeholder="Enter your comments here"  cols="80" rows="10"></textarea>
                        </label>	
                    </fieldset>

                    <input type="reset" value="Reset"/>
                    <input type="submit" value="Submit"/>
                    
                    </form>
                </div>
        </article>

        <footer>
            <?php include 'include/footer.php'; ?>
        </footer>
    </body>
</html>