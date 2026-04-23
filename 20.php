<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <script>
        function pageload() {
            alert("Page Loaded");
        }

        function checkName() {
            var name = document.getElementById("name").value;
            if (name.trim() != "") {
                document.getElementById("name").style.color = "red";
                document.getElementById("name").style.fontSize = "18px";
            }
        }

        function showImage() {
            var name = document.getElementById("name").value;
            if (name.trim() == "") {
                document.getElementById("img").style.display = "block";
            }
        }

        function increaseSize() {
            document.getElementById("img").style.height = "300px";
        }

        function decreaseSize() {
            document.getElementById("img").style.height = "200px";
        }
    </script>
</head>

<body onload="pageload()">

    <h2>Enter Student Name:</h2>

    <input type="text" id="name" onblur="checkName()" onclick="showImage()">

    <br><br>

    <img src="abc.jpg" id="img"
        style="display:none;"
        onmouseover="increaseSize()"
        onmouseup="decreaseSize()"
        height="200px">

</body>
</html>