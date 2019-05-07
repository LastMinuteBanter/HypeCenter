/*Filename: script.js
Target html: [productpages].html,enquiry.html
Purpose: Mainly used for form filling and validation
Author:Kiwano
Date written: 26 April 2019
Revisions: Addition of Comments, 8/5/2019
*/

function storeShoe (shoename){ 
    //Storing the current shoe name to session storage
    sessionStorage.shoename = shoename;
}


function validateClick(){
    //obtain the text from the h2 tag of each product page
    var shoename = document.getElementsByTagName("h2")[0].innerHTML;
    //Store the text into current sessionstorage
    storeShoe(shoename);
}

function getShoe(){
    //if the sessionstorage has a value,
    // fill in the subject field in the form of enquiry.html 
    if(sessionStorage.shoename !=undefined){
        document.getElementById("subject").value = "RE:Enquiry on "+ sessionStorage.shoename;
    }
}

/////////////////////////////////////////////////////////////////////////////////////////////////////

//function to get the selected shoe from the product drop down list in enquiry.html
function getSelectedOption(){
    var shoelist = document.getElementById("shoe1_model");
    var selshoe = shoelist.options[shoelist.selectedIndex].text;//checks for the selected option 

    storeShoe(selshoe);//assigns the current selected option in the session storage
    getShoe();
}


///////////////////////////////////////////////////////////////////////////////////////////////////

//function to add options to drop down list
function addOptions(){ //add options in select tag

    //array below is the list of shoes for each option
    var shoes = ["Yeezy True Form", "Yeezy Wave Runner","NMD Solar Hu CNY","Bape Ultraboost","Pharell CNY Gold","Future Craft","Levi's Air Jordan 4","AJ1 OFF-White Chicago","Air Max 1/97 Sean Wotherspoon","AJ4 Travis Scott","Air Yeezy 2 Red Octobers","AJ13 Terracotta Warrior","CDG X Chuck Taylor 1970 Low 'play' ","NBA x Chuck Taylor CHi","Chuck Taylor Allstar","Dr. Woo x Chuck Taylor 'white'","OffWhite x Chuck Taylor","Intangible","Sk8 Pro Supreme Green Skull Pile","Sk8 Hi Pro Supreme Checkboard","Sk8 Hi 46 MTE DX Nasa Space Voyager","Vans X Mastermind X Kith","Fear of God Vans Mountain Edition 35 DX","Sk8 HI 'Cut and Paste'"];

    //array below is the list of brands for each option group
    var brands =["Nike","Converse","Vans"];

    var sel = document.getElementById('shoe1_model');//assigns the select tag to a variable
    var c = 0 //variable used for adding option group

    for(var i = 0; i < shoes.length; i++) {
        var opt = document.createElement('option');//creates the option tag
        opt.innerHTML = shoes[i];//enter the name from "shoes" array
        opt.value = shoes[i];//assigns value based on shoe name
        sel.appendChild(opt);//adds the option

        //adds in next option group after certain index
        if(i==5 || i==11 || i==17){
            var optgrp = document.createElement('optgroup');
            optgrp.label = brands[c];
            sel.appendChild(optgrp);
            c+=1
        }
    }

}

///////////////////////////////////////////////////////////////////////////////////////////////////
//Below are the codes for the form validation



var ErrorMessage ="";//Error message variable used store all error messages

//First and Last Name check function
function checkname(){
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
	var pattern = /^[a-zA-Z ]{0,25}$/ //Pattern tests for alphabet characters with a maximum of 25 characters
    var nameOk = true; 
    

	if (firstname=="" || lastname==""){//Test if the field is left empty
        ErrorMessage = ErrorMessage + "Please enter your name\n"
		nameOk=false;
    }else {
		if (!pattern.test(firstname) || !pattern.test(lastname)){ //Test if any of the fields do not fullfill the pattern
            ErrorMessage = ErrorMessage + "Your name must contain alpha characters and be less than 25 characters\n"
            nameOk = false;
		}
    }

    //Storing the first and last name values in a sessionstorage
    sessionStorage.fname = firstname;
    sessionStorage.lname = lastname;
	return nameOk;
}


