<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css"/>
        <link rel="icon" href="images/HypeIcon.jpg"/>
        <title>Assignment 3 Enhancements</title>
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
            </header>

                <article id="disclaimer-and-enhancement-content">
                    <h1>PHP Enhancements</h1>
                    <h2>1.Product Search</h2>
                    <p>Aside from just browsing through the website to find a specific product, a product search feature is added to the website to make it much more accessible for visitors to find a specific product. With this feature, the visitors can always make a quick search on the website if they ever encounter a problem trying to find a specific item from the website</p>

                    <p>Firstly, a form field has to be created in the webpage which would simulate the look of a search bar. In the <code>form</code>tag, the method would be <code>GET</code> and the form will trigger an <code>action="results.php"</code>. An ID can be assigned to the form tag if there is a need to style the search bar. Next, 2 inputs are added to the form, mainly a text and submit input. The <code>text input</code> would act as the search bar and the <code>submit input</code> would act as the search button. The text input is assigned with the name "k" to be used later on.</p>

                    <p>A mySQL database needs to be created. For this case, a database called "search_field" is created and a table called search_engine is created along with it. The table will contain 5 columns which are ID, title, url,description and keywords. The ID is set to auto-increment since it will be the table's primary key and stores integer values. Besides that the other columns would store Variable Characters (VARCHAR) and text for the description column. After the table is set up, multiple records for each searchable webpage needs to be made. In each record, the page title is assigned to the title field, the page url is assigned to the URL field, a description for the page and collection of strings seperated by spaces for the keywords. </p>

                    <p>After the database is created, the <code>results.php</code> is created and formatted. Firstly, assigned the value from the text input to a variable. In this case, it is assigned to <code>$k</code> and this variable is assigned with <code>isset($_GET['k']) ? $_GET['k'] : ''; </code>, which means that if the input text is assigned with a variable and is not null, it will return the value of the input text or else it will return an empty value. Next, the variable <code>$k</code> is assigned to an array and the values are seperated by spaces using the implode function. In this scenario, the variable <code>$terms</code> is created. The next step is to create a variable containing the MySQL commands for the search function which would be <code>$search_string = "SELECT * FROM search_engine WHERE ";</code>. Also, another string variable called <code>$display_words</code> is created to store the words to be displayed in the page later on.</p>

                    <p>Moving on, the the array <code>$terms</code> is looped through and in each loop, it will continuously add string values to the $search_string and $display_words variables. In this case, it will continously add <code>"keywords LIKE '%".$each."%' OR "</code> to $search_string using the values from the $terms array. The $display_words will have the search terms continuously be added, seperated by spaces. After the loop, the substr function is used to remove extra characters from the 2 variables.</p>

                    <p>After that, the webpage needs to be connected to the database using the msqli_connect() method. After it is connected, a variable $query is assigned with the <code>mysqli_query()</code> method and the 2 arguments are filled with the $conn variable followed by the $search_string variable. Another <code>$result_count</code> variable is made to count the number of rows that is returned from the query using the <code>mysqli_num_rows($query);</code> method.</p>

                    <p>Then, an if-else statement is used to check if there are at least 1 result from the query by checking the value of the $result_count to be more than 0. If there are no results, it will just echo a line saying "No results found for your search". If there are results, it will first create a table tag. Next, a while loop is used and the <code>mysqli_fetch_assoc($query)</code> method is set as the argument. This line meant that the loop will go on based on the number returned from that method. In each loop, it will create 3 different rows. In the first row, it will create a H3 tag that contains an anchor tag which links to the actual webpage and the text would be the page title that is associated with it. The next line is the page description, followed by a line which shows the actual link name. After it has displayed all the results, the loop will stop and the closing tag for the table is echoed. </p>

                    <p>This feature was based on an article from <a href="https://www.heytuts.com/simple-search-engine-in-php/">HeyTuts</a> and this feature can be tested on some of webpages such as the <a href="adidas.php">adidas brand page</a> by using the search bar that is found on the page and entering a keyword like "hypecentre".</p>

                    <h2>2. Product Rating system</h2>
                    <p>Along with the product search feature, the team decided to implement a product rating system for each product page to create a more interactive interface for the visitors of the website. If a visitor of the website has ordered the service before and wants to rate the product that they have ordered, they can always go back to the page and leave their ratings on it as well as a comment. This would make it easier for other customers to learn about the product being offered and help them decide on which product they should rent.</p>

                    <p>To implement this feature, a new database has to be created, which is named "rating_system" and a table called "user_ratings" is created to store the ratings for each product. In the table, 5 fields are created which are the auto-incremented ID, the rating which is an integer value, the username, comment and shoe name which are stored as VARCHAR.</p>

                    <p>After creating the database, each product page has require some PHP additions. In the header of the page, a php script is initialised to connect to the said database and a variable called <code>$shoename</code> is initialised to store the product name. The value of this variables changes from page to page as each page contains a different product.After closing that script, a form is created in the page to submit reviews. In this case a form is created with the <code>Method = "POST"</code> and the action to trigger the opening of a php file called <code>post_rating.php</code>. Next, the input tags are created whereby the first <code>input</code> would be named as "shoe" and is <code>type="hidden"</code>. Plus, the value it holds will be a php script that <code>echos</code> the $shoename variable that was made before this. The other inputs added are the rating input which utilises <code>type="range"</code> and is assigned with the name "rating" with a minimum value of "1" and maximum of "5". Below it is a text input that with the <code>name="name"</code> to store the visitor's name and below that would be a textarea input with the <code>name="comments"</code>. Lastly, a submit button is to be made with an input <code>type="submit"</code></p>

                    <p>Moving on to the post_ratings.php page, the file is first initialised by connecting to the rating_system database using the method <code>mysqli_connect()</code>. After it is connected, the page would get the values from the form that submitted. The values ,which are the ratings,name, comments and shoenaame, are assigned to different variables such as <code>$rating = $_POST['rating'];</code>. Next, another variable called $comment_length is initialised to get the length of the comment using the <code>strlen</code> method. After that, an if-else statement is used to check if the comment length is greater than 100. If it is greater than 100, it will <code>echo</code> a message to tell the visitor to reduce the comment length before submitting again. If it is not, it will run a query using the <code>mysqli_query</code> method and the query argument will contain <code>"INSERT INTO user_ratings(rating,username,Comment,shoe) VALUES('$rating','$name','$comment','$shoename')"</code> which is used to create a new record in the user_ratings table with the values from form. After the query is executed, a line <code>header('location:'. $_SERVER['HTTP_REFERER']);</code> is added to redirect the visitor back to the product page.</p>

                    <p>Going back to the product page, another php script needs to be created to showcase the ratings found in the table that is related to the shoe. Below the form that was created before, a div is created to contain the comments found on the database. Next, a variable called $find_comments is intialised to contain a <code>mysqli_query</code> method with the query being <code>"SELECT * from user_ratings WHERE shoe='$shoename' "</code>. This query is used to obtain all the records from the table that has the shoe value that equals the $shoename variable that was assigned before this. Then, a while loop is created with the <code>mysqli_fetch_assoc($find_comments)</code> method that is assigned as the argument. This loop will keep going the number of times that is returned from that method. In each loop, it will fetch the value of the username, comment and rating from the associative aray. Next, it will use the echo method to create a fieldset containing a paragraph. The paragraph is structured as below :<p><code><em>$name</em> rated it <strong>$rating Star(s)</strong>  <br/>Comment: $comment</code></p>The values for $name, $rating and $comment will change depending on the values from each record. The database is closed after that using the method <code>mysqli_close($conn);</code>.</p>

                    <p>This feature was based on video tutorial from <a href="https://www.youtube.com/watch?v=4E-oepPPg7A">Youtube</a> which showcases a comment system using MySQL database. This feature can be accessed by visiting any of the product pages such as <a href="aj1offchicago.php">this</a>.</p>


                </article>

            <footer>
                <?php include 'include/footer.php'; ?>
            </footer>
    </body>
</html>