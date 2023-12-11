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
                <div class="hero-image-container">
                    <img src="<?php echo get_field('hero_image'); ?>" class="hero" alt="">
                </div>
                <div class="badges">
                    <?php foreach(get_field('hero_badges') as $badge): ?>
                        <img src="<?php echo $badge; ?>" alt="">
                    <?php endforeach; ?>
                
                </div>
                    <p class="signature"><?php echo get_field('hero_signature'); ?></p>
            </div>
</section>

<section class="introduction">
    <div class="introduction-image">
        <img src="<?php echo get_field('introduction_image'); ?>" alt="">
    </div>
    <div class="introduction-text-group">
        <div>
            <h3><?php echo get_field('introduction_headliner'); ?></h3>
        </div>
        <div>
            <h2><?php echo get_field('introduction_subtitle'); ?></h2>
        </div>
        <div>
            <p><?php echo  get_field('introduction_text'); ?></p>
        </div>
    </div>
</section>

<section class="mastery-services">
    <div class="mastery-services-text">
        <h2><?php echo get_field('mastery_services_title'); ?></h2>
        <p><?php echo get_field('mastery_services_subtitle'); ?></p>
    </div>
    <div class="mastery-services-repeater">
        <?php foreach(get_field('mastery_services_group') as $service): ?>
            <div class="container">
                <div>
                    <img src="<?php echo $service['mastery_service_image']; ?>" alt="">
                </div>
                <h4><?php echo $service['mastery_service_name']; ?></h4>
                <p><?php echo $service['mastery_service_description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="training-programs">
    <div class="training-programs-text">
        <h2><?php echo get_field('training_programs_title'); ?></h2>
        <p><?php echo get_field('training_programs_subtitle'); ?></p>
    </div>
    <div class="training-programs-repeater">
        <?php foreach(get_field('training_programs_group') as $service): ?>
            <div class="container">
                <div>
                    <img src="<?php echo $service['training_program_image']; ?>" alt="">
                </div>
                <h4><?php echo $service['training_program_name']; ?></h4>
                <p><?php echo $service['training_program_description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="first-banner">
    <div class="banner-text">
        <h3><?php echo get_field('first_banner_headliner'); ?></h3>
        <h2><?php echo get_field('first_banner_title'); ?></h2>
        <p><?php echo get_field('first_banner_description'); ?></p>
    </div>
    <div class="banner-image">
        <img src="<?php echo get_field('first_banner_image'); ?>" alt="">
    </div>
</section>

<section class="second-banner">
    <div class="banner-text">
        <h3><?php echo get_field('second_banner_headliner'); ?></h3>
        <h2><?php echo get_field('second_banner_title'); ?></h2>
        <p><?php echo get_field('second_banner_description'); ?></p>
    </div>
    <div class="banner-image">
        <img src="<?php echo get_field('second_banner_image'); ?>" alt="">
    </div>
</section>

<section class="middle-banner">
    <div class="bottom-text">
        <h3><?php echo get_field('middle_banner_headliner'); ?></h3>
        <h2><?php echo get_field('middle_banner_title'); ?></h2>
        <p><?php echo get_field('middle_banner_description'); ?></p>
    </div>
</section>

<section class="bottom-images">
    <?php 
        if(have_rows('bottom_images')) {
            $counter = 0; 
            while( have_rows('bottom_images') ) {
            the_row();
            $counter++;
            $class = ($counter % 2 == 0) ? 'even' : 'odd';
            if($class === 'even'){
    ?>
        <div class="<?php echo $class; ?>-container">
            <div class="<?php echo $class; ?>">
            <h3><?php the_sub_field('image_headliner'); ?></h3>
            <h2><?php the_sub_field('image_title'); ?></h2>
            <p><?php the_sub_field('image_text'); ?></p>
            </div>
            <img src="<?php the_sub_field('image'); ?>" alt="">
            
        </div>
    <?php
        } else {
    ?>
        <div class="<?php echo $class; ?>-container">
            <img src="<?php the_sub_field('image'); ?>" alt="">
            <div class="<?php echo $class; ?>">
            <h3><?php the_sub_field('image_headliner'); ?></h3>
            <h2><?php the_sub_field('image_title'); ?></h2>
            <p><?php the_sub_field('image_text'); ?></p>
            </div>
            
        </div>
    <?php
        }
        }
    }
    ?>
</section>

<section class="bottom-banner">
    <div class="bottom-text">
        <h2><?php echo get_field('bottom_banner_title'); ?></h2>
        <p><?php echo get_field('bottom_banner_text'); ?></p>
        <a href="<?php echo get_field('bottom_button_link'); ?>"><?php echo get_field('bottom_button_label'); ?></a>
    </div>
</section>

<section class="testimonials">
    <h2><?php echo get_field('testimonials_title'); ?></h2>
    <div class="swiper-container">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach(get_field('testimonials_repeater') as $item): ?>
                <div class="swiper-slide">
                    <p class="testimonial-text"><?php echo $item['testimonial_text']; ?></p>
                        <div class="author-info">
                            <p class="author"><?php echo $item['testimonial_author']; ?></p>
                            <p class="author-title"><?php echo $item['testimonial_author_title']; ?></p>   
                        </div>    
                </div>
                <?php endforeach; ?>
            </div>
            
            <div class="swiper-pagination"></div>
            
        </div>
        
    </div>
</section>

</main>

<?php
    get_footer();
?>
