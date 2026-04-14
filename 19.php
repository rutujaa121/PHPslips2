<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-4.0.0.js"></script>
    <script>
        $(document).ready(function(){
            $("#btn").click(function(){
                $("img").before("Before");
                $("img").after("After");
            })
        });
    </script>
</head>
<body>
    <img src="https://img.freepik.com/free-photo/closeup-shot-beautiful-butterfly-with-interesting-textures-orange-petaled-flower_181624-7640.jpg?semt=ais_hybrid&w=740&q=80"/>

    <button id="btn">Submit</button>
</body>
</html>