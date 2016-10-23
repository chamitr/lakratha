<!-- #header-menu -->
<div id="header-menu">
	<!-- #header-menu-inside -->
    <div id="header-menu-inside" class="container_12 clearfix">
    
    	<div class="grid_12">
            <div id="navigation" class="clearfix">
            <?php if ($page['navigation']) :?>
            <?php print drupal_render($page['navigation']); ?>
            <?php else :
            if (module_exists('i18n_menu')) {
            $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
            } else {
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
            }
            print drupal_render($main_menu_tree);
            endif; ?>
            </div>
        </div>
        
    </div><!-- EOF: #header-menu-inside -->

</div><!-- EOF: #header-menu -->

<!-- #banner -->
<div id="banner">

	<?php print render($page['banner']); ?>
	
    <?php if (theme_get_setting('slideshow_display','corporateclean')): ?>
    
    <?php if ($is_front): ?>
    
    <!-- #slideshow -->
    <div id="slideshow">
    
        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
                <div style="float:left; padding:0 30px 0 0;">
                <img class="masked" width="200" height="200" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/images/SriLanka.jpg"/>
                </div>
                <h1>Sri Lankan automobile advertisements</h1>
                LakRatha is the best website to buy and sell cars and other automobiles in Sri Lanka for FREE!.
                <!--EOF:slider-item content-->
                
				</div>
            </div>
        </div>
        <!--EOF:slider-item-->

		<!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
                <div style="float:left; padding:0 30px 0 0;">
                <img class="masked" width="200" height="200" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/images/secure-site.jpg"/>
                </div>
                <h1>We value your privacy</h1>
                You only need a valid email address to register. We do not publish your contact information on Internet.
                <!--EOF:slider-item content-->
                
				</div>
            </div>
        </div>
        <!--EOF:slider-item-->
		
        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
                <div style="float:left; padding:0 30px 0 0;">
                <img class="masked" width="200" height="200" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/images/window-homecleaning.jpg"/>
                </div>
                <h1>Clean and advertisement free</h1>
				LakRatha is all about a better service publishing your advertisement, not ours. We give prominence to your advertisement.
                
                <!--EOF:slider-item content-->
				
                </div>
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
                <div style="float:left; padding:0 30px 0 0;">
                <img class="masked" width="200" height="200" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/images/free-service.jpg"/>
                </div>
                <h1>Free service during promotion period</h1>
                LakRatha is still a new website. We provide our service for free during our promosion period. This is too good an opportunity to miss.
                <!--EOF:slider-item content-->
                
				</div>
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
                <div style="float:left; padding:0 30px 0 0;">
                <img class="masked" width="200" height="200" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/images/searching.jpg"/>
                </div>
                <h1>Finding the vehicle you want is made easy.</h1>
				LakRatha provides a lot of search filters to make searching for the vehicle you want as easy as ABC.
                <!--EOF:slider-item content-->
             
				</div>
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
                <div style="float:left; padding:0 30px 0 0;">
                <img class="masked" width="200" height="200" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/images/running1.jpg"/>
                </div>
                <h1>Fast and reliable service</h1>
				LakRatha is hosted on faster and reliable servers to make your experience hassle free.
                 <!--EOF:slider-item content-->

				</div>
            </div>
        </div>
        <!--EOF:slider-item-->
    
    </div>
    <!-- EOF: #slideshow -->
    
    <!-- #slider-controls-wrapper -->
    <div id="slider-controls-wrapper">
        <div id="slider-controls" class="container_12">
            <ul id="slider-navigation">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
    </div>
    <!-- EOF: #slider-controls-wrapper -->
    
    <?php endif; ?>
    
	<?php endif; ?>  

</div><!-- EOF: #banner -->


<!-- #content -->
<div id="content">
	<!-- #content-inside -->
    <div id="content-inside" class="container_12 clearfix">
    
        <?php if ($page['sidebar_first']) :?>
        <!-- #sidebar-first -->
        <div id="sidebar-first" class="grid_3">
        	<?php print render($page['sidebar_first']); ?>
        </div><!-- EOF: #sidebar-first -->
        <?php endif; ?>
        
        <?php if ($page['sidebar_first'] && $page['sidebar_second']) { ?>
        <div class="grid_3">
        <?php } elseif ($page['sidebar_first'] || $page['sidebar_second']) { ?>
        <div id="main" class="grid_9">
		<?php } else { ?>
        <div id="main" class="grid_12">    
        <?php } ?>
            
            <?php if (theme_get_setting('breadcrumb_display','corporateclean')): print $breadcrumb; endif; ?>
            
            <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
       
            <?php if ($messages): ?>
            <div id="console" class="clearfix">
            <?php print $messages; ?>
            </div>
            <?php endif; ?>
     
            <?php if ($page['help']): ?>
            <div id="help">
            <?php print render($page['help']); ?>
            </div>
            <?php endif; ?>
            
            <?php if ($action_links): ?>
            <ul class="action-links">
            <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
            
			<?php print render($title_prefix); ?>
			<?php $title = str_replace("Product", "Advertisement", $title); ?>
            <?php if ($title): ?>
            <h1><?php print $title ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            
            <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
            
            <?php print render($page['content']); ?>
            
            <?php print $feed_icons; ?>
            
        </div><!-- EOF: #main -->
        
        <?php if ($page['sidebar_second']) :?>
        <!-- #sidebar-second -->
        <div id="sidebar-second" class="grid_3">
        	<?php print render($page['sidebar_second']); ?>
        </div><!-- EOF: #sidebar-second -->
        <?php endif; ?>  

    </div><!-- EOF: #content-inside -->

</div><!-- EOF: #content -->

<!-- #footer -->    
<div id="footer">
	<!-- #footer-inside -->
    <div id="footer-inside" class="container_12 clearfix">
    
        <div class="footer-area grid_3">
        <?php print render($page['footer_first']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area grid_3">
        <?php print render($page['footer_second']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area grid_3">
        <?php print render($page['footer_third']); ?>
        </div><!-- EOF: .footer-area -->
       
    </div><!-- EOF: #footer-inside -->

</div><!-- EOF: #footer -->
