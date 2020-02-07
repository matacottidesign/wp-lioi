
//Accessibility
function default_bg() {
document.body.style.backgroundColor = "#f8f9fa";
document.body.style.color = "#343a40";

    var h1 = document.getElementsByTagName("H1");
    var i;
    for (i = 0; i < h1.length; i++) {
        h1[i].style.color = "#343a40";
    }

    var h2 = document.getElementsByTagName("H2");
    var i;
    for (i = 0; i < h2.length; i++) {
        h2[i].style.color = "#343a40";
    }

    var h3 = document.getElementsByTagName("H3");
    var i;
    for (i = 0; i < h3.length; i++) {
        h3[i].style.color = "#343a40";
    }

    var a = document.getElementsByTagName("A");
    var i;
    for (i = 0; i < a.length; i++) {
        a[i].style.color = "#343a40";
    }

    var footer = document.getElementsByTagName("FOOTER");
    var i;
    for (i = 0; i < footer.length; i++) {
        footer[i].style.backgroundColor = "#f8f9fa";
    }

}

function dark_bg() {
document.body.style.backgroundColor = "#343a40";
document.body.style.color = "#fff";

    var h1 = document.getElementsByTagName("H1");
    var i;
    for (i = 0; i < h1.length; i++) {
        h1[i].style.color = "#fff";
    }

    var h2 = document.getElementsByTagName("H2");
    var i;
    for (i = 0; i < h2.length; i++) {
        h2[i].style.color = "#fff";
    }

    var h3 = document.getElementsByTagName("H3");
    var i;
    for (i = 0; i < h3.length; i++) {
        h3[i].style.color = "#fff";
    }

    var a = document.getElementsByTagName("A");
    var i;
    for (i = 0; i < a.length; i++) {
        a[i].style.color = "#fff";
    }

    var footer = document.getElementsByTagName("FOOTER");
    var i;
    for (i = 0; i < footer.length; i++) {
        footer[i].style.backgroundColor = "#343a40";
    }

    var test = document.getElementsByClassName("jsblack");
    var i;
    for (i = 0; i < test.length; i++) {
        test[i].style.color = "#000";
    }

}

function resizeText(multiplier) {
    if (document.body.style.fontSize == "") {
        document.body.style.fontSize = "1.313em";
    }
    document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + "em";
}



//Flipbook
jQuery(window).ready(function() {
    jQuery('#magazine').turn({
        display: 'double',
        acceleration: true,
        gradients: !jQuery.isTouch,
        elevation:50,
        when: {
            turned: function(e, page) {
                /*console.log('Current view: ', jQuery(this).turn('view'));*/
            }
        }
    });
});
jQuery(window).bind('keydown', function(e){
    
    if (e.keyCode==37)
        jQuery('#magazine').turn('previous');
    else if (e.keyCode==39)
        jQuery('#magazine').turn('next');
        
});



//Hide-menu
var prevScrollpos = window.pageYOffset;
window.onscroll = function(){

var currentScrollpos = window.pageYOffset;

if(prevScrollpos > currentScrollpos){
    document.getElementById('menu').style.top = '0';
    document.getElementById('bottom-btn').style.opacity = '1';
} else {
    document.getElementById('menu').style.top = '-100px';
    document.getElementById('bottom-btn').style.opacity = '0';
}

prevScrollpos = currentScrollpos;
}

