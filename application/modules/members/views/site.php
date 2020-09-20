<div class="row">
    <?php 
      if($this->ion_auth->logged_in()): 
      $user = $this->ion_auth->user()->row(); 
        if (!empty($user)): ?>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="panel panel-info" style="">
            <div class="panel-heading">
                <h3 class="panel-title"> <i class="fa fa-user"></i> Profil Pengguna<a href="<?php echo base_url('auth/edit_user') ?>/<?php echo $user->id; ?>" class="btn btn-sm btn-primary pull-right"><i class="fa fa-edit"></i> Edit Profile</a></h3>
            </div>
            <div class="panel-body" style="text-transform:capitalize;padding-top:20px;">
                <!-- <div class="row clearfix">  -->
                <table class="table table-condensed table-striped">
                    <?php 
                      foreach (array('first_name','last_name','username', 'email','picture') as $field):
                        echo '<tr><th>' . ucfirst(str_replace("_"," ",$field)) . ':</th>';
                        if($field=='picture'){

                          echo '<td><img class="img-responsive" src="'.$user->$field.'" /></td></tr>';
                        }else{
                          echo '<td> ' . $user->$field . '</td></tr>';

                        }
                    
                      endforeach; ?>
                    <?php //print_r($mhs);

                            //print_r(userid()); ?>
                    <?php foreach ($mhs as $key => $value):
                              # code...
                              // echo '<tr><th>'.$key.'</th><td>'.$value[$key].'</td><tr>';
                              echo '<tr><th>'.$key.'</th><td>'.$value.'</td><tr/>';
                              endforeach;

                            ?>
                </table>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-graduation-cap"></i> Dashboard Alumni <a href="<?php echo base_url('auth/edit_user') ?>/<?php echo $user->id; ?>" class="btn btn-sm btn-primary pull-right"><i class="fa fa-edit"></i> Edit Profil Alumni</a></h3>
            </div>
            <div class="panel-body content" style="padding-top:20px;">
                <?php 
                if(!empty($data)):
                   if(!empty($heading_data)){
                    echo "<h2>".$heading_data."</h2>";
                   }
                    echo $data;
                
                endif; 
                if(!empty($user->nim)):?>
                <p>
                    <div class="btn-group btn-group-flex">
                        <a href="<?php echo base_url('tracerstudy/mhs/')?>" class="btn btn-lg btn-success"><i class="fa fa-list"></i> Isi Formulir Tracer Study</a>
                        <a href="<?php echo base_url('keluhan/komplain/')?>" class="btn btn-lg btn-primary"><i class="fa fa-comment"></i> Keluhan</a>
                    </div>
                </p>
                <?php else: ?>
                  <div class="alert alert-danger" role="alert">
                      <h4 class="alert-heading"><i class="fa fa-exclamation-triangle"></i> Anda belum melakukan klaim NIM!</h4>
                      
                  </div>
                  <h5>Alumni perlu melakukan klaim NIM Anda untuk dapat akses Tracer Study </h5><a href="#" class="btn btn-lg btn-info">Klik Disini untuk Klaim NIM</a>
                <?php endif;?>
                <?php 
                       $remote=base_url('members/klaimnim/');
                       $target="#modal-front .modal-body";
                       echo themodal('genmodal','<i class="fa fa-info-circle"></i> Detail Frontliner','modal-front','panel-success','lazur-bg','<i class="fa fa-info-circle"></i> Detail','btn-success btn-xs','modal-sm',$remote,$target); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>
</div>