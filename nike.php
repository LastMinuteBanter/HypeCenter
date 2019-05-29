<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Rent Nike Shoes</title>
        <link rel="stylesheet" type="text/css" href="styles/style.css">
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
            <div id="nike-banner">
                    <div id="banner-content">
                        <img src="images/nikelogo.png" alt="Nike logo">
                        <p class="brand-slogan">JUST DO IT.</p>
                    </div>        
            </div>
        </header>

        <article>
                <div class="sneakers-intro">
                        <h1>Nike Sneakers</h1>
                        <h2>Browse through our catalouge of Nike Sneakers for rent! There is a choice for everyone!</h2>
                </div>

                <div class="product_box">
                    <img src="images/leviside.jpg" alt="Nike Levi">
                    <!--This image was taken from https://www.stadiumgoods.com/air-jordan-4-retro-nrg-260267-->
                        <p><a target="_blank" href="leviaj4.php">Learn More</a> </p>
                        <h2>Levi\'s Air Jordan 4</h2>
                        <h3>RM50/day</h3>
                </div>

                <div class="product_box">

                        <img src="images/offwhiteaj1-side.jpg" alt="Aj1 off white">
                        <!--This image was taken from https://www.stadiumgoods.com/the-10-air-jordan-1  -->
                        <p><a target="_blank" href="aj1offchicago.php">Learn More</a> </p>
                        <h2>Nike AJ1 OFF-White Chicago</h2>
                        <h3>RM50/day</h3>
                </div>

                <div class="product_box">
                        <img src="images/swside.jpg" alt="Air max 1/97">
                        <!--This image was taken from https://www.stadiumgoods.com/nike-air-max-1-97-vf-sw-sean-wotherspoon-aj4219-400-->
                        <p><a target="_blank" href="airmax.php">Learn More</a> </p>
                        <h2>Air Max 1/97 Sean Wotherspoon</h2>
                        <h3>RM50/day</h3>
                </div>

                <div class="product_box">
                        <img src="images/travisside.jpg" alt="aj4 travis scott">
                        <!--This image was taken from https://www.stadiumgoods.com/air-jordan-4-retro-269051-->
                        <p><a target="_blank" href="aj4travis.php">Learn More</a> </p>
                        <h2>Nike AJ4 Travis Scott</h2>
                        <h3>RM50/day</h3>

                </div>

                <div class="product_box">
                        <img src="images/redoctoberside.jpg" alt="nike air yeezy 2">
                        <!--This image was taken from https://www.stadiumgoods.com/air-yeezy-2-sp-->
                        <p><a target="_blank" href="airyeezy2.php">Learn More</a> </p>
                        <h2>Nike Air Yeezy 2 Red Octobers</h2>
                        <h3>RM50/day</h3>
                </div>

                <div class="product_box">
                        <img src="images/aj13side.jpg" alt="aj13 ">
                        <!--THis image was taken from https://www.stadiumgoods.com/air-jordan-13-retro-low-nrg-ct-at3102-200-sepia-tone-terra-blush-->
                        <p><a target="_blank" href="aj13.php">Learn More</a> </p>
                        <h2>Nike AJ13 Terracotta Warrior</h2>
                        <h3>RM50/day</h3>

                </div>

        </article>

        <footer>
            <?php include 'include/footer.php'; ?>
            
        </footer>
    </body>

</html>
