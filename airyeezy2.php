<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <title>Nike Air Yeezy 2</title>
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
            $shoename = "Nike Air Yeezy 2";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
            ?>
        </header>
        

        <section class="product-img">
            <h2>Nike Air Yeezy 2 Red October</h2>
                <img src="images/redoctoberright.jpg" id="img01"  alt="Red october right">
                <img src="images/redoctoberside.jpg" id="img02"  alt="red october side">
                <img src="images/redoctoberback.jpg" id="img03"  alt="red october back">
                <img src="images/redoctoberbottom.jpg" id="img04"  alt="Red october bottom">
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
                <p>The most hyped Nike Air Yeezy 2 in the “Red October” colourway by Kanye West marked the end of his collaborative relationship with giant shoe company Nike. This particular sneaker created the all-red movement in the sneaker world that has been constant ever since it was released originally without any warning or advertisements on the 9th of February 2014. Kanye himself debuted the sneaker while he was carrying out a live performance on “Saturday Night Live” and this sneaker has been highly sought after ever since its release.</p>
                <p> There has been many imitations of this sneaker but there is nothing that could ever replace it and it has marked the end of an all time great era in sneaker history. Resell values of the Nike Air Yeezy 2 are sitting at least 8 to 12 thousand US Dollars due to its very limited quatity as Nike has stopped producing this model ever since Kanye left his partnership with Nike for Adidas in late 2014. There were two other colourways released which were the Zen and Solar Red Nike Air Yeezys 2. This sneaker is hard to come by these days and it would be rare to spot someone rocking this particular pair of sneakers out and about. Read more <a href="https://www.stadiumgoods.com/air-yeezy-2-sp" target="_blank">here.</a></p>
                <!--The info and image was taken from https://www.stadiumgoods.com/air-yeezy-2-sp-->

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
