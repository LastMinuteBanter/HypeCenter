<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <title>Vans Sk8 Hi 46 MTE DX Nasa Space Voyager</title>
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
            $shoename = "Vans Nasa";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>

        <section class="product-img">
                <h2>Vans Sk8 Hi 46 MTE DX Nasa Space Voyager</h2>
                <img src="images/nasa1.jpg" id="img01"  alt="Nasa right">
                <img src="images/nasa2.jpg" id="img02"  alt="Nasa top">
                <img src="images/nasa3.jpg" id="img03"  alt="Nasa left">
                <img src="images/nasa4.jpg" id="img04"  alt="Nasa back">
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
                <p>The anticipated NASA x Vans Sk8-Hi MTE DX “Space Voyager - White” sneaker is the Mountain Edition of the classic Sk8-Hi in a special construction inspired by astronaut apparel. This is an official collaboration between Vans and and NASA.This sneaker features a white leather upper with exposed foam details and various NASA patches across the upper of the sneaker. Furthermore, it also features a ribbed texture on the midsole referencing the design of space boots.</p> 
                <p>This edition of the Sk8-Hi is built with extra insulation and a reverse waffle tread on the outsole has been created to improve traction of the sneakers in inclement conditions. The NASA x Vans Sk8-Hi MTE DX “Space Voyager - White” was released in limited quantities in 2018. There other colourways of the sneaker released which was in a black colourway and low top version of this sneaker were also created for this particular collection.</p>
                <p>Other items based on the NASA theme were also released such as part of the collection alongside the sneakers. Apparels that were released were such as t shirts and jackets with the NASA branding printed all over the product. Read more <a href="https://www.stadiumgoods.com/sk8-hi-46-mte-dx-vn0a3dq5uq4-mte-space-voygr-tw-mrsh" target="_blank">here.</a></p>
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