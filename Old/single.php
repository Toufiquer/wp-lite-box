 
<?php
get_header();
/* Start the Loop */
while (have_posts()) : the_post();
echo "Single";
the_title(); 
the_post_thumbnail();
the_content();
endwhile; // End of the loop.
get_footer();