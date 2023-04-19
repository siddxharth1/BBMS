<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <title>Signup</title>
    <link href="css/signup.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
</head>

<body>
    <div class="inner">
        <div class="image"> <img src="images/watermark-removebg-preview1.png" alt="Logo"/></div>

        <div class="form">
            <form action="connect.php" method="post">
                <h1>Signup</h1>
                <input type="text" placeholder="Phone Number" name="pno" minlength="10" required />
                <input type="password" name="password" id="password" placeholder="Create Password" minlength="8" required />
                <i class="far fa-eye" id="togglePassword"></i>
                <input type="date" name="dob" id="" />
                <center>
                    <div class="links">
                        <a href="login.php">Have an account</a>
                        <a href="">Forgot Password</a>
                    </div>
                </center>
                <button class="btn primary" type="submit">Signup</button>
            </form>

        </div>
    </div>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye / eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>

</body>

</html>
