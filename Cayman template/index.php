
<?php 
$msg=' ';
//function sentmessage($email, $name, $comment) {
//    
//        $mailcheck = true;
//        if ($mailcheck == FALSE) {
//        } else {
//            $from = 'From: Oriental-Couture <info@oriental-couture.com>' . "\r\n";
//            // $from .= 'Cc: medicsbd <information@medicsbd.com>' . "\r\n";
//            $sent_to = $email; // sender
//            $subject= "Oriental Couture Website Customer";
//            $message= $name. " <br>" .$comment;
//           
//            
//           
//            // send mail
//            mail($sent_to, $subject, $message, "$from");
//            $msg= 'Send Message Successfully !';
//        }
//        
//    }
//    
    if(isset($_POST['send']) && !empty($_POST['email'])){
        
       
         $from = 'From: Oriental-Couture <yaminalam27@gmail.com>' . "\r\n";
            // $from .= 'Cc: medicsbd <information@medicsbd.com>' . "\r\n";
            $sent_to = $_POST['email']; // sender
            $subject= "Oriental Couture Website Customer";
            $message=$_POST['name']. " <br>" .$_POST['comment'];
           
            
           
            // send mail
            mail($sent_to, $subject, $message, "$from");
            $msg= 'Send Message Successfully !';
        
    }
    
    ?>
