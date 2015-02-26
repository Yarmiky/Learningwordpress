<?php

get_header();

if(have_posts()):

   
   
   
   ?>

   <h2> <?php
   
     if ( is_category()) {
		 single_cat_title();
	 } elseif ( is_tag()) {
		 single_tag_title();
	 } elseif ( is_author()) {
		 the_post();
		 echo 'Author Archives:' . get_the_author();
		 rewind_posts();
	 } elseif ( is_day()){
		 echo 'Daily archive:' . get_the_date();
	 } elseif (is_month()) {
		echo 'Monthly archive:' . get_the_date('F,Y');
	 } elseif ( is_year()) {
		 echo 'Yearly archive:' . get_the_date('Y');
	 } else {
		 echo 'Archives:';
	 }
   
   
   
   
   ?> </h2>
   
   <?php
   while(have_posts()) : the_post();?>
  <article class="post">
	<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
	
	<p class="post-info">
			<?php the_time('F jS, Y g: i a')?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"> <?php the_author()?> </a> | posted in

            <?php
			
			$categories = get_the_category();
			$seperator = ", ";
			$output = '';
			
			if($categories){
				
				foreach($categories as $category) {

				$output .='<a href="'. get_category_link($category->term_id) .'">' . $category->cat_name . '</a>'  . $seperator;
				
				}
				echo trim($output,$seperator);
			}
			
			?>

			</p>
	
	<?php the_excerpt();?>
   </article>
   <?php endwhile;

	else :
		  echo '<p> No content found </p>';
	endif;


get_footer();

?>
