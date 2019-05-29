<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css" />
        <link rel="icon" href="images/HypeIcon.jpg"/>
        <title>NMD CNY GOLD</title>
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
        <?php   
                    $servername= "localhost";  
                    $username= "root";  
                    $password= "";  
                    $dbname= "rating_system"; 
                    $shoename = "NMD CNY GOLD";
                    // Create connection  
                    $conn= mysqli_connect($servername,$username,$password,$dbname); 
        ?>
    </header>

        <section class="product-img">
            <h2>Adidas Pharell NMD CNY GOLD</h2>
                <img src="images/adidas_pharell_left.jpg" id="img01"  alt="nmd cny left"/>
                <img src="images/adidas_pharell_right.jpg" id="img02"  alt="nmd cny right"/>
                <img src="images/adidas_pharell_back.jpg" id="img03"  alt="nmd cny back"/>
                <img src="images/adidas_pharell_top.jpg" id="img04"  alt="nmd cny top"/>
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
                <p>The China Exclusive Pharrell Gold Human Race sneaker features a large text embroidered onto the upper of the shoe in both Chinese and English. The “Happy” (Gold) colourway of this sneaker has been set to a limited “friends and family” release and only 300 pairs available worldwide. Besides that, the sneaker comes with lacing cages and soles that are in white. Besides the gold colourway, there are other colourways featured in the collection such as red, green, blue and white. These colourways are a China exclusive release. The only way of managing to get a pair is by buying them from resellers which are selling these particular pairs at aftermarket pricing with expected prices to be hiking up to $US700 per pair depending on sizing and availability. </p>
                    
                <p>The aftermarket prices are extremely high due to high demand and limited quantities available at launch. These sneakers were only purchasable throughout raffles at participating. outlets Customers who win the raffle would be then be able to purchase the sneakers at retail. The Pharrell Williams Human Race NMD is a recrafted version of the original NMD’s that were released in 2014 where Pharrell decided to come up with his own design and vision towards the sneaker but maintaining a couple of the main and original features of the original NMD in order to maintain its formality with the name of the sneaker model. Read more <a href="https://hypebeast.com/2018/4/pharrell-adidas-nmd-hu-china-exclusive" target="_blank">here.</a></p>
                <!--THis info was taken from https://hypebeast.com/2018/4/pharrell-adidas-nmd-hu-china-exclusive-->

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