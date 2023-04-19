<?php
include('connection_login.php');
session_start()
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Login</title>
    <link href="css/login.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>
    <div class="inner">
        <div class="image"> <img src="images/watermark-removebg-preview1.png" alt="Logo"></div>

        <div class="form">
            <form action="home.php" class="formm">
                <h1>Login</h1>
                <input type="text" placeholder="Phone Number or Email" name="pno" minlength="10" required>
                <input type="password" name="password" id="password" placeholder="Enter Password" minlength="8" required >
                <i class="far fa-eye" id="togglePassword"></i>
                <center>
                    <div class="links">
                        <a href="signup.php">Dont have an account</a>
                        <a href="">Forgot Password</a>
                    </div>
                </center>
                <button class="btn primary" type="submit" >Login</button>
            </form>
            <?php
		if(isset($_POST['sub']))
		{
			$uname=$_POST['pno'];
			$pass=$_POST['pass'];
			$q=$db->prepare("SELECT * FROM admin where uname='$uname' && pass='$pass'");
			$q->execute();
			$res=$q->fetchALL(PDO::FETCH_OBJ);
			if($res){
				$_SESSION['uname']=$uname;
				header("Location:home.php");
			}
			else{
				echo "<script> alert('wrong user');</script>";
                header("Location:login.php");
			}
		}
		?>
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