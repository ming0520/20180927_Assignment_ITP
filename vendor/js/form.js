var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

var items = document.querySelectorAll("input"); //select all input field
var tipsBar = document.getElementById('tips'); // select tipsBar (id ="tips in html")

//..... A loop check through all the input field if focused then run....
for (var i = 0; i < items.length; i++) {
    items[i].addEventListener("focus", showTips);
}

function showTips() {
    //This function will display tips for input field
    hideTips(); //intialization...
    tipsBar.innerHTML = this.placeholder + " This field cannot be empty !";
    if (this.id == "ic-number") {
        tipsBar.innerHTML = "Enter the valid I.C number (999999-99-9999)";
    }
}

function hideTips() {
    tipsBar.innerHTML = "";
}

function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }

    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    tipsBar.innerHTML = "";
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");

    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";

            // and set the current valid status to false
            valid = false;
        }
    }
    // validate ic
    if (currentTab == 1) {
        //set the current valid status
        valid = validateIC();
    }

    if (currentTab == 2) {
        //set the current valid status
        valid = validateDate(y);
    }

    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}

function validateIC() {
    // This function verify length of ic number
    var icNumber = document.getElementById('ic-number').value;
    var counter = 0;
    //counter for ic number and devide 10 each time
    /*for (i = icNumber; icNumber >= 1; icNumber /= 10) {
        counter++;
    }*/

    if (icNumber.length != 14) {
        // add an "invalid" class to the field:
        document.getElementById('ic-number').className += " invalid";
        alert("Ic number must be 12 digit!");
        //return the valid status
        return false;
    } else {

    }
    //return the valid status
    return true;
}

function validateDate(y) {
    //this function is to verify date format
    var errint = 0,
        errlen = 0;
    var maxDate = [31, 12, 2018]; //maximum number for day,month,year
    var nameDate = ["dd", "mm", "yyyy"]; //placeheader

    for (j = 0; j < y.length; j++) {
        //if the date not a integer number
        if (!(parseInt(y[j].value))) {
            //counter for error of integer
            errint++;
            // add an "invalid" class to the field:
            y[j].className += " invalid";
            //clear the value in input box allow to show place holder
            y[j].value = "";
        }
    }

    for (j = 0; j < y.length; j++) {
        //if the date less than maxDate
        if ((parseInt(y[j].value) > maxDate[j])) {
            //clear the value in input box allow to show place holder
            y[j].value = "";
            //error message appear in placeholder
            // y[j].placeholder = y[j].placeholder + " must less than " + maxDate[j];
            tipsBar.innerHTML = y[j].placeholder + " must less than or equal " + maxDate[j];
            // add an "invalid" class to the field:
            y[j].className += " invalid";
            //counter for error of length
            errlen++;
        }
    }

    if (errlen > 0) {
        //return the valid status
        return false;
    }

    if (errint > 0) {
        tipsBar.innerHTML = ("Date must be a number!");
        //return the valid status
        return false;
    }

    //return the valid status
    return true;
}