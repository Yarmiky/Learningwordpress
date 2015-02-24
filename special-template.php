<?php
/*
Template Name: Special Layout
*/

get_header();

if(have_posts()):
   while(have_posts()) : the_post();?>
  <article class="post">
	<h2><?php the_title(); ?></h2>
	
	<!-- info-box -->
	<div class="info-box">
	
		<h4>Disclaimer Title</h4>
		<p> We do not object to you linking directly to the information that is hosted on our site 
		    and no prior permission is required for the same. However, we would like you to inform 
			us about any links provided to our site so that you can be informed of any changes or 
			updations therein. </p>
	
	
	</div><!-- info-box -->
	
	<?php the_content();?>
   </article>
   <?php endwhile;

	else :
		  echo '<p> No content found </p>';
	endif;


get_footer();

?>
