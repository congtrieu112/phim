<?php
/**
 * The Sidebar containing featured videos on homepage
 */
?>

<?php if (is_active_sidebar('homepage-featured')) : ?>
    <div class="row">
        <?php dynamic_sidebar('homepage-featured'); ?>
    </div>
    <!-- Featured Sidebar End -->
<?php endif; ?>