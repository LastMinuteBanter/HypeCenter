<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Rent Vans Shoes</title>
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
            <div id="vans-banner">
                    <div id="banner-content">
                        <img src="images/vanslogo.jpg" alt="Vans logo">
                        <p class="brand-slogan">OFF THE WALL</p>
                    </div>        
            </div>
        </header>

        <article>
                <div class="sneakers-intro">
                        <h1>Vans Sneakers</h1>
                        <h2>Browse through our catalouge of Vans Sneakers for rent! There is a choice for everyone!</h2>

                </div>

                <div class="product_box">
                    <img src="images/vansgreen2.jpg" alt="Vans Sk8 Hi Pro Supreme Green Skull Pile">
                    <!--This image was taken from https://www.stadiumgoods.com/vans-sk8-hi-pro-supreme-skull-pile-vn000vhg3fw-->
                    <p><a target="_blank" href="vansgreen.php">Learn More</a> </p>
                    <h2>Vans Sk8 Hi Pro Supreme Green Skull Pile</h2>
                    <h3>RM50/day</h3>
                </div>

                <div class="product_box">

                    <img src="images/vansspr2.jpg" alt="Vans Sk8 Hi Pro Supreme Checkboard">
                    <!--This image was taken from https://www.stadiumgoods.com/sk8-hi-reissue-pr-vn0a38z3jlw-black-white-->
                    <p><a target="_blank" href="vanscheckboard.php">Learn More</a> </p>
                    <h2>Vans Sk8 Hi Pro Supreme Checkboard</h2>
                    <h3>RM50/day</h3>
                </div>

                <div class="product_box">
                    <img src="images/nasa2.jpg" alt="Vans Sk8 Hi 46 MTE DX Nasa Space Voyager">
                    <!--This image was taken from https://www.stadiumgoods.com/sk8-hi-46-mte-dx-vn0a3dq5uq4-mte-space-voygr-tw-mrsh-->
                    <p><a target="_blank" href="vansnasa.php">Learn More</a> </p>
                    <h2>Vans Sk8 Hi 46 MTE DX Nasa Space Voyager</h2>
                    <h3>RM50/day</h3>
                </div>

                <div class="product_box">
                    <img src="images/mtd2.jpg" alt="Vans x Mastermind x KITH">
                    <!--This image was taken from https://www.stadiumgoods.com/sk8-hi-reissue-vn0a46zfs5k-black-->
                    <p><a target="_blank" href="vansmastermind.php">Learn More</a> </p>
                    <h2>Vans x Mastermind x KITH</h2>
                    <h3>RM50/day</h3>

                </div>

                <div class="product_box">
                    <img src="images/fog2.jpg" alt="Fear of God Vans Mountain Edition 35 DX">
                    <!--This image was taken from https://www.stadiumgoods.com/mountain-edition-35-dx-->
                    <p><a target="_blank" href="vansmountain.php">Learn More</a> </p>
                    <h2>Fear of God Vans Mountain Edition 35 DX</h2>
                    <h3>RM50/day</h3>
                </div>

                <div class="product_box">
                    <img src="images/vans2.jpg" alt="Vans Sk8 Hi “Cut and Paste">
                    <!--THis image was taken from https://www.stadiumgoods.com/sk8-hi-46-mte-dx-vn0a3dq5uq4-mte-space-voygr-tw-mrsh-->
                    <p><a target="_blank" href="vanscutandpaste.php">Learn More</a> </p>
                    <h2>Vans Sk8 Hi “Cut and Paste”</h2>
                    <h3>RM50/day</h3>

                </div>

        </article>

        <footer>
            <?php include 'include/footer.php'; ?>
            
        </footer>
    </body>

</html>