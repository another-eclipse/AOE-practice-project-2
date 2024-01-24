<?php
    get_header();
?>

<main>

<section class="page-title">
    <h1><?php echo get_field('page_title'); ?></h1>
</section>

<span><?php wp_list_categories(); ?></span>

<section class="posts">
    <?php
        
        $args = array(
            'post_type' => 'post',

        );

        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
            //To get ID of post
            $id = get_the_ID(); 
    ?>
                <a href="http://localhost/myzone/myzone/wordpress/?p=<?php echo $id; ?>"><?php the_title(); ?></a>
                <p><?php the_excerpt(); ?></p>
                <br> 
                <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>
        

</section>



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