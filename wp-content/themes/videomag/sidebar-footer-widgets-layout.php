<?php
/**
 * The Sidebar containing the main widget area
 */
?>

<?php if (is_active_sidebar('footer-widgets-layout')) : ?>
    <div class="row">
        <?php dynamic_sidebar('footer-widgets-layout'); ?>
    </div>
<?php endif; ?>