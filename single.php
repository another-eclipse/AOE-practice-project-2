<?php
    get_header();
    $id = get_the_ID();
    $author = get_the_author_meta('display_name', get_post_field('post_author', $id));
    $cat = get_the_category();
    $category_name = $cat[0]->cat_name; 
?>

<main>

<section class="page-title">
    <h1>Blog</h1>
</section>

<section class="posts-container">
    <article class="posts">
        <?php
            if(have_posts()) : ?> 
                <h3>
                    <?php echo $category_name; ?> —
                    <?php echo get_the_date('m-d'); ?> BY
                    <?php echo $author; ?>
                </h3>
                <h2><?php the_title(); ?></h2>
                <div class="post-content"> <?php the_content(); ?> </div>
            <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </article>
<p class="tags">Tags: <?php the_tags(' ', '', ''); ?></p>
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