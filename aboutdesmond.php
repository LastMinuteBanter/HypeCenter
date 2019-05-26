<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css" >
        <link rel="icon" href="images/HypeIcon.jpg">
        <title>About Desmond</title>
        <meta name="viewport" content="width=device-width, initial-scale-1.0">
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
                <h1>Desmond Sim </h1>
                <h2>Course: Bachelor of Computer Science</h2>
                <h3>Student ID: 101214462</h3>
                <img src="images/desmondphoto.JPG" alt="Desmond profile pic"/>
				
				<p>Hey there! My name is Desmond and I'm one of the member of the group, Kiwano. In terms of sport, I'm a badminton player and I've play badminton for 12 years. Besides badminton, my second favourite sport is basketball. My favourite basketball player is James Harden, who plays for the Houston Rocket basketball team as their shooting guard. During my leisure time, I indulge myself in computer games, mainly the game League of Legends.</p>

           <table>
               <tr>
                   <th>Contribution</th>
                   <th>Explanation</th>
               </tr>

               <tr>
                   <td>Designed the navigation menu used for all web pages</td>
                   <td>Desmond was tasked to produce a navigation menu that would be easy for the user to navigate the website. He started off by aligning the company logo on the left side of the navigation bar and created the navigation menu using an unordered list. Aside from that, he created the dropdown menu feature by using nested lists. </td>
               </tr>

               <tr>
                   <td>Standardised the design for the individual product pages</td>
                   <td>Each product page had the same design and arrangement in order to have the same visual identity. Desmond suggested the design of the product pages to the team and he highlighted on the arrangement of each element. </td>
               </tr>

               <tr>
                   <td>Co-produced half the product pages with Joey</td>
                   <td>In order to quicken the process of producing the product pages, Desmond helped to produce some of the product pages, mainly product pages containing sneakers from Nike and Vans. He ensured that the webpages follow the same design guideline and placed the images and background information for each sneaker. </td>
               </tr>
           </table>

        </div>
        </article>
        <footer>
                <p>Email: <a href="mailto:101214462@students.swinburne.edu.my">101214462@students.swinburne.edu.my</a></p>
                <?php include 'include/footer.php';?>
            
        </footer>
        </body>
</html>
