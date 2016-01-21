<?php
/**
 * The Sidebar containing the content one sidebar
 */
?>

<?php if (is_active_sidebar('content-one')) : ?>
    <!-- Dark Sidebar Start -->
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 equalcol blacksidebar">
        <?php dynamic_sidebar('content-one'); ?>
    </div>
    <!-- Dark Sidebar End -->
<?php endif; ?>