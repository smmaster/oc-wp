<?php
/* Template Name: Services */
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

<!-- Image Starts -->
<?php 
$banner = get_field('main_banner');
 if($banner):

?>
<div class="container">
  <img src="<?php echo $banner['url'] ?>" alt="<?php echo $banner['alt'] ?>" class="img-responsive d-block">
</div>
<?php  endif; ?> 
<!-- Image Ends -->


<!-- ############ ENGLISH PROVIDE STARTS #################### -->
<!-- Provide Section Starts -->
<?php 
if(empty($lang)):
$header = get_field('header');
 if($header):

?>
<div class="container we-provide text-center" >
  <h1 class="heading "><?php echo $header['heading'] ?></h1>
  <?php echo $header['paragraph'] ?>
</div>
<?php endif; endif; ?>
<!-- Provide Section Ends -->
<!-- ############ ENGLISH PROVIDE ENDS #################### -->



<!-- ############ FRENCH PROVIDE STARTS #################### -->
<!-- Provide Section Starts -->
<?php 
if(!empty($lang)):
$header_french = get_field('header_french');
 if($header_french):

?>
<div class="container we-provide text-center" >
  <h1 class="heading "><?php echo $header_french['heading'] ?></h1>
  <?php echo $header_french['paragraph'] ?>
</div>
<?php endif; endif; ?>
<!-- Provide Section Ends -->
<!-- ############ FRENCH PROVIDE ENDS #################### -->







<!-- ############ ENGLISH INVENTORY STARTS #################### -->

<!-- Trade System Inventory Starts -->
<?php 
if(empty($lang)):
$section1 = get_field('section-1');
 if($section1):

?>
<div class="container mt-6">
  <div class="inventory row">
    <div class="col-md-6 col-lg-6  ">
      <img src="<?php echo $section1['image']['url']?>" alt="<?php echo $section1['image']['alt']?>p" class="img-responsive d-block">
    </div>
    <div class="col-md-6 col-lg-6 text-center-sm">
     <?php echo $section1['content']; ?>
    </div>
  </div>
</div>
<?php endif; endif; ?>
<!-- Trade System Inventory Ends -->

<!-- ############ ENGLISH INVENTORY ENDS #################### -->


<!-- ############ FRENCH INVENTORY STARTS #################### -->

<!-- Trade System Inventory Starts -->
<?php 
if(!empty($lang)):
$section1_french = get_field('section-1_french');
 if($section1_french):

?>
<div class="container mt-6">
  <div class="inventory row">
    <div class="col-md-6 col-lg-6  ">
      <img src="<?php echo $section1_french['image']['url']?>" alt="<?php echo $section1_french['image']['alt']?>p" class="img-responsive d-block">
    </div>
    <div class="col-md-6 col-lg-6 text-center-sm">
     <?php echo $section1_french['content']; ?>
    </div>
  </div>
</div>
<?php endif; endif; ?>
<!-- Trade System Inventory Ends -->

<!-- ############ FRENCH INVENTORY ENDS #################### -->





<!-- ############ ENGLISH PROCCESSING START #################### -->
<!-- Processing Starts -->
<?php 
if(empty($lang)):
$section2 = get_field('section-2');
 if($section2):
?>
<div class="container mt-6">
  <div class="inventory row">
     <div class="col-md-6 col-lg-6 visible-xs visible-sm">
      <img src="<?php echo $section2['image']['url']?>" alt="<?php echo $section2['image']['alt']?>" class="img-responsive d-block">
    </div>
    <div class="col-md-6 col-lg-6 text-center-sm">
      <?php echo $section2['content']; ?>
    </div>
    <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
      <img src="<?php echo $section2['image']['url']?>" alt="<?php echo $section2['image']['url']?>" class="img-responsive d-block">
    </div>
  </div>
 <?php echo $section2['last_row']; ?>
</div>
<?php endif; endif; ?>
<!-- Processing Ends -->
<!-- ############ ENGLISH PROCCESSING ENDS #################### -->






<!-- ############ FRENCH PROCCESSING START #################### -->
<!-- Processing Starts -->
<?php 
if(!empty($lang)):
$section2_french = get_field('section-2_french');
 if($section2_french):
?>
<div class="container mt-6">
  <div class="inventory row">
     <div class="col-md-6 col-lg-6 visible-xs visible-sm">
      <img src="<?php echo $section2_french['image']['url']?>" alt="<?php echo $section2_french['image']['alt']?>" class="img-responsive d-block">
    </div>
    <div class="col-md-6 col-lg-6 text-center-sm">
      <?php echo $section2_french['content']; ?>
    </div>
    <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
      <img src="<?php echo $section2_french['image']['url']?>" alt="<?php echo $section2_french['image']['url']?>" class="img-responsive d-block">
    </div>
  </div>
 <?php echo $section2_french['last_row']; ?>
