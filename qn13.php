<!DOCTYPE html>
<html>
<head>
    <title>Username Check - Password Reset</title>
    <style>
        body { font-family: Arial; margin: 50px; }
        input { padding: 8px; width: 250px; margin-bottom: 10px; }
        #status { font-weight: bold; }
    </style>
</head>
<body>

<h2>Password Reset</h2>

<label>Enter Username:</label><br>
<input type="text" id="username" onkeyup="checkUsername()">
<div id="status"></div>

<script>
function checkUsername() {
    let username = document.getElementById("username").value;

    if(username.trim() === ""){
        document.getElementById("status").innerHTML = "";
        return;
    }

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "check_username13.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200){
            document.getElementById("status").innerHTML = xhr.responseText;
        }
    }

    xhr.send("username=" + encodeURIComponent(username));
}
</script>

</body>
</html>
