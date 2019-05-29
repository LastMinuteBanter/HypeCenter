<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <title>CDG x Chuck Taylor 1970 Low 'play'</title>
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
            $shoename = "Converse CDG Taylor Low";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>

        <section class="product-img">
            <h2>CDG x Chuck Taylor 1970 Low 'play'</h2>
                <img src="images/converse_cdg_chuck_lowplay_right.jpg" id="img01"  alt="CDG right">
                <img src="images/converse_cdg_chuck_lowplay_top.jpg" id="img02"  alt="CDG side">
                <img src="images/converse_cdg_chuck_lowplay_left.jpg" id="img03"  alt="CDG left">
                <img src="images/converse_cdg_chuck_lowplay_back.jpg" id="img04"  alt="CDG back">
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
                <p>The Comme Des Garcons Play x Converse Chuck Taylors Low top is a low top iteration of the classic Hi Top Chuck Taylor Converse. Similar to the Hi Top version of the CDG (Comme Des Garcons) iteration of this sneaker, it features a white ‘Milk’ upper and features a graphic print of CDG’s signature heart logo with eyes which can be seen peeking from the midsole and the heel. Besides that, the classic All Star Converse logos can be found on the ankles of the sneaker and a black canvas type panel is added to the heels to give it contrast. The eyelets of the sneaker can be seen in silver and a black canvas stripe is place down to the heel to complete the design.</p>
                <p>This sneaker is completely similar to the the Hi Top version of the sneaker that has been mentioned before. This sneaker was also showcased on a runway show for the CDG x Converse collection during Paris Fashion Week back in the year 2018. This particular sneaker has also given life back to the low top version of the Chuck Taylor sneaker model thanks to its fresh new take and makeover by Rei Kawakubo towards this sneaker model. It is truly a modern take on a classic shoe, bringing back life to it in a way it has never been done before. The design of the sneaker is simple but yet attractive. Read more <a href="https://www.stadiumgoods.com/chuck-70-cdg-play-150207c-milk-white-high-risk-red" target="_blank">here.</a></p>
                <!--The info and image was taken from https://www.stadiumgoods.com/chuck-70-cdg-play-150207c-milk-white-high-risk-red -->

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
