<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="UTF-8">
  <meta name="keywords" content="church,ministries,jesus,daycare,harlem,handsandfeetofjesusministries,HAF,haf,After Schhool Program,afterschoolprogram"/>
    <meta content="IE=9" http-equiv="x-ua-compatible">
 <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Home - Hands and Feet of Jesus Ministries</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="<?php bloginfo('template_directory'); ?>/images/background-hands.jpg" type="image/x-icon" rel="shortcut icon">

	<link rel="stylesheet" href="<?php echo BASEURL; ?>/style.css" type='text/css'>
	<link id="font-awesome-css" media="all" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css" rel="stylesheet">
	<link id="font-awesome-css" media="all" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" rel="stylesheet">

	<link href="<?php bloginfo('template_directory'); ?>/css/includedstyles.css" rel="stylesheet" type="text/css" />
	<link href="<?php bloginfo('template_directory'); ?>/css/menustyles.css" rel="stylesheet" type="text/css" />
 <link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet"  type="text/css" />


	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	
</head>

<body <?php body_class(); ?>>
<!--Top Black Bar -->
<div class="blackbar">
<!--Text Widget -->
<div class="textwidget2">
<span class="social-buttons">
<a target="_blank" href="http://www.facebook.com/home.php#!/pages/handsandfeetofjesusministry">
<i class="icon-facebook"></i>
</a>
<a target="_blank" href="https://twitter.com/handsandfeetofjesusministry">
<i class="icon-twitter"></i>
</a>
<a target="_blank" href="https://plus.google.com/+handsandfeetofjesusministry316">
<i class="icon-google-plus"></i>
</a>
<a target="_blank" href="http://www.youtube.com/handsandfeetministry">
<i class="icon-youtube"></i>
</a>
</span>

</div>  
</div>

<!-- END-->
<div class="logo_wrapper" style="height: 109px;">
<!--style="height: 120px;width:200px;"-->
<!--http://hcz.org/wp-content/uploads/2014/04/Logo_ForNavBar.png-->
</div>
<!--Start Live Site
<div class="logo">
<a href="http://handsandfeetofjesusministries.com/" style="visibility: visible;">


<img alt="Logo"  src="<?php bloginfo('template_directory'); ?>uploads/2016/06/HAF-logo.png" style="width:100%">

</a>
</div>-->
<!--Start -->
<div class="logo">
<a href="http://handsandfeetofjesusministries.com" style="visibility: visible; height: 49px;">
<img alt="Logo" src="<?php bloginfo('template_directory'); ?>/images/HAF-Logo.png" style="width:200px;">
</a>
</div>
<!--Donate Button-->
<div class="donatebutton">
<h5><a href="https://paypal.me/Handsandfeetofjesus4" alt="DONATE">DONATE</a></h5>

</div>  
</div> 
<!--END-->

<!--Navigation Menus-->
<nav>
 <div id="logo"><!--Hands and Feet in Ministries--> </div>
  <label for="drop" class="toggle">Menu</label>
  <input type="checkbox" id="drop" />
  <ul class="menu">
    <li><a href="/">HOME</a></li>
    <li> 
      <!-- First Tier Drop Down -->
      <label for="drop-1" class="toggle">PROGRAMS +</label>
      <a href="/programs">PROGRAMS</a>
      <input type="checkbox" id="drop-1"/>
      <ul>
        <li><a href="/programs/after-school-programs">After School Programs</a></li>
        <li><a href="/programs/special-education">Special Education</a></li>
        <li><a href="/programs/peer-mediation">Peer Mediation</a></li>
      </ul>
    </li>
    <li> 
      
     
      <label for="drop-2" class="toggle">DONATE +</label>
      <a href="/donate">DONATE</a>
      <input type="checkbox" id="drop-2"/>
      <ul>
      
        <li>
          
          <!-- Second Tier Drop Down -->
          <label for="drop-3" class="toggle">Ways to Give +</label>
          <a href="/donate">Ways to Give</a>
          <input type="checkbox" id="drop-3"/>
          
        </li>
      </ul>
    </li>
 
    <li><a href="/contact">CONTACT</a></li>
    <li><a href="/about">ABOUT</a></li>
  </ul>
</nav>
