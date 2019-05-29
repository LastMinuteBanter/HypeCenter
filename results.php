<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="utf-8"/>
            <title>Search Results</title>
            <link rel="stylesheet" type="text/css" href="styles/style.css"/>
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
    </header>

        <?php  

/*This technique was sourced from a tutorial on HeyTuts https://www.heytuts.com/simple-search-engine-in-php/ */
            //checks if the "k" variable is set and filled,if true, it will assign the $k to ?_GET['k'] ,else it will leave the field to blank
            $k = isset($_GET['k']) ? $_GET['k'] : ''; 
            $terms = explode(" ",$k); //seperate the values in $k into an array called $terms
            $search_string = "SELECT * FROM search_engine WHERE "; //a part of the query
            $display_words = ""; //To store the searched words on the page

            //loop through the terms array to get the keywords
            foreach($terms as $each){
                //continue adding the search_string with query on each word
                //This will create a query with all the words to be compared to the list of keywords from the database
                $search_string .= "keywords LIKE '%".$each."%' OR ";
                $display_words .= $each.' '; //add the words being searched into the display_words variable
            }

            //These are to remove extra characters and properly format the query
            $search_string = substr($search_string, 0, strlen($search_string)-4);
            $display_words = substr($display_words, 0, strlen($display_words)-1);

            //Now log onto the database
            $servername= "localhost";  
            $username= "root";  
            $password= "";  
            $dbname= "search_field";  
            // Create connection  
            $conn= mysqli_connect($servername,$username,$password,$dbname);  
            // Check connection  
            if(!$conn){
                die("Connection failed: " . mysqli_connect_error());  
            }else{
                echo "Successfully connecting to the database\n";
                echo "<br />";
            }

            //Create the query using the search_string variable that was made
            $query = mysqli_query($conn, $search_string);
            $result_count = mysqli_num_rows($query); // Count the number results returned from the database

            //Create a line showing the number of results available
            echo '<div class="right"><strong>'.number_format($result_count).'</strong> results found</div>';
            echo 'Your search for <em>"'.$display_words.'"</em><hr/>'; //Display the words that was typed in

            //If there is a list of results, create a table
            if ($result_count > 0){
                echo '<table class="search">';
    
                // loop though each of the results from the database and display them to the user
                while ($row = mysqli_fetch_assoc($query)){
                    echo '<tr>
                        <td><h3><a href="'.$row['url'].'">'.$row['title'].'</a></h3></td>
                    </tr>
                    <tr>
                        <td>'.$row['description'].'</td>
                    </tr>
                    <tr>
                        <td><i>'.$row['url'].'</i></td>
                    </tr>';
                }
                
                // end the display of the table
                echo '</table>';

            }else{
                echo "No results found for your search";
            }
            mysqli_close($conn);

        
        ?>

            <footer>
                <?php include 'include/footer.php'; ?>
                
            </footer>
    </body>
</html>
