<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <title>Converse CDG x Chuck Taylor HI</title>
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
            $shoename = "Converse CDG x Chuck Taylor HI";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>

        <section class="product-img">
            <h2>Converse CDG x Chuck Taylor HI</h2>
                <img src="images/cdghightop_right.png" id="img01"  alt="CDG right">
                <img src="images/cdghightop_topview.jpeg" id="img02"  alt="CDG top">
                <img src="images/cdghightop_back.png" id="img03"  alt="CDG back">
                <img src="images/cdghightop_left.png" id="img04"  alt="CDG bottom">
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
                <p>The Comme Des Garcons Play  x  Converse Chuck Taylors Hi is a very popular collaborative version of the classic sneaker by the world famous fashion house. The CDG (Comme Des Garcons) iteration of this sneaker feature a white ‘Milk’ upper and features a graphic print of CDG’s signature heart logo in red with eyes which can be seen peeking from the midsole and the heel. The classic All Star Converse logos can be found on the ankles of the sneaker and a black canvas type panel is added to the heels to give it contrast. The sneaker is then completed with a white sole unit. </p>
                <p>Comme Des Garcons is a Japanese streetwear label that was founded by Rei Kawakubo in 1973 and is based in Tokyo and also at Place Vendôme in Paris. The resell value of this sneaker is considered affordable and is currently sitting at a resell value of $US135. The CDG x Chuck Taylors were revealed during a fashion show at Paris Fashion Week back in 2018 and the shoe has been gaining a lot of attention due to its eye catching design as well as acknowledging the fact that the sneaker has been given a makeover by a high end Japanese streetwear label has made it a must have sneaker. Read more <a href="https://www.stadiumgoods.com/chuck-70-cdg-play-150205c-milk-white-high-risk-red" target="_blank">here.</a></p>
                <!--The info and image was taken from https://www.stadiumgoods.com/chuck-70-cdg-play-150205c-milk-white-high-risk-red-->

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
