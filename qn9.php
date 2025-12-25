<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registration Form with jQuery Validation</title>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
    body {
        font-family: Arial;
        background: #f4f4f4;
        padding: 20px;
    }

    .container {
        width: 450px;
        margin: auto;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px #ccc;
    }

    h2 {
        text-align: center;
    }

    label {
        font-weight: bold;
    }

    input, select {
        width: 100%;
        margin-bottom: 12px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .error {
        color: red;
        font-size: 14px;
        margin-bottom: 10px;
    }

    button {
        width: 100%;
        padding: 12px;
        background: #3498db;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background: #2980b9;
    }
</style>

</head>
<body>

<div class="container">
    <h2>Registration Form</h2>

    <form id="regForm">

        <label>Name:</label>
        <input type="text" id="name">
        <div id="nameError" class="error"></div>

        <label>Address:</label>
        <input type="text" id="address">
        <div id="addressError" class="error"></div>

        <label>Username:</label>
        <input type="text" id="username">
        <div id="usernameError" class="error"></div>

        <label>Email:</label>
        <input type="text" id="email">
        <div id="emailError" class="error"></div>

        <label>Password:</label>
        <input type="password" id="password">
        <div id="passwordError" class="error"></div>

        <label>Website:</label>
        <input type="text" id="website">

        <label>Phone:</label>
        <input type="text" id="phone">
        <div id="phoneError" class="error"></div>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="male"> Male 
        <input type="radio" name="gender" value="female"> Female
        <div id="genderError" class="error"></div>

        <label>Course:</label>
        <select id="course">
            <option value="">-- Select Course --</option>
            <option>BCA</option>
            <option>CSIT</option>
            <option>BIM</option>
            <option>BBM</option>
        </select>
        <div id="courseError" class="error"></div>

        <button type="submit">Register</button>

    </form>
</div>

<script>
$(document).ready(function(){

    $("#regForm").submit(function(e){
        e.preventDefault();

        let valid = true;

        // NAME VALIDATION
        let name = $("#name").val().trim();
        if(name === "" || /\d/.test(name)){
            $("#nameError").text("Name cannot be empty or contain numbers.");
            valid = false;
        } else {
            $("#nameError").text("");
        }

        // ADDRESS VALIDATION
        let address = $("#address").val().trim();
        if(address === ""){
            $("#addressError").text("Address cannot be empty.");
            valid = false;
        } else {
            $("#addressError").text("");
        }

        // USERNAME VALIDATION
        let username = $("#username").val().trim();
        let usernamePattern = /^[A-Za-z0-9_]+$/;   // only letters, numbers and underscore
        if(username === "" || !usernamePattern.test(username)){
            $("#usernameError").text("Username cannot be empty and only underscore allowed as special char.");
            valid = false;
        } else {
            $("#usernameError").text("");
        }

        // EMAIL VALIDATION
        let email = $("#email").val().trim();
        if(email === "" || !email.includes("@")){
            $("#emailError").text("Enter a valid email with @.");
            valid = false;
        } else {
            $("#emailError").text("");
        }

        // PASSWORD VALIDATION
        let password = $("#password").val();
        let passPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{8,}$/;

        if(password === "" || !passPattern.test(password)){
            $("#passwordError").text("Password must be 8+ chars, include 1 digit, 1 upper, 1 lower, & 1 special char.");
            valid = false;
        } else {
            $("#passwordError").text("");
        }

        // PHONE VALIDATION
        let phone = $("#phone").val().trim();
        let phonePattern = /^(98|97|96)\d{8}$/;
        if(phone === "" || !phonePattern.test(phone)){
            $("#phoneError").text("Phone must start with 98/97/96 and be 10 digits.");
            valid = false;
        } else {
            $("#phoneError").text("");
        }

        // GENDER VALIDATION
        if(!$("input[name='gender']:checked").val()){
            $("#genderError").text("Please select a gender.");
            valid = false;
        } else {
            $("#genderError").text("");
        }

        // COURSE VALIDATION
        if($("#course").val() === ""){
            $("#courseError").text("Please select a course.");
            valid = false;
        } else {
            $("#courseError").text("");
        }

        if(valid){
            alert("Form Submitted Successfully!");
        }

    });

});
</script>

</body>
</html>
