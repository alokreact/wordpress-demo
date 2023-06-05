<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fashion Estore
 */

get_header(); ?>

    <div id="skip-content" class="container">
        <div class="row">
             <div id="primary" class="content-area <?php echo is_active_sidebar('sidebar') ? "col-lg-9 col-md-8" : "col-lg-12"; ?>">
                <main id="main" class="site-main">
                    <div class="row">
                        <?php if (have_posts()) : if (is_home() && !is_front_page()) : ?>
                            <header>
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </header>
                            <?php

                            endif;

                            /* Start the Loop */
                            while (have_posts()) :
                                the_post();

                                /*
                                 * Include the Post-Type-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                 */
                                get_template_part('template-parts/content', get_post_type());

                            endwhile;

                            the_posts_navigation();

                            else :

                                get_template_part('template-parts/content', 'none');

                            endif;
                        ?>
                    </div>
                </main>
            </div>

            <?php 
       $cat = get_categories();

    //    echo "<pre>";
    //    print_r($cat);

       $categories = get_terms([
        'taxonomy' => 'category'
    ]);

    $categories = get_terms( ['taxonomy' => 'product_cat'] );

// Getting a visual raw output
//echo '<pre>'; print_r( $categories ); echo '</pre>';
    // echo "<pre>";
    //    print_r($categories);

    $terms = get_terms('product_cat');

    echo "<pre>";
    print_r($terms);
    ?>

            <?php 
            //get_sidebar(); 
             dynamic_sidebar('fashion-estore-footer3')
            
            ?>
        </div>
    </div>

<?php 
if ( is_home() ) :
get_footer('fashion-estore-footer2');
else:
get_footer('fashion-estore-footer3');
endif;
?>