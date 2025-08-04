<?php get_header(); ?>

<section class="neon-hero">
    <div class="hero-content">
        <h1 class="hero-title glitch" data-text="<?php esc_attr_e('Nothing to see here', 'neon-core'); ?>">
            <?php _e('hello world', 'neon-core'); ?>
        </h1>
        <p class="hero-subtitle"><?php _e('Experience the next generation of web', 'neon-core'); ?></p>
        
        <div class="hero-cta">
            <button class="neon-btn pulse"><?php _e('Explore', 'neon-core'); ?></button>
            <button class="neon-btn outline"><?php _e('View Source', 'neon-core'); ?></button>
        </div>
    </div>
    
    <div class="particles-container" id="particles-js"></div>
</section>

<section class="content-grid">
    <?php if (have_posts()) : ?>
        <div class="posts-container">
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('neon-card'); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="card-media">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="card-content">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="post-meta">
                            <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                        </div>
                        <div class="excerpt"><?php the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="read-more"><?php _e('Read more', 'neon-core'); ?></a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <div class="no-content">
            <h2><?php _e('No posts found', 'neon-core'); ?></h2>
            <p><?php _e('Try searching for something else', 'neon-core'); ?></p>

            <div class="search-form"><?php get_search_form(); ?></div>
        </div>
    <?php endif; ?>
    
    <aside class="ai-sidebar">
        <div class="ai-widget">
            <h3><?php _e('AI Suggestions', 'neon-core'); ?></h3>
            <div class="ai-content" id="ai-recommendations">
                <!-- AI-generated content will appear here -->
            </div>
        </div>
    </aside>
</section>

<?php get_footer(); ?>
