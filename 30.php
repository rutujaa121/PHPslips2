<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series</title>

    <script>
        function showFibonacci() {
            var n = document.getElementById("num").value;
            var n1 = 0, n2 = 1, next;

            var result = "Fibonacci Series: ";

            for (var i = 0; i < n; i++) {
                result += n1 + " ";
                next = n1 + n2;
                n1 = n2;
                n2 = next;
            }

            document.getElementById("output").innerHTML = result;
        }
    </script>
</head>

<body>

    <h2>Fibonacci Series Program</h2>

    Enter number of terms:
    <input type="number" id="num"><br><br>

    <!-- onclick event -->
    <button onclick="showFibonacci()">Print Fibonacci</button>

    <p id="output"></p>

</body>
</html>