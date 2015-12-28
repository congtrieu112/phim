<?php
/**
 * The Sidebar containing the main widget area
 */
?>

<?php if (is_active_sidebar('footer-second')) : ?>
    <div class="row footerwidgets">
        <?php dynamic_sidebar('footer-second'); ?>
    </div>
<?php endif; ?>