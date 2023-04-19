<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width"/>
  <title>Blood Bank</title>
  <link href="css/req.css" rel="stylesheet" type="text/css" />
  <link href="css/nav.css" rel="stylesheet" type="text/css" />
</head>

<body>
 <nav>
  <div class="nav-left">
    <img src="images/watermark-removebg-preview1.png" alt="logo" onclick="location.href='home.php';"/>
  </div>
  <div class="nav-right">
    <a href="home.php">Home</a>
    <a href="blog.php">Blog</a>
    <a href="contact.php">Contact Us</a>
    <a href="profile.php">Profile</a>
    <a href="about.php">About Us</a>
  </div>



</nav>

<script src="script.js"></script>

 
 
</body>




    <div class="container">
    
        <header class="header">
            <b><h1 style="font-size:3vw; font-weight: 900; color: aliceblue;" id="title" class="text-center">Blood Donation </h1></b>
               
        </header>
        <form id="survey-form" action="dconnect.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input
                type="text"
                name="name"
                id="name"
                class="form-control"
                placeholder="Enter your name."
                required
                />
            </div>

            <div class="form-group">
                <label>Address</label>
                <input
                type="text"
                name="address"
                id="address"
                class="form-control"
                placeholder="Enter your Address."
                required
                />
            </div>

            <div class="form-group">
                <label>Age <span class="clue"></span></label>
                <input
                type="number"
                name="age"
                class="form-control"
                min="18"
                max="65"
                placeholder="Age."
                />
            </div>

            <div class="form-group">
                <label>Email</label>
                <input
                type="email"
                name="email"
                id="email"
                class="form-control"
                placeholder="Enter your Email."
                required
                />
            </div>

            <div class="form-group">
                <p>Do you know your blood type?</p>
                <select id="dropdown" class="form-control" name="blood" required>
                    <option disabled selected value>Select your blood type</option>
                    <option value="none">I don't know</option>
                    <option value="O-">O-</option>
                    <option value="O+">O+</option>
                    <option value="A-">A-</option>
                    <option value="A+">A+</option>
                    <option value="B-">B-</option>
                    <option value="B+">B+</option>
                    <option value="AB-">AB-</option>
                    <option value="AB+">AB+</option>
                </select>
            </div>
            <div class="form-group">
                <p>Previous/Current Medical History</p>
                <textarea
                class="input-textarea"
                name="medical_history"
                placeholder="Enter here"
                ></textarea>
            </div>

            <div class="form-group">
                <p>Something you consider relevant?</p>
                <textarea
                class="input-textarea"
                name="comment"
                placeholder="Enter your comment here..."
                ></textarea>
            </div>

            <div class="form-group">
                <button
                id="submit"
                type="submit"
                class="submit-button"
                > Submit</button>
            </div>
        </form>
    </div>


<br><br>
    <footer>
        <div class="footer-content">
            <img class="imagg" src="images/watermark-removebg-preview1.png" style="height: 250px; width: 250px; transform: translateY(-20px);" alt=""/>
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
    
    </footer>

</html>
