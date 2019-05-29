<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <title>Nike AJ4 Travis Scott</title>
        <meta name="viewport" content="width=device-width, initial-scale-1.0">
        <script src="script/script.js"></script>
    </head>
    <body>
    <header>
        <?php include 'include/nav.php'; ?>
        <form id="search_field" action="results.php" method="GET">
            <input type="text" name="k"  placeholder="Quick Search" />
            <input id="search_btn" type="submit" value="Search" />
        </form>
        <?php
            $servername= "localhost";  
            $username= "root";  
            $password= "";  
            $dbname= "rating_system"; 
            $shoename = "Nike AJ4 Travis Scott";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
            ?>
    </header>
    

        <section class="product-img">
            <h2>Nike Air Jordan 4 Travis Scott</h2>
                <img src="images/travisright.jpg" id="img01"  alt="AJ4 Travis right">
                <img src="images/travisside.jpg" id="img02"  alt="AJ4 Travis side">
                <img src="images/travisback.jpg" id="img03"  alt="AJ4 Travis back">
                <img src="images/travisbottom.jpg" id="img04"  alt="AJ4 Travis bottom">
        </section>

        <div id="image_modal" class="modal">

                <!-- The Close Button -->
                <span class="close">&#215;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img_content" src="image" alt="image"/>

                <!-- Modal Caption (Image Text) -->
                <div id="caption"></div>
        </div>


        <article class="sneakers-description">
                <h1>Background Information</h1>
                <p>The Air Jordan 4 Cactus Jack, or also known as the Air Jordan 4 Travis Scott is sneaker that represents a collaboration between hip hop artist Travis Scott, record label founder and Houston sports fan enthusiast. The colourway features red, white and light blue which represents the design of the Houston football. The details on the heel counter and the inside of tongue of the shoe pays homage to the rapper and his label, Cactus Jack records.  The sneaker is currently sitting at a very high resell value of at least $US446 dollars and is a great increase from its original retail price of $US225. The prices are hiking due to sizing availability and high demand.</p>
                <p>A friends and family version of this sneaker was released and that particular version of the sneaker has some light changes to the sneaker will cost up to at least thousands of dollars as the friends and family editions are special editions of the sneaker that were given to the workers who were involved in this creation of the sneaker as well as the friends and family members of Travis Scott. This particular model was one of the most hyped sneakers of 2018. The sneaker was released on the 9th of June 2018 and has still remained as one of the most hyped sneakers till now. Read more <a href="https://www.stadiumgoods.com/air-jordan-4-retro-269051" target="_blank">here.</a></p>
                <!--The info and image was taken from https://www.stadiumgoods.com/air-jordan-4-retro-269051-->

                <table>
                        <tr>
                            <th>Size Available (US Chart) </th>
                            <td>7, 8, 9, 10</td>
                        </tr>
                </table>

                <p><a class="enquirebutton" href="enquiry.php" onclick="return validateClick()">RENT NOW!</a></p>
<form id="rating_form" action="include/post_rating.php" method="POST">
                <fieldset>
                    <legend>Rate this product!</legend>
                    <input type="hidden" name="shoe" value="<?php echo $shoename; ?>"> 
                    <label for="rating">Rate Product (1-5 stars):</label>
                    <input id="rating" type="range" name="rating" min="1" max="5">
                    <br/>
                    <label for="name">Name:</label>
                    <input id="name" type="text" name="name" placeholder="Your name" />
                    <br/>
                    <textarea name="comment" placeholder="Enter your Comment (Max : 100 Characters)"></textarea>
                    <br/>
                    <input type="submit" value="Post"/>
                </fieldset>
                </form>

                <h3>Other Customer Ratings</h3>
                <div id="user_ratings">
                <?php    

                    $find_comments = mysqli_query($conn,"SELECT * from user_ratings WHERE shoe='$shoename' ");
                    while($row = mysqli_fetch_assoc($find_comments)){
                        $name = $row['username'];
                        $comment = $row['Comment'];
                        $rating = $row['rating'];

                        echo "<fieldset>";
                        echo "<p><em>$name</em> rated it <strong>$rating Star(s)</strong>  <br/>Comment: $comment</p>";
                        echo "</fieldset>";
                    }
                    mysqli_close($conn);
                ?>
				
                </div>
        </article>

        <aside>
            <?php include 'include/product_aside.php'; ?> 
        </aside>
        <footer>
            <?php include 'include/footer.php'; ?>
                
        </footer>
            <script src="script/enhancement.js"></script>
            </body>
</html>
