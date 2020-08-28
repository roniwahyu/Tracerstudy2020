
	<div class="post">

<form class="form-horizontal form-groups-bordered" role="form" enctype="multipart/form-data" id="tbl-menu-form" action="<?php echo base_url('tracerstudy/submit') ?>" method="post">
<table class="table table-striped table-responsive">
	<tbody>
		<tr>
			
	<?php $this->load->view('step1') ?>
</td></tr>
<tr style="display: none;" id="f4"><td class="h">f4</td><td valign="top">Bagaimana anda mencari pekerjaan tersebut? 
<i>Jawaban bisa lebih dari satu</i></td><td valign="top">:</td><td>
	<table class="table table-striped table-responsive" style="padding:5px;"><tbody><tr><td>
	<input name="f401" value="1" type="checkbox"> [1] Melalui iklan di koran/majalah, brosur <span class="hl">&nbsp;&nbsp;f4-01</span><br>
	<input name="f402" value="1" type="checkbox"> [1] Melamar ke perusahaan tanpa mengetahui lowongan yang ada <span class="hl">&nbsp;&nbsp;f4-02</span><br>
	<input name="f403" value="1" type="checkbox"> [1] Pergi ke bursa/pameran kerja <span class="hl">&nbsp;&nbsp;f4-03</span><br>
	<input name="f404" value="1" type="checkbox"> [1] Mencari lewat internet/iklan online/milis <span class="hl">&nbsp;&nbsp;f4-04</span><br>
	<input name="f405" value="1" type="checkbox"> [1] Dihubungi oleh perusahaan<span class="hl">&nbsp;&nbsp;f4-05</span><br>
	<input name="f406" value="1" type="checkbox"> [1] Menghubungi Kemenakertrans<span class="hl">&nbsp;&nbsp;f4-06</span><br>
	<input name="f407" value="1" type="checkbox"> [1] Menghubungi agen tenaga kerja komersial/swasta<span class="hl">&nbsp;&nbsp;f4-07</span><br>
	<input name="f408" value="1" type="checkbox"> [1] Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas <span class="hl">&nbsp;&nbsp;f4-08</span><br>
	<input name="f409" value="1" type="checkbox"> [1] Menghubungi kantor kemahasiswaan/hubungan alumni <span class="hl">&nbsp;&nbsp;f4-09</span><br>
	<input name="f410" value="1" type="checkbox"> [1] Membangun jejaring (<i>network</i>) sejak masih kuliah <span class="hl">&nbsp;&nbsp;f4-10</span><br>
	<input name="f411" value="1" type="checkbox"> [1] Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)<span class="hl">&nbsp;&nbsp;f4-11</span><br>
	<input name="f412" value="1" type="checkbox"> [1] Membangun bisnis sendiri<span class="hl">&nbsp;&nbsp;f4-12</span><br>
	<input name="f413" value="1" type="checkbox"> [1] Melalui penempatan kerja atau magang<span class="hl">&nbsp;&nbsp;f4-13</span><br>
	<input name="f414" value="1" type="checkbox"> [1] Bekerja di tempat yang sama dengan tempat kerja semasa kuliah <span class="hl">&nbsp;&nbsp;f4-14</span><br>
	<input name="f415" value="1" type="checkbox"> [1] Lainnya:  <span class="hl">&nbsp;&nbsp;f4-15</span>
	</td><td><span class="h"></span></td></tr><tr><td>
	<input size="40" name="f416" value="" type="text"></td><td><span class="hl">&nbsp;&nbsp;f4-16</span></td></tr></tbody></table>
</td></tr>

<tr id='f5'><td class='h'>f5</td><td valign='top'>Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?

</td><td valign='top'>:</td><td><input type='text' name='f500' size='5'> perusahaan/instansi/institusi
</td></tr>

<tr id='f6'><td class='h'>f6</td><td valign='top'>Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama? 
</td><td valign='top'>:</td><td>
	<input type='radio' name='f0601' value='1'>
		Kira-kira <input type='text' name='f0602' size='5'> bulan sebelum lulus ujian &nbsp;&nbsp;<span class='hl'>(f6-01, f6-02)</span><br />
                   <input type='radio' name='f0603' value='1'>&nbsp;Kira-kira <input type='text' name='f0604' size='5'> bulan setelah lulus ujian &nbsp;&nbsp;<span class='hl'>(f6-03, f6-04)</span><br />
</td></tr>
<tr style="display: none;" id="f5"><td class="h">f5</td><td valign="top">Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama?
</td><td valign="top">:</td><td>
        <input name="f501" value="1" type="radio">
                [1] Kira-kira <input name="f502" size="5" value="" type="text"> bulan sebelum lulus ujian &nbsp;&nbsp;<span class="hl">(f5-01, f5-02)</span><br>
                   <input name="f501" value="2" type="radio">&nbsp;[2] Kira-kira <input name="f503" size="5" value="" type="text"> bulan setelah lulus ujian &nbsp;&nbsp;<span class="hl">(f5-01, f5-03)</span><br>
</td></tr>

<tr style="display: none;" id="f6"><td class="h">f6</td><td valign="top">Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?

</td><td valign="top">:</td><td><input name="f6" size="5" value="" type="text"> perusahaan/instansi/institusi
</td></tr>


