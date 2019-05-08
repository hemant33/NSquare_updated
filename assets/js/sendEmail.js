
function myFunction() {
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var comments = document.getElementById("comments").value;
    var capchaValue = document.getElementById("g-recaptcha-response").value;
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'name=' + name + '&phone=' + phone + '&email=' + email + '&comments=' + comments + '&g-recaptcha-response=' + capchaValue;
    $.ajax({
        type: "POST",
        url: "SendMail.php",
        data: dataString,
        cache: false,
        success: function (html) {

            $("#message").html(html);

            $("#message").fadeTo(2000, 500).slideUp(500, function () {
                $("#message").slideUp(500);
            });


            document.getElementById("form").reset();
            grecaptcha.reset();
        }
    });
    return true;
}
