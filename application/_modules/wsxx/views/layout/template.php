<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset ($site_title)?$site_title.' | '.$this->config->item('site_title'):$this->config->item('site_title'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="<?php echo $this->config->item('meta_desc');?>" name="description" />
    <meta content="<?php echo $this->config->item('meta_key');?>" name="keywords" />
    <meta content="<?php echo $this->config->item('meta_author');?>" name="author" />

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/template.css?v=<?php echo time()?>" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css?v=<?php echo time()?>" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/select2.min.css?v=<?php echo time()?>" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/select2-bootstrap2.css?v=<?php echo time()?>" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-switch.min.css?v=3.3.2" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-switch.min.css?v=3.3.2" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>">WS Client</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php
                if ($this->session->userdata('login')) {
                    echo "<ul class=\"nav navbar-nav\">
                                <li class=\"dropdown\">
                                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-file\" aria-hidden=\"true\"></span> Import Data <span class=\"caret\"></span></a>
                                  <ul class=\"dropdown-menu\" role=\"menu\">
                                    <!--li><a href=\"".base_url()."ws_agama\">Agama</a></li>
                                    <li><a href=\"".base_url()."ws_bobot\">Bobot Nilai</a></li-->
                                    <li><a href=\"".base_url()."ws_mahasiswa\">Mahasiswa</a></li>
                                    <li><a href=\"".base_url()."ws_nilai\">Nilai Semester Mahasiswa</a></li>
                                    <li><a href=\"".base_url()."ws_akm\">Aktivitas Kuliah Mahasiswa</a></li>
                                    <!--li><a href=\"".base_url()."#\">Aktivitas Mengajar Dosen</a></li>
                                    <li><a href=\"".base_url()."ws_npindahan\">Nilai Mahasiswa Pindahan</a></li-->
                                    <!--li class=\"divider\"></li>
                                    <li><a href=\"#\">Separated link</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\">One more separated link</a></li-->
                                  </ul>
                                </li>
                                <li class=\"dropdown\">
                                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span> Epsbed <span class=\"caret\"></span></a>
                                  <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li><a href=\"".base_url()."epsbed_mahasiswa\">Mahasiswa</a></li>
                                    <li><a href=\"#\"-->Kelas Perkuliahan</a></li>
                                    <li><a href=\"#\">Mahasiswa Lulus / Drop Out</a></li>
                                    <!--li class=\"divider\"></li>
                                    <li><a href=\"#\">Separated link</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\">One more separated link</a></li-->
                                  </ul>
                                </li>
                                <li class=\"dropdown\">
                                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-th\" aria-hidden=\"true\"></span> Data Referensi <span class=\"caret\"></span></a>
                                  <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li><a href=\"".base_url()."ref_agama\">Data Agama</a></li>
                                    <li><a href=\"".base_url()."ref_kebutuhan\">Data Kebutuhan Khusus</a></li>
                                    <li><a href=\"".base_url()."ref_pekerjaan\">Data Pekerjaan</a></li>
                                    <li><a href=\"".base_url()."ref_penghasilan\">Data Penghasilan</a></li>
                                    <li><a href=\"".base_url()."ref_status\">Data Status Mahasiswa</a></li>
                                    <li><a href=\"".base_url()."ref_wilayah\">Data Wilayah</a></li>
                                    <!--li class=\"divider\"></li>
                                    <li><a href=\"#\">Separated link</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\">One more separated link</a></li-->
                                  </ul>
                                </li>
                                <li><a href=\"".base_url()."welcome/listtable\"><span class=\"glyphicon glyphicon-list\" aria-hidden=\"true\"></span> List Tabel</a></li>
                                <!--li><a href=\"#\">Tabel Data</a></li-->
                      </ul>";
                }
            ?>
          
          <ul class="nav navbar-nav navbar-right">
            <?php
                if ($this->session->userdata('login')) {
                    echo "<!--li><a href=\"".base_url()."welcome/token\">Generate Token</a></li-->
                          <li class=\"dropdown active\">
                              <!--a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                    ".$this->session->userdata('username')." on ".$this->session->userdata('ws')." <span class=\"caret\"></span>
                              </a-->
                              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                    <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> ".$this->session->userdata('username')." <span class=\"caret\"></span>
                              </a>
                              <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"".base_url()."welcome/token/".$this->uri->segment(1)."-".$this->uri->segment(2)."\"><span class=\"glyphicon glyphicon-random\" aria-hidden=\"true\"></span> Generate Token</a></li>
                                <li><a href=\"".base_url()."welcome/setting\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Setting</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"".base_url()."welcome/logout\"><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span> Logout</a></li>
                              </ul>
                          </li>";
                } else {
                    echo "<li><a href=\"".base_url()."ws\">Login</a></li>";
                }
            ?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container-fluid">
        <?php echo $view; ?>
    </div> <!-- /container -->
    
    <div class="footer navbar-default navbar-fixed-bottom">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-6"><small>Page rendered in <strong>{elapsed_time}</strong> seconds</small></div>
              <div class="col-md-6" align="right">
                  <?php if ($this->session->userdata('login')) { ?>
                  <!--span class="label label-danger">
                          <?php echo $this->session->userdata('username');?> | 
                          <?php echo $this->session->userdata('ws');?> | 
                          <span class="glyphicon glyphicon-lock" aria-hidden="true"></span> <a href="<?php echo base_url();?>welcome/logout">Logout</a>
                  </span-->
                  <?php
                        $temp_pecah = explode('/ws/', $this->session->userdata('ws'));
                        $temp_pecah2 = explode('.php?wsdl', $temp_pecah[1]);
                        //echo $temp_pecah[0];
                  ?>
                  <div class="btn-group btn-group-xs" role="group" aria-label="Switch Database">
                      <button type="button" id="btn_live" class="btn <?php echo $temp_pecah2['0']=='live'?"btn-success":"btn-default" ?>"  data-src="live" >Live <?php echo $temp_pecah2['0']=='live'?"(ON)":"(OFF)" ?></button>
                      <button type="button" id="btn_sandbox" class="btn <?php echo $temp_pecah2['0']=='sandbox'?"btn-danger":"btn-default" ?>"  data-src="sandbox" >Sandbox <?php echo $temp_pecah2['0']=='sandbox'?"(ON)":"(OFF)" ?></button>
                  </div>
                  <?php }?>
              </div>
          </div> 
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/js/jquery.js?v=<?php echo time()?>"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js?v=<?php echo time()?>"></script>
    <script src="<?php echo base_url();?>assets/js/back-to-top.js?v=<?php echo base_url();?>"></script>
    <script src="<?php echo base_url();?>assets/js/select2.full.min.js?v=<?php echo time()?>"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-switch.min.js?v=3.3.2"></script>
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
    </script>
    <script>
        $(document).ready(function(){
          $("[name='db_ws']").bootstrapSwitch();
          $('a.modalButton').click(function(){
            var src = $(this).attr('data-src');
            
            $('#isi').html('Loading, please wait...');
            $('#isi').load(src);
          });
        });
    </script>
    <script>
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

    </script>
    <script>
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
    </script>
    <script type="text/javascript">
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
    </script>
    <script type="text/javascript">
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
    </script>
    <script>
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
  </body>
</html>
