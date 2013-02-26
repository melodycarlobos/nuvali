<?php get_header(); ?>
			
			<div id="content" class="main-content what-nu-content">
			
				<div id="whats-nu-header" class="wrap clearfix ">
			
				    <div id="main" class="eightcol first clearfix container" role="main">
<h3 class="title">Choose a month</h3>   
            </div>    
        	
        </div>
        <div id="whats-nu-header2">
            <div class="container">
                <img src="http://localhost/nuvali/wp-content/uploads/calendar-events-nav-left.png" class="buttons" />
                <h3 class="text">January</h3>
                <img src="http://localhost/nuvali/wp-content/uploads/calendar-events-nav-divider.png" class="divider" />
                <h3 class="text">February</h3>
                <img src="http://localhost/nuvali/wp-content/uploads/calendar-events-nav-divider.png" class="divider" />
                <h3 class="text">March</h3>
                <img src="http://localhost/nuvali/wp-content/uploads/calendar-events-nav-right.png" class="buttons" />
            </div>    
            
        </div>
        <div id="whats-nu-slider-container">
               
            <div class="container">
                <img src="http://localhost/nuvali/wp-content/uploads/calendar-events-slider-frame-left.png" class="border-left" />
                <img src="http://localhost/nuvali/wp-content/uploads/calendar-events-slider-frame-right.png" class="border-right" />
                <div class="image_container">
                   
                </div>
            </div>
        </div>
        <div id="whats-nu-content-container">
        	<div id="content">


        		<!-- Start the Loop. -->
<?php query_posts('category_name=Events'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            	<div class="event">
                	<div class="content">
                    	<div class="text">
                        	<h2 class="title"><?php the_title(); ?></h2>
                        	<?php the_content(); ?>
                        </div>
                        <div class="slider">
                        	<div class="buttons">
                            	<img src="http://localhost/nuvali/wp-content/uploads/side-button-left.png" />
                            </div>
                            <div class="pic-object-container">
                            </div>
                        	<div class="buttons">
                            	<img src="http://localhost/nuvali/wp-content/uploads/side-button-right.png" />
                            </div>
							
                        </div>
                    </div>
                </div>
<?php endwhile; endif; ?>                    	
            </div>
        </div>
        <div id="whats-nu-event-venues">
        	<?php query_posts('category_name=event_venues'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="container">
                <div class="image-container">
                    <img src="http://placehold.it/640x500">
                </div>
                <div class="content">
                    <h1>EVENT <span class="blend">VENUES</span></h1>
                    <h2><?php the_title(); ?></h2>
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
            </div>

<?php endwhile; endif; ?>       

        </div>
       
	</div>
    <div class="footer">
        <div class="container">
           <div class="group-links-container">
              <div class="group-links">
                <ul>
                    <li class="group-links-header">ABOUT</li>
                    <li>Why Nuvali</li>
                    <li>How to Get There</li>
                    <li>Heritage</li>
                    <li>How We Give Back</li>
                </ul>
              </div> 
              <div class="group-links">
                 <ul>
                    <li class="group-links-header">TOUR</li>
                    <li>Getting Around</li>
                    <li>Parks and Nature</li>
                    <li>Sports</li>
                    <li>Education</li>
                    <li>Accommodation</li>
                    <li>Tour Packages</li>
                </ul>
              </div> 
              <div class="group-links">
                 <ul>
                    <li class="group-links-header">DINE AND SHOP</li>
                    <li>Retail Directory</li>
                    <li>Leasing Opportunities</li>
                    
                </ul>
              </div>
              <div class="group-links">
                 <ul>
                    <li class="group-links-header">WHAT'S NU?</li>
                    <li>Calendar</li>
                    <li>Future Developments</li>
                </ul>
              </div> 
              <div class="group-links">
                 <ul>
                    <li class="group-links-header">NU LIVING</li>
                    <li>Residential</li>
                    <li>Sustainability</li>
                    <li></li>
                    <li></li>
                    <li>Contact Us</li>
                </ul>
              </div> 
              <div class="group-links">
                 <ul>
                    <li class="group-links-header">INVEST IN NUVALI</li>
                    <li>Lakeside Evozone</li>
                    <li>Offices</li>
                    <li>Future CBD</li>
                    <li></li>
                    <li>Sitemap</li>
                </ul>
              </div>
                <span>Copyright 2010. NUVALI Evoliving, A Project of Ayala Land. All rights reserved. Privacy Policy</span> 

           </div>
           <div class="logo-trademarks">
                <img src="http://localhost/nuvali/wp-content/uploads/white-logo.png" />
           </div>
        </div>
    </div>

<!--<?php get_footer(); ?> -->
