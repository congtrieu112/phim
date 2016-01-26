<?php if ((bool) vm_get_option('vm-header-social')): ?>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="loginsec pull-right">
                            <?php if (!is_user_logged_in()) :  ?>
                            <a href="<?php print home_url(); ?>/login" class="colorhover"><i class="fa fa-lock"></i>Login</a>
                            <a href="<?php print home_url(); ?>/register" class="colorhover"><i class="fa fa-sign-in"></i>Sign Up</a>
                            <?php else : ?>
                            <a href="<?php print home_url(); ?>/profile" class="colorhover"><i class="fa fa-pencil-square-o"></i>Information</a>
                            <a href="<?php echo wp_logout_url(home_url() ); ?>" class="colorhover"><i class="fa fa-sign-in"></i>Exit</a>
                            <?php endif; ?>
                            
                        </div>
        <div class="socialnetworks" style="display:none">
            <ul class="pull-right">
                <!--html user-->
                <li>
                    <a href="<?php echo vm_get_option('opt-social-facebook'); ?>" data-toggle="tooltip" title="Facebook" data-placement="bottom" class="facebook">
                        <i class="fa fa-facebook fa-2x"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo vm_get_option('opt-social-youtube'); ?>" data-toggle="tooltip" title="Youtube" data-placement="bottom" class="youtube">
                        <i class="fa fa-youtube fa-2x"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo vm_get_option('opt-social-twitter'); ?>" data-toggle="tooltip" title="Twitter" data-placement="bottom" class="twitter">
                        <i class="fa fa-twitter fa-2x"></i>
                    </a>
                </li>
                
                <!--end html user-->
                
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