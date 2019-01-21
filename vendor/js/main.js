/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function toggleNavbar() {
    var x = document.getElementById("navbar");
    var togglerIcon = document.getElementById('navbar-toggler-icon');

    if (x.className === "navbar") {
        x.className += " responsive";
        togglerIcon.className = "fa fa-times navbar-toggler-icon";
    } else {
        x.className = "navbar";
        togglerIcon.className = "fa fa-bars navbar-toggler-icon";
    }
}

// Function to import html file
function includeHTML() {
    var z, i, elmnt, file, xhttp;
    /*loop through a collection of all HTML elements:*/
    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++) {
        elmnt = z[i];
        /*search for elements with a certain atrribute:*/
        file = elmnt.getAttribute("w3-include-html");
        if (file) {
            /*make an HTTP request using the attribute value as the file name:*/
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        elmnt.innerHTML = this.responseText;
                    }
                    if (this.status == 404) {
                        elmnt.innerHTML = "Page not found.";
                    }
                    /*remove the attribute, and call this function once more:*/
                    elmnt.removeAttribute("w3-include-html");
                    includeHTML();
                }
            }
            xhttp.open("GET", file, true);
            xhttp.send();
            /*exit the function:*/
            return 0;
        }
    }
}

includeHTML();

var btnClickMe = document.getElementsByClassName("btn-outline-hover");

for (var i = 0; i < btnClickMe.length; i++) {
    btnClickMe[i].addEventListener("mouseenter", displayClickMe);
    btnClickMe[i].addEventListener("mouseout", reverseDisplayClickMe);
}

function displayClickMe() {
    this.innerHTML = "Click me >>";
    $("btn-news").padding = 'inherit';
}

function reverseDisplayClickMe() {
    var btnNewsValue = this.attributes["data-btnNews"].value;
    this.innerHTML = btnNewsValue;
}