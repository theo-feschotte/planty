            </main>
        </div>

        <footer id="footer">
            <?php
                wp_nav_menu([
                    'theme_location' => 'menu-footer',
                    'container' => '',
                    'menu_class' => 'menu-list',
                ]);
            ?>
        </footer>

    </div>

    <?php wp_footer(); ?>

</body>

</html>