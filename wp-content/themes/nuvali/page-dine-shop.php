<?php get_header(); ?>
			
<div id="content">
			
	<div id="inner-content" class="wrap clearfix">
			
		<div id="main" class="eightcol first clearfix" role="main">
			<div class="main-content retail-directory-container">
        <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/upper-image.png" />
        <div class="retail-directory-content">
            <br />
            <br />
            <br />
            <h1>Retail Directory</h1>
            <h4>THIS IS WHERE YOU CAN FIND <br />
            EVERYTHING YOU LOVE. AND MORE.</h4>
  
            <p style="color:#606362">
                There's a cool new way to unwind here in NUVALI. <br />
                Enjoy retail therapy with a view of the sunlit sky <br />
                or dine outside by the lake. Grocery shopping <br />
                and everything else you need are available <br />
                at the retail shops and open spaces of Solenad 1 and 2. <br />
                Whether it's dining, shopping or celebrating at the <br />
                soon-to-rise Monochrome Events Place, there's no other <br />
                location this close to nature, right now.
            </p>

            <h2 class="retail-directory-header">RETAIL STORES</h2>
        </div>
	</div>	
    <div class="retail-directory-container2">
        <div class="retail-directory-content2">
            <div class="retail-div-content-left">
                <span class="retail-span">
                    Check out which stores are open by choosing a category below.
                </span>


<?php storecategories_dropdown( 'Categories' ); ?>

<!--                 <select>
                <?php query_posts(array(  'post_type' => 'dineshops',  'category_name' => 'Retailstores')); ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <option value="volvo"><?php the_title(); ?></option>
                  <?php endwhile; endif; ?>   
                </select> -->

                <ul class="retail-store-list">
                    <li>
                        <div class="retail-store-list-container">
                            <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/food-icon.png" />
                            <div class="retail-store-list-content">
                                    <span class="title">Yellow Cab Pizza Co.</span><br />
                                    <span>04-567-90</span><br />
                                    <span>Ground level, One Evotech</span>
                                    <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/google-map-icon.png" class="google-map"/>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="retail-store-list-container">
                            <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/entertainment-icon.png" />
                            <div class="retail-store-list-content">
                                    <span class="title">Yellow Cab Pizza Co.</span><br />
                                    <span>04-567-90</span><br />
                                    <span>Ground level, One Evotech</span>
                                    <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/google-map-icon.png" class="google-map"/>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="retail-store-list-container">
                            <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/entertainment-icon.png" />
                            <div class="retail-store-list-content">
                                    <span class="title">Timezone</span><br />
                                    <span>(049) 302-0103/ 0927-276-1495</span><br />
                                    <span>Ground level, One Evotech</span>
                                    <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/google-map-icon.png" class="google-map"/>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="retail-store-list-container">
                            <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/fashion-icon.png" />
                            <div class="retail-store-list-content">
                                    <span class="title">Yellow Cab Pizza Co.</span><br />
                                    <span>04-567-90</span><br />
                                    <span>Ground level, One Evotech</span>
                                    <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/google-map-icon.png" class="google-map"/>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="retail-store-list-container">
                            <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/entertainment-icon.png" />
                            <div class="retail-store-list-content">
                                    <span class="title">Timezone</span><br />
                                    <span>(049) 302-0103/ 0927-276-1495</span><br />
                                    <span>Ground level, One Evotech</span>
                                    <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/google-map-icon.png" class="google-map"/>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="retail-store-list-container">
                            <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/fashion-icon.png" />
                            <div class="retail-store-list-content">
                                    <span class="title">Yellow Cab Pizza Co.</span><br />
                                    <span>04-567-90</span><br />
                                    <span>Ground level, One Evotech</span>
                                    <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/google-map-icon.png" class="google-map"/>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="retail-store-list-container">
                            <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/entertainment-icon.png" />
                            <div class="retail-store-list-content">
                                    <span class="title">Timezone</span><br />
                                    <span>(049) 302-0103/ 0927-276-1495</span><br />
                                    <span>Ground level, One Evotech</span>
                                    <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/google-map-icon.png" class="google-map"/>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="retail-store-list-container">
                            <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/fashion-icon.png" />
                            <div class="retail-store-list-content">
                                    <span class="title">Yellow Cab Pizza Co.</span><br />
                                    <span>04-567-90</span><br />
                                    <span>Ground level, One Evotech</span>
                                    <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/google-map-icon.png" class="google-map"/>
                            </div>
                        </div>
                    </li>
                    
                </ul>    
            </div>
            <div class="retail-div-circle-right">
                <div class="retail-div-circle-content">
                    <h3 style="color:#32a826">LATEST DEALS</h3>

                    <ul class="retail-store-list2">
                        <li>
                            <div class="retail-store-list-container2">
                                <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/food-icon.png" />
                                <div class="retail-store-list-content2">
                                        <span class="title2">Yellow Cab Pizza Co.</span><br />
                                        <span>04-567-90</span><br />
                                        <span>Ground level, One Evotech</span>
                                        <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/google-map-icon.png" class="google-map"/>
                                </div>

                            </div>
                            <p>"Free slice of pizza for every single receipt purchase of food and drinks worth P2,000 and up!"</p>
                        </li>
                        <li>
                            <div class="retail-store-list-container2">
                                <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/food-icon.png" />
                                <div class="retail-store-list-content2">
                                        <span class="title2">Yellow Cab Pizza Co.</span><br />
                                        <span>04-567-90</span><br />
                                        <span>Ground level, One Evotech</span>
                                        <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/google-map-icon.png" class="google-map"/>
                                </div>
                            </div>
                            <p>"Free slice of pizza for every single receipt purchase of food and drinks worth P2,000 and up!"</p>
                        </li>
                        <li>
                            <div class="retail-store-list-container2">
                                <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/food-icon.png" />
                                <div class="retail-store-list-content2">
                                        <span class="title2">Yellow Cab Pizza Co.</span><br />
                                        <span>04-567-90</span><br />
                                        <span>Ground level, One Evotech</span>
                                        <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/google-map-icon.png" class="google-map"/>
                                </div>
                            </div>
                            <p>"Free slice of pizza for every single receipt purchase of food and drinks worth P2,000 and up!"</p>
                        </li>
                    </ul>  

                    <div id="view-more-deals">
                        <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/dine_and_shop/shop-icon.png" />
                        <span>VIEW MORE DEALS</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
 
</div>
</div>
</div>


	</body>

</html> 