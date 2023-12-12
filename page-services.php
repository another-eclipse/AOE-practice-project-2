<?php
    get_header();
?>

<main>

<section class="page-title">
    <h1><?php echo get_field('page_title'); ?></h1>
</section>

<section class="mini-menu">
    <div class="mini-menu-text">
        <?php foreach(get_field('services_repeater') as $item): ?>
            <div class="mini-menu-item">
                    <a href="#<?php echo $item['service_title'];?>"><?php echo $item['service_title']; ?></a> 
                    <span class="mini-menu-underline"></span>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="services">
    <div class="services-container">
        <?php foreach(get_field('services_repeater') as $item): ?>
            <div class="coaching-container" id="<?php echo $item['service_title']; ?>">
                <img src="<?php echo $item['service_image']; ?>" alt="">
                <h3><?php echo $item['service_headliner']; ?></h3>
                <h2><?php echo $item['service_title']; ?></h2>
                <p><?php echo $item['service_description']; ?></p>
                <a class="button" href="<?php echo $item['service_button']; ?>">Launch Assessment</a>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="service-banner">
    <div class="banner-container">
        <div>
            <h2><?php echo get_field('service_banner_title'); ?></h2>
            <p><?php echo get_field('service_banner_text'); ?></p>
        </div>
        <a href="<?php echo get_field('service_banner_button'); ?>" class="service-button">Launch Assessment</a>
    </div>
</section>





</main>

<?php
    get_footer();
?>