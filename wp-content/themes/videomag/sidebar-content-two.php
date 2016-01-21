<?php
/**
 * The Sidebar containing the content two sidebar
 */
?>

<?php if (is_active_sidebar('content-two')) : ?>
    <!-- Gray Sidebar Start -->
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalcol graysidebar">
        <?php dynamic_sidebar('content-two'); ?>
    </div>
    <!-- Gray Sidebar End -->
<?php endif; ?>