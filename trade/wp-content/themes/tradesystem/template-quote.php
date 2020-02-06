<?php
/* Template Name: Quote */
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
<!-- Speak Us Starts --> 
<?php if(empty($lang)): ?>
<div class="container-fluid quote-us text-center-sm">
  <div class="container ">
  	<?php $heading = get_field('heading'); ?>
    <h3 class="heading-2"><?php echo $heading ?></h3>
  </div>
</div>
<?php endif; ?>
<!-- Speak Us Ends -->

<!-- Speak Us Starts --> 
<?php if(!empty($lang)): ?>
<div class="container-fluid quote-us text-center-sm">
  <div class="container ">
  	<?php $heading2 = get_field('heading2'); ?>
    <h3 class="heading-2"><?php echo $heading2 ?></h3>
  </div>
</div>
<?php endif; ?>
<!-- Speak Us Ends -->



<!-- Contact Us form Starts -->
<?php 
if(empty($lang)):
echo do_shortcode('[contact-form-7 id="170" title="Contact form 1"]');
endif;
if(!empty($lang)):
echo do_shortcode('[contact-form-7 id="280" title="French Quote"]');
endif;
?>
<!-- Contact Us form Ends -->





<?php
if(empty($lang)){
  get_footer();
}
else{
  get_footer('french');
} ?>
