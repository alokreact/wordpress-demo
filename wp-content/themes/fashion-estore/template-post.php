<?php 
   //Template Name:Foods

   get_header();

?>

<?php 
   // $paged = get_query_var('paged')?get_query_var('paged'):1;

   // $args = array(

   //    'product_cat'=>'fashion',
   //    'category_name'=>'fashion',
   //    'post_type'=>'product',
   //    'post_status'=>'publish',
   //    'post_per_page'=>5,
   //    'paged'=>$paged

   // );

   // $posts = new WP_Query($args);

   // echo "<pre>";
   // print_r($posts);
   ?>

   <div class="container">
         <div class="row">

               <div class="col-md-7">
               </div>
                  <?php 
                     $terms = get_terms('product_cat');
                     //echo "<pre>";
                     //print_r($terms);
                  ?>
               <div class="col-md-5">

               <ul class="category-list" style="list-style:none; paddding:5px; ">
                  <?php foreach($terms as $term ){?> 
                  
                     <li> <a href="<?php echo get_category_link($term->term_id);?>"><?php echo $term->name; ?></a></li>

                  <?php }?>
               </ul>
               </div>

         </div>
   </div>