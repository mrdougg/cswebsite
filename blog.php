<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Blog Posts</title>
  <?php define( 'WP_USE_THEMES', false ); get_header(); ?>
  
  
  
  
  </head>
<body>
 <?php  
get_header();
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;
get_sidebar();
get_footer(); 

?>
  
  <?php
 
$number_of_posts = 5;
$args = array( 'numberposts' => $number_of_posts );
$recent_posts = wp_get_recent_posts( $args );
foreach( $recent_posts as $recent_post ){
echo "<span>".$recent_post['post_date']."</span> <br>";
echo "<h3>".$recent_post['post_title']."</h3>";
echo  "<p>".$recent_post['post_content']."</p><br><br>";
 
}
 
?>
</body>
</html>