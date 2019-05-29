<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <title>Converse Star Player Low “Intangibles”</title>
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
            $shoename = "Intangibles";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>

        <section class="product-img">
            <h2>Converse Star Player Low “Intangibles”</h2>
                <img src="images/converse_spli_right.jpeg" id="img01" alt="Intangible right">
                <img src="images/converse_spli_top.jpeg"  id="img02" alt="Intangible top">
                <img src="images/converse_spli_left.jpeg" id="img03" alt="Intangible left">
                <img src="images/converse_spli_back.jpeg" id="img04" alt="Intangible back">
        </section>

            <!-- Div for modal of image gallery -->
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
                <p>Converse has released a special edition of its Star Player Low sneaker in a colourway that honors the hardwork and determination of Wes Unseld in the 1978 NBA Finals. After being sweptback in 1971 and 1975, Unseld would play a key role in winning a championship in game seven against the Seattle Supersonics. The game was ended by two free throws from Unseld on his way to the Finals MVP honors. This particular sneaker features an upper canvas in an off white and blue colourway and touches of red can be found on areas of the sneaker such as the classic star logo, the heel tab, the midsole piping of the sneaker and the tongue branding.</p>
                <p> Moreover,the collection’s sixteen tally in gold is also added onto the white midsole of the sneaker. The sneaker was released on 17th May 2018 and was only available in very limited quantities only. As of now, this particular sneaker is rarely seen on the streets as this particular sneaker is considered to be a very valuable collectible item that could be worth thousands one day in the future. Moreover, this sneaker also gives a vintage vibe look and feel due to its inspiration taken from the 70’s that has been implemented into the design of this sneaker. Read more <a href="https://hypebeast.com/2018/5/converse-star-player-low-intangibles-release-date " target="_blank">here.</a></p>
                <!--The info and image was taken from https://hypebeast.com/2018/5/converse-star-player-low-intangibles-release-date -->

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
