<?php
  include("includes/config.php");
  $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
  $sql="select * from package";
  $result=mysqli_query($conn,$sql);
 ?>

<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
	
<!-- Mirrored from dipesh.info.np/great/special-package.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Aug 2014 09:52:51 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Special Offer |ABS Airlines Management System</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        
        <link href="http://fonts.googleapis.com/css?family=Lato:400,400italic,700|Sorts+Mill+Goudy:400,400italic" rel="stylesheet">
        
        <!-- Mobile viewport optimized: h5bp.com/viewport -->
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
       
        <link rel="shortcut icon" href="images/favicon.ico">
       
        
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/screen.css">
        <!-- custom CSS -->
        <link rel="stylesheet" href="css/custom.css">
        <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
        <!-- JS libs -->
        <script src="js/libs/modernizr-2.5.3.min.js"></script>
        <script src="js/libs/respond.min.js"></script>
        <script src="js/libs/jquery.min.js"></script>
        
        <!-- scripts -->
        <script src="js/jquery.easing.1.3.min.js"></script>
        <script src="js/hoverIntent.js"></script>
        <script src="js/general.js"></script>
        <!-- sliders -->
        <script src="js/slides.min.jquery.js"></script>
        <!-- range sliders -->
        <script src="js/jquery.slider.bundle.js"></script>
        <script src="js/jquery.slider.js"></script>
        <link rel="stylesheet" href="css/jslider.css">
        <!-- custom input -->
        <link href="css/customInput.css" rel="stylesheet">
        <script src="js/jquery.customInput.js"></script>
        <!-- datepicker -->
        <link href="css/custom-theme/jquery-ui-1.8.20.custom.css" rel="stylesheet">
        <script src="js/jquery-ui-1.8.20.custom.min.js"></script>
        <script>
            jQuery(document).ready(function($) {
                $("#date_in, #date_out").datepicker({
                    dateFormat: 'MM dd, yy',
                    minDate: 0,
                    showOtherMonths: true
                });
            });
        </script>
        <!-- Carousel Box Slider -->
        <link rel="stylesheet" href="css/carousel-box.css">
        <!--<script type="text/javascript" src="js/jscript_jquery-1.js"></script>-->
        <script type="text/javascript" src="js/jscript_xjcarousellite.js"></script>
        <script type="text/javascript">
			$(function() {	
				
				$(".carousel").jCarouselLite({
						  btnNext: ".next",
						  btnPrev: ".prev"
					 });	
			});
		</script>

        </head>

	<body>
		<div class="body_wrap homepage">
 			 <link rel="shortcut icon" href="images/favicon.ico">
