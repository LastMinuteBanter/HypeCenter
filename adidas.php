<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Rent Adidas Shoes</title>
        <link rel="stylesheet" type="text/css" href="styles/style.css" />
        <link rel="icon" href="images/HypeIcon.jpg"/>
        <script src="script/enhancement.js"></script>
    </head>

    <body>
        <header>
            <?php include 'include/nav.php'; ?>
            
            <form id="search_field" action="results.php" method="GET">
                <input type="text" name="k"  placeholder="Quick Search" />
                <input id="search_btn" type="submit" value="Search" />
            </form>

            <div id="adidas-banner">
            <div id="banner-content">
                <img src="images/adidas.png" alt="adidas logo"/>
                <p class="brand-slogan">All in or Nothing</p>
            </div>      
        </div>    
        </header>
        
        

        <article>
            <div class="sneakers-intro">
                        <h1>Adidas Sneakers</h1>
                        <h2>Browse through our catalogue of Adidas Sneakers for rent! There is a choice for everyone!</h2>

            </div>
            <div class="product_box">
                <img src="images/adidas_yeezy_tf_right.jpg" alt="adidas yeezys true form"/>
                <!--This image was taken from https://hypebeast.com/2019/1/adidas-yeezy-boost-350-v2-true-form-->
                <p><a target="_blank" href="yeezytrueform.php">Learn More</a> </p>
                <h2>Adidas Yeezy True Form</h2>
                <h3>RM50/day</h3>
            </div>

            <div class="product_box">

                <img src="images/adidas_yeezy_wr_right.jpg" alt="adidas yeezy wave runner"/>
                <!--This image was taken from https://stockx.com/adidas-yeezy-wave-runner-700-solid-grey-->
                <p><a target="_blank" href="yeezywaverunner.php">Learn More</a> </p>
                <h2>Adidas Yeezy Wave Runner</h2>
                <h3>RM50/day</h3>
            </div>

            <div class="product_box">
                <img src="images/adidas_solar_hu_right.jpg" alt="adidas solar HU"/>
                <!--This image was taken from https://stockx.com/adidas-solar-hu-pharrell-chinese-new-year-2019-->
                <p><a target="_blank" href="nmdsolarhu.php">Learn More</a> </p>
                <h2>Adidas Solar HU</h2>
                <h3>RM50/day</h3>
            </div>

            <div class="product_box">
                <img src="images/adidas_bape_right.jpg" alt="adidas bape Ultraboost"/>
                <!--This image was taken from https://stockx.com/adidas-ultra-boost-4-bape-camo-->
                <p><a target="_blank" href="bapeultraboost.php">Learn More</a> </p>
                <h2>Adidas BAPE Ultraboost</h2>
                <h3>RM50/day</h3>

            </div>

            <div class="product_box">
                <img src="images/adidas_pharell_right.jpg" alt="adidas Pharell NMD HU CNY Gold"/>
                <!--This image was taken from https://stockx.com/adidas-nmd-hu-china-pack-happy-gold-->
                <p><a target="_blank" href="nmdcnygold.php">Learn More</a> </p>
                <h2>Adidas Pharell NMD HU CNY GOLD</h2>
                <h3>RM50/day</h3>
            </div>

            <div class="product_box">
                <img src="images/adidas_future_right.jpg" alt="adidas futurecraft"/>
                <!--THis image was taken from https://stockx.com/adidas-futurecraft-4d-daniel-arsham-->
                <p><a target="_blank" href="futurecraft.php">Learn More</a> </p>
                <h2>Adidas Futurecraft</h2>
                <h3>RM50/day</h3>

            </div>
        </article>

        <footer>
            <?php include 'include/footer.php'; ?>
        </footer>
    </body>

</html>