<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Contact || FIAAT</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        
		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	   
		<!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
		<!-- Fontawsome CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
        <!-- Metarial Iconic Font CSS
		============================================ -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        
        <!-- Plugin CSS
		============================================ -->
        <link rel="stylesheet" href="css/plugin.css">
        
		<!-- Style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">
        
		<!-- Responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        
		
	    
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!--Loading Area Start-->
        <div class="loading">
    		<div class="text-center middle">
    			<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    		</div>
    	</div>
        <!--Loading Area End-->
        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">
            <!--Bg White Start-->
            <div class="bg-white">
                <!--Header Area Start-->
                <?php include 'header.php';?>
                <!--End of Header Area-->
                <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">Contact</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href=/>Home</a></li>
                                            <li>Contact</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Contact Area Start-->
                <div class="contact-area pt-100 pb-100">
                    <div class="container">
                        <div class="row g-0">
                           <div class="col-md-12 col-lg-6 grey-bg">
                                <div class="edubuzz-address">
                                    <h2 class="contact-title">You Can Contact With Us</h2>
                                    <!-- <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p> -->
                                    <ul>
                                        <!-- <li><i class="fa fa-fax"></i> Address : No 40 Baria Sreet 133/2 NewYork City</li> -->
                                        <li><i class="fa fa-phone"></i> Phone : +919967767425</li>
                                        <li><i class="fa fa-envelope-o"></i> Web: fiaat.5elements@gmail.com</li>
                                    </ul>
                                    <div class="contact-social">
                                        <h3><strong>Also Can Find Us</strong></h3>
                                        <ul>
                                            <li><a href="https://www.facebook.com/FIAAT555"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="https://www.linkedin.com/in/five-elements-institute-of-advanced-animation-and-tech-4b94b2258"><i class="zmdi zmdi-linkedin"></i></a></li>
                                            <li><a href="https://twitter.com/FIAAT555"><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/5e_fiaat/"><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           <div class="col-md-12 col-lg-6 ">
                                <div class="contact-form-wrap">
                                    <h2 class="contact-title">SEND YOUR MESSAGE</h2>
                                    <form id="contact-form" action="mail.php" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="contact-form-style mb-20">
                                                    <input name="name" placeholder="Name*" type="text">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="contact-form-style mb-20">
                                                    <input name="phone" placeholder="Phone*" type="text">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="contact-form-style mb-20">
                                                    <input name="email" placeholder="Email*" type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="contact-form-style">
                                                    <textarea name="message" placeholder="Type your message here.."></textarea>
                                                    <button class="button-default" type="submit"><span>Send Email</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Contact Area End-->
                <?php include'footer.php';?>
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area--> 
        
        
        
		<!-- jquery
		============================================ -->		
        <script src="js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="js/vendor/jquery-3.6.0.min.js"></script>
        <script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
        
		<!-- popper JS
		============================================ -->		
        <script src="js/popper.min.js"></script>
        
		<!-- bootstrap JS
		============================================ -->		
        <script src="js/bootstrap.min.js"></script>
        
		<!-- AJax Mail JS
		============================================ -->		
        <script src="js/ajax-mail.js"></script>
        
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
        
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>
</html>