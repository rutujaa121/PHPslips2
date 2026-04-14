<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form onsubmit="return validate()">
        Username: <input type="text" id="user"><br><br>
        Password: <input type="text" id="pass"><br><br>
        <input type="submit" value="submit">
    </form>

    <script>
        function validate(){
            var user = document.getElementById("user").value;
            var pass = document.getElementById("pass").value;

            var patt1 = /^[a-zA-Z0-9]{5,}$/;
            var patt2 = /^[a-z0-9]{6}$/;

            if(!patt1.test(user))
            {
                alert("Invalid");
                return false;
            }
            if(!patt2.test(pass))
            {
                alert("Invalid");
                return false;
            }
            alert("Login Successfully");
            return true;
        }
    </script>
</body>
</html>