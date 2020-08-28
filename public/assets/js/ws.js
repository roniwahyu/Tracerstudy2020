 <script>var base_url = '<?php echo base_url();?>'; </script>
    <script>
      $('#btn_sandbox').click(function () {
        var sandbox = $(this).attr('data-src');
        var uri = '<?php echo $this->uri->segment(1); ?>-<?php echo $this->uri->segment(2); ?>';
        var url = '<?php echo base_url().'welcome/set_koneksi/'; ?>';
        
        var temp_confirm = confirm('Anda yakin ingin mengubah jenis koneksi ke Webservice Feeder');
        if (temp_confirm==true) {
            $(location).attr('href',url+sandbox+'/'+uri);
        };
      })
      
      $('#btn_live').click(function () {
        var live = $(this).attr('data-src');
        var uri = '<?php echo $this->uri->segment(1); ?>-<?php echo $this->uri->segment(2); ?>';
        var url = '<?php echo base_url().'welcome/set_koneksi/'; ?>';
        var temp_confirm = confirm('Anda yakin ingin mengubah jenis koneksi ke Webservice Feeder');
        if (temp_confirm==true) {
            $(location).attr('href',url+live+'/'+uri);
        };
      })
 
        $(document).ready(function(){
          $("[name='db_ws']").bootstrapSwitch();
          $('a.modalButton').click(function(){
            var src = $(this).attr('data-src');
            
            $('#isi').html('Loading, please wait...');
            $('#isi').load(src);
          });
        });

        $('#myTabs a').click(function (e) {
          e.preventDefault()
          //$(this).tab('show')
          var url = $(this).attr("data-src");
          var href = this.hash;
          var pane = $(this);
          
          $(href).load(url,function(result) {
          //$('#isitab').load(url,function(result) {
            pane.tab('show');
          });
        });
        // load first tab content
        $('#tab-1').load($('.active a').attr("data-src"),function(result){
          $('.active a').tab('show');
        });


    $(document).ready(function() {
        $('#select-all').click(function(event) {
            if(this.checked) {
                $(':checkbox').each(function() {
                    this.checked = true;              
                });
            }else{
                $(':checkbox').each(function() {
                    this.checked = false;                      
                });        
            }
        });
       
    });

        $(document).ready(function() {
            $("#awal_masuk").select2({
                placeholder: "Tahun Masuk...",
            });
            $("#stat_mhs").select2({
                placeholder: "Awal Masuk sebagai?...",
            });
            $("#prodi").select2({
                placeholder: "Kode Program Studi...",
                minimumInputLength: 1,
                delay: 250,
                ajax: {
                    url: "<?php echo base_url();?>ajax/get_prodi",
                    dataType: 'json',
                    delay: 20,
                    data: function (cari) {
                        return {
                            q: cari.term
                        };
                    },
                    
                    processResults: function (data) {
                        return {
                            results: $.map(data, function(obj) {
                                return { 
                                    id: obj.KDPSTMSPST, 
                                    text: obj.KDPSTMSPST+' '+obj.NMPSTMSPST
                                    //text: obj.KDPSTMSPST+' '+obj.NMPSTMSPST+' ('+obj.NMKODTBKOD+')'
                                };
                            })
                        };
                    },
                    cache: true
                },
            });
        });        

        $(document).ready(function() {
            $("#btn").click(function(){
                var kd_mhs = [];
                var temp;
                //var modal = $(this);
                $.each($("input[name='kd_mhs']:checked"), function(){            
                    kd_mhs.push($(this).val());
                });
                temp = kd_mhs.join("-")
                alert("My favourite sports are: " + temp);
                
            });
        });

        $(document).ready(function(){
            /*$("#myFRM").submit(function() {
                return false;
            })*/

            $("#btn_filter").click(function(){
                epsbedmhs_filter();
                return false;
            });

            $("#btn_eksport").click(function(){
                epsbedmhs_kirim();
                return false;
            });
            
            function epsbedmhs_filter() {
                var prodi = $("#prodi").val();
                var stat_mhs = $("#stat_mhs").val();
                var awal_masuk = $("#awal_masuk").val();
                //var cari = $("#cari").val();
                //alert(prodi+" "+stat_mhs+" "+awal_masuk);
                var url = '<?php echo base_url();?>epsbed_mahasiswa/filter/'+prodi+'/'+stat_mhs+'/'+awal_masuk;

                $("#loading").html("<i class=\"fa fa-spinner fa-spin\"></i> Loading data, please wait...");
                $.get(url, function(returnData) {
                  if (!returnData) {
                      $("#isi").html("<tr><td colspan=\"9\">Tidak ada data</td></tr>");
                      $("#loading").hide();
                      $('#pesan').hide();
                  } else {
                      $("#isi").html(returnData);
                      $("#loading").hide();
                      $('#pesan').hide();
                  }
                    
                });
            }

            function epsbedkelas_filter() {
                var prodi = $("#prodi").val();
                var stat_mhs = $("#stat_mhs").val();
                var awal_masuk = $("#awal_masuk").val();
                //var cari = $("#cari").val();
                //alert(prodi+" "+stat_mhs+" "+awal_masuk);
                var url = '<?php echo base_url();?>epsbed_mahasiswa/filter/'+prodi+'/'+stat_mhs+'/'+awal_masuk;

                $("#loading").html("<i class=\"fa fa-spinner fa-spin\"></i> Loading data, please wait...");
                $.get(url, function(returnData) {
                  if (!returnData) {
                      $("#isi").html("<tr><td colspan=\"9\">Tidak ada data</td></tr>");
                      $("#loading").hide();
                      $('#pesan').hide();
                  } else {
                      $("#isi").html(returnData);
                      $("#loading").hide();
                      $('#pesan').hide();
                  }
                    
                });
            }

            function epsbedmhs_kirim() {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url();?>epsbed_mahasiswa/insert/',
                    //data: new FormData(this),
                    //mimeType: 'multipart/form-data',
                    //contentType: false,
                    //cache: false,
                    //processData:false,
                    data:$("#myFRM").serialize(),
                    beforeSend:function()
                    {
                        $("#pesan").hide();
                        $("#loading").html('<i class=\"fa fa-spinner fa-spin\"></i> Processing data, please wait...');
                        $("#loading").show();
                    },
                    complete:function()
                    {
                        $("#loading").hide();
                        //$("#loading").empty();
                        $("#pesan").show();
                    },
                    error: function()
                    {
                        $('#pesan').html('Error, unknown');
                    },
                    success: function(data)
                    {
                        $("#pesan").html(data);
                    }
                })
            }

            function epsbedkelas_kirim() {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url();?>epsbed_kelas/insert/',
                    //data: new FormData(this),
                    //mimeType: 'multipart/form-data',
                    //contentType: false,
                    //cache: false,
                    //processData:false,
                    data:$("#myFRM").serialize(),
                    beforeSend:function()
                    {
                        $("#pesan").hide();
                        $("#loading").html('<i class=\"fa fa-spinner fa-spin\"></i> Processing data, please wait...');
                        $("#loading").show();
                    },
                    complete:function()
                    {
                        $("#loading").hide();
                        //$("#loading").empty();
                        $("#pesan").show();
                    },
                    error: function()
                    {
                        $('#pesan').html('Error, unknown');
                    },
                    success: function(data)
                    {
                        $("#pesan").html(data);
                    }
                })
            }
        })
    </script>
    <div class="modal fade modal-wide" id="modalku" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myLargeModalLabel">View</h3>
                </div>
                <div class="modal-body">
                    <!--iframe frameborder="0"></iframe-->
                    <div id="isi"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>