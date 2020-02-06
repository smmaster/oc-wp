
<?php 
if(isset($_GET['lang'])){
  $lang = $_GET['lang'];
}else{
  $lang = "";
}


if(empty($lang)){
  get_header();
}
else{
  get_header('french');
} ?>




<!-- ############ ENGLISH SLIDER STARTS #################### -->
<!-- Carousel Starts -->
<?php 
if (have_rows('slider') && empty($lang)) { ?>
  <div class="container">
    <div class="row">
      <!-- Carousel -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <?php 
        if (have_rows('slider')) {
          $count = 0; ?>
          <ol class="carousel-indicators">
            <?php  while (have_rows('slider')) {
              the_row();
              if($count == 0){
                echo	"<li data-target='#carousel-example-generic' data-slide-to='$count' class='active'></li>";
              }else{
               echo	"<li data-target='#carousel-example-generic' data-slide-to='$count'></li>";
             }
             $count++;

           }
           echo '</ol>';
         }
         ?>


         <!-- Wrapper for slides -->
         <div class="carousel-inner">

           <?php if( have_rows('slider') ):
            $count1 = 0;  ?>
            <?php while( have_rows('slider') ):
              the_row();
              $imagess = get_sub_field('image');
              $heading1 = get_sub_field('headingline1');
              $heading2 = get_sub_field('headingline2');
              $paragraphs = get_sub_field('paragraph');
              $linktext = get_sub_field('link_text');
              $link = get_sub_field('link');


              if($count1 == 0){
                ?>

                <div class="item active">
                  <img src="<?php echo $imagess['url']; ?>" alt="First slide">
                  <!-- Static Header -->
                  <div class="header-text">
                    <div class="col-md-12">
                      <h2>
                        <span><?php echo $heading1; ?></span><br/><?php echo $heading2; ?>
                      </h2>
                      <br>
                      <?php echo $paragraphs ?>
                      <?php  if($link):?>
                        <a href="<?php echo $link; ?>" title="<?php echo $linktext; ?>" class="btn btn-custom"><?php echo $linktext; ?></a>
                      <?php endif;?>

                    </div>
                  </div><!-- /header-text -->
                </div>
              <?php }else{ ?>
                <div class="item">
                  <img src="<?php echo $imagess['url']; ?>" alt="First slide">
                  <!-- Static Header -->
                  <div class="header-text">
                    <div class="col-md-12">
                      <h2>
                        <span><?php echo $heading1; ?></span><br/><?php echo $heading2; ?>
                      </h2>
                      <br>
                      <?php echo $paragraphs ?>
                      <a href="<?php echo $link; ?>" title="<?php echo $linktext; ?>" class="btn btn-custom"><?php echo $linktext; ?></a>

                    </div>
                  </div><!-- /header-text -->
                </div>
              <?php } 
              $count1++;
            endwhile;

          endif;
          ?>


        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div><!-- /carousel -->
    </div>
  </div>
  <!-- Carousel Ends -->
<?php } ?>
<!-- ############ ENGLISH SLIDER ENDS #################### -->



