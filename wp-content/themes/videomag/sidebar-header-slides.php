<?php
/**
 * The Sidebar containing the main widget area
 */
?>

<?php if (is_active_sidebar('header-slides')) : ?>
    <div class="headervideos hidden-xs">
        <div class="custom-container">
            <div class="row">
                <?php dynamic_sidebar('header-slides'); ?>
            </div>
        </div>
    </div>
<?php endif; ?>