<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <title>Dr.Woo x Chuck Taylor 'white'</title>
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
            $shoename = "Converse Dr Woo";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>

        <section class="product-img">
            <h2>Dr Woo x Chuck Taylor Converse “White”</h2>
                <img src="images/converse_drwoochuckt_right.jpg" id="img01"  alt="drwoo  right">
                <img src="images/converse_drwoochuckt_top.jpg" id="img02"  alt="drwoo  top">
                <img src="images/converse_drwoochuckt_left.jpg" id="img03"  alt="drwoo  left">
                <img src="images/converse_drwoochuckt_back.jpg" id="img04"  alt="drwoo back">
        </section>

        <div id="image_modal" class="modal">

                <!-- The Close Button -->
                <span class="close">&#215;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img_content" src="image" alt="">

                <!-- Modal Caption (Image Text) -->
                <div id="caption"></div>
        </div>

        <article class="sneakers-description">
                <h1>Background Information</h1>
                <p>This edition of the Chuck Taylor Converse is a collaboration between Converse and Hollywood tattoo artist, Dr Woo. The sneaker features a distressed blank canvas that strips off, uncovering the second layer of the sneaker covered with vintage prints and pop colours inspired by LA’s street culture. Dr Woo showcases his love for the outdoors and the rebellious spirit of counterculture youth in his second collaboration with Converse. Besides that, Dr Woo has also created many small fan meetups and pop up stores where Dr Woo would be present during the event so that he could meet his fans and show his gratitude towards his fans. He would sign autographs for his fans and he would make time for a meet and greet session with ever single one of his fans that turned up at this event.</p>
                <p> The sneaker basically comes in white and it has been created that on purpose so that customers could have the opportunity to customise their sneaker however they would like to unleash their creativity as well as the same time creating their very own custom Dr Woo Chuck Taylor Converse sneaker and they could share it across social media platforms to share their creativity with others who share the same interest and passion with one another across the world. Read more <a href="http://www.allstarchucks.com/Converse-x-Dr.-Woo-Chuck-Taylor-All-Star-70-High-White.html" target="_blank">here.</a></p>
                <!--The info and image was taken from http://www.allstarchucks.com/Converse-x-Dr.-Woo-Chuck-Taylor-All-Star-70-High-White.html-->

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
