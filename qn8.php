<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jQuery Effects Demo</title>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }

        .box {
            width: 200px;
            height: 200px;
            background: #3498db;
            margin: 20px auto;
            border-radius: 10px;
        }

        button {
            margin: 5px;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            background: #2ecc71;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #27ae60;
        }
    </style>
</head>

<body>

    <h1>Using jQuery</h1>

    <div class="box"></div>

    <!-- Buttons -->
    <button id="hide">Hide</button>
    <button id="show">Show</button>
    <button id="toggle">Toggle</button>
    <br>

    <button id="fadeIn">Fade In</button>
    <button id="fadeOut">Fade Out</button>
    <button id="fadeToggle">Fade Toggle</button>
    <br>

    <button id="slideUp">Slide Up</button>
    <button id="slideDown">Slide Down</button>
    <button id="slideToggle">Slide Toggle</button>
    <br>

    <button id="animate">Animate</button>

    <script>
        $(document).ready(function () {

            $("#hide").click(function () {
                $(".box").hide();
            });

            $("#show").click(function () {
                $(".box").show();
            });

            $("#toggle").click(function () {
                $(".box").toggle();
            });

            $("#fadeIn").click(function () {
                $(".box").fadeIn();
            });

            $("#fadeOut").click(function () {
                $(".box").fadeOut();
            });

            $("#fadeToggle").click(function () {
                $(".box").fadeToggle();
            });

            $("#slideUp").click(function () {
                $(".box").slideUp();
            });

            $("#slideDown").click(function () {
                $(".box").slideDown();
            });

            $("#slideToggle").click(function () {
                $(".box").slideToggle();
            });

            $("#animate").click(function () {
                $(".box").animate({
                    width: "300px",
                    height: "300px",
                    opacity: 0.5,
                }, 800);
            });

        });
    </script>

</body>
</html>
