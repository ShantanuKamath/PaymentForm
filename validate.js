/********************************
 * Name: Kamath Shantanu Arun    *
 * Matric No.: U1422577F         *
 * Lab Group: TS2                *
 ********************************/

// Validation for 'Name'.
function validateName() {
    var nameVal = document.getElementById('name').value;

    // Check for blank and digit, if present, request fix.
    if (nameVal == "" || nameVal.search(/[0-9]/) != -1) {
        alert("Please enter a valid name.");
        document.getElementById('name').focus();
        document.getElementById('name').select();
        return false;
    } else {
        return true;
    }
}

// Validation for 'Apples', 'Oranges' & 'Bananas'.
function validateNumeric() {
    var applesValue = document.getElementById('apples').value;
    var orangesValue = document.getElementById('oranges').value;
    var bananasValue = document.getElementById('bananas').value;
    var flag = false;

    // Check for blank, null or not a number.
    if (isNaN(applesValue) || applesValue == "" || applesValue == null) {
        flag = "apples";
        alertUser(flag);
    }

    // Check for blank, null or not a number.
    if (isNaN(orangesValue) || orangesValue == "" || orangesValue == null) {
        flag = "oranges";
        alertUser(flag);
    }

    // Check for blank, null or not a number.
    if (isNaN(bananasValue) || bananasValue == "" || bananasValue == null) {
        flag = "bananas";
        alertUser(flag);
    }

    // Check if any are invalid.
    if (flag) {
        return false;
    } else {
        var total = (applesValue * 0.69) + (orangesValue * 0.59) + (bananasValue * 0.39);
        total = total.toFixed(2); // rounding to two decimal places
        document.getElementById('totalCost').value = total;
        return true;
    }
}

// Alert the user for invalid numeric field.
function alertUser(field) {
    alert("The number of " + field + " is invalid.");
    document.getElementById(field).focus();
    document.getElementById(field).select();
    document.getElementById('totalCost').value = "NaN"; // set totalCost to "NaN"
}

// Validation for 'Payment'.
function validatePayment() {
    // Check at least one radio button is selected.
    if (document.getElementById("visa").checked || document.getElementById("mastercard").checked || document.getElementById("discover").checked) {
        return true;
    } else {
        alert("Please check one payment method.")
        return false;
    }
}
