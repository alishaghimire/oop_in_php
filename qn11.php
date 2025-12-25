<!DOCTYPE html>
<html>
<head>
    <title>Read File using AJAX</title>
    <style>
        #content {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #444;
            width: 400px;
        }
    </style>
</head>
<body>

<h2>Display Content from bca.txt using AJAX</h2>

<button onclick="loadBCA()">Load BCA Description</button>

<div id="content">File content will appear here...</div>

<script>
    function loadBCA() {
        var xhr = new XMLHttpRequest();

        xhr.open("GET", "bca.txt", true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.getElementById("content").innerHTML = xhr.responseText;
            }
        };

        xhr.send();
    }
</script>

</body>
</html>
