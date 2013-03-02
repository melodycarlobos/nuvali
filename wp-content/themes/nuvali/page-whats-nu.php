<?php get_header(); ?>
			
			<div id="content" class="main-content what-nu-content">
			
				<div id="whats-nu-header" class="wrap clearfix ">
			
				    <div id="main" class="eightcol first clearfix container" role="main">
<h3 class="title">Choose a month</h3>   
            </div>    
        	
        </div>
        <div id="whats-nu-header2">
            <div class="container">
            
                <input type="image"  id="go-left" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-left.png" class="buttons" />
                 <input id="go-right" type="image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-right.png" class="buttonright" />
                    <div class="slider">
                        <div class="months">
                           
                            <div id="jan" class="month"><h3 class="text">January</h3></div>
                            <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-divider.png" class="divider" />
                            <div id="feb" class="month"><h3 class="text">February</h3></div>
                            <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-divider.png" class="divider" />
                            <div id="mar" class="month"><h3 class="text">March</h3></div>
                             <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-divider.png" class="divider" />
                            <div id="aprl" class="month"><h3 class="text">April</h3></div>
                             <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-divider.png" class="divider" />
                            <div id="may" class="month"><h3 class="text">May</h3></div>
                             <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-divider.png" class="divider" />
                            <div id="jun" class="month"><h3 class="text">June</h3></div>
                             <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-divider.png" class="divider" />
                            <div id="july" class="month"><h3 class="text">July</h3></div>
                             <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-divider.png" class="divider" />
                            <div id="aug" class="month"><h3 class="text">August</h3></div>
                             <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-divider.png" class="divider" />
                            <div id="sept" class="month"><h3 class="text">September</h3></div>
                             <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-divider.png" class="divider" />
                            <div id="oct" class="month"><h3 class="text">October</h3></div>
                             <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-divider.png" class="divider" />
                            <div id="nov" class="month"><h3 class="text">November</h3></div>
                             <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-divider.png" class="divider" />
                            <div id="dec" class="month"><h3 class="text">December</h3></div>      
                        </div>
                    </div>
           
            </div>    
            
        </div>
        <div id="whats-nu-slider-container">
               
            <div class="container">
                <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-slider-frame-left.png" class="border-left" />
                <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-slider-frame-right.png" class="border-right" />
                <div class="image_container">
                    <img src="http://placehold.it/1280x470p" class="home-upper-slider-image">
                   
                </div>
            </div>
        </div>
        <div id="whats-nu-content-container">
        	<div id="content">
<div id="showmonth" style="display: none;"></div>

                
                <!-- Start the Loop. -->
                <?php query_posts(array(  'post_type' => 'events',  'category_name' => 'Events')); ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>    
                <div class="event">
                    <div class="content">
                        <div class="text">
                            <h2 class="title"><?php the_title(); ?></h2>
                        
                            <?php the_content(); ?>
                        </div>
                        <div class="slider-chabz">
                            <div class="buttons left">
                                <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/side-button-left.png" />
                            </div>
                            <div class="pic-object-container">
                                <div class="pic-object-wrapper">
                                    <div class="pic-object"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/sample-pic1.png" /></div>
                                    <div class="pic-object"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/sample-pic2.png" /></div>
                                    <div class="pic-object"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/sample-pic3.png" /></div>
                                    <div class="pic-object"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/sample-pic4.png" /></div>
                                    <div class="pic-object"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/sample-pic5.png" /></div>
                                    <div class="pic-object"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/sample-pic6.png" /></div>
                                    <div class="pic-object"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/sample-pic7.png" /></div>
                                    <div class="pic-object"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/sample-pic8.png" /></div>
                                    <div class="pic-object"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/sample-pic6.png" /></div>
                                    <div class="pic-object"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/sample-pic7.png" /></div>
                                    <div class="pic-object"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/sample-pic8.png" /></div>
                                    <div class="pic-object"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/sample-pic5.png" /></div>
                                    <div class="pic-object"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/sample-pic6.png" /></div>
                                    <div class="pic-object"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/sample-pic7.png" /></div>
                                    
                                </div>
                            </div>
                            <div class="buttons right">
                                <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/side-button-right.png" />
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


<?php get_footer(); ?> 
