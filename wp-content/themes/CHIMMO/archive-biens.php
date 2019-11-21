<?php
/* Template Name: ArchiveBiens */
$query = new WP_Query( array( 'post_type' => 'biens' ) );

get_header();
if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
the_title();
echo '<div class="entry-content">';
the_content();
echo '</div>';
endwhile; endif;
get_footer();
?>