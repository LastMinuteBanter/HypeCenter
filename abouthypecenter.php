<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css"/>
        <link rel="icon" href="images/HypeIcon.jpg"/>
        <title>About HypeCenter</title>
        <meta name="viewport" content="width=device-width, initial-scale-1.0"/>
        <script src="script/enhancement.js"></script>
    </head>
    <body>
        <header>
            <?php include 'include/nav.php'; ?>
            <form id="search_field" action="results.php" method="GET">
                <input type="text" name="k"  placeholder="Quick Search" />
                <input id="search_btn" type="submit" value="Search" />
            </form>
            <div id="abouthypecenter-banner">
                    <div id="abouthypecenter-logo">
                        <img src="images/HypeCentre.jpg" alt="HypeCenter logo"/>
                        <p class="brand-slogan">Rent. Flex. Return. Repeat</p>
                    </div>
            </div>
        </header>
        


        <article>
            
            <div id="abouthypecenter-content">
                <h1>Company background</h1>
                <p>HypeCenter started out as an expensive "Hypebeast" shoe retailer which is based in Kuching, Sarawak. Due to the calamity of the public's economy, people were not able to afford the shoes that were retailed by the shop. HypeCenter has since changed the services from shoe retailer to shoe rental so that the locals are able to keep up to trends or try out and have a feel of these type of shoes before purchasing them.</p>
            </div>


            <div>
                <img src="images/shoe_making.jpg" alt="shop" class="abouthype_image"/>
                <!--Image taken from https://www.acontinuouslean.com/2014/11/04/northampton-cradle-shoe-civilization/-->
            </div>

            <div>
                <img src="images/shoe_rack.jpg" alt="shoe rack" id="shoe_rack"/>
                <!--Image taken from https://www.siam2nite.com/en/magazine/lifestyle/item/451-diy-sneaker-shelf-made-of-ikea-products-->
            </div>

            <div id="description_aftercompany">
                <h2>How does it work ?</h2>
                <p>Customers would first have to put in a <strong>RM300 refundable deposit</strong> for the shoe that is being rented. The deposit serves to cover any damages that may happen to the shoe upon return. Next, there will be a <strong>rental charge</strong> based on the number of days the shoe is being rented for. For example, if the rental cost for a sneaker is RM50/day and is being rented for 3 days, the total rental charge would be RM150. Alternatively, customers may obtain discounts if a gift card or voucher is presented upon payment for the rental charges.</p>
            </div>

        </article>
        <footer>
        <?php include 'include/footer.php'; ?>
            
        </footer>
    </body>
</html>
