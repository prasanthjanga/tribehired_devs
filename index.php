<?php
require "Config.php";
$config = new Config();
$post_list = $config->api_call('posts','https://jsonplaceholder.typicode.com/posts');

// echo '<pre>';
// print_r($post_list);
// echo '</pre>';
// exit;


$comments_list = $config->api_call('comments','https://jsonplaceholder.typicode.com/comments');

foreach($comments_list as $post_id => $comments_array){
    $post_comments_count[$post_id] = count($comments_array);
    // $post_comments_count[rand(1,10)] = rand(1,10);
}
// echo '<pre>';
// print_r($comments_list);
// echo '</pre>';
// exit;
arsort($post_comments_count);

// echo '<pre>';
// print_r($post_comments_count);
// echo '</pre>';
// exit;



?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome to Tribehired-devs</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="">
                                <div class="header-right-btn f-right d-none d-xl-block ml-20">
                                    <a href="index.php" class="btn header-btn">Tribehired-devs</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="index.php">Task 1</a></li>
                                            <li><a href="task2.php">Task 2</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none">
                                <a href="index.php" class="btn header-btn">Tribehired-devs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--================Blog Area =================-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                <h1>1. Return a list of top posts ordered by the number of comments. Consume the API endpoints provided.</h1>
                    <div class="col-lg-12 mb-5 mb-lg-0">
                        <div class="section-top-border">
                        <h3 class="mb-30">Posts</h3>
                            <div class="progress-table-wrap">
                                <div class="progress-table">
                                    <div class="table-head">
                                        <div class="serial">Post Id</div>
                                        <div class="country">Post Title</div>
                                        <div class="country">Post Body</div>
                                        <div class="visit">Comments Count</div>
                                    </div>
                                    <?php
                                    if(!empty($post_comments_count)){
                                    $i=1;
                                    foreach($post_comments_count as $post_id => $comments_count)
                                    {
                                        echo '<div class="table-row">';
                                        echo '<div class="serial">'.$i.'</div>';
                                        echo '<div class="country">'.$post_list[$post_id]['title'].'</div>';
                                        echo '<div class="country">'.$post_list[$post_id]['body'].'</div>';
                                        echo '<div class="serial">
                                        <button class="button rounded-0 primary-bg btn_1 boxed-btn">'.$comments_count.'</button></div>';
                                        echo '</div>';
                                        $i++;
                                    }
                                    }
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->

    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area">
            <div class="container">
               <div class="footer-top footer-padding">
                   <div class="row justify-content-center">
                       <div class="col-lg-6">
                            <div class="footer-top-cap text-center">
                               <span><a href="#">Tribehired-devs</a></span>
                            </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
		
		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
</body>
</html>