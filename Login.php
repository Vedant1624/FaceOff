<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login.css">
    <title>LOGIN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">

    <script>
        function validateEmail() {
            var email = document.getElementById('email').value;
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
    <?php
    include('nav.php');
    ?>
    <div class="container">
    <form action="code.php" method="POST" onsubmit="return validateEmail();">
            <div class="login">
                <h1 class="title">ADMIN LOGIN</h1>
                <input type="text" name="email" placeholder="Enter Email" id="email" required>
                <div class="pass">
                    <input type="password" name="password" placeholder="Enter Password" id="password" required>
                </div>
                <div class="butn">
                    <button type="submit" class="log" target="code.php" value="Login">Login</button>
                </div>

            </div>
        </form>
    </div>


</body>

</html>
