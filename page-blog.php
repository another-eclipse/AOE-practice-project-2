<?php
    get_header();
?>

<main>

<section class="page-title">
    <h1 id="contact-page-title"><?php echo get_field('page_title'); ?></h1>
</section>

<section class="posts">
<?php

 $paged = get_query_var('paged') ? get_query_var('paged') : 1; 

$args = array(
'post_type' => 'post',  //Specyfying post type    
'posts_per_page' => 10,  //No. of posts to show     
'paged' => $paged       //For pagination
);

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();
    //To get ID of post
    $id = get_the_ID();    ?>      
    <a href="http://localhost:85/sdc/abc/?postid=<?php echo $id; ?>" style="color:#444444;"><?php the_title(); ?></a>
    <br> <?php
endwhile;
?>

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