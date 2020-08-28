

<h2>Users</h2>

<?php 
    echo $this->session->flashdata('notify');

    if($users) :
?> 

<div class="table-responsive">
    <table id="detail" class="table table-striped table-condensed">
        <tbody>
        <?php     
            foreach($users as $table => $value) :    
        ?>
        <tr>
            <td width="20%" align="right"><strong><?php echo ucwords(str_replace("_"," ","$table")); ?></strong></td>
            <td><?php echo $value ?></td>
        </tr>
         <?php 
            endforeach;
         ?>
         </tbody>
    </table>
</div>


	<?php 
	
		echo anchor(site_url('users'), '<span class="fa fa-chevron-left"></span> Kembali', 'class="btn btn-sm btn-default"');
	
	?>


<br /><br />

<?php 
    endif;
?>

