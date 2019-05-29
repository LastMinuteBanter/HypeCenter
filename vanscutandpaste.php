<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <title>Vans Sk8 Hi “Cut and Paste”</title>
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
            $shoename = "vans cut and paste";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>

        <section class="product-img">
            <h2>Vans Sk8 Hi "Cut and Paste"</h2>
                <img src="images/vans1.jpg" id="img01"  alt="cut and paste right">
                <img src="images/vans2.jpg" id="img02"  alt="cut and paste top">
                <img src="images/vans3.jpg" id="img03"  alt="cut and paste left">
                <img src="images/vans4.jpg" id="img04"  alt="cut and paste back">
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
                <p>The Vans Sk8-Hi “Cut and Paste” colourway was released as part of a special collection that delivers a deconstructed aesthetic look and direction to the renowned skate shoe. New designs include the mostly pony hair, the moody-hued sneaker features leather detailing and Vans' signature checkerboard pattern.</p>
                <p>Colours of black and grey cover the upper of the sneaker while a white sole and red “cut and paste” Off The Wall rubber tag provides contrast to the sneaker. Finally, the Vans Sk8-Hi is finished with a side zipper for easy entry. This particular model has given a breathe of fresh for Vans as they were able to introduce an aesthetic looking sneaker for their customers and a lot of hype was created till the official release of the sneaker. </p>
                <p> Many have speculated that the idea of this sneaker was inspired by Virgil Abloh’s take on the Nike “THE TEN COLLECTION” where Virgil decided to take a brand new take on the sneakers by giving them a more deconstructive and prototype look which gives a more unique look towards the sneaker. </p>
                <p>Such as an example, one sneaker that could be compared to this particular Vans model is the Off- White Converse that was recently released back in 8th October 2018 and both sneakers in common do produce a deconstructive and prototype feel after you take a look at them at first glance. Read more <a href="https://www.stadiumgoods.com/sk8-hi-46-mte-dx-vn0a3dq5uq4-mte-space-voygr-tw-mrsh" target="_blank">here.</a></p>
                <!--The info and image was taken from https://www.stadiumgoods.com/sk8-hi-46-mte-dx-vn0a3dq5uq4-mte-space-voygr-tw-mrsh-->

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