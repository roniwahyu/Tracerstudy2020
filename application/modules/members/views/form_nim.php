<form action="<?php echo base_url('members/klaimnim') ?>" method="POST" id="formnim">
    <div class="form-group text-center">
        <label for="nim">KLAIM NIM</label>
        <input id="nim" name="nim" class="form-control form-control-lg text-center" type="text" placeholder="00000000">
        <small id="nimhelp" class="form-text text-danger">Klaim NIM hanya dapat dilakukan 1x. Pastikan NIM Anda sudah benar. Anda tidak dapat merubah NIM setelah di klaim</small>
    </div>
    <button type="submit" class="btn btn-primary btn-block" name="submit" id="submit">Submit</button>
</form>
<script type="text/javascript">
var send = "<?php echo base_url('members/klaimnim') ?>";
// CommonJS
// const Swal = require('sweetalert2');

$("#formnim").submit(function(e) {
    e.preventDefault();

    

Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
});
 
</script>