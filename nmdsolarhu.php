<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css" />
        <link rel="icon" href="images/HypeIcon.jpg"/>
        <title>Solar HU</title>
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
            $shoename = "Solar HU";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>

        
        <section class="product-img">
            <h2>Adidas NMD Solar HU</h2>
                <img src="images/adidas_solar_hu_left.jpg" id="img01"  alt="solar hu left"/>
                <img src="images/adidas_solar_hu_right.jpg" id="img02"  alt="solar hu right"/>
                <img src="images/adidas_solar_hu_back.jpg" id="img03"  alt="solar hu back"/>
                <img src="images/adidas_solar_hu_top.png" id="img04"  alt="solar hu top"/>
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
                <p>The Pharrell William’s  Solar Hu Glide “Chinese New Year” is another collaboration sneaker between Adidas and artist Pharrell Williams. The sneaker comes with a bright red mesh upper that is in contrast with black overlaying panels, with a thick outsole, “HU” branding on the toe box of the sneaker as well as thick rope laces. The colourway of this sneaker was released in conjunction with the Chinese New Year celebration. The Pharrell Williams Solar Hu Glide sneaker has a totally different looked when compared to the Pharrell Williams Human Race NMD. This sneaker has a resemblance towards the Adidas Ultraboost. </p>
                    
                <p>The Pharrell Williams Solar Hu Glide also features boost material as its midsole material and the retail value of this sneaker is around $US150. The sneaker was released recently in the month of January 2019 before the start of the celebration for Chinese New Year. Pharrell created this sneaker from the inspiration he obtained from his experience of the Lunar New Year Celebration. This sneaker alongside the Pharrell Williams Human Race NMD were one of the most unique sneakers produced by Adidas for Pharrell as there are not many sneakers in the market that have taken inspiration from celebrations that have been celebrated in Asia. Read more <a href="https://www.highsnobiety.com/p/solar-hu-adidas-chinese-new-year-release-date-price/" target="_blank">here.</a></p>
                <!--This information was taken from https://www.highsnobiety.com/p/solar-hu-adidas-chinese-new-year-release-date-price/-->

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