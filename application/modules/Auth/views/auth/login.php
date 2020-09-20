<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
  <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(<?php echo themes_url('media/bg') ?>/bg-3.jpg);">
      <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
        <!-- <div class="kt-login__container"> -->
          <div class="kt-login__logo text-center">
            <a href="#">
              <img style="max-height: 80px;" src="<?php echo assets_url('images') ?>/bbws-brantas-bondoyudo.png">   
            </a>
          </div>
          
          <hr style="margin:40px 20px;">
              <h3 class="kt-login__title text-center">Login with Social Media</h3>
            <?php 
                  if($this->session->userdata('sess_logged_in')==0){?>
                    <a href="<?=$google_login_url?>" class="btn btn-google btn-block btn-lg"><i class="socicon-google"></i> Login dengan Google</a>
                    
                  <?php }else{?>
                    <a href="<?=base_url()?>auth/logout" class="btn btn-google btn-block btn-lg"><i class="socicon-google"></i> Logout</a>
                  <?php }
                  ?>
                  <!-- <br> -->
                  <!-- <a href="#" class="btn btn-facebook btn-lg btn-block"><i class="socicon-facebook"></i> Login dengan Facebook</a> -->
          <hr style="margin:40px 20px;">

        
        <!-- </div>   -->
      </div>
    </div>
  </div>  
</div>

