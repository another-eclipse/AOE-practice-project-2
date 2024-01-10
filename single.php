<?php
    get_header();
?>

<main>

<section class="page-title">
    <h1 id="contact-page-title"><?php echo get_field('page_title'); ?></h1>
</section>

<article class="posts">
<?php
   if(have_posts()) {
    while(have_posts()) {
        the_post();
        the_content();
    }
   }

?>



</article>



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