<!-- ############ FRENCH SLIDER STARTS #################### -->
<!-- Carousel Starts -->
<?php 
if (have_rows('slider_french') && !empty($lang)) { ?>
  <div class="container">
    <div class="row">
      <!-- Carousel -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <?php 
        if (have_rows('slider_french')) {
          $count = 0; ?>
          <ol class="carousel-indicators">
            <?php  while (have_rows('slider_french')) {
              the_row();
              if($count == 0){
                echo  "<li data-target='#carousel-example-generic' data-slide-to='$count' class='active'></li>";
              }else{
                echo  "<li data-target='#carousel-example-generic' data-slide-to='$count'></li>";
              }
              $count++;

            }
            echo '</ol>';
          }
          ?>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">

            <?php if( have_rows('slider_french') ):
             $count1 = 0;  ?>
             <?php while( have_rows('slider_french') ):
               the_row();
               $imagess = get_sub_field('image');
               $heading1 = get_sub_field('headingline1');
               $heading2 = get_sub_field('headingline2');
               $paragraphs = get_sub_field('paragraph');
               $linktext = get_sub_field('link_text');
               $link = get_sub_field('link');


               if($count1 == 0){
                 ?>

                 <div class="item active">
                  <img src="<?php echo $imagess['url']; ?>" alt="First slide">
                  <!-- Static Header -->
                  <div class="header-text">
                    <div class="col-md-12">
                      <h2>
                        <span><?php echo $heading1; ?></span><br/><?php echo $heading2; ?>
                      </h2>
                      <br>
                      <?php echo $paragraphs ?>
                      <?php  if($link):?>
                        <a href="<?php echo $link; ?>" title="<?php echo $linktext; ?>" class="btn btn-custom"><?php echo $linktext; ?></a>
                      <?php endif;?>

                    </div>
                  </div><!-- /header-text -->
                </div>
              <?php }else{ ?>
                <div class="item">
                  <img src="<?php echo $imagess['url']; ?>" alt="First slide">
                  <!-- Static Header -->
                  <div class="header-text">
                    <div class="col-md-12">
                      <h2>
                        <span><?php echo $heading1; ?></span><br/><?php echo $heading2; ?>
                      </h2>
                      <br>
                      <?php echo $paragraphs ?>
                      <a href="<?php echo $link; ?>" title="<?php echo $linktext; ?>" class="btn btn-custom"><?php echo $linktext; ?></a>

                    </div>
                  </div><!-- /header-text -->
                </div>
              <?php } 
              $count1++;
            endwhile;

          endif;
          ?>


        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div><!-- /carousel -->
    </div>
  </div>
  <!-- Carousel Ends -->
<?php } ?>
<!-- ############ FRENCH SLIDER ENDS #################### -->


<!-- ############ ENGLISH ENTRUST US STARTS #################### -->


<?php
if(empty($lang)):
$section_2_heading = get_field('section_2_heading');  
if( have_rows('section_2_content') ): ?>

  <!-- Entrust Us Starts -->
  <div class="container entrust-us" >
    <?php if( $section_2_heading ): ?>
      <h1 class="heading"><?php echo $section_2_heading ?></h1>
    <?php endif; ?>
    <div class="row">
      <?php
      while( have_rows('section_2_content') ):
        the_row();
        $imagess = get_sub_field('image');
        $heading = get_sub_field('sub_heading');
        $paragraph = get_sub_field('para_text');
        $linktext = get_sub_field('link_text');
        $link = get_sub_field('link');


        ?>
        <div class="col-md-3">
          <img src="<?php echo $imagess['url'] ?>" alt="<?php echo $imagess['alt'] ?>" class="img-responsive d-block ">
          <h3><?php echo $heading; ?></h3>
          <?php echo $paragraph; 
          if($link){
            ?>

            <a href="<?php echo $link; ?>" class="read-more"> <span><i class="fa fa-angle-right" aria-hidden="true"></i></span> <?php echo $linktext ?></a>
          <?php } ?>
        </div>
        <?php 
      endwhile; ?>

    </div>
    
  </div>
  <!-- Entrust Us Ends -->
<?php endif;
endif; ?>
<!-- ############ ENGLISH ENTRUST US ENDS #################### -->





<!-- ############ FRENCH ENTRUST US ENDS #################### -->

<?php
if(!empty($lang)):
$section_2_heading_french = get_field('section_2_heading_french');	
if( have_rows('section_2_content_french') ): ?>
  <!-- Entrust Us Starts -->
  <div class="container entrust-us" >
    <?php	if( $section_2_heading_french ): ?>
      <h1 class="heading"><?php echo $section_2_heading_french ?></h1>
    <?php endif; ?>
    <div class="row">
    	<?php
      while( have_rows('section_2_content_french') ):
        the_row();
        $imagess = get_sub_field('image');
        $heading = get_sub_field('sub_heading');
        $paragraph = get_sub_field('para_text');
        $linktext = get_sub_field('link_text');
        $link = get_sub_field('link');
        ?>
        <div class="col-md-3">
          <img src="<?php echo $imagess['url'] ?>" alt="<?php echo $imagess['alt'] ?>" class="img-responsive d-block ">
          <h3><?php echo $heading; ?></h3>
          <?php echo $paragraph; 
          if($link){            ?>
            <a href="<?php echo $link; ?>" class="read-more"> <span><i class="fa fa-angle-right" aria-hidden="true"></i></span> <?php echo $linktext ?></a>
          <?php } ?>
        </div>
        <?php 
      endwhile; ?>
    </div>    
  </div>
  <!-- Entrust Us Ends -->
<?php endif;
endif;
 ?>
<!-- ############ FRENCH ENTRUST US ENDS #################### -->