<tr style="display: none;" id="f7"><td class="h">f7</td><td valign="top">Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda? 
</td><td valign="top">:</td><td> <input name="f7" size="5" value="" type="text"> perusahaan/instansi/institusi
</td></tr>
<tr style="display: none;" id="f7a"><td class="h">f7a</td><td valign="top">Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara? 
</td><td valign="top">:</td><td> <input name="f7a" size="5" value="" type="text"> perusahaan/instansi/institusi
</td></tr>

<tr><td class="h">f8</td><td valign="top">Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)?
</td><td valign="top">:</td><td> 
		<input value="1" name="f8" valuetable="" table-striped="" table-responsive="1" onclick="hide1()" type="radio"> [1] Ya (<i>Jika ya, lanjutkan ke f11</i>)<br>
		<input name="f8" value="2" onclick="show1()" type="radio"> [2] Tidak
</td></tr>
<tr style="display: none;" id="f9"><td class="h">f9</td><td valign="top">
Bagaimana anda menggambarkan situasi anda saat ini? <i> Jawaban bisa lebih dari satu</i>
</td><td valign="top">:</td><td>
		<span>
	<table class="table table-striped table-responsive"><tbody><tr><td>
        <input name="f901" value="1" type="checkbox"> [1] Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana <span class="hl">f9-01</span><br>
        <input name="f902" value="2" type="checkbox"> [2] Saya menikah <span class="hl">f9-02</span><br>
        <input name="f903" value="3" type="checkbox"> [3] Saya sibuk dengan keluarga dan anak-anak <span class="hl">f9-03</span><br>
        <input name="f904" value="4" type="checkbox"> [4] Saya sekarang sedang mencari pekerjaan <span class="hl">f9-04</span><br>
        <input name="f905" value="5" type="checkbox"> [5] Lainnya <span class="hl">f9-05</span><br>
	</td></tr><tr><td>
        <input name="f906" size="60" maxlength="80" value="" type="text"> <span class="hl">f9-06</span></td></tr>
	</tbody></table>
</span></td></tr>

<tr style="display: none;" id="f10"><td class="h">f10</td><td valign="top">
Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir? <i> Pilihlah Satu Jawaban. KEMUDIAN LANJUT KE f17 </i>
</td><td valign="top">:</td><td>
		<span>
	<table class="table table-striped table-responsive"><tbody><tr><td>
        <input name="f1001" value="1" onclick="hide2()" type="radio"> [1] Tidak<br>
        <input name="f1001" value="2" onclick="hide2()" type="radio"> [2] Tidak, tapi saya sedang menunggu hasil lamaran kerja<br>
        <input name="f1001" value="3" onclick="hide2()" type="radio"> [3] Ya, saya akan mulai bekerja dalam 2 minggu ke depan<br>
        <input name="f1001" value="4" onclick="hide2()" type="radio"> [4] Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan<br>
        <input name="f1001" value="5" type="radio"> [5] Lainnya<br>
	</td><td><span class="hl">f10-01</span></td></tr><tr><td>
        <input name="f1002" size="60" maxlength="80" value="" type="text"></td><td><span class="hl">f10-02</span></td></tr>
	</tbody></table>
</span></td></tr>

<tr style="display: table-row;" id="f11"><td class="h">f11</td><td valign="top">Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?
</td><td valign="top">:</td><td> 
		<table class="table table-striped table-responsive"><tbody><tr><td>
		<input name="f1101" value="1" type="radio"> [1] Instansi pemerintah (termasuk BUMN)<br>
		<input name="f1101" value="2" type="radio"> [2] Organisasi non-profit/Lembaga Swadaya Masyarakat<br>
		<input name="f1101" value="3" type="radio"> [3] Perusahaan swasta<br>
		<input name="f1101" value="4" type="radio"> [4] Wiraswasta/perusahaan sendiri<br>
		<input name="f1101" value="5" type="radio"> [5] Lainnya, tuliskan:
		</td><td><span class="hl">(f11-01)</span></td></tr>
		<tr><td><input name="f1102" value="" size="50" type="text"></td><td><span class="hl">(f11-02)</span></td></tr></tbody></table>
</td></tr>

