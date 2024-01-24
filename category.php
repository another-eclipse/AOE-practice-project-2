<?php
    get_header();
?>
<main>
<?php $category = get_query_var( 'category_name', 'No Category' ); ?>
<?php if ( is_category( $category ) ) : ?>
    
    <section class="page-title">
        <h1><?php echo the_category(); ?></h1>
    </section>

        <p><?php wp_list_categories(); ?></p>

    <section class="posts">
        <?php
            query_posts( array ( 'category_name' => $category, 'posts_per_page' => 6 ) );
            while ( have_posts() ) : the_post();
                $id = get_the_ID(); 
                
        ?>
                    <a href="http://localhost/myzone/myzone/wordpress/?p=<?php echo $id; ?>"><?php the_title(); ?></a>
                    <p><?php the_excerpt(); ?></p>
                    <br> 
                    <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>
        
    </section>

<?php endif; ?>



<section class="service-banner">
    <div class="banner-container">
        <div>
            <h2><?php echo get_field('bottom_banner_title'); ?></h2>
            <p><?php echo get_field('bottom_banner_text'); ?></p>
        </div>
        <a href="<?php echo get_field('bottom_banner_button'); ?>" class="service-button"><?php echo get_field('bottom_banner_label');?></a>
    </div>
</section>

</main>


<?php
    get_footer();
?>