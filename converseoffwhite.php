<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <title>OffWhite x Chuck Taylor</title>
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
            $shoename = "OffWhite x Chuck Taylor";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>

        <section class="product-img">
            <h2>OffWhite x Chuck Taylor</h2>
                <img src="images/converse_offwhite_ct_right.jpeg" id="img01"  alt="offwhite right">
                <img src="images/converse_offwhite_ct_top.jpeg" id="img02"  alt="offwhite top">
                <img src="images/converse_offwhite_ct_left.jpeg" id="img03"  alt="offwhite left">
                <img src="images/converse_offwhite_ct_back.jpeg" id="img04"  alt="offwhite back">
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
                <p>The Off- White x Converse Chuck 70 Hi  is the very first iteration of the iconic Converse sneaker designed by Virgil Abloh himself, the founder of Off White, a well known and uprising fashion brand from France. In this iteration of the sneaker, transparent materials used for this iteration of the sneaker apart from the 2.0 version of “The Ten” Collection. The sneaker features a a clear like see through upper that replsce the classic and original canvas upper that is featured on the original Converse High Top sneakers.The sneaker is then completed with a clear see through vulcanised outsole with the word Vulcanized in quotations. The sneaker also features Off White’s iconic  ziptie and the imprint of the word “SHOELACES” can be seen on the shoelaces of the sneaker.</p>
                <p> The first iteration of the Off -White version of this sneaker is considered as one of the most expensive Converse sneakers to ever exist with an estimated resell value of at least $US883 to US$4000 for a pair. The prices differ depending on size availability and due to limited quantities. The only way this shoe could be purchased was through an online drop from selected retailers and official Off White stores around the world. The second version of the original Off White Converse that was released has a much more affordable resell value compared to the first iteration of the Off White converse which is currently sitting at a resell value of at least $US365 to be exact. Read more <a href="https://www.stadiumgoods.com/chuck-70-hi-162204c-clear-white-white" target="_blank">here.</a></p>
                <!--The info and image was taken from https://www.stadiumgoods.com/chuck-70-hi-162204c-clear-white-white-->

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
                                 <li><a href="converseoffwhite.php" class="active">OffWhite x Chuck Taylor</a></li>
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