<tr style="display: table-row;" id="f12"><td class="h">f12</td><td valign="top">Tempat anda bekerja saat ini bergerak di bidang apa? (Klasifikasi Baku Lapangan Usaha Indonesia, Kemnakertrans, 2009)
</td><td valign="top">:</td><td> 
<select name="f12">
<option value="01"> [01] Pertanian tanaman, peternakan, perburuan dan kegiatan yang berhubungan dengan itu 
</option><option value="02"> [02] Kehutanan dan penebangan kayu 
</option><option value="03"> [03] Perikanan 
</option><option value="04">[04] Pertambangan batu bara dan lignit 
</option><option value="05">[05] Pertambangan minyak bumi dan gas alam dan panas bumi 
</option><option value="06">[06] Pertambangan bijih logam 
</option><option value="07">[07] Pertambangan dan penggalian lainnya 
</option><option value="08">[08] Jasa pertambangan 
</option><option value="09">[09] Industri makanan 
</option><option value="10">[10] Industri minuman 
</option><option value="11">[11] Industri pengolahan tembakau 
</option><option value="12">[12] Industri tekstil 
</option><option value="13">[13] Industri pakaian jadi 
</option><option value="14">[14] Industri kulit, barang dari kulit dan alas kaki 
</option><option value="15">[15] Industri kayu, barang dari kayu dan gabus (tidak termasuk furnitur) dan barang anyaman dari bambu, rotan dan sejenisnya 
</option><option value="16">[16] Industri kertas dan barang dari kertas 
</option><option value="17">[17] Industri pencetakan dan reproduksi media rekaman 
</option><option value="18">[18] Industri produk dari batu bara dan pengilangan minyak bumi 
</option><option value="19">[19] Industri bahan kimia dan barang dari bahan kimia 
</option><option value="20">[20] Industri farmasi, produk obat kimia dan obat tradisional 
</option><option value="21">[21] Industri karet, barang dari karet dan plastik 
</option><option value="22">[22] Industri barang galian bukan logam 
</option><option value="23">[23] Industri logam dasar  
</option><option value="24">[24] Industri barang logam, bukan mesin dan peralatannya 
</option><option value="25">[25] Industri komputer, barang elektronik dan optik 
</option><option value="26">[26] Industri peralatan listrik 
</option><option value="27">[27] Industri mesin dan perlengkapan ytdl 
</option><option value="28">[28] Industri kendaraan bermotor, trailer dan semi trailer 
</option><option value="29">[29] Industri alat angkutan lainnya 
</option><option value="30">[30] Industri furnitur 
</option><option value="31">[31] Industri pengolahan lainnya 
</option><option value="32">[32] Jasa reparasi dan pemasangan mesin dan peralatan 
</option><option value="33">[33] Pengadaan listrik, gas, uap/air panas dan udara dingin 
</option><option value="34">[34] Pengadaan air 
</option><option value="35">[35] Pengolahan limbah 
</option><option value="36">[36] Pengolahan sampah dan daur ulang 
</option><option value="37">[37] Jasa pembersihan dan pengelolaan sampah lainnya 
</option><option value="38">[38] Konstruksi gedung 
</option><option value="39">[39] Konstruksi bangunan sipil 
</option><option value="40">[40] Konstruksi khusus 
</option><option value="41">[41] Perdagangan, reparasi dan perawatan mobil dan sepeda motor 
</option><option value="42">[42] Perdagangan besar, bukan mobil dan sepeda motor 
</option><option value="43">[43] Perdagangan eceran, bukan mobil dan motor
</option><option value="44">[44] Angkutan darat dan angkutan melalui saluran pipa
</option><option value="88">[88] Angkutan Air
</option><option value="45">[45] Angkutan udara
</option><option value="46">[46] Pergudangan dan jasa penunjang angkutan
</option><option value="47">[47] Pos dan kurir
</option><option value="48">[48] Penyediaan akomodasi
</option><option value="49">[49] Penyediaan makanan dan minuman
</option><option value="50">[50] Penerbitan
</option><option value="51">[51] Produksi gambar bergerak, video dan program televisi, perekaman suara dan penerbitan musik
</option><option value="52">[52] Penyiaran dan pemrograman
</option><option value="53">[53] Telekomunikasi
</option><option value="54">[54] Kegiatan pemrograman, konsultasi komputer dan kegiatan yang berhubungan dengan itu
</option><option value="55">[55] Kegiatan jasa informasi
</option><option value="56">[56] Jasa keuangan, bukan asuransi dan dana pensiun
</option><option value="57">[57] Asuransi, reasuransi dan dana pensiun, bukan jaminan sosial wajib
</option><option value="58">[58] Jasa penunjang jasa keuangan, asuransi dan dana pensiun
</option><option value="59">[59] Real estat
</option><option value="60">[60] Jasa hukum dan akuntansi
</option><option value="61">[61] Kegiatan kantor pusat dan konsultasi manajemen
</option><option value="62">[62] Jasa arsitektur dan teknik sipil; analisis dan uji teknis
</option><option value="63">[63] Penelitian dan pengembangan ilmu pengetahuan
</option><option value="64">[64] Periklanan dan penelitian pasar
</option><option value="65">[65] Jasa profesional, ilmiah dan teknis lainnya
</option><option value="66">[66] Jasa kesehatan hewan
</option><option value="67">[67] Jasa persewaan dan sewa guna usaha tanpa hak opsi
</option><option value="68">[68] Jasa ketenagakerjaan
</option><option value="69">[69] Jasa agen perjalanan, penyelenggara tur dan jasa reservasi lainnya
</option><option value="70">[70] Jasa keamanan dan penyelidikan
</option><option value="71">[71] Jasa untuk gedung dan pertamanan
</option><option value="72">[72] Jasa administrasi kantor, jasa penunjang kantor dan jasa penunjang usaha lainnya
</option><option value="73">[73] Administrasi pemerintahan, pertahanan dan jaminan sosial wajib
</option><option value="74">[74] Jasa pendidikan
</option><option value="75">[75] Jasa kesehatan manusia
</option><option value="76">[76] Jasa kegiatan sosial di dalam panti
</option><option value="77">[77] Jasa kegiatan sosial di luar panti
</option><option value="78">[78] Kegiatan hiburan, kesenian dan kreativitas
</option><option value="79">[79] Perpustakaan, arsip, museum dan kegiatan kebudayaan lainnya
</option><option value="80">[80] Kegiatan perjudian dan pertaruhan
</option><option value="81">[81] Kegiatan olahraga dan rekreasi lainnya
</option><option value="82">[82] Kegiatan keanggotaan organisasi
</option><option value="83">[83] Jasa reparasi komputer dan barang keperluan pribadi dan perlengkapan rumah tangga
</option><option value="84">[84] Jasa perorangan lainnya
</option><option value="85">[85] Jasa perorangan yang melayani rumah tangga
</option><option value="86">[86] Kegiatan yang menghasilkan barang dan jasa oleh rumah tangga yang digunakan sendiri untuk memenuhi kebutuhan
</option><option value="87">[87] Kegiatan badan internasional dan badan ekstra internasional lainnya
</option></select>

