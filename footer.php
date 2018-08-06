<footer class="site-footer">

<nav class="site-nav">
        <?php 
            $args = array('theme_location' => 'seconds');
        ?>
        <?php wp_nav_menu($args); ?>
</nav>
<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
<?php wp_footer(); ?>
</footer>
</body>
</html>