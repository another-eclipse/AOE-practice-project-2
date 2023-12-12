<?php
    get_header();
?>

<main>

<section class="page-title">
    <h1><?php echo get_field('page_title'); ?></h1>
</section>

<section class="resources">
    <?php foreach(get_field('resource_repeater') as $field): ?>
    <div class="resource-container">
        <h2 class="resource-title"><?php echo $field['resource_title']; ?></h2>
        <?php foreach($field['second_resource_repeater'] as $subfield): ?>
        <div class="resource-list">
            <?php if($subfield['resource_subtitle'] !== ''): ?>
            <p class="list-subtitle"><?php echo $subfield['resource_subtitle']; ?></p>
            <?php endif; ?>
            <div class="list">
                <div class="works">
            <?php foreach($subfield['third_resource_repeater'] as $item): ?>
                <p>
                    <?php echo $item['work_title']; ?>
                </p>
            <?php endforeach; ?>
                </div>
                <div class="authors">
            <?php foreach($subfield['third_resource_repeater'] as $item): ?>
                <p>
                    - <?php echo $item['work_author']; ?>
                </p>
                
            <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
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