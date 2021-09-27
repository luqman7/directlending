function formsubmit() {
    var name = document.getElementById('name').value;
    var dob = document.getElementById('dob').value;
    var address = document.getElementById('address').value;
    var zip = document.getElementById('zip').value;
    var state = document.getElementById('state').value;

    //store all the submitted data in a string.
    var formdata = 'name' + name + '&dob=' + dob + '&address=' + address + '&zip=' + zip + '&state=' + state;
    // validate the form input
    if (name == '') {
        alert("Please Enter NAME");
        return false;
    }
    if (dob == '') {
        alert("Please Enter DOB");
        return false;
    }
    if (address == '') {
        alert("Please Enter ADDRESS");
        return false;
    }
    if (zip == '') {
        alert("Please Enter ZIP");
        return false;
    }
    if (state == '') {
        alert("Please Enter STATE");
        return false;
    }
    else {
        // AJAX code to submit form.
        $.ajax({
            type: "POST",
            url: "insert.php",
            data: formdata,
            success: function (html) {
                alert(html);
            }
        });
    }
    
    window.location.href = "display.php";
    
    return false;

    
}