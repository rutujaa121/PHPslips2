<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./jquery-4.0.0.js"></script>
    <script>
        $(document).ready(function(){
            $("#t").click(function(){
                $("#w").remove();
            })
        })
    </script>
</head>
<body>
    <div>Hello</div>
    <div>Rutuja</div>
    <div id="t">Ugale</div>
    <div id="w">Welcome</div>
</body>
</html>