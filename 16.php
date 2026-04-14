<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        var a = confirm("Exams are near, have you started preparing for?");
        if (a == true) 
        {
            var n = window.prompt("Enter Your Name: ");
            if (n != null) 
            {
                alert("Best Luck " + n);
            } 
            else 
            {
                alert("Best luck..!");
            }
        }
        else
        {
            alert("Prepared For it...");
        }
    </script>
</body>
</html>