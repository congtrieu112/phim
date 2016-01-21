<?php if ((bool) vm_get_option('vm-header-social')): ?>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
        <div class="socialnetworks">
            <ul class="pull-right">
                <li>
                    <a href="<?php echo vm_get_option('opt-social-facebook'); ?>" data-toggle="tooltip" title="Facebook" data-placement="bottom" class="facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo vm_get_option('opt-social-youtube'); ?>" data-toggle="tooltip" title="Youtube" data-placement="bottom" class="youtube">
                        <i class="fa fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo vm_get_option('opt-social-twitter'); ?>" data-toggle="tooltip" title="Twitter" data-placement="bottom" class="twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo vm_get_option('opt-social-vimeo'); ?>" data-toggle="tooltip" title="Vimeo" data-placement="bottom" class="vimeo">
                        <i class="fa fa-vimeo-square"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo vm_get_option('opt-social-pinterest'); ?>" data-toggle="tooltip" title="Pinterest" data-placement="bottom" class="pinterest">
                        <i class="fa fa-pinterest"></i>
                    </a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Social Network End -->
<?php endif; ?>