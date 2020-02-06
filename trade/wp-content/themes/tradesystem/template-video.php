<?php 
/* Template Name: Video */
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
} 

?>



<!-- ############ ENGLISH SPEAK US STARTS #################### -->

<!-- Speak Us Starts --> 
<?php 
if(empty($lang)) {
  $section1 = get_field('section-1');
  if($section1) {

    ?>
    <div class="container-fluid speak-us text-center-sm">
      <div class="container ">
        <?php echo $section1['para'];
        $section2 = get_field('section2');
        if($section2) { ?>
          <div class="row text-white">
            <div class="col-md-6 col-lg-6">
             <?php
             echo $section2['left_side'];
             ?>    
           </div>
           <div class="col-md-6 col-lg-6">
            <?php if (!empty($section2['image_url'])) { ?>
             <a href="<?php echo $section2['image_url'] ?>">
             <?php   } ?>
             <img src="<?php echo $section2['right_side']['url'] ?>" alt="<?php echo $section2['right_side']['alt'] ?>" class="img-responsive d-block"> 
             <?php if (!empty($section2['image_url'])) { ?>
             </a>
           <?php   } ?>
         </div>

       </div>
     <?php } ?>
   </div>
 </div>
<?php } } ?>
<!-- Speak Us Ends -->

<!-- ############ ENGLISH SPEAK US ENDS #################### -->

<!-- ############ FRENCH SPEAK US STARTS #################### -->

<!-- Speak Us Starts --> 
<?php 
if(!empty($lang)){
  $section1_french = get_field('section-1_french');
  if($section1_french){

    ?>
    <div class="container-fluid speak-us text-center-sm">
      <div class="container ">
        <?php echo $section1_french['para'];
        $section2_french = get_field('section2_french');
        if($section2_french){ ?>
          <div class="row text-white">
            <div class="col-md-6 col-lg-6">
             <?php
             echo $section2_french['left_side'];
             ?>    
           </div>
           <div class="col-md-6 col-lg-6">
            <?php if (!empty($section2_french['image_url'])) { ?>
             <a href="<?php echo $section2_french['image_url'] ?>">
             <?php   } ?>
             <img src="<?php echo $section2_french['right_side']['url'] ?>" alt="<?php echo $section2_french['right_side']['alt'] ?>" class="img-responsive d-block"> 
             <?php if (!empty($section2_french['image_url'])) { ?>
             </a>
           <?php   } ?>
         </div>

       </div>
     <?php } ?>
   </div>
 </div>
<?php } } ?>
<!-- Speak Us Ends -->

<!-- ############ FRENCH SPEAK US STARTS #################### -->

<!-- ############ English Last Section STARTS #################### -->
<!-- Last Section Starts -->
<?php 
if(empty($lang)){
  $section3 = get_field('section3');
  if($section3){

    ?>
    <div class="container mt-3 text-center-sm">
      <?php echo $section3; ?>
    </div>
  <?php } } ?>
  <!-- Last Section Ends -->

  <!-- ############ English Last Section ENDS #################### -->



  <!-- ############ French Last Section STARTS #################### -->
  <!-- Last Section Starts -->
  <?php 
  if(!empty($lang)){
    $section3_french = get_field('section3_french');
    if($section3_french){

      ?>
      <div class="container mt-3 text-center-sm">
        <?php echo $section3_french; ?>
      </div>
      <?php 
    } 
  } 




if(empty($lang)){
  get_footer();
}
else{
  get_footer('french');
} ?>