</td></tr>
	
<tr style="display: table-row;" id="f13"><td class="h">f13</td><td valign="top">Kira-kira berapa pendapatan anda setiap bulannya? 
</td><td valign="top">:</td><td>
		<table class="table table-striped table-responsive">
		<tbody><tr><td>Dari Pekerjaan Utama</td><td> Rp. &nbsp;
	        <input name="f1301" value="0" size="20" type="text"><span class="hl">(f13-01)</span> (Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)</td></tr>
		<tr><td>Dari Lembur dan Tips</td><td> Rp. &nbsp;
	        <input name="f1302" value="0" size="20" type="text"><span class="hl">(f13-02)</span> (Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)</td></tr>
		<tr><td>Dari Pekerjaan Lainnya</td><td> Rp. &nbsp;
	        <input name="f1303" value="0" size="20" type="text"><span class="hl">(f13-03)</span> (Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)</td></tr>
		</tbody></table>
</td></tr>
<tr style="display: table-row;" id="f14"><td class="h">f14</td><td valign="top">
Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?
</td><td valign="top">:</td><td>
		<span>
		<input name="f14" value="1" type="radio"> [1] Sangat Erat<br>
		<input name="f14" value="2" type="radio"> [2] Erat<br>
		<input name="f14" value="3" type="radio"> [3] Cukup Erat<br>
		<input name="f14" value="4" type="radio"> [4] Kurang Erat<br>
		<input name="f14" value="5" type="radio"> [5] Tidak Sama Sekali <br>
		</span>
</td></tr>

<tr style="display: table-row;" id="f15"><td class="h">f15</td><td valign="top">
Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?
</td><td valign="top">:</td><td>
		<span>
		<input name="f15" value="1" type="radio"> [1] Setingkat Lebih Tinggi<br>
		<input name="f15" value="2" type="radio"> [2] Tingkat yang Sama<br>
		<input name="f15" value="3" type="radio"> [3] Setingkat Lebih Rendah<br>
		<input name="f15" value="4" type="radio"> [4] Tidak Perlu Pendidikan Tinggi<br>
		</span>
</td></tr>

<tr style="display: table-row;" id="f16"><td class="h">f16</td><td valign="top">
Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?  Jawaban bisa lebih dari satu
</td><td valign="top">:</td><td>
		<span>
        <input name="f1601" value="1" type="checkbox"> [1] Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya. <span class="hl">f16-01</span><br>
        <input name="f1602" value="2" type="checkbox"> [2] Saya belum mendapatkan pekerjaan yang lebih sesuai.<span class="hl">f16-02</span><br>
        <input name="f1603" value="3" type="checkbox"> [3] Di pekerjaan ini saya memeroleh prospek karir yang baik. <span class="hl">f16-03</span><br>
        <input name="f1604" value="4" type="checkbox"> [4] Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya. <span class="hl">f16-04</span><br>
        <input name="f1605" value="5" type="checkbox"> [5] Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.<span class="hl">f16-05</span><br>
        <input name="f1606" value="6" type="checkbox"> [6] Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.  <span class="hl">f16-06</span><br>
        <input name="f1607" value="7" type="checkbox"> [7] Pekerjaan saya saat ini lebih aman/terjamin/secure <span class="hl">f16-07</span><br>
        <input name="f1608" value="8" type="checkbox"> [8] Pekerjaan saya saat ini lebih menarik <span class="hl">f16-08</span><br>
        <input name="f1609" value="9" type="checkbox"> [9] Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.<span class="hl">f16-09</span><br>
        <input name="f1610" value="10" type="checkbox"> [10] Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya. <span class="hl">f16-10</span><br>
        <input name="f1611" value="11" type="checkbox"> [11] Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya. <span class="hl">f16-11</span><br>
        <input name="f1612" value="12" type="checkbox"> [12] Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya. <span class="hl">f16-12</span><br>
        <input name="f1613" value="13" type="checkbox"> [13] Lainnya:  <span class="hl">f16-13</span><br>
        <input name="f1614" size="60" value="" maxlength="80" type="text"><span class="hl">f16-14</span>
		</span>
