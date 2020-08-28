<style>
            #signature{
                width: 100%;
                height: 300px;
                border: 1px solid black;
            }
        </style>

        <!-- Signature area -->
        <div id="signature"></div><br/>


         <input type='button' id='click' value='click'>
        <form enctype="multipart/form-data" action="<?php echo base_url('signature/upload') ?>" method="POST">
		<textarea id='output' name="img"></textarea><br/>
		<input type="submit" value="Upload" />
		</form>

        <!-- Preview image -->
        <img src='' id='sign_prev' style='display: none;' />