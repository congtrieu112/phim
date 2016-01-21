<?php
/**
 * The Sidebar containing the main widget area
 */
?>

<?php if (is_active_sidebar('footer-slides')) : ?>
    <div class="row">
        <?php dynamic_sidebar('footer-slides'); ?>
    </div>
<?php endif; ?>