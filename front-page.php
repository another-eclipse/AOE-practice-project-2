<?php
    get_header();
?>

<main>

<section class="hero-section">

            <div class="hero-text-group">
                <h1><?php echo get_field('hero_title'); ?></h1>
                <p><?php echo get_field('hero_text'); ?></p>
                <a href="<?php echo get_field('hero_button_link'); ?>"><?php echo get_field('hero_button_title'); ?></a>
            </div>
            <div class="hero-container">
            <img src="<?php echo get_field('hero_image'); ?>" class="hero" alt="">
                <div class="badges">
                    <?php foreach(get_field('hero_badges') as $badge): ?>
                        <img src="<?php echo $badge; ?>" alt="">
                    <?php endforeach; ?>
                
                </div>
                <p class="signature"><?php echo get_field('hero_signature'); ?></p>
                </div>
        
</section>

</main>

<?php
    get_footer();
?>
