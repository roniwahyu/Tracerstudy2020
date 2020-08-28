<div class="box box-primary">
    <div class="col-sm-12 col-md-12">
        <div class="row">
        <hr>
    <div class="box-header">
        <center><h1 class="box-title"><b>DAFTAR UMKM</b></h1></center>
    </div><!-- /.box-header -->
    <hr>
        <!-- form start -->
        <form action="http://geraiumkm.com/daftarumkm/index" method="post" accept-charset="utf-8" enctype="multipart/form-data">            <div id="notifications"></div> 
            
                <div class="col-lg-6">
                <!-- <div class="box-body"> -->
                    <div class="form-group">
                        <label>Nama Pengusaha</label>
                        <input type="text" class="form-control" placeholder="Nama Pengusaha" name="nama_pengusaha" required="required">
                    </div>
                    <div class="form-group">
                        <label>Nama Usaha</label>
                        <input type="text" class="form-control" placeholder="Nama Usaha / Brand" name="nama_perusahaan" required="required">
                    </div>
                    <div class="form-group">
                        <label>No. Identitas (KTP)</label><br>
                        <span><i>* Di isi setelah angka tiga</i></span>
                         <input type="text" style="position: absolute; left: 80px;  width: 450px;" class="form-control" placeholder="No. KTP" name="no_identitas_ktp" required="required"><input type="text" style="position: absolute; left: 10px; width: 70px; height: 35px;" class="form-control" placeholder="3-" readonly="">
                    </div><br><br>
                    <div class="form-group">
                        <label>No. NPWP</label>
                        <input type="number" class="form-control" placeholder="No. NPWP" name="npwp">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kategori Usaha</label>
                        <select class="form-control" type="text" name="nama_kategori" required="required">
                        <option></option>
                        <option>Agribisnis</option>
                        <option>Makanan</option>
                        <option>Minuman</option>
                        <option>Makanan dan Minuman</option>
                        <option>Fashion</option>
                        <option>Craft</option>
                        <option>Aksesoris</option>
                        <option>Bordir</option>
                        <option>Jasa Salon</option>
                        <option>Batik</option>
                        <option>Mebel</option>
                        <option>Konveksi</option>
                        <option>Kuliner</option>
                        <option>Obat-Obatan</option>
                        <option>Industri</option>
                        <option>Dekorasi</option>
                        <option>Garmen</option>
                        <option>Toko atau Retail</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sektor Usaha</label>
                        <select class="form-control" type="text" name="sektor_usaha" required="required">
                        <option></option>
                        <option>Pertanian, kehutanan dan perikanan</option>
                        <option>Pertambangan dan Penggalian</option>
                        <option>Industri Pengolahan</option>
                        <option>Pengadaan Listrik dan Gas</option>
                        <option>Pengadaan Air, Pengadaan Sampah, Limbah dan Daur Ulang </option>
                        <option>Konstruksi</option>
                        <option>Perdagangan Besar dan Eceran-Rep Mobil dan Motor</option>
                        <option>Transportasi dan Pergudangan</option>
                        <option>Penyediaan Akomodasi dan Makan Minum</option>
                        <option>Informasi dan Komunikasi</option>
                        <option>Jasa Keuangan dan Asuransi</option>
                        <option>Real Estate</option>
                        <option>Jasa Perusahaan</option>
                        <option>Adm Pemerintahan, Pertahanan dan Jaminan Sosial</option>
                        <option>Jasa Pendidikan</option>
                        <option>Jasa Kesehatan dan Kegiatan Sosial</option>
                        <option>Jasa Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tahun Daftar</label>
                        <input type="number" class="form-control" placeholder="Tahun Daftar" name="tahun_daftar">
                    </div>
                    <div class="form-group">
                        <label>Bentuk Usaha</label>
                        <!-- <input type="text" class="form-control" placeholder="Bentuk Perusahaan" name="bentuk_perusahaan"> -->
                        <select class="form-control" type="text" name="bentuk_perusahaan" required="required">
                        <option></option>
                        <option>PT</option>
                        <option>Koperasi</option>
                        <option>CV</option>
                        <option>Perorangan</option>
                        <option>Lainnya</option>
                    </select>
                        <!-- <span><i>* PT / CV / Perorangan / ...</i></span> -->
                    </div>
                    <div class="form-group">
                        <label>Pendidikan</label>
                        <select class="form-control" type="text" name="pendidikan" required="required">
                        <option></option>
                        <option>SD</option>
                        <option>SMP</option>
                        <option>SMA</option>
                        <option>D1</option>
                        <option>D3</option>
                        <option>S1</option>
                        <option>S2</option>
                        <option>S3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jalan (Alamat)</label>
                        <textarea type="text" class="form-control" placeholder="Nama Jalan" name="jalan" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan" required="required">
                    </div>
                    <div class="form-group">
                        <label>Kelurahan / Desa</label>
                        <input type="text" class="form-control" placeholder="Kelurahan / Desa" name="kel_desa" required="required">
                    </div>
                    <div class="form-group">
                        <label>Kota / Kabupaten</label>
                        <select type="text" class="form-control" name="kab_kota" required="required">
                        <option></option>
                        <option>Kab. Pangandaran</option>
                        <option>Kab. Bogor</option>
                        <option>Kab. Sukabumi</option>
                        <option>Kab. Cianjur</option>
                        <option>Kab. Bandung</option>
                        <option>Kab. Bandung  Barat</option>
                        <option>Kab. Sumedang</option>
                        <option>Kab. Garut</option>
                        <option>Kab. Tasikmalaya</option>
                        <option>Kab. Ciamis</option>
                        <option>Kab. Kuningan</option>
                        <option>Kab. Cirebon</option>
                        <option>Kab. Majalengka</option>
                        <option>Kab. Indramayu</option>
                        <option>Kab. Subang</option>
                        <option>Kab. Purwakarta</option>
                        <option>Kab. Karawang</option>
                        <option>Kab. Bekasi</option>
                        <option>Kota Bogor</option>
                        <option>Kota Sukabumi</option>
                        <option>Kota Bandung</option>
                        <option>Kota Cirebon</option>
                        <option>Kota Bekasi</option>
                        <option>Kota Depok</option>
                        <option>Kota Cimahi</option>
                        <option>Kota Tasikmalaya </option>
                        <option>Kota Banjar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="number" class="form-control" placeholder="Telepon" name="telepon" required="required">
                    </div>
                    <div class="form-group">
                        <label>No. Whatsapp</label>
                        <input type="number" class="form-control" placeholder="No. Whatsapp" name="wa">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email_perusahaan">
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <input type="text" class="form-control" placeholder="Website" name="website">
                    </div>
                    <div class="form-group">
                        <label>Legalitas</label>
                        <input type="text" class="form-control" placeholder="Legalitas" name="legalitas">
                    </div>
                    <div class="form-group">
                        <label>Sertifikat</label>
                        <input type="text" class="form-control" placeholder="Sertifikat" name="sertifikat">
                    </div>
                    
                <!-- </div>/ .box-body -->
            </div>

                <div class="col-lg-6">
            <!-- <div class="box-body"> -->
                    
                    <div class="form-group">
                        <label>Barang yang Diproduksi</label>
                        <input type="text" class="form-control" placeholder="Barang Produksi" name="barang_produksi" required="required">
                    </div>
                    <div class="form-group">
                        <label>Aset Usaha</label>
                        <input type="number" class="form-control" placeholder="Aset Usaha" name="aset_perusahaan" required="required">
                        <span><i>* Tanpa (Rp) dan titik (.)</i></span>
                    </div>
                    <div class="form-group">
                        <label>Omzet Tahun Sebelumnya</label>
                        <input type="number" class="form-control" placeholder="Tahun Sebelumnya" name="omzet_perusahaan_sebelumnya" required="required">
                        <span><i>* Tanpa (Rp) dan titik (.)</i></span>
                    </div>
                    <div class="form-group">
                        <label>Omzet Tahun Sekarang</label>
                        <input type="number" class="form-control" placeholder="Tahun Sekarang" name="omzet_perusahaan" required="required">
                        <span><i>* Tanpa (Rp) dan titik (.)</i></span>
                    </div>
                    <div class="form-group">
                        <label>Kapasitas Produksi</label>
                        <input type="text" class="form-control" placeholder="Kapasitas Produksi" name="kapasitas_produksi">
                        <span><i>* per bulan / tahun</i></span>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Tenaga Kerja Tetap</label>
                        <input type="number" class="form-control" placeholder="Tenaga Kerja Tetap" name="jml_tenaga_kerja_tetap">
                        <span><i>* Tanpa titik (.)</i></span>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Tenaga Kerja Lepas</label>
                        <input type="number" class="form-control" placeholder="Tenaga Kerja Lepas" name="jml_tenaga_kerja_lepas">
                        <span><i>* Tanpa titik (.)</i></span>
                    </div>
                    <div class="form-group">
                        <label>Wilayah Pemasaran Antar Kab./Kota</label>
                        <input type="text" class="form-control" placeholder="Antar Kab./Kota" name="wil_pemasaran_kota">
                    </div>
                    <div class="form-group">
                        <label>Wilayah Pemasaran Antar Provinsi</label>
                        <input type="text" class="form-control" placeholder="Antar Provinsi" name="wil_pemasaran_provinsi">
                    </div>
                    <div class="form-group">
                        <label>Wilayah Pemasaran Antar Negara</label>
                        <input type="text" class="form-control" placeholder="Antar Negara" name="wil_pemasaran_negara">
                    </div>
                    <div class="form-group">
                        <label>Modal Sendiri</label>
                        <input type="number" class="form-control" placeholder="Modal Sendiri" name="modal_sendiri">
                        <span><i>* Tanpa (Rp) dan titik (.)</i></span>
                    </div>
                    <div class="form-group">
                        <label>Modal Pinjaman</label>
                        <input type="number" class="form-control" placeholder="Modal Pinjaman" name="modal_pinjaman">
                        <span><i>* Tanpa (Rp) dan titik (.)</i></span>
                    </div>
                    <div class="form-group">
                        <label>Bantuan dari CSR</label>
                        <input type="text" class="form-control" placeholder="Bantuan CSR" name="bantuan_csr">
                    </div>
                    <div class="form-group">
                        <label>Tahun Berdiri</label>
                        <input type="number" class="form-control" placeholder="Tahun Berdiri Perusahaan" name="tahun_berdiri_umkm">
                    </div>
                    <div class="form-group">
                        <label>Telah Difasilitasi</label>
                        <select type="text" class="form-control" name="datafasilitasi">
                        <option></option>
                        <option>BIMTEK Pemasaran</option>
                        <option>BIMTEK Pengembangan Produk UKM</option>
                        <option>BIMTEK Pembiayaan</option>
                        <option>BIMTEK Export</option>
                        <option>BIMTEK Lainnya</option>
                        <option>Pameran Cooperative Fair</option>
                        <option>Pameran HARKOPNAS</option>
                        <option>Pameran Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Upload Foto Produk</label>
                        <table class="table table-bordered">
                            <tbody><tr><th>
                            <span><b>Maksimal Upload : 2 Mb</b> | <i>* File dengan format : JPG / PNG</i></span>
                            <input type="file" name="userfile">
                            </th></tr>
                        </tbody></table>
                    </div>
                    
                    
            <!-- </div>/.box-body -->
                </div>

                    <div class="box-body">
                        <div class="col-lg-12">
                        <div class="box-footer" align="right">
                            <p align="center"><i>* Mohon data diisi lengkap dan akurat sebagai bahan pertimbangan kami untuk mengikutsertakan UKM Saudara/i dalam kegiatan
                            <br>
                            di Dinas Koperasi dan Usaha Kecil Provinsi Jawa Barat</i></p>
                            <button type="submit" name="submit" class="form-control btn btn-round btn-success"><i class="fa fa-check" aria-hidden="true"><b> S I M P A N</b></i></button>
                        </div>
                    </div>
                    
                </div>
            </form>    
                </div><!-- /.box -->
                </div><!-- /.box -->

<!--==========================
  Footer
============================--> 
       
<div class="container">
  <div class="col-md-12">
<hr>
    <div class="copyright"><center>
      2020 © Copyright <strong>PasarUMKM.com</strong>
    </center></div>
            <!--<div class="social" align="center">
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>-->
    </div>
  </div>
<hr>
</div>