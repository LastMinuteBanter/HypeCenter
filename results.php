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
</header>

        <?php  

            $k = isset($_GET['k']) ? $_GET['k'] : '';
            $terms = explode(" ",$k);
            $search_string = "SELECT * FROM search_engine WHERE ";
            $display_words = "";

            foreach($terms as $each){
                
                $search_string .= "keywords LIKE '%".$each."%' OR ";
                $display_words .= $each.' ';
            }

            $search_string = substr($search_string, 0, strlen($search_string)-4);
            $display_words = substr($display_words, 0, strlen($display_words)-1);

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

            $query = mysqli_query($conn, $search_string);
            $result_count = mysqli_num_rows($query);

            echo '<div class="right"><b><u>'.number_format($result_count).'</u></b> results found</div>';
            echo 'Your search for <em>"'.$display_words.'"</em><hr />';

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

        
    </body>
</html>
