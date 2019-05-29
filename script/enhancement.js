/*Filename: enhancement.js
Target html: all pages except enquiry.php
Purpose: Mainly used for enhancement functions
Author:Kiwano
Date written: 30 April 2019
Revisions: Addition of Comments, 8/5/2019
*/

//Function to fill in the confirmation page using values from each sessionstorage
function fill_summary(){
  document.getElementById("confirm_fname").textContent = sessionStorage.fname;
  document.getElementById("confirm_lname").textContent = sessionStorage.lname;
  document.getElementById("confirm_email").textContent = sessionStorage.email;
  document.getElementById("confirm_number").textContent = sessionStorage.phone;
  document.getElementById("confirm_str").textContent = sessionStorage.street_add;
  document.getElementById("confirm_town").textContent = sessionStorage.town;
  document.getElementById("confirm_state").textContent = sessionStorage.state;
  document.getElementById("confirm_postcode").textContent = sessionStorage.postcode;
  document.getElementById("confirm_shoe").textContent = sessionStorage.shoe;
  document.getElementById("confirm_colour").textContent = sessionStorage.colour;
  document.getElementById("confirm_size").textContent = sessionStorage.size;
  document.getElementById("confirm_duration").textContent = sessionStorage.duration;
  document.getElementById("confirm_subject").textContent = sessionStorage.subject;
  document.getElementById("confirm_desc").textContent = sessionStorage.comment;
}

////////////////////////////////////////////////////////////////////////////////

function validate(){
  var errMsg = "";
  /* stores the error message */
  var result =true;
  /* assumes no errors */
  if(result){        
      alert("Booking Successfully, Press 'OK' to exit this window");
  }else{        
      alert("Booking Failed");
  }return result;
  //if false the information will not be sent to the server}
}


//cancel booking button
function cancel_book(){
  window.close();
}



////////////////////////////////////////////////////////////////////////////////




//Function to display "back to top" button when page is scrolled down
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {//If scrolled pass 20 px
      document.getElementById("topBtn").style.display = "block";//Change the styling of the button to block
    } else {
      document.getElementById("topBtn").style.display = "none";
    }
  }
  
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }


  ////////////////////////////////////////////////////////////////////////////////
  
  //Highlights the page in the navigation bar when applicable
  function highlightpage(){
    for (var i = 0; i < document.links.length; i++) {
      if (document.links[i].href == document.URL) {
          document.links[i].className = 'active';//adds the class 'active'
      }}
  }


////////////////////////////////////////////////////////////////////////////////////




function init(){
  
    var path = window.location.pathname; //Obtain the page name
    var page = path.split("/").pop();//Splits out the slashes

    //If statement below tests if the page is the confirmation page
    //If it is, it will run the fill_summary() which is exclusive for that page only
    if(page=="enquiryConfirm.php"){
      fill_summary();

      if(confirm_survey){
        confirm_survey.onsubmit = validate;//If confirm button is pressed, run the validate function
        
      }else{
          cancel_survey.onclick = cancel_book;//If cancel button is pressed, run the cancel_book function
      }
    }


    highlightpage();//call function to highlight page in navigation bar
    
    //Methods below are used to perform the pop-up gallery feature for the product pages
    // Get the modal
    var modal = document.getElementById('image_modal');
    
    // Assign each image id to their variables
    var img01 = document.getElementById('img01');
    var img02 = document.getElementById('img02');
    var img03 = document.getElementById('img03');
    var img04 = document.getElementById('img04');

    //Assign the image container for the gallery
    var modalImg = document.getElementById("img_content");

    //Assign the caption text
    var captionText = document.getElementById("caption");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    //Check for onclick event for each image
    //When clicked, it will trigger the change in the styling of each element
    img01.onclick = function(){
        modal.style.display = "block"; //Change the 
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    img02.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    img03.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    img04.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
      } 

}

///////////////////////////////////////////////////////////////////////////////////////

window.onload = init;
window.onscroll = function() {scrollFunction();};//When the page is being scrolled, the scrollfunction() will take place