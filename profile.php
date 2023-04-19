<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="css/profile.css" rel="stylesheet" type="text/css" />
    <link href="css/nav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <title>Profile</title>
</head>
<body>
    <nav>
        <div class="nav-left">
            <img src="images/watermark-removebg-preview1.png"  alt="logo" onclick="location.href='home.php';" />
        </div>
        <div class="nav-right">
            <a href="home.php">Home</a>
            <a href="blog.php">Blog</a>
            <a href="contact-us.php">Contact Us</a>
            <a href="about-us.php">About Us</a>
            <a href="profile.php">Profile</a>
        </div>
    </nav>
    

    <!-- Main -->
    <div class="main">
        <h2>Profile</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <form action="connect_profile.php" method="post">
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td> <input type="text" name="name" id="" value=""  placeholder="Full Name"> </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><input type="text" name="email" id="" value="" placeholder="Email Address"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td><input type="text" name="address" id="" value="" placeholder="Address"></td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td>:</td>
                            <td><input type="number" name="age" id="" value="" placeholder="Age"></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td>:</td>
                            <td><input type="text" name="pno" id="" value="" placeholder="Phone Number"></td>
                        </tr>
                        <tr>
                            <td>Blood group</td>
                            <td>:</td>
                            <td><select id="dropdown" class="form-control" name="blood">
                                <option disabled selected value>Select your blood type</option>
                                <option value="O-">O-</option>
                                <option value="O+">O+</option>
                                <option value="A-">A-</option>
                                <option value="A+">A+</option>
                                <option value="B-">B-</option>
                                <option value="B+">B+</option>
                                <option value="AB-">AB-</option>
                                <option value="AB+">AB+</option>
                            </select></td>
                        </tr>
                        
                    </tbody>
                </table>
                
                <button class="btn primary" type="submit" style="height: 40px;
                width: 100px;
                border-radius: 25px;
                margin: 20px 0 0 10px;
                font-weight: 700;
                font-size: large;
                border: 2px solid red;
                transition: 0.2s ease-in-out ;
                cursor: pointer;" onclick=>Save</button>
                </form>
            </div>
        </div>

        <br>
        
        <h2>Previous Trades</h2>
        <div class="card">
            <div class="card-body">
                <table>
                    <tbody>
                        <tr>
                            <td>Donated</td>
                            <td>:</td>
                            <td> 12/12/2022</td>
                        </tr>
                        <tr>
                            <td>Donated</td>
                            <td>:</td>
                            <td> 02/11/2022</td>
                        </tr>
                        <tr>
                            <td>Donated</td>
                            <td>:</td>
                            <td> 12/12/2022</td>
                        </tr>
                        <tr>
                            <td>Recieved</td>
                            <td>:</td>
                            <td> 12/12/2022</td>
                        </tr>
                        <tr>
                            <td>Recieved</td>
                            <td>:</td>
                            <td> 12/12/2022</td>
                        </tr>
                        
                        
                    </tbody>
                </table>
            </div>
        </div><a href="login.php" style="text-decoration: none; font-weight: 700; position:absolute; right: 10%;">Log Out <i class="fa fa-sign-out"></i></a><br>
    </div>
    <footer>
        <div class="footer-content">
            <img class="imagg" src="images/watermark-removebg-preview1.png" style="height: 250px; width: 250px; transform: translateY(-20px);" alt="">
            <div >
                <h3>Blood Bank Management System</h3>
                <p>We are at the forefront of blood donation campaigns, creating awareness about the importance of blood donation and encouraging individuals to become donors. We also work to educate communities on the need for safe blood and blood products, as well as the processes involved in blood donation.</p>
                <ul class="socials">
                    <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fa fa-linkedin-square"></i></a></li>
                </ul>
            </div>
            
        </div>
        <div class="footer-bottom">
            <center><pre>copyright &copy; BBMS </pre></center>
            </div>      
        </div>

    </footer>
</body>
</html>
