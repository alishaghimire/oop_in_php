<!DOCTYPE html>
<html>
<head>
    <title>AJAX Login Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Login Form (AJAX)</h2>
    <form id="loginForm">
        <label>User ID:</label><br>
        <input type="text" id="userid" name="userid"><br><br>
        <label>Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit">Login</button>
    </form>
    <div id="message"></div>

    <script>
    $(document).ready(function(){
        $("#loginForm").on("submit", function(e){
            e.preventDefault();
            let userid = $("#userid").val();
            let password = $("#password").val();

            $.ajax({
                url: "qn10login.php", // separate PHP file
                type: "POST",
                data: { userid: userid, password: password },
                success: function(response){
                    if(response.trim() === "success"){
                        $("#message").css("color","green").html("Welcome, " + userid + "!");
                        $("#userid, #password").hide();
                    } else {
                        $("#message").css("color","red").html("Invalid credentials. Try again!");
                    }
                }
            });
        });
    });
    </script>
</body>
</html>