<html>
<head>
<title>Registration Form </title>
<meta name="robots" content="noindex, nofollow">
<link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="container">
    <div class="main">
        <form class="form" method="post" action="">
        <h2> Registration Form </h2>
        <label>Name :</label>
        <input type="text" name="name" id="name"><br>
        <br>
        <label>Email :</label>
        <input type="text" name="email" id="email"><br>
        <br>
        <label for="state">State of Origin:</label>
            <select id="state" name="state">
            <option value="Abia">Abia </option>
            <option value="Adamawa">Adamawa</option>
            <option value="Akwa Ibom">Akwa Ibom </option>
            <option value="Anambra">Anambra</option>
            <option value="Bauchi">Bauchi </option>
            <option value="Bayelsa">Bayelsa</option>
            <option value="Benue">Benue</option>
            <option value="Borno">Borno</option>
            <option value="Cross River">Cross River </option>
            <option value="Delta">Delta </option>
            <option value="Ebonyi">Ebonyi</option>
            <option value="Edo">Edo</option>
            <option value="Ekiti">Ekiti</option>
            <option value="Enugu">Enugu</option>
            <option value="Gombe">Gombe</option>
            <option value="Imo">Imo</option>
            <option value="Jigawa">Jigawa</option>
            <option value="Kaduna">Kaduna</option>
            <option value="Kano">Kano</option>
            <option value="Katsina">Katsina</option>
            <option value="Kebbi">Kebbi</option>
            <option value="Kogi">Kogi</option>
            <option value="Kwara">Kwara</option>
            <option value="Lagos">Lagos</option>
            <option value="Nasarawa">Nasarawa </option>
            <option value="Niger">Niger </option>
            <option value="Ogun">Ogun </option>
            <option value="Ondo">Ondo </option>
            <option value="Osun">Osun</option>
            <option value="Oyo">Oyo</option>
            <option value="Plateau">Plateau</option>
            <option value="Rivers">Rivers</option>
            <option value="Sokoto">Sokoto</option>
            <option value="Taraba">Taraba</option>
            <option value="Yobe">Yobe</option>
            <option value="Zamfara">Zamfara</option>
            </select><br>
            <br>
        <label>Address :</label>
        <input type="address" name="address" id="address"><br>
        <br>
        <label>Password :</label>
        <input type="password" name="password" id="password"><br>
        <br>
        <label>Confirm Password :</label>
        <input type="password" name="cpassword" id="cpassword"><br>
        <br>
        <label for="blood group">Blood Group:</label>
            <select id="bgroup" name="bgroup">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option><br>
            </select><br>
        <input type="submit" name="register" id="register" value="Register"><br>
        <br>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<script>
    $(function(){
        $('form').on('submit', function(e){
            e.preventDefault ? e.preventDefault() : e.returnValue = false;
            // first grab all your data using jquery by targeting form input id
            var name = $("#name").val();
            var email = $("#email").val();
            var state = $("#state").val();
            var address = $("#address").val();
            var password = $("#password").val();
            var cpassword= $("#cpassword").val();
            var bgroup = $("#bgroup").val();

            if(name == '' || email == ''|| state == ''|| address == '' || password == '' || cpassword == ''|| bgroup == ''){
                alert("Please fill all fields");
            } else if ((password.length) < 8) {
                alert("Password should atleast 8 character in length");
            } else if (!(password).match(cpassword)) {
                alert("Your passwords don't match. Try again");
            } else {
                $.ajax({
                    url: "https://speededuconsult.com/reg.php",
                
                    data: {
                        "name":name,
                        "email": email,
                        "state": state,
                        "address": address,
                        "password": password,
                        "bgroup": bgroup     
                    },
                    type: "POST",
                    success: function(response){
                        console.log("Success: " + response.toString());
                    },
                    success: function(response){
                        console.log("Error: " + response)
                    }
                })
            }
        })
    })
    // $(document).ready(function() {
    //     $("#register").click(function() {
    //\     var name = $("#name").val();
    //     var email = $("#email").val();
    //     var state = $("#state").val();
    //     var address = $("#address").val();
    //     var password = $("#password").val();
    //     var cpassword= $("#cpassword").val();
    //     var bgroup = $("#bgroup").val();
    //     if (name == '' || email == ''|| state == ''|| address == '' || password == '' || cpassword == ''|| bgroup == '') {
    //     alert("Please fill all fields...!!!!!!");
    //     } else if ((password.length) < 8) {
    //     alert("Password should atleast 8 character in length...!!!!!!");
    //     } else if (!(password).match(cpassword)) {
    //     alert("Your passwords don't match. Try again?");
    //     } else {
    //     $.post("reg.php", {
    //     name: name,
    //     email: email,
    //     state: state,
    //     address: address,
    //     password: password,
    //     cpassword: cpassword,
    //     bgroup: bgroup
    //     }, function(data) {
    //     if (data == 'You have Successfully Registered.....') {
    //     $("form")[0].reset();
    //     }
    //     alert(data);
    //     });
    //     }
    //     });
    //     });
</script>

</body>
</html>