</td></tr>
<tr><td class="h">f17</td><td valign="top">
Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai?  (<b>A</b>) <br>
Pada saat lulus, bagaimana kontribusi perguruan tinggi dalam hal kompetensi di bawah ini? (<b>B</b>)
</td><td valign="top">:</td><td>
	<table class="table table-striped table-responsive">
		<tbody><tr><th colspan="5" style="align:center;">A</th><th>&nbsp;</th><th colspan="5">B</th></tr>
		<tr><th colspan="2">Sangat Rendah</th><th>&nbsp;</th><th colspan="2">Sangat Tinggi</th>
		    <th>&nbsp;</th>
		    <th colspan="2">Sangat Rendah</th><th>&nbsp;</th><th colspan="2">Sangat Tinggi</th>
		</tr>
		<tr><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>&nbsp;
		</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th></tr>
		<tr>
		   <td><input name="f1701" value="1" type="radio"></td>
		   <td><input name="f1701" value="2" type="radio"></td>
		   <td><input name="f1701" value="3" type="radio"></td>
		   <td><input name="f1701" value="4" type="radio"></td>
		   <td><input name="f1701" value="5" type="radio"></td>
		   <td>Pengetahuan di bidang atau disiplin ilmu anda <span class="hl">f17-1 f17-2</span></td>
		   <td><input name="f1702" value="1" type="radio"></td>
		   <td><input name="f1702" value="2" type="radio"></td>
		   <td><input name="f1702" value="3" type="radio"></td>
		   <td><input name="f1702" value="4" type="radio"></td>
		   <td><input name="f1702" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1703" value="1" type="radio"></td>
		   <td><input name="f1703" value="2" type="radio"></td>
		   <td><input name="f1703" value="3" type="radio"></td>
		   <td><input name="f1703" value="4" type="radio"></td>
		   <td><input name="f1703" value="5" type="radio"></td>
		   <td>Pengetahuan di luar bidang atau disiplin ilmu anda <span class="hl">f17-3 f17-4</span></td>
		   <td><input name="f1704" value="1" type="radio"></td>
		   <td><input name="f1704" value="2" type="radio"></td>
		   <td><input name="f1704" value="3" type="radio"></td>
		   <td><input name="f1704" value="4" type="radio"></td>
		   <td><input name="f1704" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1705" value="1" type="radio"></td>
		   <td><input name="f1705" value="2" type="radio"></td>
		   <td><input name="f1705" value="3" type="radio"></td>
		   <td><input name="f1705" value="4" type="radio"></td>
		   <td><input name="f1705" value="5" type="radio"></td>
		   <td>Pengetahuan umum <span class="hl">f17-5 f17-6</span></td>
		   <td><input name="f1706" value="1" type="radio"></td>
		   <td><input name="f1706" value="2" type="radio"></td>
		   <td><input name="f1706" value="3" type="radio"></td>
		   <td><input name="f1706" value="4" type="radio"></td>
		   <td><input name="f1706" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1705a" value="1" type="radio"></td>
                   <td><input name="f1705a" value="2" type="radio"></td>
                   <td><input name="f1705a" value="3" type="radio"></td>
                   <td><input name="f1705a" value="4" type="radio"></td>
                   <td><input name="f1705a" value="5" type="radio"></td>
                   <td>Bahasa Inggris <span class="hl">f17-5A f17-6A</span></td>
                   <td><input name="f1706a" value="1" type="radio"></td>
                   <td><input name="f1706a" value="2" type="radio"></td>
                   <td><input name="f1706a" value="3" type="radio"></td>
                   <td><input name="f1706a" value="4" type="radio"></td>
                   <td><input name="f1706a" value="5" type="radio"></td></tr>

		
                   <tr><td><input name="f1707" value="1" type="radio"></td>
                   <td><input name="f1707" value="2" type="radio"></td>
                   <td><input name="f1707" value="3" type="radio"></td>
                   <td><input name="f1707" value="4" type="radio"></td>
                   <td><input name="f1707" value="5" type="radio"></td>
                   <td>Ketrampilan internet <span class="hl">f17-7 f17-8</span> </td>
                   <td><input name="f1708" value="1" type="radio"></td>
                   <td><input name="f1708" value="2" type="radio"></td>
                   <td><input name="f1708" value="3" type="radio"></td>
                   <td><input name="f1708" value="4" type="radio"></td>
                   <td><input name="f1708" value="5" type="radio"></td></tr>

                   <tr><td><input name="f1709" value="1" type="radio"></td>
                   <td><input name="f1709" value="2" type="radio"></td>
                   <td><input name="f1709" value="3" type="radio"></td>
                   <td><input name="f1709" value="4" type="radio"></td>
                   <td><input name="f1709" value="5" type="radio"></td>
                   <td>Ketrampilan komputer <span class="hl">f17-9 f17-10</span></td>
                   <td><input name="f1710" value="1" type="radio"></td>
                   <td><input name="f1710" value="2" type="radio"></td>
                   <td><input name="f1710" value="3" type="radio"></td>
                   <td><input name="f1710" value="4" type="radio"></td>
                   <td><input name="f1710" value="5" type="radio"></td></tr>


                   <tr><td><input name="f1711" value="1" type="radio"></td>
                   <td><input name="f1711" value="2" type="radio"></td>
                   <td><input name="f1711" value="3" type="radio"></td>
                   <td><input name="f1711" value="4" type="radio"></td>
                   <td><input name="f1711" value="5" type="radio"></td>
                   <td>Berpikir kritis <span class="hl">f17-11 f17-12</span></td>
                   <td><input name="f1712" value="1" type="radio"></td>
                   <td><input name="f1712" value="2" type="radio"></td>
                   <td><input name="f1712" value="3" type="radio"></td>
                   <td><input name="f1712" value="4" type="radio"></td>
                   <td><input name="f1712" value="5" type="radio"></td></tr>


		   <tr><td><input name="f1713" value="1" type="radio"></td>
		   <td><input name="f1713" value="2" type="radio"></td>
		   <td><input name="f1713" value="3" type="radio"></td>
		   <td><input name="f1713" value="4" type="radio"></td>
		   <td><input name="f1713" value="5" type="radio"></td>
		   <td>Ketrampilan riset <span class="hl">f17-13 f17-14</span> </td>
		   <td><input name="f1714" value="1" type="radio"></td>
		   <td><input name="f1714" value="2" type="radio"></td>
		   <td><input name="f1714" value="3" type="radio"></td>
		   <td><input name="f1714" value="4" type="radio"></td>
		   <td><input name="f1714" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1715" value="1" type="radio"></td>
		   <td><input name="f1715" value="2" type="radio"></td>
		   <td><input name="f1715" value="3" type="radio"></td>
		   <td><input name="f1715" value="4" type="radio"></td>
		   <td><input name="f1715" value="5" type="radio"></td>
		   <td>Kemampuan belajar <span class="hl">f17-15 f17-16</span></td>
		   <td><input name="f1716" value="1" type="radio"></td>
		   <td><input name="f1716" value="2" type="radio"></td>
		   <td><input name="f1716" value="3" type="radio"></td>
		   <td><input name="f1716" value="4" type="radio"></td>
		   <td><input name="f1716" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1717" value="1" type="radio"></td>
		   <td><input name="f1717" value="2" type="radio"></td>
		   <td><input name="f1717" value="3" type="radio"></td>
		   <td><input name="f1717" value="4" type="radio"></td>
		   <td><input name="f1717" value="5" type="radio"></td>
		   <td>Kemampuan berkomunikasi <span class="hl">f17-17 f17-18</span></td>
		   <td><input name="f1718" value="1" type="radio"></td>
		   <td><input name="f1718" value="2" type="radio"></td>
		   <td><input name="f1718" value="3" type="radio"></td>
		   <td><input name="f1718" value="4" type="radio"></td>
		   <td><input name="f1718" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1719" value="1" type="radio"></td>
		   <td><input name="f1719" value="2" type="radio"></td>
		   <td><input name="f1719" value="3" type="radio"></td>
		   <td><input name="f1719" value="4" type="radio"></td>
		   <td><input name="f1719" value="5" type="radio"></td>
		   <td>Bekerja di bawah tekanan <span class="hl">f17-19 f17-20</span></td>
		   <td><input name="f1720" value="1" type="radio"></td>
		   <td><input name="f1720" value="2" type="radio"></td>
		   <td><input name="f1720" value="3" type="radio"></td>
		   <td><input name="f1720" value="4" type="radio"></td>
		   <td><input name="f1720" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1721" value="1" type="radio"></td>
		   <td><input name="f1721" value="2" type="radio"></td>
		   <td><input name="f1721" value="3" type="radio"></td>
		   <td><input name="f1721" value="4" type="radio"></td>
		   <td><input name="f1721" value="5" type="radio"></td>
		   <td>Manajemen waktu <span class="hl">f17-21 f17-22</span></td>
		   <td><input name="f1722" value="1" type="radio"></td>
		   <td><input name="f1722" value="2" type="radio"></td>
		   <td><input name="f1722" value="3" type="radio"></td>
		   <td><input name="f1722" value="4" type="radio"></td>
		   <td><input name="f1722" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1723" value="1" type="radio"></td>
		   <td><input name="f1723" value="2" type="radio"></td>
		   <td><input name="f1723" value="3" type="radio"></td>
		   <td><input name="f1723" value="4" type="radio"></td>
		   <td><input name="f1723" value="5" type="radio"></td>
		   <td>Bekerja secara mandiri <span class="hl">f17-23 f17-24</span></td>
		   <td><input name="f1724" value="1" type="radio"></td>
		   <td><input name="f1724" value="2" type="radio"></td>
		   <td><input name="f1724" value="3" type="radio"></td>
		   <td><input name="f1724" value="4" type="radio"></td>
		   <td><input name="f1724" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1725" value="1" type="radio"></td>
		   <td><input name="f1725" value="2" type="radio"></td>
		   <td><input name="f1725" value="3" type="radio"></td>
		   <td><input name="f1725" value="4" type="radio"></td>
		   <td><input name="f1725" value="5" type="radio"></td>
		   <td>Bekerja dalam tim/bekerjasama dengan orang lain <span class="hl">f17-25 f17-26</span></td>
		   <td><input name="f1726" value="1" type="radio"></td>
		   <td><input name="f1726" value="2" type="radio"></td>
		   <td><input name="f1726" value="3" type="radio"></td>
		   <td><input name="f1726" value="4" type="radio"></td>
		   <td><input name="f1726" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1727" value="1" type="radio"></td>
		   <td><input name="f1727" value="2" type="radio"></td>
		   <td><input name="f1727" value="3" type="radio"></td>
		   <td><input name="f1727" value="4" type="radio"></td>
		   <td><input name="f1727" value="5" type="radio"></td>
		   <td>Kemampuan dalam memecahkan masalah <span class="hl">f17-27 f17-28</span></td>
		   <td><input name="f1728" value="1" type="radio"></td>
		   <td><input name="f1728" value="2" type="radio"></td>
		   <td><input name="f1728" value="3" type="radio"></td>
		   <td><input name="f1728" value="4" type="radio"></td>
		   <td><input name="f1728" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1729" value="1" type="radio"></td>
		   <td><input name="f1729" value="2" type="radio"></td>
		   <td><input name="f1729" value="3" type="radio"></td>
		   <td><input name="f1729" value="4" type="radio"></td>
		   <td><input name="f1729" value="5" type="radio"></td>
		   <td>Negosiasi <span class="hl">f17-29 f17-30</span></td>
		   <td><input name="f1730" value="1" type="radio"></td>
		   <td><input name="f1730" value="2" type="radio"></td>
		   <td><input name="f1730" value="3" type="radio"></td>
		   <td><input name="f1730" value="4" type="radio"></td>
		   <td><input name="f1730" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1731" value="1" type="radio"></td>
		   <td><input name="f1731" value="2" type="radio"></td>
		   <td><input name="f1731" value="3" type="radio"></td>
		   <td><input name="f1731" value="4" type="radio"></td>
		   <td><input name="f1731" value="5" type="radio"></td>
		   <td>Kemampuan analisis <span class="hl">f17-31 f17-32</span></td>
		   <td><input name="f1732" value="1" type="radio"></td>
		   <td><input name="f1732" value="2" type="radio"></td>
		   <td><input name="f1732" value="3" type="radio"></td>
		   <td><input name="f1732" value="4" type="radio"></td>
		   <td><input name="f1732" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1733" value="1" type="radio"></td>
		   <td><input name="f1733" value="2" type="radio"></td>
		   <td><input name="f1733" value="3" type="radio"></td>
		   <td><input name="f1733" value="4" type="radio"></td>
		   <td><input name="f1733" value="5" type="radio"></td>
		   <td>Toleransi <span class="hl">f17-33 f17-34</span></td>
		   <td><input name="f1734" value="1" type="radio"></td>
		   <td><input name="f1734" value="2" type="radio"></td>
		   <td><input name="f1734" value="3" type="radio"></td>
		   <td><input name="f1734" value="4" type="radio"></td>
		   <td><input name="f1734" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1735" value="1" type="radio"></td>
		   <td><input name="f1735" value="2" type="radio"></td>
		   <td><input name="f1735" value="3" type="radio"></td>
		   <td><input name="f1735" value="4" type="radio"></td>
		   <td><input name="f1735" value="5" type="radio"></td>
		   <td>Kemampuan adaptasi <span class="hl">f17-35 f17-36</span></td>
		   <td><input name="f1736" value="1" type="radio"></td>
		   <td><input name="f1736" value="2" type="radio"></td>
		   <td><input name="f1736" value="3" type="radio"></td>
		   <td><input name="f1736" value="4" type="radio"></td>
		   <td><input name="f1736" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1737" value="1" type="radio"></td>
		   <td><input name="f1737" value="2" type="radio"></td>
		   <td><input name="f1737" value="3" type="radio"></td>
		   <td><input name="f1737" value="4" type="radio"></td>
		   <td><input name="f1737" value="5" type="radio"></td>
		   <td>Loyalitas<span class="hl">f17-37 f17-38</span></td>
		   <td><input name="f1738" value="1" type="radio"></td>
		   <td><input name="f1738" value="2" type="radio"></td>
		   <td><input name="f1738" value="3" type="radio"></td>
		   <td><input name="f1738" value="4" type="radio"></td>
		   <td><input name="f1738" value="5" type="radio"></td></tr>
			
		    <tr><td><input name="f1737a" value="1" type="radio"></td>
                   <td><input name="f1737a" value="2" type="radio"></td>
                   <td><input name="f1737a" value="3" type="radio"></td>
                   <td><input name="f1737a" value="4" type="radio"></td>
                   <td><input name="f1737a" value="5" type="radio"></td>
                   <td>Integritas <span class="hl">f17-37A f17-38A</span></td>
                   <td><input name="f1738a" value="1" type="radio"></td>
                   <td><input name="f1738a" value="2" type="radio"></td>
                   <td><input name="f1738a" value="3" type="radio"></td>
                   <td><input name="f1738a" value="4" type="radio"></td>
                   <td><input name="f1738a" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1739" value="1" type="radio"></td>
		   <td><input name="f1739" value="2" type="radio"></td>
		   <td><input name="f1739" value="3" type="radio"></td>
		   <td><input name="f1739" value="4" type="radio"></td>
		   <td><input name="f1739" value="5" type="radio"></td>
		   <td>Bekerja dengan orang yang berbeda budaya maupun latar belakang <span class="hl">f17-39 f17-40</span></td>
		   <td><input name="f1740" value="1" type="radio"></td>
		   <td><input name="f1740" value="2" type="radio"></td>
		   <td><input name="f1740" value="3" type="radio"></td>
		   <td><input name="f1740" value="4" type="radio"></td>
		   <td><input name="f1740" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1741" value="1" type="radio"></td>
		   <td><input name="f1741" value="2" type="radio"></td>
		   <td><input name="f1741" value="3" type="radio"></td>
		   <td><input name="f1741" value="4" type="radio"></td>
		   <td><input name="f1741" value="5" type="radio"></td>
		   <td>Kepemimpinan <span class="hl">f17-41 f17-42</span></td>
		   <td><input name="f1742" value="1" type="radio"></td>
		   <td><input name="f1742" value="2" type="radio"></td>
		   <td><input name="f1742" value="3" type="radio"></td>
		   <td><input name="f1742" value="4" type="radio"></td>
		   <td><input name="f1742" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1743" value="1" type="radio"></td>
		   <td><input name="f1743" value="2" type="radio"></td>
		   <td><input name="f1743" value="3" type="radio"></td>
		   <td><input name="f1743" value="4" type="radio"></td>
		   <td><input name="f1743" value="5" type="radio"></td>
		   <td>Kemampuan dalam memegang tanggungjawab <span class="hl">f17-43 f17-44</span></td>
		   <td><input name="f1744" value="1" type="radio"></td>
		   <td><input name="f1744" value="2" type="radio"></td>
		   <td><input name="f1744" value="3" type="radio"></td>
		   <td><input name="f1744" value="4" type="radio"></td>
		   <td><input name="f1744" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1745" value="1" type="radio"></td>
		   <td><input name="f1745" value="2" type="radio"></td>
		   <td><input name="f1745" value="3" type="radio"></td>
		   <td><input name="f1745" value="4" type="radio"></td>
		   <td><input name="f1745" value="5" type="radio"></td>
		   <td>Inisiatif <span class="hl">f17-45 f17-46</span></td>
		   <td><input name="f1746" value="1" type="radio"></td>
		   <td><input name="f1746" value="2" type="radio"></td>
		   <td><input name="f1746" value="3" type="radio"></td>
		   <td><input name="f1746" value="4" type="radio"></td>
		   <td><input name="f1746" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1747" value="1" type="radio"></td>
		   <td><input name="f1747" value="2" type="radio"></td>
		   <td><input name="f1747" value="3" type="radio"></td>
		   <td><input name="f1747" value="4" type="radio"></td>
		   <td><input name="f1747" value="5" type="radio"></td>
		   <td>Manajemen proyek/program <span class="hl">f17-47 f17-48</span></td>
		   <td><input name="f1748" value="1" type="radio"></td>
		   <td><input name="f1748" value="2" type="radio"></td>
		   <td><input name="f1748" value="3" type="radio"></td>
		   <td><input name="f1748" value="4" type="radio"></td>
		   <td><input name="f1748" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1749" value="1" type="radio"></td>
		   <td><input name="f1749" value="2" type="radio"></td>
		   <td><input name="f1749" value="3" type="radio"></td>
		   <td><input name="f1749" value="4" type="radio"></td>
		   <td><input name="f1749" value="5" type="radio"></td>
		   <td>Kemampuan untuk memresentasikan ide/produk/laporan <span class="hl">f17-49 f17-50</span></td>
		   <td><input name="f1750" value="1" type="radio"></td>
		   <td><input name="f1750" value="2" type="radio"></td>
		   <td><input name="f1750" value="3" type="radio"></td>
		   <td><input name="f1750" value="4" type="radio"></td>
		   <td><input name="f1750" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1751" value="1" type="radio"></td>
		   <td><input name="f1751" value="2" type="radio"></td>
		   <td><input name="f1751" value="3" type="radio"></td>
		   <td><input name="f1751" value="4" type="radio"></td>
		   <td><input name="f1751" value="5" type="radio"></td>
		   <td>Kemampuan dalam menulis laporan, memo dan dokumen <span class="hl">f17-51 f17-52</span></td>
		   <td><input name="f1752" value="1" type="radio"></td>
		   <td><input name="f1752" value="2" type="radio"></td>
		   <td><input name="f1752" value="3" type="radio"></td>
		   <td><input name="f1752" value="4" type="radio"></td>
		   <td><input name="f1752" value="5" type="radio"></td></tr>

		   <tr><td><input name="f1753" value="1" type="radio"></td>
		   <td><input name="f1753" value="2" type="radio"></td>
		   <td><input name="f1753" value="3" type="radio"></td>
		   <td><input name="f1753" value="4" type="radio"></td>
		   <td><input name="f1753" value="5" type="radio"></td>
		   <td>Kemampuan untuk terus belajar sepanjang hayat <span class="hl">f17-53 f17-54</span></td>
		   <td><input name="f1754" value="1" type="radio"></td>
		   <td><input name="f1754" value="2" type="radio"></td>
		   <td><input name="f1754" value="3" type="radio"></td>
		   <td><input name="f1754" value="4" type="radio"></td>
		   <td><input name="f1754" value="5" type="radio"></td></tr>

	</tbody>
</table>
</td>
</tr>
</tbody>
</table>        
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


	
