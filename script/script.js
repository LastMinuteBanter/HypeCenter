function storeShoe(shoename){
    sessionStorage.shoename = shoename;

}

function validateClick(){
    var shoename = document.getElementsByTagName("h2")[0].innerHTML;
    storeShoe(shoename);
}

function getShoe(){
    if(sessionStorage.shoename !=undefined){
        document.getElementById("subject").value = "RE:Enquiry on "+ sessionStorage.shoename;
    }
}

function init(){
    getShoe();
}

window.onload = init;
