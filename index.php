<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Give and Thrive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./css/stylehome.css" />
</head>

<body>
    <div class="fullcontainer banner" id="homeSection">
        <header>
            <div class="container">
                <div class="logo">
                    <img src="images/logo.png" alt="NGO logo">
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="#homeSection">Home</a>
                        </li>
                        <li>
                            <a href="#aboutSection">About Us</a>

                        </li>
                        <li>
                            <a href="#ProgramsSection">Donations</a>
                        </li>
                        <li>
                            <a href="#educationSection">Education</a>
                        </li>
                        <li>
                            <a href="#gallerySection">Gallery</a>
                           
                        </li>
                        <li>
                            <a href="#joinSection">Sponsorships</a>
                        </li>
                        <li>
                        <a href="./login/index.php"><i class="fa fa-user fa-lg"></i>  Login/Register</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="container">
            <h1>Together we can <span>Save Lives</span></h1>
            <p> Welcome to <b>Give And Thrive</b>, where your compassion can bloom.
                At Give And Thrive, we believe every child deserves the chance to thrive. 
                That's why we're dedicated to providing not just basic necessities, but also 
                the love, care, and opportunities that help children flourish.

                Our web application is here to make supporting our mission easier than ever.
                With just a few clicks, you can make a direct impact on the lives of children in our care.
                Whether you choose to donate, volunteer, or simply spread awareness, your contribution will help us 
                create a brighter future for these deserving children.

                Join us on our journey to make a difference, one child at a time.
                Explore our website, learn about our work, and discover how you can contribute to a brighter tomorrow.

            </p>
        </div>
        
    </div>
    <!-- end home section -->


    <section class="fullcontainer" id="aboutSection">
        <div class="container">
            <h2 class="sectionTitle">About Us</h2>
            <p>
                Welcome to our organization! We are dedicated to making a positive impact on our community,
            striving to provide essential support and services. Our commitment is driven by a passion for
            creating meaningful change and fostering a sense of unity among individuals.
            </p>
            <div class="cards">
                <div class="donationBox">
                    <div class="title">Give Donation</div>
                    <p>
                        Your generous contribution enables us to continue our mission and make a difference in
                        the lives of those in need. Together, we can create a better future for our community.
                    </p>
                    <button>
                        Donate Now
                    </button>
                </div>
                <!-- end donation box -->
                <div class="volunteerBOX">
                    <div class="title">Give Feedback</div>
                    <p>
                        We value your feedback as it helps us improve and better serve the community. Share
                    your thoughts and experiences with us,let's make our initiatives more impactful.
                    </p>
                    <button>
                        Express Now
                    </button>
                </div>
                <!-- end donation box -->
                <div class="scolarshipBOX">
                    <div class="title">Contact US</div>
                    <p>
                        Have questions or want to get involved? Reach out to us for more information. We look forward to hearing from you and working
                    together for a brighter future.
                    </p>
                    <button>
                        Contact Now
                    </button>
                </div>
                <!-- end donation box -->
            </div>
        </div>
    </section>

<section class="programs" id="ProgramsSection">
<div class="container">
    <h2 class="sectionTitle">Donations Branches</h2>
    <div class="boxContainer">
        <div class="box">
            <div class="cardImage"></div>
            <div class="programTitle">AKKAR</div>
            <div class="donationCount">
                Donation Goal : <span> 20 children</span>
            </div>
            <button><a href="./phpcomponents/akkar/akkar.php">Donate Now</a></button>
        </div>
        <!-- bocx end -->
         
        <div class="box">
            <div class="cardImage"></div>
            <div class="programTitle">TRIPOLI</div>
            <div class="donationCount">
                Donation Goal : <span> 30 children</span>
            </div>
            <button><a href="./phpcomponents/tripoli/tripoli.php">Donate Now</a></button>
        </div>
        <!-- bocx end -->
      
        <div class="box">
            <div class="cardImage"></div>
            <div class="programTitle">BEIRUT</div>
            <div class="donationCount">
                Donation Goal : <span> 40 children</span>
            </div>
            <button><a href="./phpcomponents/beirut/beirut.php">Donate Now</a></button>
        </div>
        <!-- bocx end -->


        <div class="box">
            <div class="cardImage"></div>
            <div class="programTitle">SOUR</div>
            <div class="donationCount">
                Donation Goal : <span> 25 children</span>
            </div>
            <button><a href="./phpcomponents/sour/sour.php">Donate Now</a></button>
        </div>
        <!-- bocx end -->
    </div>
    <!-- box container end -->