<!-- ############ ENGLISH INTRO STARTS #################### -->
<?php
  // vars
if(empty($lang)):
$intro = get_field('intro');   
if( $intro ): ?>

  <div class="container intro">
    <div class="table-container">
      <div class="col-md-7 col-lg-7 col-table-cell">
        <img src="<?php echo $intro['imagecol_1']['url']; ?>" alt="<?php echo $intro['imagecol_1']['alt']; ?>" class="img-responsive d-block">
      </div>
      <div class="col-md-5 col-lg-5 col-table-cell text-center-sm">
       <?php echo $intro['textcol_2']; ?>
       <?php if($intro['link_text']): ?>
        <a href="<?php echo $intro['link']; ?>" title="Read More" class="btn btn-custom"><?php echo $intro['link_text']; ?></a>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php endif; endif; ?>
<!-- Trade System Intro Ends -->

<!-- ############ ENGLISH INTRO ENDS #################### -->


<!-- ############ FRENCH INTRO STARTS #################### -->
<!-- Trade System Intro Starts -->
<?php
  // vars
if(!empty($lang)):
$intro_french = get_field('intro_french');	 
if( $intro_french ): ?>

  <div class="container intro">
    <div class="table-container">
      <div class="col-md-7 col-lg-7 col-table-cell">
        <img src="<?php echo $intro_french['imagecol_1']['url']; ?>" alt="<?php echo $intro_french['imagecol_1']['alt']; ?>" class="img-responsive d-block">
      </div>
      <div class="col-md-5 col-lg-5 col-table-cell text-center-sm">
       <?php echo $intro_french['textcol_2']; ?>
       <?php if($intro_french['link_text']): ?>
        <a href="<?php echo $intro_french['link']; ?>" title="Read More" class="btn btn-custom"><?php echo $intro_french['link_text']; ?></a>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php endif; endif; ?>
<!-- Trade System Intro Ends -->
<!-- ############ FRENCH INTRO ENDS #################### -->




<!-- ############ ENGLISH ACHIEVE SECTION STARTS ################# -->

<?php
if(empty($lang)):
$section4 = get_field('section_4');  
if( $section4 ): ?>
  <!-- Achieve Section Starts -->
  <div class="container achieve-sec">
    <div class="text-center">
      <img src="<?php echo $section4['main_image']['url']; ?>" alt="flag" class="img-responsive d-block">
      <h3><?php echo $section4['main_headings']; ?></h3>
      <?php echo $section4['first_para']; ?>
    </div>
    <div class="row pt-30">
      <div class="col-md-6 col-lg-6 text-right text-center-sm">
        <?php echo $section4['left_paragraph']; ?>
      </div>
      <div class="col-md-6 col-lg-6 text-center-sm pt-3-sm">        
        <?php echo $section4['right_paragraph']; ?>
      </div>
    </div>
  </div>
<?php endif; endif;?>
<!-- Achieve Section Ends -->
<!-- ############ ENGLISH ACHIEVE SECTION STARTS ################# -->


<!-- ############ FRENCH ACHIEVE SECTION STARTS ################# -->
<?php
if(!empty($lang)):
$section4_french = get_field('section_4_french');  
if( $section4_french ): ?>
  <!-- Achieve Section Starts -->
  <div class="container achieve-sec">
    <div class="text-center">
      <img src="<?php echo $section4_french['main_image']['url']; ?>" alt="flag" class="img-responsive d-block">
      <h3><?php echo $section4_french['main_headings']; ?></h3>
      <?php echo $section4_french['first_para']; ?>
    </div>
    <div class="row pt-30">
      <div class="col-md-6 col-lg-6 text-right text-center-sm">
        <?php echo $section4_french['left_paragraph']; ?>
      </div>
      <div class="col-md-6 col-lg-6 text-center-sm pt-3-sm">        
        <?php echo $section4_french['right_paragraph']; ?>
      </div>
    </div>
  </div>
<?php endif; endif; ?>
<!-- Achieve Section Ends -->
<!-- ############ FRENCH ACHIEVE SECTION ENDS ################# -->




