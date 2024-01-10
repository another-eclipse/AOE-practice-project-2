<?php
    get_header();
?>

<main>

<section class="page-title">
    <h1 id="contact-page-title"><?php echo get_field('page_title'); ?></h1>
</section>

<section class="content">
    <h2><?php echo get_field('submission_subtitle'); ?></h2>
    <p><?php echo get_field('submission_text'); ?></p>
    <a href="<?php echo get_field('url'); ?>" class="acf-button"><?php echo get_field('url_label'); ?></a>
</section>




</main>

<?php
    get_footer();
?>