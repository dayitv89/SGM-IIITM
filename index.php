<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Student Gyan Movement</title>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
        <script src="js/jquery-1.7.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/tms-0.4.1.js"></script>
        <script>
            $(document)
                    .ready(function() {
                $('.slider')
                        ._TMS({
                    show: 0,
                    pauseOnHover: true,
                    prevBu: '.prev',
                    nextBu: '.next',
                    playBu: false,
                    duration: 800,
                    preset: 'fade',
                    pagination: true,
                    pagNums: false,
                    slideshow: 7000,
                    numStatus: false,
                    banners: false,
                    waitBannerAnimation: false,
                    progressBar: false
                })
            });
        </script>
        <!--[if lt IE 9]>
        <script src="js/html5.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
        <![endif]-->
    </head>
    <body>
        <div class="main">
            <!--==============================header=================================-->

            <header>
                <h1>
                    <a href="home"><img src="images/mainlogo.png" width='130px' height='130px' /><p class="logoText">Student<br/><br/>Gyan<br/><br/>Movement</P></a>
                </h1>
                <nav>
                    <div id="slide">
                        <div class="slider">
                            <ul class="items">
                                <li><img src="images/slides/1.jpg" alt=""></li>
                                <li><img src="images/slides/2.jpg" alt=""></li>
                                <li><img src="images/slides/3.jpg" alt=""></li>
                                <li><img src="images/slides/4.jpg" alt=""></li>
                                <li><img src="images/slides/5.jpg" alt=""></li>
                                <li><img src="images/slides/6.jpg" alt=""></li>
                                <li><img src="images/slides/7.jpg" alt=""></li>
                                <li><img src="images/slides/8.jpg" alt=""></li>
                                <li><img src="images/slides/9.jpg" alt=""></li>
                            </ul>
                        </div>
                        <a href="#" class="prev"></a><a href="#" class="next"></a> </div>
                    <ul class="menu">
                        <!--<li class="current"><a href="home" class="clr-1">Home</a></li>-->
                        <li ><a href="home" class="clr-1">Home</a></li>
                        <li><a href="about" class="clr-2">About</a></li>
                        <li><a href="schedule" class="clr-3">Schedule</a></li>
                        <li><a href="gallery" class="clr-4">Gallery</a></li>
                        <li><a href="members" class="clr-5">Members</a></li>
                    </ul>
                </nav>
            </header>
            <?php // echo $_GET['page']; ?>
            <!--==============================content================================-->
            <section id="content">
                <div class="container_12">
                    <?php
                    if (isset($_GET['page']) && $_GET['page'] != '') {
                        include_once $_GET['page'] . '.php';
                    } else {
                        include_once 'home.php';
                    }
                    ?>

                </div>

                <div class="clear"></div><!--==============================footer=================================-->
                <footer>
                    <p><a href="home" class="clr-1">Home</a> | <a href="about" class="clr-2">About</a> | <a href="schedule" class="clr-3">Schedule</a> | <a href="gallery" class="clr-4">Gallery</a> | <a href="contacts" class="clr-5">Contacts</a> | <a href="members" class="clr-1">Members</a></p>
                    <p>   Student Gyan Movement : an ABV-IIITM educational initiative © <?php echo date('Y'); ?> (site:v1.0)</p>
                    <p>   Site Design & Maintained by : <a class="link" href="https://facebook.com/er.gauravds">Gaurav D. Sharma</a> & <a href="https://www.facebook.com/rahul.stpr?ref=br_rs" class="link">Rahul Verma</a></p>
                </footer>
        </div>
    </section>
</div>
<script type="text/javascript">
    document.getElementById('sidebar').innerHTML = document.getElementById('sidebar').innerHTML + "<div class='contact_us_logo' ><a href='contacts'><img src='images/contact_us.svg' width='200' height='200'/></a></div><div class='fbLogo' ><a href='https://www.facebook.com/pages/Student-Gyan-Movement/233613040062735' target='_new'><img src='images/like_fb.jpg' width='75px' height='150px' /></a></div>";
</script>
</body>
</html>
