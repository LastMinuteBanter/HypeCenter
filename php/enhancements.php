<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css"/>
        <link rel="icon" href="images/HypeIcon.jpg"/>
        <title>Enhancements</title>
        <meta name="viewport" content="width=device-width, initial-scale-1.0"/>
        <script src="script/enhancement.js"></script>
    </head>
    <body>
            
            <header>
                    <nav>
                        <a href="index.html"><img src="images/HypeCentre.jpg" alt="HypeCenter logo"/></a>
        
                        <div class="hamburger-nav">
                                <label for="toggle">&#9776;</label>
                                <input type="checkbox" id="toggle"/>
                                <div class="menu">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li>Brands
                                            <ul>
                                                <li><a href="adidas.html">Adidas</a></li>
                                                <li><a href="converse.html">Converse</a></li>
                                                <li><a href="nike.html">Nike</a></li>
                                                <li><a href="vans.html">Vans</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="enquiry.php">Enquire</a></li>
                                        <li><a href="abouthypecenter.html">About Us</a></li>
                                    </ul>
                                </div>
                        </div>
                    </nav>
                </header>

                <article id="disclaimer-and-enhancement-content">
                    <h1>Enhancements</h1>
                    <h2>1. Autoplaying video in index.html </h2>
                    <p>In the homepage of the website, the visitor is greeted by an autoplaying video that is set in the banner of the page. The implementation of this feature helps to increase the immersiveness of the user experience and provides a little teaser on the products that the company has to offer.</p>

                    <p>The implementation of this feature mainly concerns the arrangment of different <code>div</code> in layers. In HTML, 1 main <code>div</code> houses 3 other divs. In this case, the main div is named <code>v-header</code> while the 3 child divs are named appropriately for different functions. In those 3 child divs, the first div is used to place the video which can be done by adding the <code>video</code> tag, the second div is used to produce a darken layer, and the last div is used to place the banner content.</p>

                    <p>Once the HTML part is done, the divs are styled using CSS to achieve the look. Firstly, the main div is styled with <code>display:flex;</code> to have flexible properties in the content while <code>height:100vh;</code> is used to fix the height. Next, <code>align-items:center;</code> is placed to center the inner items. </p>

                    <p>To style the div containing the video to match the div, the div is stiled with <code>position:absolute; top:19vh;</code> . Then, a fixed height and width of 100% is placed to ensure the video spans across the window. To ensure the video takes up the entire space, the contextual selector <code>.fullscreen-video-wrap video{}</code> is used and the video tag is set with a minimum width and height.</p>

                    <p>Next, the darken div is styled with the same position, top, height and width attribute from the video div. Then, the z-index is set to 1 in order to overlay the previous div and the tag <code>background-color:rgba(0,0,0,0.3);</code> is added to create the darken layer. Lastly, the header content div is styled to have paragraphs and headings overlay on the other 2 divs. This is done by adding another z-index, but this time the value would be <code>z-index:2;</code>. Then, the div is centered with <code>margin:0 auto;</code>. The remaining paragraph and heading are styled appropriately to achieve different looks. The technique was sourced from a youtube <a href="https://www.youtube.com/watch?v=Xy3GlrddZFI" target="_blank">video</a>.</p>

                    <p>This feature can be found in the <a href="index.html">homepage</a>.</p>

                    <br/>
                    <h2>2. Responsive Navigation menu</h2>
                    <p>As stated by the assignment guidelines, a menu containing links to other parts of the website needs to be implemented. Aside from just creating a normal navigation menu, our team has implemented a navigation menu that would resize based on the window size of the browser. This helps to give the navigation menu a cleaner look even if the window size is smaller than usual.</p>

                    <p>To implement this feature, the team used a combination of HTML elements along with some CSS styles. In the HTML part, the team added a checkbox input, with a hamburger icon as a label, before the menu list in the “nav” tag. In the CSS part, the team set the checkbox to be hidden with the <code>display:none;</code> command. Next, the team implemented the use of CSS3 Media Queries to change the navigation bar for different screen sizes. This was done by adding the selector <code>@media only screen and (max-width: 1000px)</code>, which meant it allowed the specified CSS to only take place when the screen size is 1000 pixels or below.</p>

                    <p>In the media query selector, the hamburger icon is now set to <code>display:block;</code> and the unordered list used in making the horizontal navigation menu increased in width to 100%. In order to only show this version of the navigation menu when the checkbox is checked, the following code was added <code>#toggle:checked+.menu{display: block;}</code>. We carried out this technique from <a href="https://www.youtube.com/watch?v=xMTs8tAapnQ">this video</a> from Youtube.</p>

                    <p>The feature can be tested on the <a href="index.html#toggle" target="_blank">index page</a> by resizing the page </p>

                   <br/> 
                    <h2>3. Product Image Hover Effect</h2>
                    <p>Aside from just implementing static images for products in the brand pages, the team have made each of the products on their respective brand pages to be hoverable and show a link to their individual product pages. This allows the webpage to feel more interactive for the users.</p>

                    <p>The first step in implementing this feature was setting a <code>div</code> that contained the required elements, such as the image and anchor tag. In the CSS, the image is set with a standard width and height. Next, to achieve the pop-up effect when the cursor hovers over it, the image needs to be styled with a filter and box shadow to emulate the pop-up look. This was done by entering the selector <code>product_box:hover img</code>. Inside the selector, the filter was set to 25 pixels with a brightness of 35% using the command <code>filter: blur(2px) brightness(35%)</code>. The box-shadow was formatted with <code>box-shadow:0 16px 16px cyan</code>.Plus, the transition tag was used to create a delay effect using the command <code>transition: .3s</code></p>

                    <p>The anchor tag had to be formatted to float on the image and this was done by formatting the <code>p</code> tag containing it with <code>position:absolute; top:25%; left:50%;</code>. Also, the paragraph needs to have an opacity of 0 to be hidden when not hovered. When it is hovered, the opacity would go back to 1. This technique was learnt through this <a href="https://www.youtube.com/watch?v=W0ubfqwd4G4">video</a> on Youtube.</p>

                    <p>This feature can be tested on one of the <a href="adidas.html" target="_blank">brand pages</a> by hovering on the sneakers shown.</p>

                    <br/>
                    <h2>4. Image Parallax Effect on Scroll</h2>
                    <p>For all the brand pages, the banner found in the header tag of the webpages is a static background image that is at a fixed position whenever the page is being scrolled up or down. The parallax effect gives the impression that the webpage contains 2 different layer of content overlaying on top of one another which makes the a more immersive user experience.</p>

                    <p>To create this parallax effect, a div is created in the header. In terms of styling, the div is selected based on its ID and is set to have a fixed width and height. In this case, it is set with <code>width:100%</code> and <code>height:100vh</code>. Next, the <code>background-image</code> is set and the background-size is set to <code>background-size:cover</code>. Lastly, the command <code>background-attachment:fixed</code> is used to bring the parrallax effect to life.</p>

                    <p>This feature can be tested at any of the <a href="nike.html" target="_blank">brand pages</a> by scrolling up and down the page.</p>


                </article>

            <footer>
                    <div class="footer_list">
                        
                        <ul>
                            <li><a href="abouthypecenter.html">About HypeCenter</a></li>
                            <li><a href="enquiry.php">Enquire Products</a></li>
                            <li><a href="enhancements.html">Enhancements</a></li>
                        </ul>
                    
                    </div>
                    <div class="footer_list">
                            <ul>
                                <li><a href="enhancements2.html">Assignment 2 Enhancements</a></li>
                            </ul>
                    </div>
            
                    <div id="brand-logo-footer">
                        <a href="adidas.html"><img src="images/adidas.png" alt="adidas logo"/></a>
                        <a href="nike.html"><img src="images/nikelogo.png" alt="nike logo"/></a>
                        <a href="converse.html"><img src="images/converse.png" alt="converse logo"/></a>
                        <a href="vans.html"><img src="images/vanslogo.jpg" alt="vans logo"/></a>
                    </div>
            
                    <div id="team-members">
                        <h3>Team Profiles</h3>
                        <ul>
                            <li><a href="aboutalvin.html">Alvin</a></li>
                            <li><a href="aboutdesmond.html">Desmond</a></li>
                            <li><a href="aboutjoey.html">Joey</a></li>
                            <li><a href="abouthans.html">Hans</a></li>
                        </ul>
                    </div>
                            
                    <div id="copyright">
                        <p>&#169;2019 Kiwano | <a href="disclaimer.html">Disclaimer</a> | Last Updated: 8/5/2019</p>
                    </div>
                    
                </footer>
    </body>
</html>