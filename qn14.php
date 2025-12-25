<!DOCTYPE html>
<html>
<head>
    <title>Country-City Dropdown using AJAX</title>
    <style>
        body { font-family: Arial; margin: 50px; }
        select { padding: 8px; margin-bottom: 20px; width: 200px; }
    </style>
</head>
<body>

<h2>Country and City Dropdown</h2>

<label>Select Country:</label><br>
<select id="country" onchange="loadCities()">
    <option value="">-- Select Country --</option>
    <option value="Nepal">Nepal</option>
    <option value="India">India</option>
    <option value="USA">USA</option>
</select>

<br>

<label>Select City:</label><br>
<select id="city">
    <option value="">-- Select City --</option>
</select>

<script>
function loadCities() {
    var country = document.getElementById("country").value;

    if(country === ""){
        document.getElementById("city").innerHTML = "<option value=''>-- Select City --</option>";
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "get_cities14.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200){
            document.getElementById("city").innerHTML = xhr.responseText;
        }
    }

    xhr.send("country=" + encodeURIComponent(country));
}
</script>

</body>
</html>