<div class="header">
  <div class="container_12">
    <div class="logo"><a href="index.php"><img src="images/logo.png" alt=""></a>
      <h1>Airlines Management System</h1>
    </div>
    <div class="header_right">
      <div class="topsearch">
        <form id="searchForm" action="#" method="get">
          <input type="submit" id="searchSubmit" value="" class="btn-search">
          <input type="text" name="stext" id="stext" value="" class="stext">
        </form>
      </div>
      <div class="header_phone">
		
            <span><a href="index.php">HOME</a></span>
            <span><a href="about.html">ABOUT US</a></span>
            <span><a href="contact.html">CONTACT US</a></span>
         
			<!--<p class="alignright">CALL US NOW: &nbsp;<strong>977-98510-04974</strong></p>-->      
	</div>
      <div class="clear"></div>
    </div>
    <div class="topmenu">
      <ul class="dropdown">
		<li class="menu-level-0"><a href="hotels.html"><span>Hotels</span></a>
          <ul class="submenu-1">
            <li class="menu-level-1"><a href="#"><span>Kathmandu</span></a>
              <ul class="submenu-2">
                
                <li class="menu-level-2"><a href="#"><span>Kathmandu Guest House</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Airport</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Landmark</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Samsara</span></a></li>
              </ul>
            </li>
            <li class="menu-level-1"><a href="#"><span>Pokhara</span></a>
              <ul class="submenu-2">
                
                <li class="menu-level-2"><a href="#"><span>Hotel Kantipur</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Trek U Tol</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Mum's Garden</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Base</span></a></li>
              </ul>
            </li>
            <li class="menu-level-1"><a href="#"><span>Chitwan</span></a>
              <ul class="submenu-2">
                <li class="menu-level-2"><a href="#"><span>Safari Adv. Lodge</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Machan Paradise view</span></a></li>             
                <li class="menu-level-2"><a href="#"><span>Hotel Hermitage</span></a></li>     
              </ul>
            </li>
          </ul>
        </li>
        <!--<li class="menu-level-0"><a href="hotels.php"><span>Hotels</span></a>
          <ul class="submenu-1">
            <li class="menu-level-1"><a href="#"><span>North America</span></a></li>
            <li class="menu-level-1"><a href="#"><span>Central & South America</span></a></li>
            <li class="menu-level-1"><a href="#"><span>Africa & Middle East</span></a></li>
            <li class="menu-level-1"><a href="#"><span>EUROPE</span></a></li>
            <li class="menu-level-1"><a href="#"><span>ASIA & SOUTH PACIFIC</span></a></li>
          </ul>
        </li>-->
        <li class="menu-level-0"><a href="holidays.html"><span>Holidays</span></a>
          <ul class="submenu-1">

            <li class="menu-level-1"><a href="#"><span>Golf Package I</span></a></li>
            <li class="menu-level-1"><a href="#"><span>Golf Package II</span></a></li>
			<li class="menu-level-1"><a href="#"><span>Honeymoon Package</span></a></li>
			<li class="menu-level-1"><a href="#"><span>Hindu Pilgrimage Tour</span></a></li>
			<li class="menu-level-1"><a href="#"><span>Buddhist Pilgrimage Tour</span></a></li>
			<li class="menu-level-1"><a href="#"><span>Festival Tour I</span></a></li>
			<li class="menu-level-1"><a href="#"><span>Festival Tour II</span></a></li>
          </ul>
        </li>
        
        
	    <li class="menu-level-0"><a href="special-package.html"><span>Special Packages</span></a></li>
        <li class="menu-level-0"><a href="trekking.html"><span>Trekking</span></a></li>
		<li class="menu-level-0"><a href="special-offer.html"><span>Special Offers</span></a></li>
        <li class="menu-level-0"><a href="blog.html"><span>Blog</span></a></li>
      </ul>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</div>
                <!--/ header --> 
              
             
              
              
              
              <div id="middle" class="full_width">
                <div class="container_12"> 
                  
                  <!-- breadcrumbs -->
                  <div class="breadcrumbs"></div>
                  <!--/ breadcrumbs --> 
                  
                  <!-- content -->
                  <div class="content">
                    <div class="post-detail">
                      <div class="entry"> 
                        
                        <!-- SPECIAL offers list -->
                        <div class="title">
                          <h2>SPECIAL PRICES AND LATEST PROMOS</h2>
                          <span class="title_right"><a href="#">See all Special Prices & Promos</a></span> </div>
                        
                        <!-- filter_mid -->
                        <div class="block_hr filter_mid">
                          <form action="#" method="post" class="alignright">
                            
                            <div class="row rangeField">
                              <label class="label_title">Price range:</label>
                              <div class="range-slider">
                                <input id="price_range_promo" type="text" name="price_range_promo" value="100;2500">
                              </div>
                              <div class="clear"></div>
                              <div class="row rowSubmit">
                                <input type="submit" value="FILTER NOW" class="btn-submit">
                              </div>
                            </div>
                            <div class="clear"></div>
                          </form>
                          <script type="text/javascript" >
                                        jQuery(document).ready(function($) {						
                                            // Price Range Input
                                            $("#price_range_promo").slider({ 
                                                from: 100,
                                                to: 10000,
                                                limits: false, 
                                                scale: ['$100', '$10k'],
                                                heterogeneity: ['50/3000'],
                                                step: 100,
                                                smooth: true,
                                                dimension: '$',
                                                skin: "round_green"
                                            });
                                        });
                                    </script> 
                          
                        	<div class="clear"></div>          
                        </div>
                        <!--/ filter_mid -->
                        <div class="grid_list promo_list">
                          <?php $i=1; 
                          while($data=mysqli_fetch_array($result)) {?>
                            <div class="list_item">
                              <?php echo $i;?><div class="item_img"><img src="<?php echo "uploads/".$data['image'];?>" alt="">
                                <p class="caption"><a href="tour-packages.html">Rincon, Puerto Rico - 7 nights</a> <span class="price"><ins>$</ins><strong>790</strong></span></p>
                                <span class="ribbon off-30">SALE: 30% OFF</span> <a href="tour-packages.html" class="link-img">more...</a> </div>
                            </div>
                          <?php $i++;}
                          ?>
          
                        <!--/ SPECIAL offers list -->
                        
                       
                      </div>
                    </div>
                  </div>
                  <!--/ content -->
                  
                  <div class="clear"></div>
                </div>
              </div>
              <!--/ middle --> 
  
              <!-- after content -->
              <div class="after_content">
                <div class="after_inner">
                <div class="carousel-box">
                	<a href="#" class="prev"></a> <a href="#" class="next"></a>
                  <div class="container_12"> 
                  	<div class="carousel">
                    
                    <ul>
                    <!--# widgets area, col 1 -->                    
                   <li><div class="widgetarea widget_col_1"> 
                      
                      <!-- widget_products -->
                      <div class="widget-container widget_products">
                        <div class="inner">
                          <h3>RAFTING:</h3>
                          <div class="prod_item">
                            <div class="prod_image"><a href="hotel-details.html"><img src="images/temp/offer_small_01.jpg" width="140" height="98" alt=""></a></div>
                            <span class="price_box"><ins>$</ins><strong>1579</strong></span>
                            <div class="prod_title"> <a href="hotel-details.html"><strong>White River Rafting, 1 Night 2 Days</strong></a><br>
                              <span><a href="hotel-details.html">Bhote Koshi</a></span> </div>
                          </div>
                          <div class="clear"></div>
                        </div>
                      </div>
                      <!--/ widget_products --> 
                      
                    </div></li>
                  
                    <!--/ widgets area, col 1 --> 
                    
                    <!--# widgets area, col 2 -->
                  
                      <!--<div class="widget-container newsletterBox">
                            <div class="inner">
                                <h3>NEWSLETTER SIGNUP:</h3>
                                <form method="get" action="#">
                                    <input type="text" value="Enter your email address" onFocus="if (this.value == 'Enter your email address') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Enter your email address';}" name="email" class="inputField">				                    
                                    <div class="rowCheckbox input_styled checklist">
                                    <input type="checkbox" name="subscribe" id="subscribe" value="1"> <label for="subscribe">Subscribe to RSS</label>
                                    </div>
                                    <input type="submit" value="SUBMIT" class="btn-submit">
                                </form>     
                            </div>
                        </div>--> 
                      <!--/ widget_newsletter --> 
                      
                    </div></li>
                    <!--/ widgets area, col 2 --> 
                    
                    <!--# widgets area, col 3 -->
                   <li><div class="widgetarea widget_col_1"> 
                      
                      <!-- widget_twitter -->
                      <div class="widget-container widget_products">
                        <div class="inner">
                          <h3>PARAGLIDING AT SARANGKOT</h3>
                          <div class="prod_item">
                            <div class="prod_image"><a href="hotel-details.html"><img src="images/temp/offer_small_03.jpg" width="140" height="98" alt=""></a></div>
                            <span class="price_box"><ins>$</ins><strong>1579</strong></span>
                            <div class="prod_title"> <a href="hotel-details.html"><strong>Feel the thrill of Paragliding</strong></a><br>
                              <span><a href="hotel-details.html">Sarangkot, Pokhara</a></span> </div>
                          </div>
                          <div class="clear"></div>
                        </div>
                      </div>
                      
                    </div></li>
                    <!--/ widgets area, col 3 -->
                    
                     <!--# widgets area, col 1 -->
                    
                   <li><div class="widgetarea widget_col_1"> 
                      
                      <!-- widget_products -->
                      <div class="widget-container widget_products">
                        <div class="inner">
                          <h3>HIKING:</h3>
                          <div class="prod_item">
                            <div class="prod_image"><a href="hotel-details.html"><img src="images/temp/offer_small_04.jpg" width="140" height="98" alt=""></a></div>
                            <span class="price_box"><ins>$</ins><strong>1579</strong></span>
                            <div class="prod_title"> <a href="hotel-details.html"><strong>White River Rafting, 1 Night 2 Days</strong></a><br>
                              <span><a href="hotel-details.html">Bhote Koshi</a></span> </div>
                          </div>
                          <div class="clear"></div>
                        </div>
                      </div>
                      <!--/ widget_products --> 
                      
                    </div></li>                  
                   
                    </ul>
                    </div> 
                    
                    <div class="clear"></div>
                  </div>
                </div>
                </div>
              </div>
              <!--/ after content --> 
              
              
              <!-- footer -->
  
				<div class="upper footer">

    <div class="footer_inner">
       
      <div class="container_12"> 

        <div class="widgetarea f_col_2">
        	
            <div class="widget-container widget_pages">
				<h3 class="widget-title">USEFUL LINKS:</h3>
                        <ul>
                            
                	      <li><a href="about.html">About us</a></li>
                          <li><a href="contact.html">Contact us</a></li>
                          <li><a href="blog.html">Our Blog</a></li>
                          <li><a href="terms%26conditions.html">TERMS OF SERVICE</a></li>
                        </ul>
			</div>
            
           
        </div>
        <div class="widgetarea f_col_2">
        	
            <div class="widget-container widget_pages">
				<h3 class="widget-title">USEFUL LINKS:</h3>
                        <ul>
                            
                	      <li><a href="#">About us</a></li>
                          <li><a href="#">Contact us</a></li>
                          <li><a href="#">Our Blog</a></li>
                          <li><a href="#">TERMS OF SERVICE</a></li>
                          <li><a href="#">PRIVACY POLICY</a></li>
                        </ul>
			</div>
            
           
        </div>
        <div class="widgetarea f_col_2">
        	
            <div class="widget-container widget_pages">
				<h3 class="widget-title">USEFUL LINKS:</h3>
                        <ul>
                            
                	      <li><a href="#">About us</a></li>
                          <li><a href="#">Contact us</a></li>
                          <li><a href="#">Our Blog</a></li>
                          <li><a href="#">TERMS OF SERVICE</a></li>
                          <li><a href="#">PRIVACY POLICY</a></li>
                        </ul>
			</div>
            
           
        </div>
        <div class="widgetarea f_col_2">
        	
            <div class="widget-container widget_pages">
				<h3 class="widget-title">USEFUL LINKS:</h3>
                        <ul>
                            
                	      <li><a href="#">About us</a></li>
                          <li><a href="#">Contact us</a></li>
                          <li><a href="#">Our Blog</a></li>
                          <li><a href="#">TERMS OF SERVICE</a></li>
                          <li><a href="#">PRIVACY POLICY</a></li>
                        </ul>
			</div>
            
           
        </div>
        <div class="widgetarea f_col_2">
        	
            <div class="widget-container widget_pages">
				<h3 class="widget-title">USEFUL LINKS:</h3>
                        <ul>
                            
                	      <li><a href="#">About us</a></li>
                          <li><a href="#">Contact us</a></li>
                          <li><a href="#">Our Blog</a></li>
                          <li><a href="#">TERMS OF SERVICE</a></li>
                          <li><a href="#">PRIVACY POLICY</a></li>
                        </ul>
			</div>
            
           
        </div>
        <div class="widgetarea f_col_2">
        	
            <div class="widget-container widget_pages">
				<h3 class="widget-title">USEFUL LINKS:</h3>
                        <ul>
                            
                	      <li><a href="#">About us</a></li>
                          <li><a href="#">Contact us</a></li>
                          <li><a href="#">Our Blog</a></li>
                          <li><a href="#">TERMS OF SERVICE</a></li>
                          <li><a href="#">PRIVACY POLICY</a></li>
                        </ul>
			</div>
            
           
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  
<div class="footer">

    <div class="footer_inner">
       
            
           
        </div>
        <div class="widgetarea f_col_2">
        	
            <div class="widget-container widget_pages">
				<h3 class="widget-title">4 STAR HOTELS:</h3>
                        <ul>
                	      <li><a href="#">HOTEL SHANKAR</a></li>
                          <li><a href="#">HOTEL HIMALAYA</a></li>
                          <li><a href="#">HOTEL GRAND</a></li>
                          <li><a href="#">HOTEL VAISHALI</a></li>
                          <li><a href="#">GOKARNA RESORT</a></li>
                          <li><a href="#">HOTEL TEMPLE TREE</a></li>
                          <li><a href="#">HOTEL BARAHI</a></li>
                          <li><a href="#">HOTEL WATER FRONT</a></li>
                          <li><a href="#">HOTEL BEGNAS</a></li>
                          <li><a href="#">SAFARI ADV. LODGE</a></li>
                          <li><a href="#">MACHAN PARADISE VIEW</a></li>                                                    
                        </ul>
			</div>
            
           
        </div>
        <div class="widgetarea f_col_2">
        	
            <div class="widget-container widget_pages">
				<h3 class="widget-title">3 STAR HOTELS:</h3>
                        <ul>
                	      <li><a href="#">HOTEL ROYAL SINGI</a></li>
                          <li><a href="#">HOTEL MANANG</a></li>
                          <li><a href="#">HOTEL GRAND</a></li>
                          <li><a href="#">HOTEL KANTIPUR</a></li>
                          <li><a href="#">HOTEL TIBET</a></li>
                          <li><a href="#">KATHMANDU GUEST HOUSE</a></li>
                          <li><a href="#">HOTEL AIRPORT</a></li>
                          <li><a href="#">HOTEL LANDMARK</a></li>
                          <li><a href="#">HOTEL TIBET INT'L</a></li>
                          <li><a href="#">HOTEL HERMITAGE</a></li>                          
                        </ul>
			</div>
            
           
        </div>
        <div class="widgetarea f_col_2">
        	
            <div class="widget-container widget_pages">
				<h3 class="widget-title">2 STAR HOTELS:</h3>
                        <ul>
                	      <li><a href="#">HOTEL GANGONG</a></li>
                          <li><a href="#">HOTEL LANDMARK</a></li>
                          <li><a href="#">HOTEL SAMSARA</a></li>
                          <li><a href="#">HOTEL MEERA</a></li>
                          <li><a href="#">HOTEL TULSI</a></li>
                          <li><a href="#">HOTEL MT. KAILASH</a></li>
                          <li><a href="#">HOTEL KANTIPUR</a></li>
                          <li><a href="#">HOTEL TREK U TOL</a></li>
                          <li><a href="#">HOTEL MUM'S GARDEN</a></li>
                          <li><a href="#">HOTEL BASE</a></li>                          
                        </ul>
			</div>
            
           
        </div>
        <div class="widgetarea f_col_2">
        	
            <div class="widget-container widget_pages">
				<h3 class="widget-title">CASINOS:</h3>
                        <ul>
                            
                	      <li><a href="#">CASINO SHANGRILA</a></li>
                          <li><a href="#">CASINO RAD</a></li>
                          <li><a href="#">CASINO ANNA</a></li>
                          <li><a href="#">CASINO NEPAL</a></li>
                          <li><a href="#">CASINO FULBARI</a></li>
						  <li><a href="#">CASINO TARA</a></li>
						  <li><a href="#">CASINO ROYALE</a></li>                          
                        </ul>
			</div>
            
           
        </div>
        
        <div class="widgetarea f_col_2">
        	
            <div class="widget-container widget_pages">
				<h3 class="widget-title">USEFUL LINKS:</h3>
                        <ul>
                            
                	      <li><a href="about.html">About us</a></li>
                          <li><a href="contact.html">Contact us</a></li>
                          <li><a href="blog.html">Our Blog</a></li>
                          <li><a href="terms%26conditions.html">TERMS OF SERVICE</a></li>
                        </ul>
			</div>
            
           
        </div>
        
       
        
        
        
        
        
        
        
        
        <div class="copyright">
          <p class="alignleft">Copyright 2013 - Great Escape Tour & Travels</p>
          <p>Created by <a href="http://www.designhub.com.np/">Design Hub</a> </p>
        </div>
      </div>
    </div>
  </div>
              <!--/ footer --> 
  
	</div>
</body>

<!-- Mirrored from dipesh.info.np/great/special-package.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Aug 2014 09:52:51 GMT -->
</html>