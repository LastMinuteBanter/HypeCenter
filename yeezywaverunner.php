<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css" />
        <link rel="icon" href="images/HypeIcon.jpg"/>
        <title>Yeezy Wave Runner</title>
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
            $shoename = "Yeezy Wave Runner";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>

        <section class="product-img">
                <h2>Adidas Yeezy Wave Runner</h2>
                <img src="images/adidas_yeezy_wr_left.jpg" id="img01"  alt="yeezy side view"/>
                <img src="images/adidas_yeezy_wr_right.jpg" id="img02"  alt="yeezy side view"/>
                <img src="images/adidas_yeezy_wr_back.jpg" id="img03"  alt="yeezy side view"/>
                <img src="images/adidas_yeezy_wr_top.jpg" id="img04"  alt="yeezy side view"/>
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
                <p>The Yeezy 700’s is another sneaker created throughout the collaboration between Kanye West and Adidas. The sneaker is designed by Kanye West himself. The Waverunner colorway was only available exclusively through the online store called Yeezy Supply and the sneakers were only available in limited quantities. This particular sneaker happens to be one of the many sneakers that has sparked the dad shoe trend and has been becoming extremely popular among the younger generation. Other sneakers besides the YEEZY BOOST 700 that has spark the dad shoe trend are such as the Gucci Rhython and the Balenciaga Triple S were one of the very few sneakers that were considered pioneers towards this new trend.</p>
                <p> The retail price for the YEEZY BOOT 700’s were approximately $US300 and the resell market value of these sneakers are up to at least $US500 as of now depending on the rarity of the particular colourway and its size availability. The YEEZY BOOST 700 models were one of the many sneakers that were produced by Adidas for Kanye’s YEEZY SEASON fashion line up ever since his move to Adidas in late 2014. The original Waverunners were released back in November 2017. The Waverunners, or also known as the OG 700’s are one of the most rarest colourways to exist for this particular colourway as there has been no restocks so far ever since its original release back in late 2017. Read more <a href="https://sneakernews.com/tag/adidas-yeezy-boost-700/" target="_blank">here.</a></p>
                <!--THis information was taken from https://sneakernews.com/tag/adidas-yeezy-boost-700/-->

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