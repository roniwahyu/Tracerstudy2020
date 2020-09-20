<?php if (!$this->ion_auth->logged_in()):  ?>
<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
  <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(<?php echo themes_url('media/bg') ?>/bg-3.jpg);">
      <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
        <!-- <div class="kt-login__container"> -->
          <div class="kt-login__logo text-center">
            <a href="#">
              <img style="max-height: 80px;" src="<?php echo assets_url('images') ?>/kampusinovasi.png">   
            </a>
          </div>
          
          <hr style="margin:20px 20px;">
             <?php   if (!$this->ion_auth->logged_in()): ?>
              <h3 class="kt-login__title text-center">Login</h3>
            <?php 
                  if($this->session->userdata('sess_logged_in')==0){?>
                    <a href="<?=$google_login_url?>" class="btn btn-google btn-block btn-lg"><i class="socicon-google"></i> Login dengan Google</a>
                    
                  <?php }else{?>
                    <p>
                      
                    <h3 class="text-danger">Akun Anda belum diaktifkan, lakukan aktivasi akun melalui email Anda</h3>
                    <h5>Jika Anda tidak menemukan email kiriman kami, silakan periksa di folder SPAM</h5>
                    </p>

                    <a href="<?=base_url()?>logout" class="btn btn-google btn-block btn-lg"><i class="socicon-google"></i> Logout</a>
                  <?php }
                  ?>
                <?php endif; ?>
                  <!-- <br> -->
                  <!-- <a href="#" class="btn btn-facebook btn-lg btn-block"><i class="socicon-facebook"></i> Login dengan Facebook</a> -->
          <hr style="margin:20px 20px;">
         
        <!-- </div>   -->
      </div>
    </div>
  </div>  
</div>
<?php else: redirect('members','refresh') ?>

<?php endif; ?>