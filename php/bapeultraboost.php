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

                <p><a class="enquirebutton" href="enquiry.php" onclick="return validateClick()">RENT NOW!</a></p>
        </article>


        <aside>
                <ul>
                    <li>Adidas
                        <ol>
                            <li><a href="yeezytrueform.html">Adidas Yeezy True Form</a></li>
                            <li><a href="yeezywaverunner.html">Adidas Yeezy Wave Runner</a></li>
                            <li><a href="nmdsolarhu.html">Adidas Solar HU</a></li>
                            <li><a href="bapeultraboost.html" class="active">Adidas BAPE Ultraboost</a></li>
                            <li><a href="nmdcnygold.html">Adidas Pharell NMD HU CNY GOLD</a></li>
                            <li><a href="futurecraft.html">Adidas Futurecraft</a></li>
                        </ol>
                    </li>
                    <li>
                        Nike
                        <ol>
                             <li><a href="leviaj4.html">Levi's Air Jordan 4</a></li>
                             <li><a href="aj1offchicago.html">Nike AJ1 OFF-White Chicago</a></li>
                             <li><a href="airmax.html">Air Max 1/97 Sean Wotherspoon</a></li>
                             <li><a href="aj4travis.html">Nike AJ4 Travis Scott</a></li>
                             <li><a href="airyeezy2.html">Nike Air Yeezy 2 Red Octobers</a></li>
                             <li><a href="aj13.html">Nike AJ13 Terracotta Warrior</a></li>
                         </ol>
                    </li>
                    <li>
                            Converse
                            <ol>
                                 <li><a href="conversecdg.html">Converse CDG X Chuck Taylor 1970 Low 'play'</a></li>
                                 <li><a href="converseCDGHigh.html">Converse CDG x Chuck Taylor HI</a></li>
                                 <li><a href="converseallstart.html">Converse Chuck Taylor AllStar(hi Top Sunflower Yellow)</a></li>
                                 <li><a href="conversedrwoo.html">Dr.Woo x Chuck Taylor 'white'</a></li>
                                 <li><a href="converseoffwhite.html">OffWhite x Chuck Taylor</a></li>
                                 <li><a href="converseintangible.html">Converse Intangible</a></li>
                             </ol>
                        </li>
                        <li>
                                Vans
                            <ol>
                                <li><a href="vansgreen.html">Vans Sk8 Hi Pro Supreme Green Skull Pile</a></li>
                                <li><a href="vanscheckboard.html">Vans Sk8 Hi Pro Supreme Checkboard</a></li>
                                <li><a href="vansnasa.html">Vans Sk8 Hi 46 MTE DX Nasa Space Voyager</a></li>
                                <li><a href="vansmastermind.html">Vans x Mastermind x KITH</a></li>
                                <li><a href="vansmountain.html">Fear of God Vans Mountain Edition 35 DX</a></li>
                                <li><a href="vanscutandpaste.html">Vans Sk8 Hi “Cut and Paste”</a></li>
                            </ol>
                        </li>
                </ul>
            </aside> 
            <footer>
            <div class="footer_list">     
                <ul>
                    <li><a href="abouthypecenter.html">About HypeCenter</a></li>
                    <li><a href="enquiry.php">Enquire Products</a></li>
                    <li><a href="enhancements.html"> Enhancements</a></li>
                </ul>   
            </div>
            <div class="footer_list">
                    <ul>
                        <li><a href="enhancements2.html">Assignment 2 Enhancements</a></li>
                    </ul>
            </div>
        
                <div id="brand-logo-footer">
                    <a href="adidas.html"><img src="images/adidas.png" alt="adidas logo"/></a>
                    <a href="nike.html"><img src="images/nikelogo.png" alt="nike logo"/></a>
                    <a href="converse.html"><img src="images/converse.png" alt="converse logo"/></a>
                    <a href="vans.html"><img src="images/vanslogo.jpg" alt="vans logo"/></a>
                </div>
        
                <div id="team-members">
                <h3>Team Profiles</h3>
                    <ul>
                        <li><a href="aboutalvin.html">Alvin</a></li>
                        <li><a href="aboutdesmond.html">Desmond</a></li>
                        <li><a href="aboutjoey.html">Joey</a></li>
                        <li><a href="abouthans.html">Hans</a></li>
                    </ul>
                </div>
                        
                <div id="copyright">
                    <p>&#169;2019 Kiwano | <a href="disclaimer.html">Disclaimer</a> | Last Updated: 8/5/2019</p>
                </div>
                
            </footer>
            <script src="script/enhancement.js"></script>
            </body>
</html>