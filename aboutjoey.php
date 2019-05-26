<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css" />
        <link rel="icon" href="images/HypeIcon.jpg"/>
        <title>About Joey</title>
        <meta name="viewport" content="width=device-width, initial-scale-1.0"/>
        <script src="script/enhancement.js"></script>
    </head>
    <body>
        <header>
            <?php include 'include/nav.php'; ?>
            <form id="search_field" action="results.php" method="GET">
                <input type="text" name="k" value='<?php echo isset($_GET['k']) ? $_GET['k'] : ''; ?>'  placeholder="Quick Search" />
                <input id="search_btn" type="submit" name="" value="Search" />
            </form>
        </header>
        


        <article>
           <div id="profile-content">
                <h1>Joey Tan </h1>
                <h2>Course: Bachelor of Computer Science</h2>
                <h3>Student ID: 101214653</h3>
                <img src="images/joeyphoto.JPG" alt="Joey profile pic"/>
               
               <p>Hi. My name is Joey and I am a member of the group, Kiwano, for the assignment. Now I would like to share about my and interests. In terms of entertainment, I play video games to relief all the stress I have and as my primary source of entertainment. Aside from that, I do occasionally go out and do sports like hiking. </p>
           

           <table>
               <tr>
                   <th>Contribution</th>
                   <th>Explanation</th>
               </tr>

               <tr>
                    <td>Improve the web page of HypeCenter company</td>
                    <td>The web page for HypeCenter company is crucial to descript the purpose, how the company works, and the background of the company. He helped in improving the web page to better relay the information of the web page to the visitors.</td>
               </tr>

               <tr>
                   <td>Design the footer and finds the image of the products</td>
                   <td>Joey designs the first footer of the web pages to be used in the assignment. He finds the image of the products as well.</td>
               </tr>

               <tr>
                   <td>Produced half of the product pages with Desmond</td>
                   <td>Joey worked together with Desmond to produced the webpages for each product. He mainly worked on the product pages for sneakers that are from Adidas and Converse. He mainly worked by assigning the images and information he received from Hans and placed them in the right webpages. </td>
               </tr>
           </table>

        </div>
        </article>
        <footer>
                <p>Email: <a href="mailto:101214653@students.swinburne.edu.my">101214653@students.swinburne.edu.my</a></p>
                <?php include 'include/footer.php'; ?>
            
        </footer>
        </body>
</html>
