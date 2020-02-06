<?php 
/* Template Name: Contact Us */
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

<?php 
if(empty($lang)):
$section1 = get_field('section_1');
 if($section1):
?>
<!-- Section 1 Starts --> 
<div class="container-fluid contact-us text-center-sm">
  <div class="container ">
   <?php echo $section1; ?>
  </div>
</div>
<?php endif; endif; ?>


<?php
if(!empty($lang)):
$section1_french = get_field('section_1_french');
 if($section1_french):
?>
<!-- Section 1 Starts --> 
<div class="container-fluid contact-us text-center-sm">
  <div class="container ">
   <?php echo $section1_french; ?>
  </div>
</div>
<?php endif; endif; ?>
<!-- Section 1 Ends -->





<!-- Contact Us form Starts -->
<div class="container mt-3 text-center-sm">
  <?php
  if(empty($lang)):
echo do_shortcode('[contact-form-7 id="179" title="Contact Us form"]');
endif;
if(!empty($lang)):
	echo do_shortcode('[contact-form-7 id="289" title="Contact Us form_copy"]');
endif;

?>

</div>
<!-- Contact Us form Ends -->


<!-- Last Section form Starts -->
<?php 
if(empty($lang)):
$section2 = get_field('last_section');
 if($section2):
?>
<div class="container mt-3 text-center-sm text-center">
  <img src="<?php echo $section2['image']['url']; ?>" alt="<?php echo $section2['image']['alt'] ; ?>" class="img-responsive d-block">
  <?php  echo $section2['content']?>

</div>
<?php endif; endif; ?>
<!-- Last Section form Ends -->



<?php 
if(!empty($lang)):
$section2_french = get_field('last_section_french');
 if($section2_french):
?>
<div class="container mt-3 text-center-sm text-center">
  <img src="<?php echo $section2_french['image']['url']; ?>" alt="<?php echo $section2_french['image']['alt'] ; ?>" class="img-responsive d-block">
  <?php  echo $section2_french['content']?>

</div>
<?php endif; endif; ?>
<!-- Last Section form Ends -->

<?php
if(empty($lang)){
  get_footer();
}
else{
  get_footer('french');
} ?>