//Email checking function
function checkEmail() {  
	var email = document.getElementById("c_email").value;
	var pattern = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-za-zA-Z0-9.-]{1,4}$/ //Pattern tests for email characteristics
    var emailok = false; 
    

	if (!pattern.test(email)){ //Test if the email entered fullfills the pattern
		emailok = false;
		ErrorMessage = ErrorMessage + "Please enter a valid email address\n"
	}else{  
		emailok = true;
    }

    //storing the email into a sessionstorage
    sessionStorage.email = email;
	return emailok;
}


//Phone number validation
function checkPhone(){
    var phone = document.getElementById("c_contact").value;
    var pattern = /^(\+?6?01)[0-46-9]-*[0-9]{7,8}$/ //Pattern tests for Malaysian phone number
    var phoneOk = false;

    if(!pattern.test(phone)){
        phoneOk = false;
        ErrorMessage = ErrorMessage + "Please enter a valid Malaysian Phone Number\n"
    }else{
        phoneOk = true;
    }

    //Store the phone number into sessionstorage
    sessionStorage.phone = phone;
    return phoneOk;
}


//Street Address validation
function check_street_address(){
    var street_add = document.getElementById("street_address").value;
    var pattern =  /^[a-zA-Z0-9\s,.'-]{3,40}$/  //maximum of 50 chars
    var add_ok = false;

    if(!pattern.test(street_add)){
        add_ok = false;
        ErrorMessage = ErrorMessage + "Please enter a valid Street Address\n"
    }else{
        add_ok = true;
    }

    //Store the street address into sessionstorage
    sessionStorage.street_add = street_add;
    return add_ok;
}


//Town validation
function check_town(){
    var town = document.getElementById("town").value;
    var pattern = /^[a-zA-Z ]{0,20}$/ //Town name can only contain alphabets and maximum 25 chars
    var town_ok=false;

    if(!pattern.test(town)){//test if the value fulfills the pattern
        town_ok = false;
        ErrorMessage = ErrorMessage + "Please enter a valid city/town name\n"
    }else{
        town_ok =true;
    }

     //Store the town entered into sessionstorage
    sessionStorage.town = town;
    return town_ok;
}


//State Validation
function checkstate(){
    var state = document.getElementById("state").value;
    var stateOk = false;


    //If the selected option is the first option, it will show an error
    //The validation will only pass when the value of the option is other than the first value
    if(state=="first"){ 
        ErrorMessage = ErrorMessage + "Please select a state\n"
        stateOk = false;
    }else{
        stateOk = true;
    }

     //Store the state selected into sessionstorage
    sessionStorage.state = state;
    return stateOk;
}


//postcode validation
function check_post (){
    var postcode = document.getElementById("postcode").value;
    var pattern = /^[0-9]{5}$/ //Postcode contains numeric values and maximum of 5 characters
    var post_ok = false;
    

    if(!pattern.test(postcode)){
        post_ok = false;
        ErrorMessage = ErrorMessage + "Please enter a valid Postcode\n"
    }else{
        post_ok = true;
    }

     //Store the postcode into sessionstorage
    sessionStorage.postcode = postcode;
    return post_ok;

}


//Shoe selected validation
function shoeselected(){
	var selected = false;
    var shoe = document.getElementById("shoe1_model").value;

    //If the selected option is the first option, it will show an error
    //The validation will only pass when the value of the option is other than the first value
	if (shoe=="first"){
        selected = false;
        ErrorMessage = ErrorMessage + "Please select a shoe\n"
	}else{
		selected = true;
    }

    //Store the postcode into sessionstorage
    sessionStorage.shoe = shoe;
	return selected;
}

//Shoe colour validation
function colourselected(){
    var colour = document.getElementById("shoe1_colour_way").value;
	var pattern = /^(?=.*\d)(?=.*[a-zA-Z]).{2,}$/ // Tests for a mixture of alphabets and numbers
    var colourOk = true;
    

	if (colour==""){
        ErrorMessage = ErrorMessage + "Please enter a shoe colour\n"
		colourOk=false;

	}else {
		if (!pattern.test(colour)){
            ErrorMessage = ErrorMessage + "Your shoe colour must be alphanumeric\n"
			colourOk = false;
		}
    }

    //Store the colour entered into sessionstorage
    sessionStorage.colour = colour;
	return colourOk;
}


//Shoe Size validation
function sizeselected(){
    var size = document.getElementById("shoe1_size").value;
    var size_to_int = parseInt(size);//Convert the text value to integer
    var size_select = false;

    if(size==""){ // If there is no input
        size_select = false;
        ErrorMessage = ErrorMessage + "Please enter a size\n"
    } else{
        if(size_to_int>=7 && size_to_int<=10){//Check if the inputed value is between 7 and 10
            size_select = true;
        }else{
        size_select = false;
        ErrorMessage = ErrorMessage + "Please only enter sizes between 7 and 10\n"
    }

    //Store the size entered into sessionstorage
    sessionStorage.size = size;
    return size_select;
}
}


//duration validation
function durationselected(){
    var duration = document.getElementById("duration").value;
    var duration_to_int = parseInt(duration);
    var duration_select = false;

    if(duration==""){// If there is no input
        duration_select = false;
        ErrorMessage = ErrorMessage + "Please enter a duration\n"
    }else{
        if(duration_to_int>=1 && duration_to_int<=7){//Check if the inputed value is between 1 and 7
            duration_select = true;
        }else{
        duration_select = false;
        ErrorMessage = ErrorMessage + "Please only enter duration between 1 and 7\n"
    }

    //Store the duration entered into sessionstorage
    sessionStorage.duration = duration;
    return duration_select;
 }
}


//Subject Validation
function checkSubject(){
    var subject = document.getElementById("subject").value;
    var subject_filled = false;

    if(subject== ""){// If there is no input
        subject_filled = false;
        ErrorMessage = ErrorMessage + "Please fill in the Subject field\n"
    }else{
        subject_filled = true;
    }

    //Store the subject and comments entered into sessionstorage
    sessionStorage.comment= document.getElementById("comments").value;
    sessionStorage.subject = subject
    return subject_filled
}


function validateform(){

    //Store all boolean values from each function
    var nameOk = checkname();
    var emailOk = checkEmail();
    var phoneOk = checkPhone();
    var strOk = check_street_address();
    var town_ok = check_town();
    var stateOk = checkstate();
    var postOk = check_post();
    var shoeOk = shoeselected();
    var colourOk = colourselected();
    var sizeOk = sizeselected();
    var durationOk = durationselected();
    var subjectOk = checkSubject();
    var allfilled = false;


    //Checks if all values are true
    if(nameOk&&emailOk&&phoneOk&&strOk&&town_ok&&stateOk&&postOk&&shoeOk&&colourOk&&sizeOk&&durationOk&&subjectOk){
        allfilled = true;
        window.open("enquiryConfirm.html","_blank","width=1000,height=1000"); //Triggers the confirmation page
    }else{
        alert(ErrorMessage);
        allfilled = false;
        ErrorMessage = "";
    }
    
    return allfilled;
}




function init(){
    addOptions(); //Add in Options to dropdown list
    getShoe(); // Fill in the Subject field if sessionstorage is not empty

    var shoe1_model = document.getElementById("shoe1_model"); //assign selection for shoe as shoe1_model
    shoe1_model.onchange = getSelectedOption;//Change the value in subject field if shoe selection is changed
    
    var form = document.getElementById("survey");
    form.onsubmit = validateform;//Validates form if submitted
}

window.onload = init;


