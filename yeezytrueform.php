<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css" />
        <link rel="icon" href="images/HypeIcon.jpg"/>
        <title>Yeezy True Form</title>
        <meta name="viewport" content="width=device-width, initial-scale-1.0"/>
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
            $shoename = "Yeezy True Form";
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);
        ?>
    </header>

        
            <section class="product-img">
                <h2>Adidas Yeezy True Form</h2>
                <img src="images/adidas_yeezy_tf_left.jpg" id="img01"  alt="yeezy side view"/>
                <img src="images/adidas_yeezy_tf_right.jpg" id="img02"  alt="yeezy side view"/>
                <img src="images/adidas_yeezy_tf_back.jpg" id="img03"  alt="yeezy side view"/>
                <img src="images/adidas_yeezy_tf_top.jpg" id="img04"  alt="yeezy side view"/>
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
                <p>The Yeezy 350 V2 model is a collaboration sneaker between Adidas and Kanye West. The true form colorway is a region exclusive sneaker only released in Russia, Europe and Ukraine. The sneaker features a tone of grey coming across the upper and the part of the midsole of the sneaker and the sole unit comes in an orange-tinged colour. The updated version of this sneaker also features a translucent stripe that is placed across the upper on both sides of the shoe replacing the traditional SPLY-350 wording that was featured on previous models of the Yeezy Boost 350 V2’s. </p>
                    
                <p>The V2’S are the successor to its predecessor, the YEEZY BOOST 350 that was originally released in 2015 and has been a global success as of now in the year 2019. This particular model has boosted the sales number in Adidas and has taken the number spot as the most successful sneaker company. The previous number 1 spot belonged to Nike and they have been at the number 1 spot for several years before Adidas started to hype up the market when they announced their collaboration in Kanye West in late 2014 after he had decided to end his longtime partnership with giant shoe company Nike to produce his clothing and footwear brand YEEZY SEASON. Read more <a href="https://hypebeast.com/2019/3/yeezy-boost-350-v2-trfrm-release-date-official-look" target="_blank">here.</a></p>
                <!--This info was taken from https://hypebeast.com/2019/3/yeezy-boost-350-v2-trfrm-release-date-official-look-->
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
                            <li><a href="yeezytrueform.php" class="active">Adidas Yeezy True Form</a></li>
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