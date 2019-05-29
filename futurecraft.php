<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css" />
        <link rel="icon" href="images/HypeIcon.jpg"/>
        <title>Futurecraft</title>
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
            $shoename = "Futurecraft";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>

        <section class="product-img">
            <h2>Adidas Futurecraft</h2>
                <img src="images/adidas_future_left.jpg" id="img01"  alt="futurecraft left view"/>
                <img src="images/adidas_future_right.jpg" id="img02"  alt="futurecraft right view"/>
                <img src="images/adidas_future_back.jpg" id="img03"  alt="futurecraft back view"/>
                <img src="images/adidas_future_top.jpg" id="img04"  alt="futurecraft top view"/>
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
                <p>The highly anticipated Adidas Future Craft Daniel Arsham is a collaboration sneaker between Adidas and New York City’s very own contemporary artist, Daniel Arsham. The sneaker features a Primeknit upper material created by Adidas in an aero green colourway. The Futurecraft midsole of the sneaker is created by using digital light synthesis and the colour is the same as its upper while the outsole of the sneaker is made from Continental Rubber. The 4D technology that was used in this particular sneaker has only been used a couple of times by Adidas on limited one of a kind pairs of sneakers.</p>
                <p> As of now, the latest sneaker from Adidas to use this technology was the Yohji Yamamoto 4D Red Runner. Other sneakers that were seen using this technology were the Adidas ZX 400, the Adidas 4D Y3 Runner and last and  not least, the Adidas Futurecraft itself. Adidas is currently planning on using this technology in hopes of one day having the ability whereby customers would be able to walk straight into an outlet and create their very own custom sneaker in store with the 4D light synthesis printing technology whereby a machine would then print out the custom sneaker for their customers in only a matter of minutes. Read more <a href="https://www.highsnobiety.com/p/daniel-arsham-adidas-futurecraft-4d-release-date-price/" target="_blank">here.</a></p>
                <!--This information was taken fromhttps://www.highsnobiety.com/p/daniel-arsham-adidas-futurecraft-4d-release-date-price/-->

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