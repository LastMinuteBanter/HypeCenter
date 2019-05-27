<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css"/>
        <link rel="icon" href="images/HypeIcon.jpg"/>
        <title>About Alvin</title>
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

        



        <article>
           <div id="profile-content">
                <h1>Alvin Sim</h1>
                <h2>Course: Bachelor of Computer Science</h2>
                <h3>Student ID: 101214747</h3>
                <img src="images/alvinphoto.JPG" alt="Alvin profile pic"/>
           
                <p>Hey there! My name is Alvin and I am the leader of the group, Kiwano, for this assignment. Here, I will share about some of the interests I have. In terms of sport, I am an avid supporter of Liverpool FC, which plays for the English Premier League. During my free time, I would watch the matches that are played by Liverpool and have always dreamt to be able to watch them live one day. Aside from just watching sports, I do take part in Taekwondo and possess a black belt. During my leisure time, I love to listen to Jazz music to relax.</p>

           <table>
               <tr>
                   <th>Contribution</th>
                   <th>Explanation</th>
               </tr>

               <tr>
                   <td>Standardised the design for brand/catagory pages</td>
                   <td>The different brand pages had similar designs which were implemented by him. Each page had the same banner design which sat on the header tag of the page and the individual product previews seen on each page was also designed by him to provide an inclusive user experience.</td>
               </tr>

               <tr>
                   <td>Implemented video overlay in the index.html page</td>
                   <td>The autoplay video feature was implemented by him as a step to grab the attention of the user in the homepage. The feature was implemented by dividing the header into different divisions and each division was overlayed on top of each other to achieve the look</td>
               </tr>
               <tr>
                   <td>Implemented the design of a resizable navigation menu</td>
                   <td>Using online resources, Alvin was able to create a navigation bar that would change to a hamburger menu whenever the window size reaches a certain size. This was done through the use of CSS3 Media queries which changes the CSS formatting on certain elements based on different screen sizes.</td>
               </tr>
           </table>

        </div>
        </article>
        <footer>
                <p>Email: <a href="mailto:101214747@students.swinburne.edu.my">101214747@students.swinburne.edu.my</a></p>
                <?php include 'include/footer.php';?>
        </footer>
        </body>
</html>
