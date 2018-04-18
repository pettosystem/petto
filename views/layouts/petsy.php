<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta name="keywords" content="Petto System" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />  
    <script src="js/jquery.min.js"> </script>
    <!--web-fonts-->
      <link href='//fonts.googleapis.com/css?family=Lobster|Raleway:500,400,300' rel='stylesheet' type='text/css'>
    <!--//we-bfonts-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <!--/script-->
    <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){     
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
                    });
                });
    </script>
</head>
<body>
<?php $this->beginBody() ?>

        <!--start-header-->
    <div id="home" class="header">
                    <div class="top-header">
                        <div class="container">
                            <div class="logo">
                              <a href="/"><h1>Pet<span>to</span></h1></a>
                            </div>
                         <div class="top-menu">
                            <span class="menu"> </span>
                                <ul class="cl-effect-16">
                                    <li><a class="active" href="/" data-hover="Home">Home</a></li>
                                    <li><a href="/" data-hover="About">About</a></li>
                                    <li><a href="/" data-hover="Services">Services</a></li>
                                    <li><a href="/" data-hover="Gallery">Gallery</a></li>
                                    <li><a href="/" data-hover="blog">Blog</a></li>
                                    <li><a href="/" data-hover="Contact">Contact</a></li>
                                    <div class="/"></div>
                                </ul>
                            </div>
                            <!-- script-for-menu -->
                                <script>
                                    $("span.menu").click(function(){
                                        $(".top-menu ul").slideToggle("slow" , function(){
                                        });
                                    });
                                </script>
                                <!-- script-for-menu -->
                            <div class="clearfix"> </div>
                    </div>
        </div>
        <div class="banner">
                   <div class="container">
                        <div id="top" class="callbacks_container">
                        <ul class="rslides callbacks callbacks1" id="slider4">
                            <li id="callbacks1_s0" class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
                                <div class="banner-info">
                                <h3>Get to know</h3>
                                <h4>everything to keep your dog healthy</h4>
                                </div>
                            </li>
                            <li id="callbacks1_s1" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
                                <div class="banner-info">
                                   <h3>Helping you get rid</h3>
                                  <h4>of your dog's behaviour problem!</h4>
                                </div>
                            </li>
                            <li id="callbacks1_s2" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
                                <div class="banner-info">
                                  <h3>Get to know</h3>
                                  <h4>everything to keep your dog healthy</h4>
                                </div>  
                            </li>
                        </ul>
                        </div>
                        <!--banner-Slider-->
                        <script src="js/responsiveslides.min.js"></script>
                         <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                          // Slideshow 4
                          $("#slider4").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav:false,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                          $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                          $('.events').append("<li>after event fired.</li>");
                        }
                          });

                        });
                          </script>
                </div>
            <div class="banner-bottom">
                  <div class="container">
                     <div class="banner-bot-grids">
                        <div class="col-md-4 banner-grid one">
                          <div class="icon">
                             <i class="glyphicon glyphicon-time"> </i>
                          </div>
                          <div class="icon-text">
                             <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt dolor et.</p>
                           </div>
                            <div class="clearfix"> </div>
                         </div>
                         <div class="col-md-4 banner-grid two">
                              <div class="icon">
                                <i class="glyphicon glyphicon-wrench"> </i>
                              </div>
                             <div class=" icon-text">
                                 <h4>Lorem Ipsum</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt dolor et.</p>
                             </div>
                              <div class="clearfix"> </div>
                         </div>
                        <div class="col-md-4 banner-grid three">
                             <div class="icon">
                                <i class="glyphicon glyphicon-briefcase"> </i>
                            </div>
                            <div class="icon-text">
                                 <h4>Lorem Ipsum</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt dolor et.</p>
                             </div>
                              <div class="clearfix"> </div>
                        </div>
                     </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
        </div>
     </div>

    <div class="container">
        <?= $content ?>
    </div>

    <!--footer-->
            <div class="footer text-center">
                <div class="container">
                    <ul class="social-icons">
                        <li> <a class="tooltips" href="#"><img src="images/fb.png" title="facebook" /><span>Follow us for all the latest news</span></a></li>
                        <li> <a class="tooltips" href="#"><img src="images/twt.png" title="twitter" /><span>Follow us for all the latest news</span></a></li>
                        <li> <a class="tooltips" href="#"><img src="images/tube.png" title="tube" /><span>Follow us for all the latest news</span></a></li>
                        <li> <a class="tooltips" href="#"><img src="images/in.png" title="linkedin" /><span>Follow us for all the latest news</span></a></li>
                        <li class="pin"> <a class="tooltips" href="#"><img src="images/pin.png" title="pinterest" /><span>Follow us for all the latest news</span></a></li>
                        <div class="clearfix"> </div>
                    </ul>
                    <div class="copy">
                      <p>Copyright &copy; 2018 Petto. All Rights Reserved. Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
                    </div>
                </div>
            </div>

                <!--start-smoth-scrolling-->
                        <script type="text/javascript">
                                    $(document).ready(function() {
                                        /*
                                        var defaults = {
                                            containerID: 'toTop', // fading element id
                                            containerHoverID: 'toTopHover', // fading element hover id
                                            scrollSpeed: 1200,
                                            easingType: 'linear' 
                                        };
                                        */
                                        
                                        $().UItoTop({ easingType: 'easeOutQuart' });
                                        
                                    });
                                </script>
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
