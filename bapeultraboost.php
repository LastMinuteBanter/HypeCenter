<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css"/>
        <link rel="icon" href="images/HypeIcon.jpg"/>
        <title>Bape Ultraboost</title>
        <meta name="viewport" content="width=device-width, initial-scale-1.0"/>
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
            $shoename = "Bape Ultraboost";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>
    

        
        <section class="product-img">
            <h2>Adidas BAPE Ultraboost</h2>
                <img src="images/adidas_bape_left.jpg" id="img01"  alt="bape left view"/>
                <img src="images/adidas_bape_right.jpg" id="img02"  alt="bape right view"/>
                <img src="images/adidas_bape_back.jpg" id="img03"  alt="bape back view"/>
                <img src="images/adidas_bape_top.jpg" id="img04"  alt="bape top view"/>
        </section>

        <div id="image_modal" class="modal">

                <!-- The Close Button -->
                <span class="close">&#215;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img_content" src="image" alt="image"/> <!--The src is placed with a null value in order to be html compliant-->

                <!-- Modal Caption (Image Text) -->
                <div id="caption"></div>
        </div>

        <article class="sneakers-description">
                <h1>Background Information</h1>
                <p>The BAPE Ultraboost sneaker features a PrimeKnit in BAPE’s signature green camo. BAPE is a popular streetwear brand in Japan and is continuing to grow without any sign of stopping as of now. The three stripes branding on the sides of the shoe are covered in a shade of white and the Boost midsole and the outsole, made by using Continental, is in black. The sneaker was released on the 2nd of February 2019, in collaboration with this year’s Super Bowl event. The adidas branding on the left shoe tongue is detailed in gold. A lot of hype was created around this sneaker as Adidas was constantly promoting this sneaker on social media especially on Instagram whereby many celebrities were seen wearing the sneaker in promotional videos for the upcoming superbowl event. Famous artists such as Snoop Dogg, Quavo from the Migos and many more were involved in advertising the upcoming Bape X Adidas UltraBoost collaboration. The sneakers were only released in limited quantities and the resell value of these sneakers are hiking as days pass by. The sneaker was released in two colourways, the classic green BAPE camo and a black camo version. The green camo version of the sneaker is sitting at least at a resell value of $US370 as of now. The retail price of this sneaker was originally priced at an amount of $US250 dollars. Read more <a href="https://sneakernews.com/tag/adidas-yeezy-boost-700/" target="_blank">here.</a></p>
                <!--This information was taken from https://www.highsnobiety.com/p/bape-adidas-ultra-boost-release-date-price/-->

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