<!DOCTYPE html>
<html lang="en">
    <!-------------------Html Head Start------------------------------------------------------------------------------------>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="assets/img/favicon.png">
        <title>Oriental Couture</title>
        <!--Stylesheet-->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/menu.css" rel="stylesheet">
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet">
        <link href="assets/css/animate.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet"> 
        <link href="assets/css/lightbox.css" rel="stylesheet"> 
        <style>
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                width: 100%;
                height : 900px;
                margin: auto;
            }
        </style>
            

        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>

    <!-------------------Html Head end------------------------------------------------------------------------------------
    <body>
        <div class="page-loader">
            <img src="assets/img/loader.gif" alt="">
        </div>
    <!-- Header
    ================================================== -->
    <header id="header">
        <div id="mega-menu" class="header header-sticky primary-menu icons-no default-skin zoomIn align-right">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default redq" role="navigation">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header page-scroll">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand large" style="height: 49px; width:260px; "  href="#home"><img src="assets/img/logosss.gif" alt="Oriental logo" ></a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
                            <div class="collapse navbar-collapse nav-collapse" id="nav-main">
                                <a class="navbar-brand mobile pull-left " href="#">Oriental<span class="logo-style">Couture</span></a>
                                <a class="mobile-menu-close"><i class="fa fa-close"></i></a>
                                <ul class="nav navbar-nav nav-list">
                                    <!--                                        						<li>
                                                                            <a href="index.php"><i class="fa fa-bolt"></i><span class="link-item">Home</span></a>
                                                                            </li>
                                                                            <li>
                                                                            <a href="#about-us" class="fa fa-bolt"><i class="fa fa-cogs"></i><span class="page-scroll"> About Us </span></a>
                                                                            </li>
                                                                            <li>
                                                                            <a href="#portfolio" class="fa fa-bolt" ><i class="fa fa-bolt"></i><span class="page-scroll">Products</span></a>
                                                                            </li>
                                    
                                                                            <li>
                                                                            <a href="#contact" class="fa fa-bolt" ><i class="fa fa-users"></i><span class="page-scroll"> Contact Us </span></a>
                                                                            </li>-->

                                    <li>
                                        <a class="page-scroll " href="#home"><span class="link-item">Home</span></a>
                                    </li>
                                    <li>
                                        <a class="page-scroll " href="#about-us"><span class="link-item">About Us</span></a>
                                    </li>
                                    <li>
                                        <a class="page-scroll " href="#portfolio"><i class="fa fa-bolt"></i><span class="link-item">Products</span></a>
                                    </li>

                                    <li>
                                        <a class="page-scroll" href="#gallery"><i class="fa fa-bolt"></i><span class="link-item">Gallery</span></a>
                                    </li>


                                    <li>
                                        <a class="page-scroll" href="#contact"><i class="fa fa-bolt"></i><span class="link-item">Contact Us</span></a>
                                    </li>
                            </div>
                            <!-- end .navbar-collapse -->
                            <!-- </div> -->
                            <!-- end .container-fluid -->
                        </div>
                        <!-- end .container -->
                    </nav>
                    <!-- end nav -->
                </div>
                <!-- end .row -->
            </div>
            <!-- end .container -->
        </div>
        <!-- end .header -->
    </header>

    <!-------------------Header end------------------------------------------------------------------------------------
    <!-- Slider
    ================================================== -->
    <section>
        <div class="customtypewowslider fullwidth flexslider clearfix cayman-slider" style="max-height:700px;" id="home">
            <ul class="slides slider-content-style1">

                <li style="background-color:#f2f2f2;"> 
                    <img src="assets/img/1.jpg" alt=""/>
                    <div class="row">
                        <div class="flex-caption" style="top:7%;">
                            <!--<h2 class="wow bounceInUp" data-wow-duration="1.0s" data-wow-delay="0.1s">Cayman</h2>--> 
                            <h3 class="wow bounceInDown" data-wow-duration="1.0s" data-wow-delay="0.6s"><img src="assets/img/5.png" ></h3>
                            <h3 class="wow bounceInUp" data-wow-duration="1.0s" data-wow-delay="0.9s"><img src="assets/img/6.png" ></h3>                             
                        </div>
                    </div>  
                </li>
                <li style="background-color:#808080;"> 
                    <img src="assets/img/3.jpg" alt=""/>
                    <div class="row">
                        <div class="flex-caption" style="top:7%;">
                            <!--<h2 class="wow bounceInUp" data-wow-duration="1.0s" data-wow-delay="0.1s">Cayman</h2>--> 
                            <h3 class="wow bounceInDown" data-wow-duration="1.0s" data-wow-delay="0.6s"><img src="assets/img/5.png" ></h3>
                            <h3 class="wow bounceInUp" data-wow-duration="1.0s" data-wow-delay="0.9s"><img src="assets/img/6.png" ></h3>                             
                        </div>
                    </div>  
                </li>

                <li> 
                    <img src="assets/img/2.jpg" alt=""/>
                    <div class="row">
                        <div class="flex-caption" style="top:7%;">
                            <!--<h2 class="wow bounceInUp" data-wow-duration="1.0s" data-wow-delay="0.1s">Cayman</h2>--> 
                            <h3 class="wow bounceInDown" data-wow-duration="1.0s" data-wow-delay="0.6s"><img src="assets/img/5.png" ></h3>
                            <h3 class="wow bounceInUp" data-wow-duration="1.0s" data-wow-delay="0.9s"><img src="assets/img/6.png" ></h3>                             
                        </div>
                    </div>  
                </li>
            </ul>
        </div>
    </section>

    <!-------------------Slider end------------------------------------------------------------------------------------

    <!-- About US start
    ================================================== -->
    <section class="page-wrapper" id="about-us">
        <div class="container">
            <br><br>
            <h2 class="title">About Us</h2>
            <div class="row ">
                <div class="col-md-12">

                    <p class="tagline">

                    </p>
                    <p class="lead">
                        Bangladesh has a rich history in textiles background. The cultivation of cotton in Bangladesh along the west bank of River Meghna was used in making the finest quality of delicate homespun plain weave ‘Muslin’ fabric. In the 1851 Exhibition of London, the Dhaka muslin occupied a prominent place, attracting large number of visitors and the British press spoke highly of the marvelous fabric, enhancing its demand at the international market.
                        <br><br>
                        Trailing back from the rich history of Bangladesh in 16th Century through the cultivation of cotton, until today the textile industry of Bangladesh has contributed to the world market through the expertise and skills in the manufacturing of garment products. 
                        <br><br>Oriental Couture Ltd., a company engaged in Textile business is established to provide complete range of merchandising and quality service to fashion houses and retail stores around the world interested to import ready-made garments from Bangladesh.
                        <br><br>Our service includes factory evaluation, design with customer design team, product development, merchandising, order and production control, quality control, on-line inspection, final inspection, shipment monitoring and co-ordination according to customer guidelines.
                        <br><br>All our suppliers working are managed by skilled professional team and committed to fulfill the requirement of the customers.
                    </p>
                </div>
            </div>

            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Mission Statement</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse ">
                        <div class="panel-body">Our mission is to satisfy customers’ needs by providing good quality products and services that consistently conform to their requirements and committed to all environmental and social accountability issues.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Primary Competitive Advantages</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <li>Price Competitiveness</li>
                                <li>Production Capacity</li>
                                <li>Large Product Line</li>
                                <li>Reliability</li>
                                <li>Deliver Quality Product and In-time Shipment</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Quality Criteria</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">Quality is our main strength to success. Our qualified professional team controls quality as per the customer provided guideline and ensure customer satisfaction.
                            <br><br>In quality control process we follow<br>
                            <ul>

                                <li>Pre-production Check</li>
                                <li>Initial Production Check</li>
                                <li>In-line Production Check</li>
                                <li>Bulk Production Check</li>
                                <li>Final Production Check as per AQL provided by the customer OR 3rd Part Inspection is also acceptable.</li>

                            </ul>

                            We adhere to strict quality management system in accordance with ISO 9001 requirements.
                            <br><br>Product Development:<br>
                            Our range of products include all kinds of Knit, Woven and pullover products. The products are developed as per customer designated styles for all gender and age group. We also provide ideas with customer design teams for new style developments.</div>
                    </div>



                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Export Markets</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <li>E.U</li>
                                <li>USA</li>
                                <li>East Asia</li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------------About US end------------------------------------------------------------------------------------

    <!-- Product Section start
