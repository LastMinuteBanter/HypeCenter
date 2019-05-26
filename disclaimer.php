<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="utf-8"/>
                <title>Disclaimer</title>
                <link rel="stylesheet" type="text/css" href="styles/style.css" />
                <link rel="icon" href="images/HypeIcon.jpg"/>
                <script src="script/script.js"></script>
            </head>
        
            <body>
            <header>
                <?php include 'include/nav.php'; ?>
                <form id="search_field" action="results.php" method="GET">
                        <input type="text" name="k" value='<?php echo isset($_GET['k']) ? $_GET['k'] : ''; ?>'  placeholder="Quick Search" />
                        <input id="search_btn" type="submit" name="" value="Search" />
                </form>
            </header>

                <article id="disclaimer-and-enhancement-content">
                        <h1>DISCLAIMER</h1>
                        <ul>
                            <li>This website is created mainly for educational and non-commercial use only. It is a partial fulfilment of completion of unit COS10011 - Creating Web Applications offered in Swinburne University of Technology, Sarawak Campus for Semester 1, 2019.</li>
                            <li> The web-master and author(s) do not represent the business entity.</li>
                            <li>The content of the pages of this website might be out-dated or inaccurate, thus, the author(s)               and web-master does not take any responsibility for incorrect information disseminate or cited from this website.</li>
                            <li>If you believe that information of any kind on this website is an infringement of copyright in material in which you either own copyright or are authorized to exercise the rights of a copyright owner, kindly contact the web-master (101214747@students.swinburne.edu.my) for removal. </li>
                        </ul>
                </article>

                <footer>
                    <?php include 'include/footer.php'; ?>
                </footer>
            </body>
</html>