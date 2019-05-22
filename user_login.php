<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="utf-8"/>
            <title>Product Management</title>
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

            session_start();

            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                header("location: welcome.php");
                exit;
            }

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


            // Define variables and initialize with empty values
            $username = $password = "";
            $username_err = $password_err = "";



            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $myusername = mysqli_real_escape_string($conn,$_POST['username']);
                $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 


                $sql = "SELECT userID FROM user_auth WHERE username = '$myusername' and password = '$mypassword'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                $active = $row['active'];
      
                $count = mysqli_num_rows($result);

                if($count == 1) {
                    session_register("myusername");
                    $_SESSION['login_user'] = $myusername;
                    
                    header("location: welcome.php");
                 }else {
                    $error = "Your Login Name or Password is invalid";
                 }
            }
                
                // Validate credentials
                
        ?>
        <article id="enquiry-page">
                <h1 id="enquiry-us">ENQUIRIES SUMMARY</h1>

            <div id="form-background">
                <form id="confirm_survey" method="post" novalidate="novalidate">
                    
                    <fieldset>
                        <table>
                            <tr>
                                <td><label>Username:</label></td>
                                <td><input type="text" name="username" id="username"/></td>
                            </tr>
                            <tr>
                                <td><label>Password:</label></td>
                                <td><input type="password" name="password" id="password"/></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Login"/></td>
                            </tr>
                        </table>
                    </fieldset>                    
                    </form>
                </div>
                <?php mysqli_close($conn);?>
        </article>
    </body>
</html>
