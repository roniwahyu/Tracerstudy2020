
<h2>Users</h2>

<?php 
    echo $this->session->flashdata('notify');

if(!empty(validation_errors())):
endif;

 echo form_open(site_url('users/' . $action),'role="form" class="form-horizontal" id="form_users" data-parsley-validate=""'); ?>        
<input type="hidden" class="form-control input-sm hidden" name="id" id="<?php echo !empty($users['id'])?$users['id']:'' ?>" value="<?php echo !empty($users['id'])?$users['id']:'' ?>">       
<div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-pencil-alt"></i> </div>
     
      <div class="panel-body">
         
                       
               <div class="form-group">
                   <label for="ip_address" class="col-sm-2 control-label">Ip Address</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'ip_address',
                                 'id'           => 'ip_address',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Ip Address',
                                 'maxlength'=>'45'
                                 ),
                                 set_value('ip_address',$users['ip_address'])
                           );             
                  ?>
                 <?php echo form_error('ip_address');?>
                </div>
              </div> <!--/ Ip Address -->
                          
               <div class="form-group">
                   <label for="username" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'username',
                                 'id'           => 'username',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Username',
                                 'maxlength'=>'100'
                                 ),
                                 set_value('username',$users['username'])
                           );             
                  ?>
                 <?php echo form_error('username');?>
                </div>
              </div> <!--/ Username -->
                          
               <div class="form-group">
                   <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'password',
                                 'id'           => 'password',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Password',
                                 'maxlength'=>'255'
                                 ),
                                 set_value('password',$users['password'])
                           );             
                  ?>
                 <?php echo form_error('password');?>
                </div>
              </div> <!--/ Password -->
                          
               <div class="form-group">
                   <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'email',
                                 'id'           => 'email',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Email',
                                 'maxlength'=>'254'
                                 ),
                                 set_value('email',$users['email'])
                           );             
                  ?>
                 <?php echo form_error('email');?>
                </div>
              </div> <!--/ Email -->
                          
               <div class="form-group">
                   <label for="activation_selector" class="col-sm-2 control-label">Activation Selector</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'activation_selector',
                                 'id'           => 'activation_selector',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Activation Selector',
                                 'maxlength'=>'255'
                                 ),
                                 set_value('activation_selector',$users['activation_selector'])
                           );             
                  ?>
                 <?php echo form_error('activation_selector');?>
                </div>
              </div> <!--/ Activation Selector -->
                          
               <div class="form-group">
                   <label for="activation_code" class="col-sm-2 control-label">Activation Code</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'activation_code',
                                 'id'           => 'activation_code',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Activation Code',
                                 'maxlength'=>'255'
                                 ),
                                 set_value('activation_code',$users['activation_code'])
                           );             
                  ?>
                 <?php echo form_error('activation_code');?>
                </div>
              </div> <!--/ Activation Code -->
                          
               <div class="form-group">
                   <label for="forgotten_password_selector" class="col-sm-2 control-label">Forgotten Password Selector</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'forgotten_password_selector',
                                 'id'           => 'forgotten_password_selector',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Forgotten Password Selector',
                                 'maxlength'=>'255'
                                 ),
                                 set_value('forgotten_password_selector',$users['forgotten_password_selector'])
                           );             
                  ?>
                 <?php echo form_error('forgotten_password_selector');?>
                </div>
              </div> <!--/ Forgotten Password Selector -->
                          
               <div class="form-group">
                   <label for="forgotten_password_code" class="col-sm-2 control-label">Forgotten Password Code</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'forgotten_password_code',
                                 'id'           => 'forgotten_password_code',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Forgotten Password Code',
                                 'maxlength'=>'255'
                                 ),
                                 set_value('forgotten_password_code',$users['forgotten_password_code'])
                           );             
                  ?>
                 <?php echo form_error('forgotten_password_code');?>
                </div>
              </div> <!--/ Forgotten Password Code -->
                          
               <div class="form-group">
                   <label for="forgotten_password_time" class="col-sm-2 control-label">Forgotten Password Time</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'forgotten_password_time',
                                 'id'           => 'forgotten_password_time',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Forgotten Password Time',
                                 'maxlength'=>'11'
                                 ),
                                 set_value('forgotten_password_time',$users['forgotten_password_time'])
                           );             
                  ?>
                 <?php echo form_error('forgotten_password_time');?>
                </div>
              </div> <!--/ Forgotten Password Time -->
                          
               <div class="form-group">
                   <label for="remember_selector" class="col-sm-2 control-label">Remember Selector</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'remember_selector',
                                 'id'           => 'remember_selector',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Remember Selector',
                                 'maxlength'=>'255'
                                 ),
                                 set_value('remember_selector',$users['remember_selector'])
                           );             
                  ?>
                 <?php echo form_error('remember_selector');?>
                </div>
              </div> <!--/ Remember Selector -->
                          
               <div class="form-group">
                   <label for="remember_code" class="col-sm-2 control-label">Remember Code</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'remember_code',
                                 'id'           => 'remember_code',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Remember Code',
                                 'maxlength'=>'255'
                                 ),
                                 set_value('remember_code',$users['remember_code'])
                           );             
                  ?>
                 <?php echo form_error('remember_code');?>
                </div>
              </div> <!--/ Remember Code -->
                          
               <div class="form-group">
                   <label for="created_on" class="col-sm-2 control-label">Created On</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'created_on',
                                 'id'           => 'created_on',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Created On',
                                 'maxlength'=>'11'
                                 ),
                                 set_value('created_on',$users['created_on'])
                           );             
                  ?>
                 <?php echo form_error('created_on');?>
                </div>
              </div> <!--/ Created On -->
                          
               <div class="form-group">
                   <label for="last_login" class="col-sm-2 control-label">Last Login</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'last_login',
                                 'id'           => 'last_login',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Last Login',
                                 'maxlength'=>'11'
                                 ),
                                 set_value('last_login',$users['last_login'])
                           );             
                  ?>
                 <?php echo form_error('last_login');?>
                </div>
              </div> <!--/ Last Login -->
                          
               <div class="form-group">
                   <label for="active" class="col-sm-2 control-label">Active</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'active',
                                 'id'           => 'active',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Active',
                                 'maxlength'=>'1'
                                 ),
                                 set_value('active',$users['active'])
                           );             
                  ?>
                 <?php echo form_error('active');?>
                </div>
              </div> <!--/ Active -->
                          
               <div class="form-group">
                   <label for="first_name" class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'first_name',
                                 'id'           => 'first_name',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'First Name',
                                 'maxlength'=>'50'
                                 ),
                                 set_value('first_name',$users['first_name'])
                           );             
                  ?>
                 <?php echo form_error('first_name');?>
                </div>
              </div> <!--/ First Name -->
                          
               <div class="form-group">
                   <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'last_name',
                                 'id'           => 'last_name',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Last Name',
                                 'maxlength'=>'50'
                                 ),
                                 set_value('last_name',$users['last_name'])
                           );             
                  ?>
                 <?php echo form_error('last_name');?>
                </div>
              </div> <!--/ Last Name -->
                          
               <div class="form-group">
                   <label for="company" class="col-sm-2 control-label">Company</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'company',
                                 'id'           => 'company',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Company',
                                 'maxlength'=>'100'
                                 ),
                                 set_value('company',$users['company'])
                           );             
                  ?>
                 <?php echo form_error('company');?>
                </div>
              </div> <!--/ Company -->
                          
               <div class="form-group">
                   <label for="phone" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'phone',
                                 'id'           => 'phone',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Phone',
                                 'maxlength'=>'20'
                                 ),
                                 set_value('phone',$users['phone'])
                           );             
                  ?>
                 <?php echo form_error('phone');?>
                </div>
              </div> <!--/ Phone -->
                          
               <div class="form-group">
                   <label for="oauth_provider" class="col-sm-2 control-label">Oauth Provider</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'oauth_provider',
                                 'id'           => 'oauth_provider',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Oauth Provider',
                                 'maxlength'=>'15'
                                 ),
                                 set_value('oauth_provider',$users['oauth_provider'])
                           );             
                  ?>
                 <?php echo form_error('oauth_provider');?>
                </div>
              </div> <!--/ Oauth Provider -->
                          
               <div class="form-group">
                   <label for="oauth_uid" class="col-sm-2 control-label">Oauth Uid</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'oauth_uid',
                                 'id'           => 'oauth_uid',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Oauth Uid',
                                 'maxlength'=>'50'
                                 ),
                                 set_value('oauth_uid',$users['oauth_uid'])
                           );             
                  ?>
                 <?php echo form_error('oauth_uid');?>
                </div>
              </div> <!--/ Oauth Uid -->
                          
               <div class="form-group">
                   <label for="gender" class="col-sm-2 control-label">Gender</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'gender',
                                 'id'           => 'gender',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Gender',
                                 'maxlength'=>'10'
                                 ),
                                 set_value('gender',$users['gender'])
                           );             
                  ?>
                 <?php echo form_error('gender');?>
                </div>
              </div> <!--/ Gender -->
                          
               <div class="form-group">
                   <label for="locale" class="col-sm-2 control-label">Locale</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'locale',
                                 'id'           => 'locale',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Locale',
                                 'maxlength'=>'10'
                                 ),
                                 set_value('locale',$users['locale'])
                           );             
                  ?>
                 <?php echo form_error('locale');?>
                </div>
              </div> <!--/ Locale -->
                          
               <div class="form-group">
                   <label for="avatar" class="col-sm-2 control-label">Avatar</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'avatar',
                                 'id'           => 'avatar',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Avatar',
                                 'maxlength'=>'100'
                                 ),
                                 set_value('avatar',$users['avatar'])
                           );             
                  ?>
                 <?php echo form_error('avatar');?>
                </div>
              </div> <!--/ Avatar -->
                          
               <div class="form-group">
                   <label for="picture" class="col-sm-2 control-label">Picture</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'picture',
                                 'id'           => 'picture',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Picture',
                                 
                                 ),
                                 set_value('picture',$users['picture'])
                           );             
                  ?>
                 <?php echo form_error('picture');?>
                </div>
              </div> <!--/ Picture -->
                          
               <div class="form-group">
                   <label for="picture_blob" class="col-sm-2 control-label">Picture Blob</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'picture_blob',
                                 'id'           => 'picture_blob',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Picture Blob',
                                 
                                 ),
                                 set_value('picture_blob',$users['picture_blob'])
                           );             
                  ?>
                 <?php echo form_error('picture_blob');?>
                </div>
              </div> <!--/ Picture Blob -->
                          
               <div class="form-group">
                   <label for="link" class="col-sm-2 control-label">Link</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'link',
                                 'id'           => 'link',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Link',
                                 'maxlength'=>'255'
                                 ),
                                 set_value('link',$users['link'])
                           );             
                  ?>
                 <?php echo form_error('link');?>
                </div>
              </div> <!--/ Link -->
                          
               <div class="form-group">
                   <label for="token" class="col-sm-2 control-label">Token</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'token',
                                 'id'           => 'token',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Token',
                                 
                                 ),
                                 set_value('token',$users['token'])
                           );             
                  ?>
                 <?php echo form_error('token');?>
                </div>
              </div> <!--/ Token -->
                          
               <div class="form-group">
                   <label for="salt" class="col-sm-2 control-label">Salt</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'salt',
                                 'id'           => 'salt',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Salt',
                                 'maxlength'=>'255'
                                 ),
                                 set_value('salt',$users['salt'])
                           );             
                  ?>
                 <?php echo form_error('salt');?>
                </div>
              </div> <!--/ Salt -->
                          
               <div class="form-group">
                   <label for="nik" class="col-sm-2 control-label">Nik</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'nik',
                                 'id'           => 'nik',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Nik',
                                 'maxlength'=>'255'
                                 ),
                                 set_value('nik',$users['nik'])
                           );             
                  ?>
                 <?php echo form_error('nik');?>
                </div>
              </div> <!--/ Nik -->
                          
               <div class="form-group">
                   <label for="norm" class="col-sm-2 control-label">Norm</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'norm',
                                 'id'           => 'norm',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Norm',
                                 'maxlength'=>'255'
                                 ),
                                 set_value('norm',$users['norm'])
                           );             
                  ?>
                 <?php echo form_error('norm');?>
                </div>
              </div> <!--/ Norm -->
                          
               <div class="form-group">
                   <label for="datetime" class="col-sm-2 control-label">Datetime</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'datetime',
                                 'id'           => 'datetime',                       
                                 'class'        => 'form-control input-sm ',
                                 'placeholder'  => 'Datetime',
                                 
                                 ),
                                 set_value('datetime',$users['datetime'])
                           );             
                  ?>
                 <?php echo form_error('datetime');?>
                </div>
              </div> <!--/ Datetime -->
                          
               <div class="form-group">
                   <label for="created" class="col-sm-2 control-label">Created</label>
                <div class="col-sm-6">                                   
                  <?php                  
                   echo form_input(
                                array(
                                 'name'         => 'created',
                                 'id'           => 'created',                       
                                 'class'        => 'form-control input-sm tanggal ',
                                 'placeholder'  => 'Created',
                                 
                                 ),
                                 set_value('created',$users['created'])
                           );             
                  ?>
                 <?php echo form_error('created');?>
                </div>
              </div> <!--/ Created -->
               
           
      </div> <!--/ Panel Body -->
    <div class="panel-footer">   
          <div class="row"> 
              <!-- <div class="col-md-10 col-sm-12 col-md-offset-2 col-sm-offset-0"> -->
              <div class="col-md-12 col-sm-12 col-lg-12 text-right">

                   <a href="<?php echo site_url('users'); ?>" class="btn btn-default">
                       <i class="fa fa-chevron-left"></i> Kembali
                   </a> 
                    <button type="submit" class="btn btn-primary" name="post">
                        <i class="fa fa-save"></i> Simpan 
                    </button>                  
              </div>
          </div>
    </div><!--/ Panel Footer -->       
</div><!--/ Panel -->
<?php echo form_close(); ?>  
