

<meta>
<?php
wp_footer();

$footer_groups = get_field('footer_groups', 'options');
?>

<script type="module" >
  import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs'

  const swiper = new Swiper('.swiper', {
  autoplay: {
    delay: 5000,
  },
  loop: true,
  speed: 1000,
    spaceBetween: 100,
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
  },
});


</script>
</meta>

<section class="footer">
    <div class="footer-text">
    <?php foreach($footer_groups as $item): ?>
        <div class="footer-group">
            <p class="title"><?php echo $item['footer_group_title']; ?></p>
            <?php foreach($item['footer_group_links'] as $url): ?>
                <a href="<?php echo $url['link_url']; ?>"><?php echo $url['link_label']; ?></a>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
        <div class="footer-group socials">
            <a href="<?php echo get_field('facebook_link', 'options'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook_icon.png" alt="">
            </a>
        
    
            <a href="<?php echo get_field('instagram_link', 'options'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram_icon.png" alt="">
            </a>
        
            <a href="<?php echo get_field('linkedin_link', 'options'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png" alt="">
            </a>
        </div>
    </div>

    
</section>

<section class="bottom">
<div class="bottom-info">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/MZLogo-white.png" alt="">
        <div class="copyright-info">
            <p class="copyright"><a  href="<?php echo get_field('privacy_policy', 'options');?>">Privacy Policy</a></p>
            <p>|</p>
            <p class="copyright"><?php echo get_field('copyright', 'options');?></p>
        </div>
    </div>
</section>

</body>

</html>