</div>
<?php endif; endif; ?>
<!-- Processing Ends -->
<!-- ############ FRENCH PROCCESSING ENDS #################### -->






<!-- ############ ENGLISH Expedition STARTS #################### -->
<!-- Expedition Starts -->
<?php 
if(empty($lang)):
$section3 = get_field('section-3');
 if($section3):
?>
<div class="container mt-6">
  <div class="inventory row">
    <div class="col-md-6 col-lg-6">
      <img src="<?php echo $section3['image']['url']?>" alt="<?php echo $section3['image']['alt']?>" class="img-responsive d-block">
    </div>
    <div class="col-md-6 col-lg-6 text-center-sm">
        <?php echo $section3['content']; ?>
  </div>
  </div>
</div>
<?php endif; endif; ?>
<!-- Expedition Ends -->
<!-- ############ ENGLISH Expedition ENDS #################### -->



<!-- ############ FRENCH Expedition STARTS #################### -->
<!-- Expedition Starts -->
<?php 
if(!empty($lang)):
$section3 = get_field('section-3');
 if($section3):
?>
<div class="container mt-6">
  <div class="inventory row">
    <div class="col-md-6 col-lg-6">
      <img src="<?php echo $section3['image']['url']?>" alt="<?php echo $section3['image']['alt']?>" class="img-responsive d-block">
    </div>
    <div class="col-md-6 col-lg-6 text-center-sm">
        <?php echo $section3['content']; ?>
  </div>
  </div>
</div>
<?php endif; endif; ?>
<!-- Expedition Ends -->
<!-- ############ FRENCH Expedition ENDS #################### -->




<!-- ############ ENGLISH DELIEVERY STARTS #################### -->
<!-- Delivery Starts -->
<?php 
if(empty($lang)):
$section4 = get_field('section-4');
 if($section4):
?>
<div class="container mt-6">
  <div class="inventory row">
     <div class="col-md-6 col-lg-6 visible-xs visible-sm">
      <img src="<?php echo $section4['image']['url']?>" alt="<?php echo $section4['image']['alt']?>" class="img-responsive d-block">
    </div>
    <div class="col-md-6 col-lg-6 text-center-sm">
      <?php echo $section4['content']; ?>
    </div>
    <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
      <img src="<?php echo $section4['image']['url']?>" alt="<?php echo $section4['image']['alt']?>" class="img-responsive d-block">
    </div>
  </div>
   <?php echo $section4_french['last_row']; ?>
</div>
<?php endif; endif; ?>
<!-- Delivery Ends -->
<!-- ############ ENGLISH DELIEVERY ENDS #################### -->


<!-- ############ FRENCH DELIEVERY STARTS #################### -->
<!-- Delivery Starts -->
<?php 
if(!empty($lang)):
$section4_french = get_field('section-4_french');
 if($section4_french):
?>
<div class="container mt-6">
  <div class="inventory row">
     <div class="col-md-6 col-lg-6 visible-xs visible-sm">
      <img src="<?php echo $section4_french['image']['url']?>" alt="<?php echo $section4_french['image']['alt']?>" class="img-responsive d-block">
    </div>
    <div class="col-md-6 col-lg-6 text-center-sm">
      <?php echo $section4_french['content']; ?>
    </div>
    <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
      <img src="<?php echo $section4_french['image']['url']?>" alt="<?php echo $section4_french['image']['alt']?>" class="img-responsive d-block">
    </div>
  </div>
   <?php echo $section4_french['last_row']; ?>
</div>
<?php endif; endif; ?>
<!-- Delivery Ends -->
<!-- ############ FRENCH DELIEVERY ENDS #################### -->



<!-- ############ ENGLISH LAST STARTS #################### -->
<?php
if(empty($lang)): 
$section6 = get_field('section-6');
 if($section6):
?>
<!-- Achieve Section Starts -->
<div class="container achieve-sec">
  <div class="text-center">
    <img src="<?php echo $section6['image']['url']?>" alt="<?php echo $section6['image']['alt']?>" class="img-responsive d-block">
    <?php echo $section6['content']; ?>
</div>
</div>
<?php endif; endif; ?>
<!-- Achieve Section Ends -->
<!-- ############ ENGLISH LAST STARTS #################### -->






<!-- ############ FRENCH LAST STARTS #################### -->
<?php
if(!empty($lang)): 
$section6_french = get_field('section-6_french');
 if($section6_french):
?>
<!-- Achieve Section Starts -->
<div class="container achieve-sec">
  <div class="text-center">
    <img src="<?php echo $section6_french['image']['url']?>" alt="<?php echo $section6_french['image']['alt']?>" class="img-responsive d-block">
    <?php echo $section6_french['content']; ?>
</div>
</div>
<?php endif; endif; ?>
<!-- Achieve Section Ends -->
<!-- ############ FRENCH LAST STARTS #################### -->


<?php
if(empty($lang)){
  get_footer();
}
else{
  get_footer('french');
} ?>
