<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css"/>
        <link rel="icon" href="images/HypeIcon.jpg"/>
        <title>Assignment 2 Enhancements</title>
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

                <article id="disclaimer-and-enhancement-content">
                    <h1>Assignment 2 Enhancements</h1>
                    <h2>1. Pop up preview page prior to form submission </h2>
                    <p>After the visitor has completed enquiry form and fulfilled all the requirements, a window will pop up which showcases a summary of the information that they have entered. The information shown on the pop-up window is done with the use of session storage. From this page, they can choose to submit the form or cancel it. The window will close when the user successfully submits the form or cancels it. </p>

                    <p>This feature is mainly implemented with the use of Session Storage to store the information entered. Firstly, the confirmation page has to be created and is styled. A <code>form</code> tag is created and <code></code>tags are inserted to function as labels to the information such as name, email and address. Next, a <code>span</code> tag is inserted into the paragraph tag and assigned with different IDs to act as the blanks to be filled.</p>

                    <p>In Javascript, the values entered by the visitor into the form are stored in session storage by assigning it with the HTML DOM. An example would be <code>sessionStorage.fname = document.getElementById("firstname").value</code>. Once it is stored, a function is created to assign the text values of the span tags with the session Storage. </p>

                    <p>A <code>function fill_summary()</code> is created and the values are stored by assigning the values, for example, <code>document.getElementById("confirm_fname").textContent = sessionStorage.fname;</code>. Next, another function <code>validate()</code> is created to indicate if the values are valid. This is done by creating a variable <code>result=true;</code> and if the value is true, an alert message would pop up indicating the booking is successful. If not, the alert message would say it is unsuccessful. If the visitor were to cancel the form, the cancel button would call the function <code>window.close()</code>.</p>

                    <p>This feature can be seen after entering the values in the <a href="enquiry.html">enquiry page</a> which would lead to the <a href="enquiryConfirm.html">confirmation page</a>. This feature was mainly based on the lab exercises but the technique to create a pop up page was sourced from <a href="https://www.w3schools.com/jsref/met_win_open.asp">W3Schools</a>.</p>

                    <h2>2. Image Gallery Preview (Modal Image)</h2>

                    <p>When the visitor lands on one of the product pages, they would be able to hover over the images shown and see a bigger size version of it by clicking on the image. This allows them to have a better look of the product image and creates a dynamic effect to the webpage.</p>

                    <p>The implementation of this feature starts with the addition of a new div container, with the class "modal" in the product page. Inside the div, a span tag, an image tag and another div is created. The image tag would be assigned with a random <code>src</code> and <code>alt</code> in order to fullfill html standards. The images on the webpage are assigned new ids ranging from <code>img01-img04</code>. Next, the elements are styled respectively to create the image model. For the styling of the main container, it is styled with <code>display:block</code> to not show the container when the user has not clicked on any image</p>

                    <p>In Javascript, the elements created on html are assigned with a variable name. Below are the examples of variable assignment for each element.</p>

                    <p><code>var modal = document.getElementById('image_modal');</code></p>
                    <p><code>var img01 = document.getElementById('img01');</code></p>
                    <p><code>var img02 = document.getElementById('img02');</code></p>
                    <p><code>var img03 = document.getElementById('img03');</code></p>
                    <p><code>var img04 = document.getElementById('img04');</code></p>
                    <p><code>var modalImg = document.getElementById("img_content");</code></p>
                    <p><code>var captionText = document.getElementById("caption");</code></p>
                    <p><code>var span = document.getElementsByClassName("close")[0];</code></p>
    
                    <p>Next, the change in the styling of some of the elements is triggered from an onclick event of the images. When an image is clicked, the styling of the "modal" class element is changed to <code>display:block;</code>. Along with that, the <code>src</code> of the <code>modalImg</code> is assigned to the source of the image clicked and the caption text is filled with alternate tag of the image. An example code is added below:</p>

                    <p><code>img01.onclick = function(){</code></p>
                    <p><code>modal.style.display = "block";</code></p>
                    <p><code>modalImg.src = this.src;</code></p>
                    <p><code>captionText.innerHTML = this.alt; }</code></p>

                    <p>Next, the span tag containing the close button is programmed to change the styling of the modal back to "none" when clicked. This is done similarly by assigining <code>span.onclick</code> to the <code>function(){ modal.style.display = "none";}</code> </p>

                    <p>This feature can be seen <a href="converseoffwhite.html">here</a> or on any of the product pages. To activate this feature, the visitor has to click on one of the images of the product. This feature was based on a tutorial posted by W3Schools which can be found <a href="https://www.w3schools.com/howto/howto_css_modal_images.asp">here</a>.</p>

                    <h2>3. Back to Top Button</h2>
                    <p>A "Back to Top" button was implemented to make it easier for the visitors to move back to the top of the page without having to scroll back up. This makes it convenient for the user to navigate the webpage and allows them to go back to the navigation bar when needed. </p> 

                    <p>Firstly, a button tag is made in HTML and is assigned with an Id of "topBtn". Next, the button is styled with a fixed position is placed on the bottom right of the screen at all times.</p>

                    <p>For the Javascript, 2 functions are implemented which are the <code>topFunction()</code> and <code>scrollFunction()</code>. The topfunction() is used to bring the page back to the top by resetting the top offset. To do this, the method <code>document.body.scrollTop = 0;</code> and <code>document.documentElement.scrollTop = 0;</code> are implemented to rest the offset from the top of the page for all the elements.</p>

                    <p>The scrollFunction() is used to trigger the button to appear only when the page is scrolled down. This is done with the implementation of if-else statements. The function tests whether the webpage or its elements are scrolled down by 20 pixels by adding the condition <code>document.body.scrollTop > 20 || document.documentElement.scrollTop > 20</code>. From there, the function would change the button to <code>display:block;</code> with the line <code>document.getElementById("topBtn").style.display = "block";</code> if it fullfills that condition.</p>

                    <p>This feature can be seen on the <a href="index.html">homepage</a> or any of the webpages in the website. The team based the feature from a tutorial uploaded by <a href="https://www.w3schools.com/howto/howto_js_scroll_to_top.asp">W3Schools</a>.</p>
                    <h2>4. Automatically highlight pages in navigation bar</h2>
                    <p>When the visitor lands on some of the webpages, the webpage would automatically highlight the link in the navigation bar. This allows the user to keep track of which part of the webpage they have travelled to.</p>

                    <p>Firstly, a class name called "active" is styled in CSS with <code>border-bottom: 5px solid white;</code>. Next a function called <code>highlightpage()</code> is created to match the links in the navigation bar with the name of the page shown. This is done with a for-loop by implementing  <code>for (var i = 0; i &#60; document.links.length; i++) {}</code>. In the loop, there would be an if statement checking if the document link is the same with the current document url which is done by adding the condition <code>document.links[i].href == document.URL</code>. If it fullfills it, the class "active" would be added to the link tag by using the method <code>document.links[i].className = 'active';</code>. </p>

                    <p>This function can be seen in the <a href="abouthypecenter.html">company about page</a>. The technique to implement this feature was based on a forum from <a href="https://www.sitepoint.com/community/t/highlight-the-active-link-in-a-navigation-menu/38169">SitePoint</a>.</p>

                    <h2>5. Regular Expressions used in form validation</h2>

                    <p>In terms of form validation, regular expressions were used to check whether the user input received contains valid information based on a pattern assigned to each function. </p>

                    <p>In the function created for each input field, the input field with the user input is first assigned to a variable. For example, <code>var firstname = document.getElementById("firstname").value;</code>. Next, the regular expression is assigned into a variable called "pattern". These regular expressions are created based on certain requirements, for example, the regular expression used for validating names is <code>/^[a-zA-Z ]{0,25}$/</code>,  which meant uppercase or lowercase alphabets and only accepts a maximum of 25 characters. From there, the variable "firstname" is tested using by implementing the test() function. For example, <code>!pattern.test(firstname)</code>.</p>

                    <p>One of the unique regular expressions that was implemented was the regular expression for Malaysian phone numbers. This was implemented as the pattern test for the mobile number checking function called <code>checkPhone()</code>. The regular expression used was  <code>/^(\+?6?01)[0-46-9]-*[0-9]{7,8}$/</code>. The use of this regular expression meant that the visitor could only use malaysian phone numbers which would make all the phone numbers stored to share similar traits.</p>

                    <p>The use of the regular expression for Malaysia phone numbers can be tested by filling in the phone number input field in the <a href="enquiry.html#c_contact">enquiry page</a>. This feature was based on a discussion thread from <a href="https://stackoverflow.com/questions/1649435/regular-expression-to-limit-number-of-characters-to-10">Stack Overflow</a>.</p>

                </article>

            <footer>
                <?php include 'include/footer.php'; ?>
            </footer>
    </body>
</html>