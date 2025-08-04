<?php get_header(); ?>

<section class="neon-hero error-hero">
    <div class="hero-content">
        <h1 class="hero-title glitch" data-text="404">
            404
        </h1>
        <p class="hero-subtitle"><?php _e('Page lost in digital space', 'neon-core'); ?></p>
        <a href="<?php echo home_url(); ?>" class="neon-btn"><?php _e('Return Home', 'neon-core'); ?></a>
    </div>
</section>

<?php get_footer(); ?>
