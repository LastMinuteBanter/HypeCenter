<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <title>Vans Sk8 Hi Pro Supreme Checkboard</title>
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
            $shoename = "Vans Supreme Checkboard";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>

        <section class="product-img">
                <h2>Vans Sk8 Hi Pro Supreme Checkboard</h2>
                <img src="images/vansspr1.jpg" id="img01"  alt="Checkboard right">
                <img src="images/vansspr2.jpg" id="img02"  alt="checkboard top">
                <img src="images/vansspr3.jpg" id="img03"  alt="checkboard left">
                <img src="images/vansspr4.jpg" id="img04"  alt="checkboard back">
        </section>

        <div id="image_modal" class="modal">

                <!-- The Close Button -->
                <span class="close">&times;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img_content" src="image" alt="image"/>

                <!-- Modal Caption (Image Text) -->
                <div id="caption"></div>
        </div>

        <article class="sneakers-description">
                <h1>Background Information</h1>
                <p>For this particular sneaker, not many details have been given for the Supreme Checkboard Vans sneaker but this particular colourway has been one of the most highly unanticipated and very sought after collaborations that Vans has released in a very long time. Based on the images given, the sneaker features a checkboard upper with the Supreme logo branding imprinted around the upper of the sneaker.</p>
                <p>It was released without any news from Supreme and many speculate it was a marketing strategy developed by Supreme to generate hype around this sneaker. As of now, it is rare to see anyone using this particular sneaker and is considered a rare gem as many who collect items from Supreme have decided to keep the pair they have in mint condition as part of their very own Supreme Collection. The resell value of this sneaker is sitting at a price of at least $US600 for a pair with no signs of its price declining anytime soon. </p>
                <p> Moreover, a red version of this Hi top sneaker was also released alongside two other low top versions of this model that are also available either in the black and white colourway or the red and white colourway. This particular pair is considered as one of the most hyped sneakers that Vans has produced. Read more <a href="https://www.stadiumgoods.com/sk8-hi-reissue-pr-vn0a38z3jlw-black-white" target="_blank">here.</a></p>
                <!--The info and image was taken from https://www.stadiumgoods.com/sk8-hi-reissue-pr-vn0a38z3jlw-black-white-->

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