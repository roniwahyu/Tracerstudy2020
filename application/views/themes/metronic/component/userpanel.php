<?php if ($this->ion_auth->logged_in()):
        $user = $this->ion_auth->user()->row(); ?>
<div class="kt-header__topbar-item kt-header__topbar-item--user">
    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
        <div class="kt-header__topbar-user">
            <span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
            <span class="kt-header__topbar-username">
                <?php echo $user->first_name; ?></span>
            <img class="kt-hidden" alt="Pic" src="<?php echo themes_url('media') ?>/users/300_25.jpg" />
            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
            <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">
                <?php echo substr($user->first_name,0,1); ?></span>
        </div>
    </div>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
        <!--begin: Head -->
        <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(<?= themes_url('media') ?>/misc/bg-1.jpg)">
            <div class="kt-user-card__avatar">
                <img class="kt-hidden" alt="Pic" src="<?= themes_url('media') ?>/users/300_25.jpg" />
                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">
                    <?= !empty($user->picture)?"<img class='img-responsive' src='".$user->picture."'>":substr($user->first_name,0,1) ?>
                    <?php //echo substr($user->first_name,0,1); ?></span>
            </div>
            <div class="kt-user-card__name">
                <?php echo $user->first_name." ".$user->last_name; ?>
            </div>
            <div class="kt-user-card__badge">
                <a href="<?php echo base_url('logout') ?>" class="btn btn-danger btn-sm btn-bold btn-font-md">Logout</a>
            </div>
        </div>
        <!--end: Head -->
        <!--begin: Navigation -->
        <div class="kt-notification">
            <a href="<?php echo base_url('members') ?>" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-calendar-3 kt-font-success"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title kt-font-bold">
                        My Profile
                    </div>
                    <div class="kt-notification__item-time">
                        Account settings and more
                    </div>
                </div>
            </a>
            <div class="kt-notification__custom">
                <a href="<?php echo base_url('auth/logout') ?>" target="" class="btn btn-label-brand btn-sm btn-bold">Sign Out</a>
            </div>
        </div>
        <!--end: Navigation -->
    </div>
</div>
<?php endif; ?>
<!--end: User bar -->