</div>
</section>
<!-- programs section end -->

<section class="education" id="educationSection">
    <video autoplay muted loop class="videoPlayer">
        <source src="video/childrens.mp4" type="video/mp4"/>
        your browser does not support HTMLS video
    </video>
    <div class="container">
        <div class="sectionTitle">Education</div>
        <div class="educationContainer">
            <h3>Education Is Essential For <br>
            <strong>BETTER FUTURE</strong>
            </h3>
            <p>
            Education is a process that transmits knowledge and skills from generation to generation.
             It is a vital and necessary process in the development and progress of societies
            . Education is fundamental to developing individuals and enabling them to achieve their full potential.
            </p>
            <button>EXPLORE Now</button>
        </div>
    </div>
</section>

<!-- education section end -->

<section class="gallery" id="gallerySection">
<div class="container">
<div class="sectionTitle">Gallery</div>
<div class="galleryContainer">
    <div class="item">
        <span class="title"> Image Title</span>
        <img src="images/gallery/1.jpg" alt="">
    </div>
    <div class="item">
        <span class="title"> Image Title</span>
        <img src="images/gallery/2.jpg" alt="">
    </div>
    <div class="item">
        <span class="title"> Image Title</span>
        <img src="images/gallery/3.jpg" alt="">
    </div>
    <div class="item">
        <span class="title"> Image Title</span>
        <img src="images/gallery/4.jpg" alt="">
    </div>
    <div class="item">
        <span class="title"> Image Title</span>
        <img src="images/gallery/5.jpg" alt="">
    </div>
    <div class="item">
        <span class="title"> Image Title</span>
        <img src="images/gallery/6.jpg" alt="">
    </div>
    <div class="item">
        <span class="title"> Image Title</span>
        <img src="images/gallery/7.jpg" alt="">
    </div>
    <div class="item">
        <span class="title"> Image Title</span>
        <img src="images/gallery/8.jpg" alt="">
    </div>
</div>
</div>
</section>

<!-- gallery section end -->

<section class="join" id="joinSection">
    <div class="container">
     <div class="joinTitle">ADOPT A CHILD & <span>SAVE LIVES</span></div>
    </div>
    <p>
        Every dollar you donate goes directly towards providing school supplies, nutritious meals,
         and a supportive environment where children can learn and thrive. Make a difference in a child's life, 
         one donation at a time.
    </p>
    <button class="joinNOW">JOIN US</button>
    <button class="adoptBtn">ADOPT A CHILD</button>
</section>

<footer>
    <div class="container">
        <div class="newsLetterContainer">
            <img src="images/logo.png" alt="">
            <p>
                Stay connected with us! Subscribe to our newsletter for the latest updates,
                events, and news about our initiatives. Join our community and be a part of
                positive change.

            </p>
            <input type="text" placeholder="Enter your email id">

        </div>
        <!--.newsLetterContainer -->
        <div class="linksContainer">
            <div class="title">
                Useful Links
            </div>
            <ul>
                <li>
                    <a href="#homeSection">Home</a>
                </li>
                <li>
                    <a href="#aboutSection">About Us</a>

                </li>
                <li>
                    <a href="#ProgramsSection">Programs</a>
                </li>
                <li>
                    <a href="#educationSection">education</a>
                </li>
                <li>
                    <a href="#gallerySection">Gallery</a>
            
                </li>
                <li>
                    <a href="#joinSection">Join Us</a>
                </li>
            </ul>
        </div>
        <!-- .linksContainer -->
        <div class="connectContainer">
            <div class="title">Connect with us </div>
            <p>
                 Shaza , Ghazal , Sadine , Shourouk <br />
                Lebanon

            </p>
            <p>
                info@giveandthrive.com
            </p>
            <p>(+961) 70444158</p>
        </div>
        <!--.connectContainer-->
    </div>
</footer>





</body>

</html>

<script>
    var style = [
        "background: linear-gradient(#D33106, #571402)",
        "border: 1px solid #3E0E02",
        "color: white",
        "display: block",
        "text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3)",
        "line-height: 40px",
        "font-size: 25px",
        "text-align: center",
        "text-align: center",
        "font-weight: bold",
    ].join(";");

    console.log(
        "%c FREE FREE FREE Click the link below for more source code like this ",
        style
    );
    console.log(
        "%c https://www.youtube.com/c/WebTutorialGuru?sub_confirmation=1 ",
        style
    );
    console.log(
        "%c Support us on patreon and get complete source code ",
        style
    );
    console.log("%c https://www.patreon.com/WebTutorialGuru ", style);
</script>