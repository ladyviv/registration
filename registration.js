$(document).ready(function() {
    $("#register").click(function() {
    var name = $("#name").val();
    var email = $("#email").val();
    var state = $("#state").val();
    var address = $("#address").val();
    var password = $("#password").val();
    var cpassword= $("#cpassword").val();
    var bgroup = $("#bgroup").val();
    if (name == '' || email == ''|| state == ''|| address == '' || password == '' || cpassword == ''|| bgroup == '') {
    alert("Please fill all fields...!!!!!!");
    } else if ((password.length) < 8) {
    alert("Password should atleast 8 character in length...!!!!!!");
    } else if (!(password).match(cpassword)) {
    alert("Your passwords don't match. Try again?");
    } else {
    $.post("reg.php", {
    name: name,
    email: email,
    state: state,
    address: address,
    password: password,
    cpassword: cpassword,
    bgroup: bgroup
    }, function(data) {
    if (data == 'You have Successfully Registered.....') {
    $("form")[0].reset();
    }
    alert(data);
    });
    }
    });
    });