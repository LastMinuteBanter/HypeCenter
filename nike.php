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
                <input type="text" name="k" value='<?php echo isset($_GET['k']) ? $_GET['k'] : ''; ?>'  placeholder="Quick Search" />
                <input id="search_btn" type="submit" name="" value="Search" />
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

            <?php include 'include/nike_section.php' ?>

        </article>

        <footer>
            <?php include 'include/footer.php'; ?>
            
        </footer>
    </body>

</html>
