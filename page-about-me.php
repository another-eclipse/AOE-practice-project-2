<?php
    get_header();
?>

<main>

<section class="page-title">
    <h1><?php echo get_field('page_title'); ?></h1>
</section>

<section class="text-and-image">
    <div class="text-container">
        <h2><?php echo get_field('text_title'); ?></h2>
        <p><?php echo get_field('text_body'); ?></p>
    </div>
    <div class="img-container">
        <img src="<?php echo get_field('side_image'); ?>" alt="">
    </div>
</section>

<section class="columns">
    <div class="columns-container">
        <h3><?php echo get_field('columns_headliner'); ?></h3>
        <h2><?php echo get_field('columns_title'); ?></h2>
        <div class="columns-text">
            <p><?php echo get_field('columns_text'); ?></p>
        </div>
    </div>
    <img src="<?php echo get_field('bottom_image'); ?>" alt="">
</section>

<section class="certification">
    <div class="cert-text-container">
        <h3><?php echo get_field('certificate_headliner'); ?></h3>
        <h2><?php echo get_field('certificate_title'); ?></h2>
        <p><?php echo get_field('certificate_text'); ?></p>
    </div>
    <div class="certs">
        <div class="single-cert">
            <?php foreach(get_field('certificate_repater') as $cert): ?>
                <h3><?php echo $cert['single_certificate_headliner']; ?></h3>
                <h2><?php echo $cert['single_certificate_title']; ?></h2>
                <div class="cert-text">
                    <img src="<?php echo $cert['single_certificate_image']; ?>" alt="">
                    <p><?php echo $cert['single_certificate_description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
    </div>
</section>

<section class="pic-and-text">
    <img src="<?php echo get_field('side_image_2'); ?>" alt="">
    <div class="text-container">
        <h2><?php echo get_field('text_title_2'); ?></h2>
        <p><?php echo get_field('text_body_2'); ?></p>
    </div>
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