================================================== -->
    <section class="page-wrapper" id="portfolio">
        <h2 class="title">Our Product</h2>
        <p class="tagline"> </p>

        <!------------------------------------------------------------------------------->



        <div class="container">

            <ul class="nav nav-tabs nav-justified">
                <!--<li class="active"><a href="#all" data-toggle="tab">All</a></li>-->
                <li><a href="#Woven" data-toggle="tab" >Woven </a></li>
                <li><a href="#Sweater" data-toggle="tab" > Sweater</a></li>
                <li><a href="#Knitwear" data-toggle="tab" >Knitwear</a></li>
            </ul>

            <div class="tab-content">
                <div id="Woven" class="tab-pane fade in active">
                    <div>
                        <div class="panel-group" id="accordion" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" style="padding: 15px 25px 15px 30px;" href="#collaps1">Bottoms</a>
                                    </h4>
                                </div>
                                <div id="collaps1" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                        <ul>
                                            <li>Men’s Pants</li>
                                            <li>Ladies Pants</li>
                                            <li>Kid’s Pants</li>
                                            <li>Shorts</li>
                                            <li>Basic pants</li>
                                            <li>Long pants</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion"  style="padding: 15px 25px 15px 30px;" href="#collaps2">Tops</a>
                                    </h4>
                                </div>
                                <div id="collaps2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li> Casual Shirt</li>
                                            <li>Top Wear</li>
                                            <li>Dress Shirt</li>
                                            <li>Flannel Shirt</li>

                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion"  style="padding: 15px 25px 15px 30px;" href="#collaps3">Outer Wear</a>
                                    </h4>
                                </div>
                                <div id="collaps3" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        <ul>

                                            <li>Basic Jacket</li>
                                            <li>Basic Lined Jacket</li>
                                            <li>Bomber Jacket</li>
                                            <li>Down Jacket</li>
                                            <li>Function Jacket</li>
                                            <li>Function Jacket</li>
                                            <li>Padded Jacket</li>
                                            <li>Woven Pullover</li>
                                            <li>Sealed Jacket</li>
                                            <li>Sun dress</li>
                                            <li>Woven vest</li>
                                            <li>Denim outer wear</li>

                                        </ul>

                                    </div>
                                </div>



                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" style="padding: 15px 25px 15px 30px;" href="#collaps4">Active, Sports, and Work Wear</a>
                                    </h4>
                                </div>
                                <div id="collaps4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li>Sports Pants</li>
                                            <li>Sports Jackets</li>
                                            <li>Sports Jersey</li>
                                            <li>Promotional Jersey</li>
                                            <li>Nylon and Wool Award Jackets</li>
                                            <li>Corduroy Jackets</li>
                                            <li>Twill Poplin Jackets</li>
                                            <li>Supplex Jackets</li>
                                            <li>Satin Jackets</li>
                                            <li>Action Fleece Jackets</li>
                                            <li>Sports Sweats</li>
                                            <li>Swim Parkas</li>
                                            <li>Band Parkas</li>
                                            <li>Warm-Up Suits</li>



                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" style="padding: 15px 25px 15px 30px;" href="#collaps5">Inner Wear</a>
                                    </h4>
                                </div>
                                <div id="collaps5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <h4>Types of Woven Inner Wears</h4>
                                        <ul>                                         

                                            <li>Woven Boxer Shorts</li>
                                            <li>Woven Flannel Shorts</li>
                                            <li> Woven Loungewear</li>

                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion"  style="padding: 15px 25px 15px 30px;" href="#collaps6">Overall Wear</a>
                                    </h4>
                                </div>
                                <div id="collaps6" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <h4> Types of Overall Wears</h4>
                                        <ul>

                                            <li>¾ Body</li>
                                            <li>Full Body</li>
                                            <li>Work wear</li>

                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

                <div id="Sweater" class="tab-pane fade">
                    <li>Basic Sweaters</li>
                    <li>Pullovers</li>

                    <li>Cardigans</li>
                </div>
                <div id="Knitwear" class="tab-pane fade">
                    <ul>                     

                        <li>T-shirt(Ladies and Men’s)</li>
                        <li>  Polo shirt (Ladies and Men’s)</li>
                        <li>Tang-Top(Ladies and Men’s)</li>
                        <li>Terry jacket</li>
                        <li> Fleece jacket</li>
                        <li>Pajama set</li>
                        <li>Night wear</li>
                        <li>Home wear</li>
                        <li>Knitted Vest</li>
                        <li> Knitted Blouse</li>
                        <li>Knitted Scarf</li>
                    </ul>
                </div>

            </div>
        </div>


    </div>

