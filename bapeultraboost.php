<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css"/>
        <link rel="icon" href="images/HypeIcon.jpg"/>
        <title>Bape Ultraboost</title>
        <meta name="viewport" content="width=device-width, initial-scale-1.0"/>
        <script src="script/script.js"></script>
    </head>
    <body>
    <header>
        <?php include 'include/nav.php'; ?>
        <?php $servername= "localhost";  
            $username= "root";  
            $password= "";  
            $dbname= "rating_system";  
            $shoename = "Bape Ultraboost";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>

        
        <section class="product-img">
            <h2>Adidas BAPE Ultraboost</h2>
                <img src="images/adidas_bape_left.jpg" id="img01"  alt="bape left view"/>
                <img src="images/adidas_bape_right.jpg" id="img02"  alt="bape right view"/>
                <img src="images/adidas_bape_back.jpg" id="img03"  alt="bape back view"/>
                <img src="images/adidas_bape_top.jpg" id="img04"  alt="bape top view"/>
        </section>

        <div id="image_modal" class="modal">

                <!-- The Close Button -->
                <span class="close">&#215;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img_content" src="image" alt="image"/> <!--The src is placed with a null value in order to be html compliant-->

                <!-- Modal Caption (Image Text) -->
                <div id="caption"></div>
        </div>

        <article class="sneakers-description">
                <h1>Background Information</h1>
                <p>The BAPE Ultraboost sneaker features a PrimeKnit in BAPE’s signature green camo. BAPE is a popular streetwear brand in Japan and is continuing to grow without any sign of stopping as of now. The three stripes branding on the sides of the shoe are covered in a shade of white and the Boost midsole and the outsole, made by using Continental, is in black. The sneaker was released on the 2nd of February 2019, in collaboration with this year’s Super Bowl event. The adidas branding on the left shoe tongue is detailed in gold. A lot of hype was created around this sneaker as Adidas was constantly promoting this sneaker on social media especially on Instagram whereby many celebrities were seen wearing the sneaker in promotional videos for the upcoming superbowl event. Famous artists such as Snoop Dogg, Quavo from the Migos and many more were involved in advertising the upcoming Bape X Adidas UltraBoost collaboration. The sneakers were only released in limited quantities and the resell value of these sneakers are hiking as days pass by. The sneaker was released in two colourways, the classic green BAPE camo and a black camo version. The green camo version of the sneaker is sitting at least at a resell value of $US370 as of now. The retail price of this sneaker was originally priced at an amount of $US250 dollars. Read more <a href="https://sneakernews.com/tag/adidas-yeezy-boost-700/" target="_blank">here.</a></p>
                <!--This information was taken from https://www.highsnobiety.com/p/bape-adidas-ultra-boost-release-date-price/-->

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
                </div>
        </article>


        <aside>
                <ul>
                    <li>Adidas
                        <ol>
                            <li><a href="yeezytrueform.php" >Adidas Yeezy True Form</a></li>
                            <li><a href="yeezywaverunner.php">Adidas Yeezy Wave Runner</a></li>
                            <li><a href="nmdsolarhu.php">Adidas Solar HU</a></li>
                            <li><a href="bapeultraboost.php" class="active">Adidas BAPE Ultraboost</a></li>
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
                                <li><a href="vansmastermind.php">Vans x Mastermind x KITH</a></li>
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