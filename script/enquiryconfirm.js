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

}

function validate(){
    var errMsg = "";
    /* stores the error message */
    var result =true;
    /* assumes no errors */
    if(result){        
        alert("Booking Successfully, Press 'OK' to exit this window");
        window.close();
    }else{        
        alert("Booking Failed");
    }return result;
    //if false the information will not be sent to the server}
}

function cancel_book(){
    window.close();
}


function init(){
    fill_summary();
    var confirm_survey = document.getElementById("confirm_survey");
    var cancel_survey = document.getElementById("cancel_survey");

    if(confirm_survey){
        confirm_survey.onsubmit = validate;
        
    }else{
        cancel_survey.onclick = cancel_book;
    }
}
window.onload = init;