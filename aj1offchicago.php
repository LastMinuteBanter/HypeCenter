<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <title>AJ1 Off White Chicago</title>
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
            $shoename = "AJ1 Off White Chicago"; //Assign the product name to this variable
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
            ?>
    </header>
   

        <section class="product-img">
            <h2>Nike AJ1 OFF-White Chicago</h2>
                <img src="images/offwhiteaj1-right.jpg" id="img01"  alt="Off white right">
                <img src="images/offwhiteaj1-side.jpg" id="img02"  alt="Off white side">
                <img src="images/offwhiteaj1-back.jpg" id="img03"  alt="Off white back">
                <img src="images/offwhiteaj1-bottom.jpg" id="img04"  alt="Off white bottom">
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
                <p>The Air Jordan One OFF WHITE CHICAGO One’s sneaker is an updated version of the original Nike Air Jordan 1 Chicago Colourway and this version of the sneaker was created and designed by fashion designer Virgil Abloh and is called the Off - White Air Jordan 1 Chicago and is part of Nike’s “THE TEN” collection. The sneaker features exposed foams, the signature red off white zip tie and the stitched Nike Swoosh logo. This sneaker is known as one of the most hyped and most coveted sneakers of all time. The Air Jordan 1 model was the very first Air Jordan sneaker created when world famous basketball player Michael Jordan announced his partnership with giant shoe company Nike to release sneakers under his name.</p>
                <p>The Air Jordan 1 model remains as the most iconic sneaker in sneaker history and is declared the pioneer of the sneaker trend dating way back to the year 1985. The number 85 can be found inside the sneaker to represent the original date when Michael showcased this particular sneaker on a live NBA match back in 1985. However, Michael received a penalty for wearing the sneakers without authorisation as back then in the NBA, players were only allowed to wear a specific shoe that has to be uniform among all the players in the team. Virgil has created a masterpiece and has made a great product to pay homage to the original model. Resell value for this sneaker is currently sitting at $US3000 dollars and there seems to be no decline in it’s resell value anytime soon. Read more <a href="https://www.stadiumgoods.com/the-10-air-jordan-1" target="_blank">here.</a></p>
                <!--The info and image was taken from https://www.stadiumgoods.com/the-10-air-jordan-1 -->

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
                    //Query the database to find the records that are limited to the specific shoe
                    $find_comments = mysqli_query($conn,"SELECT * from user_ratings WHERE shoe='$shoename' ");

                    //While loop to continue creating the block of reviews
                    while($row = mysqli_fetch_assoc($find_comments)){

                        //fetch the values for each row
                        $name = $row['username'];
                        $comment = $row['Comment'];
                        $rating = $row['rating'];

                        //Creates a field set containing a paragraph with different ratings and comments from different records
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
