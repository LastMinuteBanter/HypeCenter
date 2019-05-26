<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css" />
        <link rel="icon" href="images/HypeIcon.jpg"/>
        <title>Solar HU</title>
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
            $shoename = "Solar HU";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>

        
        <section class="product-img">
            <h2>Adidas NMD Solar HU</h2>
                <img src="images/adidas_solar_hu_left.jpg" id="img01"  alt="solar hu left"/>
                <img src="images/adidas_solar_hu_right.jpg" id="img02"  alt="solar hu right"/>
                <img src="images/adidas_solar_hu_back.jpg" id="img03"  alt="solar hu back"/>
                <img src="images/adidas_solar_hu_top.png" id="img04"  alt="solar hu top"/>
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
                <p>The Pharrell William’s  Solar Hu Glide “Chinese New Year” is another collaboration sneaker between Adidas and artist Pharrell Williams. The sneaker comes with a bright red mesh upper that is in contrast with black overlaying panels, with a thick outsole, “HU” branding on the toe box of the sneaker as well as thick rope laces. The colourway of this sneaker was released in conjunction with the Chinese New Year celebration. The Pharrell Williams Solar Hu Glide sneaker has a totally different looked when compared to the Pharrell Williams Human Race NMD. This sneaker has a resemblance towards the Adidas Ultraboost. </p>
                    
                <p>The Pharrell Williams Solar Hu Glide also features boost material as its midsole material and the retail value of this sneaker is around $US150. The sneaker was released recently in the month of January 2019 before the start of the celebration for Chinese New Year. Pharrell created this sneaker from the inspiration he obtained from his experience of the Lunar New Year Celebration. This sneaker alongside the Pharrell Williams Human Race NMD were one of the most unique sneakers produced by Adidas for Pharrell as there are not many sneakers in the market that have taken inspiration from celebrations that have been celebrated in Asia. Read more <a href="https://www.highsnobiety.com/p/solar-hu-adidas-chinese-new-year-release-date-price/" target="_blank">here.</a></p>
                <!--This information was taken from https://www.highsnobiety.com/p/solar-hu-adidas-chinese-new-year-release-date-price/-->

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
                            <li><a href="nmdsolarhu.php" class="active">Adidas Solar HU</a></li>
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