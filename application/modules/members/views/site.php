<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <?php if($this->ion_auth->logged_in()): ?>
        <?php $user = $this->ion_auth->user()->row(); ?>
        <?php if ( !empty($user)): ?>
        <?php //print_r($user); ?>
        <div class="panel panel-info" style="">
            <div class="panel-heading">
                <h3 class="panel-title"> <i class="fa fa-user"></i> User Profile<a href="<?php echo base_url('auth/edit_user') ?>/<?php echo $user->id; ?>" class="btn btn-sm btn-primary pull-right"><i class="fa fa-edit"></i> Edit Profile</a></h3>
            </div>

            <div class="panel-body" style="text-transform:capitalize">
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
            <!-- <div class="list-group">
                            <a href="<?php //echo base_url('members/') ?>" class="list-group-item">Tim</a>
                            <a href="<?php //echo base_url('members/') ?>" class="list-group-item">Turnamen</a>
                          </div>
 -->
        </div>
    </div>
    <?php endif; ?>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Dashboard Alumni</h3>
            </div>
            <div class="panel-body content">
                <?php 
                if(!empty($data)):
                   if(!empty($heading_data)){
                    echo "<h2>".$heading_data."</h2>";
                   }
                    echo $data;
                else:
                endif; 
              ?>
                <p>
                    <a href="<?php echo base_url('tracerstudy/mhs/')?>" class="btn btn-lg btn-success"><i class="fa fa-list"></i> Isi Formulir Tracer Study</a>
                    <a href="<?php echo base_url('keluhan/komplain/')?>" class="btn btn-lg btn-primary"><i class="fa fa-comment"></i> Keluhan</a>
                </p>
                <?php 
                  if(!empty($element)):
                    $this->load->view($element);
                  else:

                  endif; 
              ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>