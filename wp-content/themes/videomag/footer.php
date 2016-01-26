<!-- Footer Start -->
<footer<?php get_footer_style(); ?>>
    <div class="custom-container">
        <!-- Footer Videos Start -->
        <?php if (get_footer_slides()): ?>
            <?php get_sidebar('footer-slides'); ?>
        <?php else: ?>
            <?php get_sidebar('footer-widgets-layout'); ?>
        <?php endif; ?>
        <!-- Footer Videos End -->
        <hr />
        <?php get_sidebar('footer-second'); ?>
        <hr />
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-9 .col-xs-9">
                <p class="copyrights"><?php echo vm_get_option('vm-footer-text'); ?></p>
            </div>
            <?php if((bool)vm_get_option('vm-footer-social')): ?>
            <div class="col-lg-2 col-md-2 col-sm-3 .col-xs-3">
                <div class="socialnetworks">
                    <ul class="pull-right">
                        <li><a href="<?php echo vm_get_option('opt-social-facebook'); ?>" data-toggle="tooltip" title="Facebook" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?php echo vm_get_option('opt-social-youtube'); ?>" data-toggle="tooltip" title="Youtube" class="youtube"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="<?php echo vm_get_option('opt-social-twitter'); ?>" data-toggle="tooltip" title="Twitter" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?php echo vm_get_option('opt-social-vimeo'); ?>" data-toggle="tooltip" title="Vimeo" class="vimeo"><i class="fa fa-vimeo-square"></i></a></li>
                        <li><a href="<?php echo vm_get_option('opt-social-pinterest'); ?>" data-toggle="tooltip" title="Pinterest" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</footer>
<!-- Footer End --> 
<a href="#" class="pull-right gotop btn btn-primary backcolor"> <i class="fa fa-arrow-up"></i> </a>
</div>
<!-- Wrapper End -->
</div>
<?php wp_footer(); ?>
</body>
</html>