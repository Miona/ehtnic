<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                

		</main><!-- #main -->
	</div><!-- #primary -->
            <div class="main-image container">
                <div class="img wrap">
                        <img src="http://1.bp.blogspot.com/-EcPu_Idov4M/Tik9knQR67I/AAAAAAAAACk/QhkFRqtP3qs/s1600/hl1.jpg"/>
                    </div> 
            </div>
                   <div class="container">
                       
                     <div  class="home-widgets col-md-4 ">
	          <?php dynamic_sidebar( 'home-sidebar-1' ); ?>
                    </div><!-- #secondary -->
               <div  class="home-widgets col-md-4 " role="complementary">
	        <?php dynamic_sidebar( 'home-sidebar-2' ); ?>
               </div><!-- #secondary -->

             <div  class="home-widgets col-md-4 " >
	  <?php dynamic_sidebar( 'home-sidebar-3' ); ?>
          </div><!-- #secondary -->
                   </div> 
        
          <div class="text container">
              <p>Our selection of amazing stock photos and images is huge, with millions of professional photos that have been carefully chosen and sorted specifically for Microsoft Office users like you. Whether you are looking for cool backgrounds, clipart or digital pictures to illustrate PPT slide presentations, Outlook emails, webpages, printed brochures or other Word documents, we’ve got you covered.</p>
          </div>
        <div class="widget-cta"> <p>Fashion changes, but style endures </p>
        </div>

		
       

<?php if (!is_front_page); ?>
<?php get_sidebar(); ?>
        
<?php get_footer(); ?>

