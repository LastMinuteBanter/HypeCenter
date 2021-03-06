<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css"/>
        <link rel="icon" href="images/HypeIcon.jpg"/>
        <title>Nike Air Jordan 13 Terracotta Warrior</title>
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
            $shoename = "Nike Air Jordan 13 Terracotta Warrior";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>
    

        <section class="product-img">
            <h2>Nike AJ13 Terracotta Warrior</h2>
                <img src="images/aj13right.jpg" id="img01"  alt="Air Jordan 13 right">
                <img src="images/aj13side.jpg" id="img02"  alt="Air Jordan 13 side">
                <img src="images/aj13back.jpg" id="img03"  alt="Air Jordan 13 back">
                <img src="images/aj13bottom.jpg" id="img04"  alt="Air Jordan 13 bottom">
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
                <p>The CLOT x Air Jordan 13 Low “Terracotta Warrior” is a unique sneaker created throughout the collaboration between co-founder of CLOT, Edison Chen. The design was inspired by his youth where he spent between Canada and Hong Kong. He created the top of the sneaker to mimic the design of the famous terracotta warrior statues which he visited while on a trip in Lintong county. The sneaker features a sepia tone suede with tile texture to mimic the body armor of the terracotta warriors. The CLOT logo on each heel of the sneakers are golden metal. The sneaker’s right shoe tongue opposite the golden Jumpman logo on the left tongue, and a translucent tan rubber was utilized for the midsole and outsole for the sneaker.</p>
                <p> The sneaker was released in December of 2018 in limited quantities. The sneaker itself was only available to be purchased in Hong Kong as well as Taiwan. The resell value for these sneakers are currently sitting at $US1000. Edison Chen, the founder of CLOT himself is a famous actor from Hong Kong. This particular iteration of the Air Jordan 13 is one of the most unique versions of this sneaker to be created as of now and also considered one of the rarest Air Jordan 13’s to be released. Singer Justin Timberlake was the only American celebrity that was seen wearing an early pair of the sneaker while attending an NBA match in Los Angeles back in 2018. Read more <a href="https://www.stadiumgoods.com/air-jordan-13-retro-low-nrg-ct-at3102-200-sepia-tone-terra-blush" target="_blank">here.</a></p>
                <!--The info and image was taken from https://www.stadiumgoods.com/air-jordan-13-retro-low-nrg-ct-at3102-200-sepia-tone-terra-blush-->

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
