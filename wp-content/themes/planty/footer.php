            </main>
        </div>

        <footer id="footer" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <?php
                wp_nav_menu([
                    'theme_location' => 'menu-footer',
                    'link_before' => '<span itemprop="name">',
                    'link_after' => '</span>',
                ]);
            ?>
        </footer>

    </div>

    <?php wp_footer(); ?>

</body>

</html>