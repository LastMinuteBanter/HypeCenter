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
                <input type="text" name="k" value='<?php echo isset($_GET['k']) ? $_GET['k'] : ''; ?>'  placeholder="Quick Search" />
                <input id="search_btn" type="submit" name="" value="Search" />
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

                <p><a class="enquirebutton" href="enquiry.html" onclick="return validateClick()">RENT NOW!</a></p>
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
                    <textarea name="comment" placeholder="Enter your Comment"></textarea>
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
                <ul>
                    <li>Adidas
                        <ol>
                            <li><a href="yeezytrueform.php" >Adidas Yeezy True Form</a></li>
                            <li><a href="yeezywaverunner.php">Adidas Yeezy Wave Runner</a></li>
                            <li><a href="nmdsolarhu.php">Adidas Solar HU</a></li>
                            <li><a href="bapeultraboost.php">Adidas BAPE Ultraboost</a></li>
                            <li><a href="nmdcnygold.php">Adidas Pharell NMD HU CNY GOLD</a></li>
                            <li><a href="futurecraft.php">Adidas Futurecraft</a></li>
                        </ol>
                    </li>
                    <li>
                        Nike
                        <ol>
                             <li><a href="leviaj4.php">Levi's Air Jordan 4</a></li>
                             <li><a href="aj1offchicago.php">Nike AJ1 OFF-White Chicago</a></li>
                             <li><a href="airmax.php">Air Max 1/97 Sean Wotherspoon</a></li>
                             <li><a href="aj4travis.php">Nike AJ4 Travis Scott</a></li>
                             <li><a href="airyeezy2.php">Nike Air Yeezy 2 Red Octobers</a></li>
                             <li><a href="aj13.php">Nike AJ13 Terracotta Warrior</a></li>
                         </ol>
                    </li>
                    <li>
                            Converse
                            <ol>
                                 <li><a href="conversecdg.php">Converse CDG X Chuck Taylor 1970 Low 'play'</a></li>
                                 <li><a href="converseCDGHigh.php">Converse CDG x Chuck Taylor HI</a></li>
                                 <li><a href="converseallstart.php">Converse Chuck Taylor AllStar(hi Top Sunflower Yellow)</a></li>
                                 <li><a href="conversedrwoo.php">Dr.Woo x Chuck Taylor 'white'</a></li>
                                 <li><a href="converseoffwhite.php">OffWhite x Chuck Taylor</a></li>
                                 <li><a href="converseintangible.php">Converse Intangible</a></li>
                             </ol>
                        </li>
                        <li>
                                Vans
                            <ol>
                                <li><a href="vansgreen.php">Vans Sk8 Hi Pro Supreme Green Skull Pile</a></li>
                                <li><a href="vanscheckboard.php">Vans Sk8 Hi Pro Supreme Checkboard</a></li>
                                <li><a href="vansnasa.php">Vans Sk8 Hi 46 MTE DX Nasa Space Voyager</a></li>
                                <li><a href="vansmastermind.php" class="active">Vans x Mastermind x KITH</a></li>
                                <li><a href="vansmountain.php">Fear of God Vans Mountain Edition 35 DX</a></li>
                                <li><a href="vanscutandpaste.php">Vans Sk8 Hi “Cut and Paste”</a></li>
                            </ol>
                        </li>
                </ul>
            </aside> 
            <footer>
                <?php include 'include/footer.php'; ?>
                
            </footer>
            <script src="script/enhancement.js"></script>
            </body>
</html>