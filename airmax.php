<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <title>Nike Air Max 1/97</title>
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
            $shoename = "Nike Air Max 1/97";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
            ?>
        </header>
        


        <section class="product-img">
                <h2>Nike Air Max 1/97 Sean Wotherspoon</h2>
                <img src="images/swright.jpg" id="img01" alt="Air MAx right">
                <img src="images/swside.jpg" id="img02" alt="Air max side">
                <img src="images/swback.jpg"  id="img03" alt="air max back">
                <img src="images/swbottom.jpg" id="img04" alt="air max bottom">
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
                <p>The Nike Air Max 1/97 Sean Wotherspoon is a sneaker designed by Sean Wotherspoon himself as he won the Air Max Sneaker design for competing in the RevolutionAIR voting campaign in early 2017. The sneaker features a unique multi-colored  corduroy upper build which is placed on the iconic tooling of the Air Max 1. The colourway of this sneaker is unique when compared to the other Air Max 97 models and this particular colourway has given life back to the Air Max 97, creating more hype around the sneaker than ever before. The Air Max 1/97 Sean WotherSpoon’s was nominated as one of the most hyped sneakers of 2017. </p>
                    
                <p>Sean Wotherspoon is the founder of Round Two, a footwear and clothing wear reselling store in Los Angeles. Sean has taken his idea of recreating the Air Max 97 in a whole new direction and has created a huge impact on the sneaker community due to its popping and outstanding design and colourway scheme that has never been seen before on a 97 model. As of now, the Air Max 1/97 Sean Wotherspoons are currently sitting at a resell value price point of at least $US987 dollars.  This sneaker was originally released alongside other mechandise such as t shirts and caps based on the colour scheme of the Air Max Sean Wotherspoon 97 model. Read more <a href="https://www.stadiumgoods.com/nike-air-max-1-97-vf-sw-sean-wotherspoon-aj4219-400" target="_blank">here.</a></p>
                <!--The info and image was taken from https://www.stadiumgoods.com/nike-air-max-1-97-vf-sw-sean-wotherspoon-aj4219-400-->

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
