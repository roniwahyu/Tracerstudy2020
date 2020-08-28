
<h2>Users</h2>

<?php 
    echo $this->session->flashdata('notify');
?>

<section class="panel panel-default">
    <header class="panel-heading">
        <div class="row">
          <div class="col-md-12 col-xs-12" style="margin-top: 10px;margin-bottom: 20px;">    

                   <?php

                       $remote=base_url('users/add/');
                       $target="#kt_modal_4 .modal-body";
                       
                       echo themodal('genmodal','<i class="fa fa-plus"></i> Tambah','kt_modal_4','panel-success','lazur-bg','<i class="fa fa-info-circle"></i> Tambah','btn-success btn-sm','modal-lg',$remote,$target); 
                       ?>            
                
            </div>
         
           
            </form> 
        </div>
    </header>
    
    
    <div class="panel-body">
         <?php if ($userss) : ?>
         <div class="container-fluid">
            <table id="datatables" class="table table-hover table-condensed table-striped table-responsive" style="width: 100%;display:table-cell" width="100%">
                
              <thead>
                <tr>
                  <th class="header">#</th>
                  
                      <th>Ip Address</th>   
                  
                      <th>Username</th>   
                  
                      <th>Password</th>   
                  
                      <th>Email</th>   
                  
                      <th>Activation Selector</th>   
                  
                      <th>Activation Code</th>   
                  
                      <th>Forgotten Password Selector</th>   
                  
                      <th>Forgotten Password Code</th>   
                  
                      <th>Forgotten Password Time</th>   
                  
                      <th>Remember Selector</th>   
                  
                      <th>Remember Code</th>   
                  
                      <th>Created On</th>   
                  
                      <th>Last Login</th>   
                  
                      <th>Active</th>   
                  
                      <th>First Name</th>   
                  
                      <th>Last Name</th>   
                  
                      <th>Company</th>   
                  
                      <th>Phone</th>   
                  
                      <th>Oauth Provider</th>   
                  
                      <th>Oauth Uid</th>   
                  
                      <th>Gender</th>   
                  
                      <th>Locale</th>   
                  
                      <th>Avatar</th>   
                  
                      <th>Picture</th>   
                  
                      <th>Picture Blob</th>   
                  
                      <th>Link</th>   
                  
                      <th>Token</th>   
                  
                      <th>Salt</th>   
                  
                      <th>Nik</th>   
                  
                      <th>Norm</th>   
                  
                      <th>Datetime</th>   
                  
                      <th>Created</th>   
                  
                  <th class="red header" align="right" width="120">Aksi</th>
                </tr>
              </thead>
              
              
              <tbody>
                  <tr><td colspan="2">Loading</td></tr>
              </tbody>
            </table>
          </div>
          <?php else: ?>
                <?php  echo notify('Data users belum tersedia','info');?>
          <?php endif; ?>
    </div>
    
    
    <div class="panel-footer">
        <div class="row">
          
        </div>
    </div>
</section>