
  <!-- Footer Starts -->
  <footer class="footer">
    <div class="container text-center-sm">
      <div class="row">
        <div class="col-md-6 col-lg-6">
          <img src="<?php bloginfo('template_directory') ?>/inc/images/black logo.png" alt="Logo" class="img-responsive d-width">
          <p>© Copyright 2019 by Tradesytem Inc.</p>
        </div>
        <div class="col-md-6 col-lg-6">
            <ul class="footer-list">
             <li><a href="<?php echo home_url('?lang=french') ?>">Français</a></li>
              <li class="last"><a href="<?php echo home_url(); ?>"><b>English</b></a></li>
            </ul>
             <div class="clr"></div>
              <?php
          wp_nav_menu( 
            array(
             'theme_location'  => 'french-menu-footer',
             'menu'            => 'menu-list',
             'container'       => 'ul',
             'menu_class'      => 'menu-list',
           ) 
          ); 
          ?>
            <!-- <div class="menu-list">
            <ul >
            <li><a href="#" >About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Quote</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#" >Login</a></li>
            </ul>
          </div> -->
          </p>

        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Ends -->




<?php wp_footer(); ?>
	
	
	
	

  
  
</body>
</html>