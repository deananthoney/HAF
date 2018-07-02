<?php
/**
 * Template Name: Contact Page
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header();?>

<div id="middlebackground">
<br/>
<br/>
<br/>


<div class="logotitle">
<span>CONTACT</span>
</div>
<!--Beginning of New Logo -->
<div id="Logo">
<a href="http://handsandfeetofjesusministries.com" style="visibility: visible; height: 49px;">
<img alt="Logo" src="<?php bloginfo('template_directory'); ?>/images/HAF-Logo.png" style="height: 200px;">
</a>



</div>

<div class="contactform">
<?php echo do_shortcode('[contact-form-7 id="31" title="Contact form 1"] ')?>

<br/>
</div>



</div>
<?php get_footer(); ?>