<!-- ############ ENGLISH HAPPY STARTS ################# -->
<?php
if(empty($lang)):
if( have_rows('section_5_content') ):

  $section5 = get_field('section_5');  
  if( $section5 ): ?>

    <!-- Our Happy Clients Starts -->
    <div class="container-fluid happy-clients">
      <div class="container">
        <h1 class="heading"><?php echo $section5['main_heading']; ?><br/><?php echo $section5['main_heading_2']; ?></h1>
      <?php endif; ?>
      <div class="row">
        <?php
        while( have_rows('section_5_content') ):
          the_row();
          $imagess = get_sub_field('user_img');
          $person_name = get_sub_field('person_name');
          $person_msg = get_sub_field('person_msg');
          $designation = get_sub_field('designation');
          $rating_stars = get_sub_field('rating_stars');


          ?>

          <div class="col-md-4">
            <div class="review-div">
              <div class="image text-center">
                <img src="<?php echo $imagess['url']; ?>" alt="<?php echo $imagess['alt']; ?>" class="img-responsive d-block">
              </div>
              <div class="content">
                <h3 class="reviewer-name"><?php echo $person_name; ?></h3>
                <p class="reviewer-comments"><?php echo $person_msg; ?></p>
                <p class="designation"><?php echo $designation; ?></p>
                <div class="d-block rating-stars">
                  <img src="<?php echo $rating_stars['url']; ?>" alt="<?php echo $rating_stars['alt']; ?>" class="img-responsive d-block">
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        

      </div>
    </div>
  </div>
  <!-- Our Happy Clients Ends -->
<?php endif; endif; ?>
<!-- ############ ENGLISH HAPPY ENDS ################# -->

<!-- ############ FRENCH HAPPY STARTS ################# -->
<?php
if(!empty($lang)):
if( have_rows('section_5_content_french') ):

  $section_5_french = get_field('section_5_french');	 
  if( $section_5_french ): ?>

    <!-- Our Happy Clients Starts -->
    <div class="container-fluid happy-clients">
      <div class="container">
        <h1 class="heading"><?php echo $section_5_french['main_heading']; ?><br/><?php echo $section_5_french['main_heading_2']; ?></h1>
      <?php endif; ?>
      <div class="row">
        <?php
        while( have_rows('section_5_content_french') ):
          the_row();
          $imagess = get_sub_field('user_img');
          $person_name = get_sub_field('person_name');
          $person_msg = get_sub_field('person_msg');
          $designation = get_sub_field('designation');
          $rating_stars = get_sub_field('rating_stars');
          ?>
          <div class="col-md-4">
            <div class="review-div">
              <div class="image text-center">
                <img src="<?php echo $imagess['url']; ?>" alt="<?php echo $imagess['alt']; ?>" class="img-responsive d-block">
              </div>
              <div class="content">
                <h3 class="reviewer-name"><?php echo $person_name; ?></h3>
                <p class="reviewer-comments"><?php echo $person_msg; ?></p>
                <p class="designation"><?php echo $designation; ?></p>
                <div class="d-block rating-stars">
                  <img src="<?php echo $rating_stars['url']; ?>" alt="<?php echo $rating_stars['alt']; ?>" class="img-responsive d-block">
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <!-- Our Happy Clients Ends -->
<?php endif; endif; ?>
<!-- ############ FRENCH HAPPY ENDS ################# -->



<!-- ############ ENGLISH PARTNER STARTS ################# -->
<?php 
if(empty($lang)):
$partners = get_field('partners');   
if( $partners ): ?>
  <!-- Partner Us Starts -->
  <div class="container">
    <h1 class="heading text-center"><?php echo $partners['main_heading']; ?></h1>
    <img src="<?php echo $partners['logos']['url']; ?>" alt="<?php echo $partners['logos']['alt']; ?>" class="img-responsive d-block mt-3">
  </div>
  <!-- Partner Us Ends -->
  <?php 
endif; endif;?>
<!-- ############ ENGLISH PARTNER ENDS ################# -->

<!-- ############ FRENCH PARTNER STARTS ################# -->
<?php 
if(!empty($lang)):
$partners_french = get_field('partners_french');   
if( $partners_french ): ?>
  <!-- Partner Us Starts -->
  <div class="container">
    <h1 class="heading text-center"><?php echo $partners_french['main_heading']; ?></h1>
    <img src="<?php echo $partners_french['logos']['url']; ?>" alt="<?php echo $partners_french['logos']['alt']; ?>" class="img-responsive d-block mt-3">
  </div>
  <!-- Partner Us Ends -->
  <?php 
endif; endif;?>
<!-- ############ FRENCH PARTNER ENDS ################# -->



<?php
if(empty($lang)){
  get_footer();
}
else{
  get_footer('french');
} ?>
