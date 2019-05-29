<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Rent Converse Shoes</title>
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <script src="script/enhancement.js"></script>
    </head>

    <body>
        <header>
            <?php include 'include/nav.php'; ?>
            <form id="search_field" action="results.php" method="GET">
                <input type="text" name="k"  placeholder="Quick Search" />
                <input id="search_btn" type="submit" value="Search" />
            </form>
            <div id="converse-banner">
                <div id="banner-content">
                    <img src="images/converse.png" alt="Converse logo">
                    <p class="brand-slogan">Shoes are boring. Wear Sneakers</p>
                </div>        
            </div>
        </header>

        <article>

                <div class="sneakers-intro">
                        <h1>Converse Sneakers</h1>
                        <h2>Browse through our catalouge of Converse Sneakers for rent! There is a choice for everyone!</h2>

                </div>
                
                <div class="product_box">
                    <img src="images/converse_cdg_chuck_lowplay_right.jpg" alt="Converse CDG">
                    <!--This image was taken from https://www.stadiumgoods.com/chuck-70-cdg-play-150207c-milk-white-high-risk-red -->
                    <p><a target="_blank" href="conversecdg.php">Learn More</a> </p>
                    <h2>Converse CDG X Chuck Taylor 1970 Low \'play\'</h2>
                    <h3>RM50/day</h3>
                </div>

                <div class="product_box">

                    <img src="images/cdghightop_left.png" alt="Converse CDG x Chuck Taylor HI">
                    <!--This image was taken from https://www.converse.com/shop/comme-des-garcons-->
                    <p><a target="_blank" href="converseCDGHigh.php">Learn More</a> </p>
                    <h2>Converse CDG x Chuck Taylor HI</h2>
                    <h3>RM50/day</h3>
                </div>

                <div class="product_box">
                    <img src="images/converse_ctas_sun_right.png" alt="Converse Chuck Taylor AllStar(hi Top Sunflower Yellow)">
                    <!--This image was taken from https://crossoverconceptstore.com/products/chuck-1970-classic-hi-sunflower-->
                    <p><a target="_blank" href="converseallstart.php">Learn More</a> </p>
                    <h2>Converse Chuck Taylor AllStar(hi Top Sunflower Yellow)</h2>
                    <h3>RM50/day</h3>
                </div>

                <div class="product_box">
                    <img src="images/converse_drwoochuckt_right.jpg" alt="Dr.Woo x Chuck Taylor \'white\'">
                    <!--This image was taken from http://www.allstarchucks.com/Converse-x-Dr.-Woo-Chuck-Taylor-All-Star-70-High-White.html-->
                    <p><a target="_blank" href="conversedrwoo.php">Learn More</a> </p>
                    <h2>Dr.Woo x Chuck Taylor \'white\'</h2>
                    <h3>RM50/day</h3>

                </div>

                <div class="product_box">
                    <img src="images/converse_offwhite_ct_right.jpeg" alt="OffWhite x Chuck Taylor">
                    <!--This image was taken from https://www.stadiumgoods.com/chuck-70-off-white-hi-163862c-white-cone-black-->
                    <p><a target="_blank" href="converseoffwhite.php">Learn More</a> </p>
                    <h2>OffWhite x Chuck Taylor</h2>
                    <h3>RM50/day</h3>
                </div>

                <div class="product_box">
                    <img src="images/converse_spli_right.jpeg" alt="Converse Intangible">
                    <!--THis image was taken from https://hypebeast.com/2018/5/converse-star-player-low-intangibles-release-date -->
                    <p><a target="_blank" href="converseintangible.php">Learn More</a> </p>
                    <h2>Converse Intangible</h2>
                    <h3>RM50/day</h3>

                </div>

        </article>

        <footer>
            <?php include 'include/footer.php'; ?>            
        </footer>
    </body>

</html>