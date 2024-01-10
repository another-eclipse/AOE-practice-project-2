<?php
    get_header();
?>

<main>

<section class="page-title">
    <h1 id="contact-page-title"><?php echo get_field('page_title'); ?></h1>
</section>

<section class="contact">
    <div class="contact-container">
        <div class="contact-text">
            <h2 class="to-be-hidden"><?php echo get_field('contact_title'); ?></h2>
            <p class="to-be-hidden"><?php echo get_field('contact_subtitle'); ?></p>
            <?php advanced_form( 'form_659c62cecb06d', array( 'redirect' => 'http://localhost/myzone/myzone/wordpress/thank-you/' ) ); ?>
        </div>
        <div class="contact-image to-be-hidden">
            <img src="<?php echo get_field('contact_image'); ?>" alt="">
        </div>
    </div>
</section>





</main>

<?php
    get_footer();
?>