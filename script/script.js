

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

function getSelectedOption(){
    var shoelist = document.getElementById("shoe1_model");
    var selshoe = shoelist.options[shoelist.selectedIndex].text;//checks for the selected option 

    storeShoe(selshoe);//assigns the current selected option in the session storage
    getShoe();
}

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
var ErrorMessage ="";

function checkname(){
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
	var pattern = /^[a-zA-Z ]+$/ 
	var nameOk = true;
	if (firstname=="" || lastname==""){
        ErrorMessage = ErrorMessage + "Please enter your name\n"
		nameOk=false;
    }else {
		if (!pattern.test(firstname) || !pattern.test(lastname)){
            ErrorMessage = ErrorMessage + "Your name must contain alpha characters\n"
            nameOk = false;
		}
    }
    sessionStorage.fname = firstname;
    sessionStorage.lname = lastname;
	return nameOk;
}

function checkEmail() {  
	var email = document.getElementById("c_email").value;
	var pattern = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-za-zA-Z0-9.-]{1,4}$/
	var emailok = false; 
	if (!pattern.test(email)){
		emailok = false;
		ErrorMessage = ErrorMessage + "Please enter a valid email address\n"
	}else{  
		emailok = true;
    }
    sessionStorage.email = email;
	return emailok;
}

function checkPhone(){
    var phone = document.getElementById("c_contact").value;
    var pattern = /^(\+?6?01)[0-46-9]-*[0-9]{7,8}$/
    var phoneOk = false;

    if(!pattern.test(phone)){
        phoneOk = false;
        ErrorMessage = ErrorMessage + "Please enter a valid phone Number\n"
    }else{
        phoneOk = true;
    }
    sessionStorage.phone = phone;
    return phoneOk;
}



function check_street_address(){
    var street_add = document.getElementById("street_address").value;
    var pattern =  /^\s*\S+(?:\s+\S+){2}/
    var add_ok = false;

    if(!pattern.test(street_add)){
        add_ok = false;
        ErrorMessage = ErrorMessage + "Please enter a valid Street Address\n"
    }else{
        add_ok = true;
    }
    sessionStorage.street_add = street_add;
    return add_ok;
}

function check_town(){
    var town = document.getElementById("town").value;
    var pattern = /^[a-zA-Z ]+$/
    var town_ok=false;

    if(!pattern.test(town)){
        town_ok = false;
        ErrorMessage = ErrorMessage + "Please enter a valid city/town name\n"
    }else{
        town_ok =true;
    }
    sessionStorage.town = town;
    return town_ok;
}

function checkstate(){
    var state = document.getElementById("state").value;
    var stateOk = false;

    if(state=="first"){
        ErrorMessage = ErrorMessage + "Please select a state\n"
        stateOk = false;
    }else{
        stateOk = true;
    }
    sessionStorage.state = state;
    return stateOk;
}

function check_post (){
    var postcode = document.getElementById("postcode").value;
    var pattern = /^[0-9]{5}$/
    var post_ok = false;
    if(!pattern.test(postcode)){
        post_ok = false;
        ErrorMessage = ErrorMessage + "Please enter a valid Postcode\n"
    }else{
        post_ok = true;
    }
    sessionStorage.postcode = postcode;
    return post_ok;

}

function shoeselected(){
	var selected = false;
    var shoe = document.getElementById("shoe1_model").value;
	if (shoe=="first"){
        selected = false;
        ErrorMessage = ErrorMessage + "Please select a shoe\n"
	}else{
		selected = true;
    }
    sessionStorage.selected = shoe;
    sessionStorage.shoe = shoe;
	return selected;
}

function colourselected(){
    var colour = document.getElementById("shoe1_colour_way").value;
	var pattern = /^(?=.*\d)(?=.*[a-zA-Z]).{2,}$/
	var colourOk = true;
	if (colour==""){
        ErrorMessage = ErrorMessage + "Please enter a shoe colour\n"
		colourOk=false;

	}else {
		if (!pattern.test(colour)){
            ErrorMessage = ErrorMessage + "Your shoe colour be alphanumeric\n"
			colourOk = false;
		}
    }
    sessionStorage.colour = colour;
	return colourOk;
}

function sizeselected(){
    var size = document.getElementById("shoe1_size").value;
    var size_to_int = parseInt(size);
    var size_select = false;

    if(size==""){
        size_select = false;
        ErrorMessage = ErrorMessage + "Please enter a size\n"
    } else{
        if(size_to_int>=7 && size_to_int<=10){
            size_select = true;
        }else{
        size_select = false;
        ErrorMessage = ErrorMessage + "Please only enter sizes between 7 and 10\n"
    }
    sessionStorage.size = size;
    return size_select;
}
}

function durationselected(){
    var duration = document.getElementById("duration").value;
    var duration_to_int = parseInt(duration);
    var duration_select = false;

    if(duration==""){
        duration_select = false;
        ErrorMessage = ErrorMessage + "Please enter a duration\n"
    }else{
        if(duration_to_int>=1 && duration_to_int<=7){
            duration_select = true;
        }else{
        duration_select = false;
        ErrorMessage = ErrorMessage + "Please only enter duration between 1 and 7\n"
    }
    sessionStorage.duration = duration;
    return duration_select;
 }
}

function store_comment_subject(){
    sessionStorage.comment= document.getElementById("comments").value;
    sessionStorage.subject = document.getElementById("subject").value;
}


function validateform(){
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
    var allfilled = false;


    if(nameOk&&emailOk&&phoneOk&&strOk&&town_ok&&stateOk&&postOk&&shoeOk&&colourOk&&sizeOk&&durationOk){
        allfilled = true;
        store_comment_subject();
        window.open("enquiryConfirm.html","_blank","width=1000,height=1000");     
    }else{
        alert(ErrorMessage);
        allfilled = false;
        ErrorMessage = "";
    }
    
    return allfilled;
}




function init(){
    addOptions();
    getShoe();
    var shoe1_model = document.getElementById("shoe1_model"); //assign selection for shoe as shoe1_model
    shoe1_model.onchange = getSelectedOption;
    
    var form = document.getElementById("survey");
    form.onsubmit = validateform;
}

window.onload = init;