</section>

<!----------------------------Product Section end--------------------------------------------------->    

<!----------------------------Gallary Start--------------------------------------------------->        
<section class="page-wrapper" id="gallery">
    <h2 class="title">Gallery</h2>
    <p class="tagline"> </p>
    <div id="portfolio-filter" class="text-center">
        <ul class="portfolio-filter-list">
            <li><a href="#" class="active" data-cat="*">ALL</a></li>
            <li><a href="#" data-cat=".Woven">Woven</a></li>
            <li><a href="#" data-cat=".Sweater">Sweater</a></li>
            <li><a href="#" data-cat=".Knitwear">Knitwear</a></li>

        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div id="portfolio-items" class="portfolio-items-style2">

                <!--                <article class="col-md-4 video / fashion">
                                    <div class="inside overlay-image view-overlay">
                                        <a href="image/001-edit.jpg">
                                            <img src="image/all/1knit.jpg" alt=""/>
                                        </a>
                                        <div class="mask team_quote">
                                            <div class="port-zoom-link">
                                                <p>
                                                    <a href="image/all/1knit.jpg" data-toggle="modal" data-lightbox="gallary" class="btn btn-ghost"><i class="fa fa-send-o"></i> Details </a>
                                                </p>
                                            </div>
                                        </div>
                
                                    </div>
                                </article>
                
                                <article class="col-md-4 fashion / video /shooting">
                                    <div class="inside overlay-image view-overlay">
                                        <a href="portfolio-single.html">
                                            <img src="image/all/1s.jpg" alt=""/>
                                        </a>
                                        <div class="mask team_quote">
                                            <div class="port-zoom-link">
                                                <p>
                                                    <a href="image/all/1s.jpg" data-toggle="modal" data-lightbox="gallary" class="btn btn-ghost"><i class="fa fa-send-o"></i> Details </a>
                                                </p>
                                            </div>
                                        </div>
                
                                    </div>
                                </article>
                
                                <article class="col-md-4 fashion / design / shooting / photo">
                                    <div class="inside overlay-image view-overlay">
                                        <a href="portfolio-single.html">
                                            <img src="image/all/1w.jpg" alt=""/>
                                        </a>
                                        <div class="mask team_quote">
                                            <div class="port-zoom-link">
                                                <p>
                                                    <a href="image/all/1w.jpg" data-toggle="modal" data-lightbox="gallary" class="btn btn-ghost"><i class="fa fa-send-o"></i> Details </a>
                                                </p>
                                            </div>
                                        </div>
                
                                    </div>
                                </article>-->

                <article class="col-md-4 fashion Woven">
                    <div class="inside overlay-image view-overlay">
                        <a href="portfolio-single.html">
                            <img src="image/Woven/1w.jpg" alt=""/>
                        </a>
                        <div class="mask team_quote">
                            <div class="port-zoom-link">
                                <p>
                                    <a href="image/Woven/1w.jpg"data-toggle="modal" data-lightbox="gallary" class="btn btn-ghost"><i class="fa fa-send-o"></i> Details </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </article>

                <article class="col-md-4 design Woven">
                    <div class="inside overlay-image view-overlay">
                        <a href="portfolio-single.html">
                            <img src="image/Woven/2.2.jpg" alt=""/>
                        </a>
                        <div class="mask team_quote">
                            <div class="port-zoom-link">
                                <p>
                                    <a href="image/Woven/2.2.jpg" data-toggle="modal" data-lightbox="gallary" class="btn btn-ghost"><i class="fa fa-send-o"></i> Details </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </article>

                <article class="col-md-4 photo Woven">
                    <div class="inside overlay-image view-overlay">
                        <a href="portfolio-single.html">
                            <img src="image/Woven/4.1.jpg" alt=""/>
                        </a>
                        <div class="mask team_quote">
                            <div class="port-zoom-link">
                                <p>
                                    <a href="image/Woven/4.1.jpg" data-toggle="modal" data-lightbox="gallary" class="btn btn-ghost"><i class="fa fa-send-o"></i> Details </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </article>

                <article class="col-md-4 mobile / Sweater">
                    <div class="inside overlay-image view-overlay">
                        <a href="portfolio-single.html">
                            <img src="image/sweater/1.jpg" alt=""/>
                        </a>
                        <div class="mask team_quote">
                            <div class="port-zoom-link">
                                <p>
                                    <a href="image/sweater/1.jpg" data-toggle="modal" data-lightbox="gallary" class="btn btn-ghost"><i class="fa fa-send-o"></i> Details </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </article>

                <article class="col-md-4 design / mobile / Sweater">
                    <div class="inside overlay-image view-overlay">
                        <a href="portfolio-single.html">
                            <img src="image/sweater/2.jpg" alt=""/>
                        </a>
                        <div class="mask team_quote">
                            <div class="port-zoom-link">
                                <p>
                                    <a href="image/sweater/2.jpg" data-toggle="modal" data-lightbox="gallary" class="btn btn-ghost"><i class="fa fa-send-o"></i> Details </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </article>

                <article class="col-md-4 video / Sweater">
                    <div class="inside overlay-image view-overlay">
                        <a href="portfolio-single.html">
                            <img src="image/sweater/3.jpg" alt=""/>
                        </a>
                        <div class="mask team_quote">
                            <div class="port-zoom-link">
                                <p>
                                    <a href="image/sweater/3.jpg" data-toggle="modal" data-lightbox="gallary" class="btn btn-ghost"><i class="fa fa-send-o"></i> Details </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </article>

                <article class="col-md-4 video / Knitwear">
                    <div class="inside overlay-image view-overlay">
                        <a href="portfolio-single.html">
                            <img src="image/Knitwear/1.jpg" alt=""/>
                        </a>
                        <div class="mask team_quote">
                            <div class="port-zoom-link">
                                <p>
                                    <a href="image/Knitwear/1.jpg" data-toggle="modal" data-lightbox="gallary" class="btn btn-ghost"><i class="fa fa-send-o"></i> Details </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </article>
                <article class="col-md-4 video / Knitwear">
                    <div class="inside overlay-image view-overlay">
                        <a href="portfolio-single.html">
                            <img src="image/Knitwear/2.jpg" alt=""/>
                        </a>
                        <div class="mask team_quote">
                            <div class="port-zoom-link">
                                <p>
                                    <a href="image/Knitwear/2.jpg" data-toggle="modal" data-lightbox="gallary" class="btn btn-ghost"><i class="fa fa-send-o"></i> Details </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </article>
                <article class="col-md-4 video / Knitwear">
                    <div class="inside overlay-image view-overlay">
                        <a href="portfolio-single.html">
                            <img src="image/Knitwear/3.jpg" alt=""/>
                        </a>
                        <div class="mask team_quote">
                            <div class="port-zoom-link">
                                <p>
                                    <a href="image/Knitwear/3.jpg" data-toggle="modal" data-lightbox="gallary" class="btn btn-ghost"><i class="fa fa-send-o"></i> Details </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </article>


            </div>
        </div>
    </div>
