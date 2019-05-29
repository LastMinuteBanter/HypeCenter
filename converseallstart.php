<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <title>Converse Chuck All Star</title>
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
        
        <?php $servername= "localhost";  
            $username= "root";  
            $password= "";  
            $dbname= "rating_system"; 
            $shoename = "Converse Chuck All Star";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>
    

        <section class="product-img">
            <h2>Converse Chuck Taylor AllStar (hi Top Sunflower Yellow)</h2>
                <img src="images/converse_ctas_sun_right.png" id="img01"  alt="Allstar right">
                <img src="images/converse_ctas_sun_top.png" id="img02"  alt="Allstar top">
                <img src="images/converse_ctas_sun_left.png" id="img03"  alt="Allstar left">
                <img src="images/converse_ctas_sun_back.png" id="img04"  alt="Allstar back">
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
                <p>The Converse All Star Chuck ’70 is a recreation that uses modern details to pay homage to the original Chuck Taylor All Star from the 1970s. The sneaker features a slightly higher rubber foxing, a cushioned footbed is used to provide long-lasting comfort, a yellow canvas upper which represents its colourway, “Sunflower” and a more substantial rubber toe cap. In addition to that, vintage details can be seen on the sneaker, such as the stitching on the sidewall of the sneaker and a heavier-grade canvas upper for comfort and durability. The iconic Chuck Taylor details such as the star-centered ankle patch and the vulcanised rubber outsole are incorporated into the design of this sneaker as well.</p>
                <p>This sneaker can only be purchased on the American Converse website and customers who are willing to purchase the sneaker would have to pay resell for the sneaker as it is a region exclusive sneaker to United States and cannot be found outside of the United States of America. The iteration of this sneaker is a huge improvement over the original and life has been brought back to this model thanks to brand new colourways that Converse has given towards this particular sneaker model, creating hype once more for a classic sneaker that everyone knows and love all across the globe. Read more <a href="https://crossoverconceptstore.com/products/chuck-1970-classic-hi-sunflower" target="_blank">here.</a></p>
                <!--The info and image was taken from https://crossoverconceptstore.com/products/chuck-1970-classic-hi-sunflower-->

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
