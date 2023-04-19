<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="css/home.css" rel="stylesheet" type="text/css" />
    <link href="css/nav.css" rel="stylesheet" type="text/css" />
    <title>Home</title>
</head>

<body>
    <nav>
        <div class="nav-left">
            <img src="images/watermark-removebg-preview1.png"  alt="logo" onclick="location.href='home.php';"/>
        </div>
        <div class="nav-right">
            <a href="blog.php">Blog</a>
            <a href="contact-us.php">Contact Us</a>
            <a href="about-us.php">About Us</a>
            <a href="profile.php">Profile</a>
            <a href="login.php">Login/Signup</a>
        </div>
    </nav>

    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="https://media-private.canva.com/UciGg/MAFaQyUciGg/1/tl.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJWF6QO3UH4PAAJ6Q%2F20230210%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230210T151021Z&X-Amz-Expires=90864&X-Amz-Signature=13b990c715377f96ba4ab77e9cf11224bd334037b07e49975e013156cde9a064&X-Amz-SignedHeaders=host&response-expires=Sat%2C%2011%20Feb%202023%2016%3A24%3A45%20GMT" width="700" height="300"
                class="slider-img"/>
           
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="https://media-private.canva.com/9OLJE/MAFaQ99OLJE/1/tl.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJWF6QO3UH4PAAJ6Q%2F20230210%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230210T185504Z&X-Amz-Expires=77228&X-Amz-Signature=a0fc2460960d6d29c18e9409e034de69b5a7e2a974011ab11beb7a0d1587e772&X-Amz-SignedHeaders=host&response-expires=Sat%2C%2011%20Feb%202023%2016%3A22%3A12%20GMT" width="700" height="300"
                class="slider-img"/>
           
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="https://media-private.canva.com/0mMgo/MAFaQw0mMgo/1/tl.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJWF6QO3UH4PAAJ6Q%2F20230210%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230210T124200Z&X-Amz-Expires=97679&X-Amz-Signature=07f7df2c2bf633e6625a23b29b79981b5b2866ae091a7acfe0e78b0979cb3ac8&X-Amz-SignedHeaders=host&response-expires=Sat%2C%2011%20Feb%202023%2015%3A49%3A59%20GMT" width="700" height="300"
                class="slider-img"/>
            
        </div>

        <a target="_blank" class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a target="_blank" class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <br>

    <div class="cards-list">
  
        <div class="card ">
          <div class="card_image">
            <img src="https://media.istockphoto.com/id/1256555401/vector/blood-donation-concept.jpg?s=612x612&w=0&k=20&c=OKESllI31Ny0H4CTABQgayI230R2o4tvCEE8RkSULpI=" onclick="location.href='donate.php';"/>
          </div>
          <div class="card_title">
            <h2>Donate Blood</h2>
          </div>
        </div>
          
          <div class="card ">
          <div class="card_image">
            <img src="https://images.ctfassets.net/pxcfulgsd9e2/articleImage90323/86f549d15651b745eab20e1e20c5cc84/Blood-donation-myths-HN1221-Stock-844661710-Sized.png?f=top&fit=fill&fm=png&h=786&q=85&w=1396" onclick="location.href='request.php';"/>
            </div>
          <div class="card_title title-black">
            <h2>Recieve Blood</h2>
          </div>
          </div>
        
        </div>
        
        <div class="cardd div">
            <div class="texxt div">
              <i class="fas fa-envelope"></i>
              <h3>Subscribe Now!</h3>
              <p>Subscribe us for latest updates</p>
            </div>
            <form action="connect_sub.php" method="post">
              <input id="useremail" name="subscribe" type="email" placeholder="Your E-Mail" required />
              <input id="submit" type="submit" value="Submit"/>
            </form>
            <p id="print"></p>
          </div>

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


    
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex - 1].style.display = "block";
        }
    </script>
</body>

</html>