</section>
<!----------------------------Gallary end--------------------------------------------------->    


<!-- Form start
================================================== -->
<section id="contact" class="page-wrapper gray">
    <div class="container">
        <div class="regularform onwhite w680 wow  text-center">
            <h4><b>CONTACT US</b></h4>
            <br/>
            <?php
                    echo $msg;
             ?>
            <div class="done">
                <?php
                    echo $msg;
                ?>
                <div class="alert alert-success">
                   
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    Your message has been sent. Thank you!
                </div>
            </div>
            
            <form method="post" action="" id="contactform">
                <input name="name" type="text" class="col-md-12" placeholder="Your Name *">
                <input name="email" type="email" class="col-md-12" placeholder="E-mail address *">
                <textarea name="comment" class="col-md-12" placeholder="Message *"></textarea>
                <input type="submit" id="submit" name ="send" class="contact submit btn btn-minimal" style="margin-top:30px;background-color:#fff;" value="Send message">
            </form>
        </div>
    </div>
</section>
<!-- Form end
    ================================================== -->

<!-- Footer Style 2
================================================== -->
<footer id="footer" class="footer2">
    <section class="split customers">
        <div class="col-md-4 col-sm-4 darkbgcolor wow" data-wow-duration="0.8s" data-wow-delay="0.2s">
            <h2>Corporate Office</h2><br>
            <p style="color:#fff; margin-bottom: 4px;">House No: 8B (1st Floor) </p>
            <p style="color:#fff; margin-top:4px; margin-bottom: 4px;">Road No: 90, Gulshan-2</p>
            <p style="color:#fff; ">  Dhaka-1212, Bangladesh</p>


        </div>
        <div class="col-md-4 col-sm-4 darkbgcolor wow" data-wow-duration="0.8s" data-wow-delay="0.2s">
            <h2>Contact Info</h2><br>
            <p style="color:#fff; margin-bottom: 4px">Phone : 8831936-7, 9857061</p>
            <p style="color:#fff;margin-top:4px; margin-bottom: 4px;">Fax : 880-2-9857357</p>
            <p style="color:#fff;">Email :info@oriental-couture.com</p>
        </div>
        <div class="col-md-4 col-sm-4 darkbgcolor wow " data-wow-duration="0.8s" data-wow-delay="0.2s">
            <h2>Connected With Us</h2>
            <!--<img src="link.png">-->
            <div class="col-md-12 text-center">
                <ul class="social-icons">
                    <li class="wow bounceIn animated" data-wow-delay="0.1s"><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li class="wow bounceIn animated" data-wow-delay="0.2s"><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li class="wow bounceIn animated" data-wow-delay="0.3s"><a href="#."><i class="fa fa-google-plus"></i></a></li>
                    <!--<li class="wow bounceIn animated" data-wow-delay="0.4s"><a href="#."><i class="fa fa-dribbble"></i></a></li>-->
                    <li class="wow bounceIn animated" data-wow-delay="0.5s"><a href="#."><i class="fa fa-linkedin"></i></a></li>
                </ul>

            </div>
        </div>
    </section>
    <div class="copyright sep-top-xs sep-bottom-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!--                        <small><span class="copyright"><b>Copyright &copy; <a href="http://oriental-couture.com">Oriental Couture</a> 2016<b></span> </small>-->
                </div>
                <div class="col-md-12 text-right">
                    <!--<small><a href="http://yaminbd.com" target="_blank"><b>Developed By : Synet-BD</b></a> </small>-->
                    <small ><span class="copyright"><b>Copyright &copy; <a href="http://oriental-couture.com" style="color:#fff;">Oriental Couture 2016</a><b></span> </small>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </footer>

                                    <!-- Footer End
                                    ================================================== -->



                                    <script src="assets/js/jquery.js"></script>
                                    <script src="assets/js/bootstrap.js"></script>
                                    <script src="assets/js/plugins.js"></script>
                                    <script src="assets/js/parallax.js"></script>
                                    <script src='assets/js/countto.js'></script>
                                    <script src="assets/js/portfolio.js"></script>
                                    <script src="assets/js/animheader.js"></script>
                                    <script src="assets/js/scripts.js"></script>
                                    <script src="assets/js/lightbox.js"></script>

                                    <script>
            jQuery(document).ready(function ($) {
                'use strict';
                $('.customtypewowslider').flexslider({
                    pauseOnHover: false,
                    slideshow: true,
                    smoothHeight: false,
                    slideshowSpeed: 6000, //Integer: Set the speed of the slideshow cycling, in milliseconds
                    animationSpeed: 900,
                    animation: "fade", //String: Select your animation type, "fade" or "slide"
                    easing: "swing", //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
                    direction: "horizontal",
                    controlNav: true, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
                    useCSS: true, //{NEW} Boolean: Slider will use CSS3 transitions if available
                    touch: true,
                    directionNav: false,
                });
            });
                                    </script>

                                    </body>
                                    </html>
                                    
                                    