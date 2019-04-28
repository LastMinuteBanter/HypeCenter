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

function getSelectedOption(){
    var shoelist = document.getElementById("shoe1_model");
    var selshoe = shoelist.options[shoelist.selectedIndex].text;

    storeShoe(selshoe);
    getShoe();
}

function addOptions(){
    var shoes = ["Yeezy True Form", "Yeezy Wave Runner","NMD Solar Hu CNY","Bape Ultraboost","Pharell CNY Gold","Future Craft","Levi's Air Jordan 4","AJ1 OFF-White Chicago","Air Max 1/97 Sean Wotherspoon","AJ4 Travis Scott","Air Yeezy 2 Red Octobers","AJ13 Terracotta Warrior","CDG X Chuck Taylor 1970 Low 'play' ","NBA x Chuck Taylor CHi","Chuck Taylor Allstar","Dr. Woo x Chuck Taylor 'white'","OffWhite x Chuck Taylor","Intangible","Sk8 Pro Supreme Green Skull Pile","Sk8 Hi Pro Supreme Checkboard","Sk8 Hi 46 MTE DX Nasa Space Voyager","Vans X Mastermind X Kith","Fear of God Vans Mountain Edition 35 DX","Sk8 HI 'Cut and Paste'"]

    var brands =["Nike","Converse","Vans"]
    var sel = document.getElementById('shoe1_model');
    var c = 0
    for(var i = 0; i < shoes.length; i++) {
        var opt = document.createElement('option');
        opt.innerHTML = shoes[i];
        opt.value = shoes[i];
        sel.appendChild(opt);
        if(i==5 || i==11 || i==17){
            var optgrp = document.createElement('optgroup');
            optgrp.label = brands[c];
            sel.appendChild(optgrp);
            c+=1
        }
    }

}

function init(){
    var shoe1_model = document.getElementById("shoe1_model");
    shoe1_model.onchange = getSelectedOption;
    addOptions();
    getShoe();
}

window.onload = init;
