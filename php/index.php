<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css" />
        <link rel="icon" href="images/HypeIcon.jpg"/>
        <title>HypeCenter</title>
        <meta name="viewport" content="width=device-width, initial-scale-1.0"/>
        <script src="script/enhancement.js"></script>
    </head>

    <body>
        
        <header>
            <?php include 'include/nav.php'; ?>

            <div class=" v-header">

                <div class="fullscreen-video-wrap">   <!--This is the div for the video layer-->           
                    <video src="hypecentermontage.mp4" autoplay="" loop="" controls muted>
                    </video>
                </div>

                <div class="header-overlay"></div><!--This is the div for the darken layer-->
            
                <div class="header-content"><!--This is the div containing the logo and banner content-->
                    <img src="images/HypeCentre.jpg" alt="HypeCentre Logo"/>
                    <h1>HERE COMES THE HYPE!</h1> 
                    <p>Always wanted to wear those cool sneakers but can't afford to buy them?<br>Why buy when you can rent! <br><span>Now everyone can FLEX!</span></p>
                </div>
                    
            </div>
        </header>

        <article>
            <div class="about-company">
                <h2>Who are we?</h2>
                <img src="images/HypeCentre.jpg" alt="HypeCenter logo">
            <div id="about-company-content">
                <p>HypeCenter was established in 2019 with the idea of growing the Sneakerhead community in Malaysia!</p>
                <p> <span>Problem:</span> The high selling price of specialty sneakers fends away some parts of the Sneakerhead community and makes them feel left behind</p>
                <p><span>Our Solution:</span> Rent the shoes! Some sneakerheads just want to try some of these specialty sneakers and style them with their daily outfits. Therefore, we are here to make their dreams a reality!</p>
                <p><a href="abouthypecenter.html" target="_blank">Learn More!</a></p>
            </div>
            </div>
        </article>

        <section id="promotional-card-container">
                <div class="promotional-card">
                        <h2>Events</h2>
                        <img src="images/event_image.jpg" alt="Events"/>
                        <p>We're always open for events!<br><br><a href="enquiry.php" target="_blank">Enquire</a></p>
                    </div>

            <div class="promotional-card">
                <h2>Promotional Item</h2>
                <img src="images/yeezystrueform.jpg" alt="Yeezy True Form"/>
                <p>Check out our latest offerings! <br><br><a href="adidas.html" target="_blank">CHECK IT OUT</a></p>
            </div>

            <div class="promotional-card">
                <h2>Vouchers</h2>
                <img src="images/voucher.jpg" alt="voucher"/>
                <p>Keep an eye out for our vouchers here!<br><br><a href="enquiry.php" target="_blank">Learn More</a></p>
            </div>
    </section>
    

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
    </body>
</html>