<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <title>Levi’s Air Jordan 4</title>
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
        <?php 
        $servername= "localhost";  
        $username= "root";  
        $password= "";  
        $dbname= "rating_system"; 
        $shoename = "Levi AJ 4";
        // Create connection  
         $conn= mysqli_connect($servername,$username,$password,$dbname);    
                    
        ?>
    </header>

        <section class="product-img">
            <h2>Levi's Air Jordan 4</h2>
                <img src="images/levisright.jpg" id="img01"  alt="Levi shoe right">
                <img src="images/leviside.jpg" id="img02"  alt="levi shoe side">
                <img src="images/levisback.jpg" id="img03"  alt="levi shoe back">
                <img src="images/levisbottom.jpg" id="img04"  alt="levi shoe bottom">
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
                <p>Due to the huge success of the original Levi’s x  Air Jordan 4 blue denim colourway, the two brands have come together again by releasing a black denim version of the sneaker and is called the Levi’s x Air Jordan 4 “Black”. This sneaker is created using the iconic American made material which covers up the upper and the midsole of the sneaker. The outsole of the sneaker is made out of rubber gum.This has been the 2nd collaboration that Levis has done with Jordan brand by Nike and their last collaboration has dated back to the early 2000’s, where Levis and Jordan brand by Nike released their first capsule collection back in 2004. </p>
                <p>The latest collection consist of the Levis Jordan 4 sneakers  that are available in the black denim colourway, a blue denim colourway and last but not least a clean white denim colourway was also released prior to this collaboration. Other apparels such as t shirts and jackets were also released based on the theme of this collaboration. The black denim version has the lowest expensive out of the three colourways released based on the resell market value. Even though it’s resell value is low, its value is placed at a whopping amount of at least $US300 and at least $US415 for the blank Levi’s tag version of the sneaker. Read more <a href="https://www.stadiumgoods.com/air-jordan-4-retro-nrg-260267" target="_blank">here.</a>
                </p>
                <!--The image and info was taken from https://www.stadiumgoods.com/air-jordan-4-retro-nrg-260267-->

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
