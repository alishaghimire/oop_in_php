<!DOCTYPE html>
<html>
<head>
    <title>Display BCA Description using AJAX</title>
    <style>
        #content {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #444;
            width: 500px;
            background-color: #f9f9f9;
        }
        button {
            padding: 10px 20px;
            margin-top: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h2>BCA Description</h2>

<button onclick="loadBCA()">Load Description</button>

<div id="content">Content will appear here...</div>

<script>
function loadBCA() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "bca.txt", true); // Open bca.txt

    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200){
            document.getElementById("content").innerText = xhr.responseText;
        }
    };

    xhr.send();
}
</script>

</body>
</html>
