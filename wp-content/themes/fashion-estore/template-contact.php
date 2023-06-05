<?php 
//Template Name:contact us
?>
<?php get_header('shop'); ?>
 
<div class="container">
<?php the_excerpt();?>   
   
    <div class="row">
          
    <div class="col-md-8"> <img src="<?php echo get_template_directory_uri()?>/assets/img/map.png" alt="map"></div>
    <div class="col-md-4"><?php dynamic_sidebar('sidebar'); ?></div>
</div>

</div>