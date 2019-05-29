<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <title>Vans Sk8 Hi Pro Supreme Green Skull Pile</title>
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
            $shoename = "Vans green Skull";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>

        <section class="product-img">
            <h2>Vans Sk8 Hi Pro Supreme Green Skull Pile</h2>
                <img src="images/vansgreen1.jpg" id="img01"  alt="supreme green right">
                <img src="images/vansgreen2.jpg" id="img02"  alt="supreme green top">
                <img src="images/vansgreen3.jpg" id="img03"  alt="supreme green left">
                <img src="images/vansgreen4.jpg" id="img04"  alt="supreme green back">
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
                <p>For the Spring/Summer 2018 Supreme and Vans partnership, the collaboration took things in a scary direction when both companies collaborated on this Sk8-Hi featuring the classic “Skull Pile” graphic which is a popular motif in hip-hop in the mid-2000’s. On the sneaker, it can be seen that the green skulls are spread across the canvas upper on the Supreme x Vans Sk8-Hi.</p>
                <p>This sneaker was released along side other items in the Spring/Summer collection such as trousers, low top vans and many more featuring the green skull pile imprint all over the apparel and footwear. This sneaker was only available throughout selected Supreme outlets all over the world and they were also released on Supreme’s very own website at a given time that was announced on social media and the sneakers were only available in limited quantities.</p>
                <p> Customers who queued up outside the store before the drop of the sneakers were told to only purchase a pair each due to limited quantities in order and to give others a fair chance to purchase it. For those who missed out on the official release date of these sneakers are looking at having to pay resell in order to get their hands on this rare collaborative version of the Hi Top Vans with Supreme. Read more <a href="https://www.stadiumgoods.com/vans-sk8-hi-pro-supreme-skull-pile-vn000vhg3fw" target="_blank">here.</a></p>
                <!--The info and image was taken from https://www.stadiumgoods.com/vans-sk8-hi-pro-supreme-skull-pile-vn000vhg3fw-->

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