<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <title>Vans x Mastermind x KITH</title>
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
            $shoename = "Vans Mastermind";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>

        <section class="product-img">
            <h2>Vans x Mastermind x KITH</h2>
                <img src="images/mtd1.jpg" id="img01" alt="Mtd right">
                <img src="images/mtd2.jpg" id="img02" alt="Mtd top">
                <img src="images/mtd3.jpg" id="img03" alt="Mtd left">
                <img src="images/mtd4.jpg" id="img04" alt="Mtd back">
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
                <p>The highly anticipated Kith x Mastermind x Vans Sk8-Hi “Black” is a limited edition sneaker that has been created throughout an amazing collaboration that has given a premium makeover to the classic vans sneaker. Well known and popular New York based retailer, Kith has teamed up with popular Japanese streetwear label Mastermind and Vans in 2019 for a premium capsule collection, which including this luxe Sk8-Hi.</p>
                <p>This sneaker features a premium nubuck upper in an all black with embossed “Peace on Earth/World on Fire” text on the side stripes and branding on the ankle below the metal skull and crossbones. More details include waxed rope laces, text molded into the midsoles, and a skeleton graphic on the waffle outsole. This model was released early at the beginning of this year in the month of January of 2019. Few other pairs of this sneaker model were released as part of this collection in low top versions of this sneaker as well as in another brown colourway.</p>  
                <p>This sneaker was only available at KITH outlets available worldwide as well as on their online retail store and were only available in very limited quantities. Regarding the purchasing information on the sneakers, the sneakers were sold on a first come first serve basis but customers were only given a choice of being able to only purchase 2 sneaker models out of 4 that were available at launch in order to give other customers a chance to purchase it from the limited edition capsule collection. Read more <a href="https://www.stadiumgoods.com/sk8-hi-46-mte-dx-vn0a3dq5uq4-mte-space-voygr-tw-mrsh" target="_blank">here.</a></p>
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