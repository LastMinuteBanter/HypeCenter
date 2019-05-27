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
                <?php include 'include/converse_section.php'?>

        </article>

        <footer>
            <?php include 'include/footer.php'; ?>            
        </footer>
    </body>

</html>