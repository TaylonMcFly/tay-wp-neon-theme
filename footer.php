    </main>
    
    <footer class="neon-footer">
        <div class="footer-grid">
            <div class="footer-brand">
                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <h2 class="site-title"><?php bloginfo('name'); ?></h2>
                <?php endif; ?>
                <p class="tagline"><?php bloginfo('description'); ?></p>
                
                <div class="social-links">
                    <!-- YouTube -->
                    <a href="https://www.youtube.com/@taylon-mcfly" aria-label="YouTube">
                        <svg width="24" height="24"><path fill="currentColor" d="M10 15l5.19-3L10 9v6zm12-3c0-2.5-.2-4.33-.2-4.33s-.2-1.83-.81-2.64c-.78-1.03-1.65-1.04-2.06-1.1C16.26 3.67 12 3.67 12 3.67h-.04s-4.26 0-6.93.26c-.41.06-1.28.07-2.06 1.1-.61.81-.81 2.64-.81 2.64S2 9.5 2 12v.06c0 2.5.2 4.33.2 4.33s.2 1.83.81 2.64c.78 1.03 1.8 1 2.26 1.1 1.64.15 6.73.26 6.73.26s4.26 0 6.93-.26c.41-.06 1.28-.07 2.06-1.1.61-.81.81-2.64.81-2.64s.2-1.83.2-4.33V12z"/></svg>
                    </a>

                    <!-- GitHub -->
                    <a href="https://github.com/TaylonMcFly" aria-label="GitHub">
                        <svg width="24" height="24"><path fill="currentColor" d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2Z"/></svg>
                    </a>

                    <!-- Boosty -->
                    <a href="https://boosty.to/taylon" aria-label="Boosty">
                        <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M4.5 3h10.6c3.2 0 5.4 2.1 5.4 5 0 2.1-1.3 3.7-3.3 4.3v.1c2.5.4 4.3 2.1 4.3 4.8 0 3.2-2.4 5.8-6.3 5.8H4.5V3Zm5.1 6v3h4.5c1.2 0 1.9-.7 1.9-1.5s-.7-1.5-1.9-1.5H9.6Zm0 5v3h5.1c1.3 0 2-.8 2-1.5s-.7-1.5-2-1.5H9.6Z"/></svg>
                    </a>

                    <!-- Discord -->
                    <a href="https://discord.gg/KawCkCMQtR" aria-label="Discord">
                        <svg width="24" height="24" viewBox="0 0 245 240"><path fill="currentColor" d="M104.4 103.9c-5.7 0-10.2 5-10.2 11.1 0 6.2 4.6 11.1 10.2 11.1 5.7 0 10.2-5 10.2-11.1.1-6.1-4.5-11.1-10.2-11.1zm36.2 0c-5.7 0-10.2 5-10.2 11.1 0 6.2 4.6 11.1 10.2 11.1 5.7 0 10.2-5 10.2-11.1 0-6.1-4.5-11.1-10.2-11.1z"/><path fill="currentColor" d="M189.5 20h-134C24.5 20 15 29.5 15 41.3v157.3c0 11.8 9.5 21.3 21.3 21.3h113.2l-5.3-18.5 12.8 11.9 12.1 11.3 21.5 19V41.3c0-11.8-9.5-21.3-21.1-21.3zm-38.6 135s-3.6-4.3-6.6-8c13.1-3.7 18.1-12 18.1-12-4.1 2.7-8 4.6-11.5 5.9-5 2.1-9.8 3.5-14.4 4.3-9.5 1.8-18.2 1.3-25.7-.1-5.7-1.1-10.6-2.7-14.7-4.3-2.3-.9-4.8-2-7.4-3.5-.3-.2-.6-.3-.9-.5-.2-.1-.3-.2-.5-.3-2.3-1.3-3.5-2.2-3.5-2.2s4.8 8 17.5 11.8c-3 3.8-6.7 8.3-6.7 8.3-22.1-.7-30.5-15.2-30.5-15.2 0-32.2 14.4-58.3 14.4-58.3 14.4-10.8 28-10.5 28-10.5l1 1.2c-18 5.1-26.3 13.1-26.3 13.1s2.2-1.2 5.9-2.9c10.7-4.7 19.1-5.9 22.6-6.2.6-.1 1.1-.2 1.7-.2 6.1-.8 13-1 20.2-.2 9.5 1.1 19.7 3.9 30.1 9.5 0 0-7.9-7.5-24.9-12.6l1.4-1.6s13.6-.3 28 10.5c0 0 14.4 26.1 14.4 58.3 0 0-8.5 14.5-30.7 15.2z"/></svg>
                    </a>
                </div>

            </div>
            
            <div class="footer-widgets">
                <?php if (is_active_sidebar('footer-1')) : ?>
                    <?php dynamic_sidebar('footer-1'); ?>
                <?php endif; ?>
            </div>
            
            <div class="tech-stack">
                <h3>Powered By</h3>
                <ul>
                    <li>WebGL</li>
                    <li>Three.js</li>
                    <li>CSS Grid</li>
                    <li>WordPress 6.5+</li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | Neon Core v<?php echo NEON_CORE_VERSION; ?> by Taylon</p>
            <p>Designed for the future</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
