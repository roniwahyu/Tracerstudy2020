<?php echo form_open(base_url().'jawab_mhs/submit',array('id'=>'addform','role'=>'form','class'=>'form')); ?>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<style type="text/css">
.h {
    font-weight: bold;
    vertical-align: top;
    color: red
}

.hl {
    font-size: 8px;
    font-weight: bold;
    vertical-align: top;
    color: red
}

.i {
    font-weight: bold;
    vertical-align: top;
}

.desc {
    display: none;
}
</style>
<script type="text/javascript">
function hide1() {
    if (document.getElementById) { // DOM3 = IE5, NS6
        document.getElementById('f9').style.display = 'none';
        document.getElementById('f10').style.display = 'none';
        document.getElementById('f11').style.display = 'table-row';
        //document.getElementById('f12').style.display = 'table-row';
        document.getElementById('f13').style.display = 'table-row';
        document.getElementById('f14').style.display = 'table-row';
        document.getElementById('f15').style.display = 'table-row';
        document.getElementById('f16').style.display = 'table-row';
    } else {
        if (document.layers) { // Netscape 4
            document.f9.style.display = 'none';
            document.f10.style.display = 'none';
            document.f11.style.display = 'table-row';
            //document.f12.style.display = 'table-row';
            document.f13.style.display = 'table-row';
            document.f14.style.display = 'table-row';
            document.f15.style.display = 'table-row';
            document.f16.style.display = 'table-row';
        } else { // IE 4
            document.all.f9.style.display = 'none';
            document.all.f10.style.display = 'none';
            document.all.f11.style.display = 'table-row';
            //document.all.f12.style.display = 'table-row';
            document.all.f13.style.display = 'table-row';
            document.all.f14.style.display = 'table-row';
            document.all.f15.style.display = 'table-row';
            document.all.f16.style.display = 'table-row';
        }
    }
}

function show1() {
    if (document.getElementById) { // DOM3 = IE5, NS6
        document.getElementById('f9').style.display = 'table-row';
        document.getElementById('f10').style.display = 'table-row';
        document.getElementById('f11').style.display = 'table-row';
        //document.getElementById('f12').style.display = 'table-row';
        document.getElementById('f13').style.display = 'table-row';
        document.getElementById('f14').style.display = 'table-row';
        document.getElementById('f15').style.display = 'table-row';
        document.getElementById('f16').style.display = 'table-row';
    } else {
        if (document.layers) { // Netscape 4
            document.f9.style.display = 'table-row';
            document.f10.style.display = 'table-row';
            document.f11.style.display = 'table-row';
            //document.f12.style.display = 'table-row';
            document.f13.style.display = 'table-row';
            document.f14.style.display = 'table-row';
            document.f15.style.display = 'table-row';
            document.f16.style.display = 'table-row';
        } else { // IE 4
            document.all.f9.style.display = 'table-row';
            document.all.f10.style.display = 'table-row';
            document.all.f11.style.display = 'table-row';
            //document.all.f12.style.display = 'table-row';
            document.all.f13.style.display = 'table-row';
            document.all.f14.style.display = 'table-row';
            document.all.f15.style.display = 'table-row';
            document.all.f16.style.display = 'table-row';
        }
    }
}

function hide2() {
    if (document.getElementById) { // DOM3 = IE5, NS6
        document.getElementById('f11').style.display = 'none';
        //document.getElementById('f12').style.display = 'none';
        document.getElementById('f13').style.display = 'none';
        document.getElementById('f14').style.display = 'none';
        document.getElementById('f15').style.display = 'none';
        document.getElementById('f16').style.display = 'none';
    } else {
        if (document.layers) { // Netscape 4
            document.id.display = 'none';
            document.f11.style.display = 'none';
            //document.f12.style.display = 'none';
            document.f13.style.display = 'none';
            document.f14.style.display = 'none';
            document.f15.style.display = 'none';
            document.f16.style.display = 'none';
        } else { // IE 4
            document.all.f11.style.display = 'none';
            //document.all.f12.style.display = 'none';
            document.all.f13.style.display = 'none';
            document.all.f14.style.display = 'none';
            document.all.f15.style.display = 'none';
            document.all.f16.style.display = 'none';
        }
    }
}

function show2() {
    if (document.getElementById) { // DOM3 = IE5, NS6
        document.getElementById('f11').style.display = 'table-row';
        //document.getElementById('f12').style.display = 'table-row';
        document.getElementById('f13').style.display = 'table-row';
        document.getElementById('f14').style.display = 'table-row';
        document.getElementById('f15').style.display = 'table-row';
        document.getElementById('f16').style.display = 'table-row';
    } else {
        if (document.layers) { // Netscape 4
            document.id.display = 'none';
            document.f11.style.display = 'table-row';
            //document.f12.style.display = 'table-row';
            document.f13.style.display = 'table-row';
            document.f14.style.display = 'table-row';
            document.f15.style.display = 'table-row';
            document.f16.style.display = 'table-row';
        } else { // IE 4
            document.all.f11.style.display = 'table-row';
            //document.all.f12.style.display = 'table-row';
            document.all.f13.style.display = 'table-row';
            document.all.f14.style.display = 'table-row';
            document.all.f15.style.display = 'table-row';
            document.all.f16.style.display = 'table-row';
        }
    }
}

function hide3() {
    if (document.getElementById) { // DOM3 = IE5, NS6
        document.getElementById('f4').style.display = 'none';
        document.getElementById('f5').style.display = 'none';
        document.getElementById('f6').style.display = 'none';
        document.getElementById('f7').style.display = 'none';
        document.getElementById('f7a').style.display = 'none';
    } else {
        if (document.layers) { // Netscape 4
            document.id.display = 'none';
            document.f4.style.display = 'none';
            document.f5.style.display = 'none';
            document.f6.style.display = 'none';
            document.f7.style.display = 'none';
            document.f7a.style.display = 'none';
        } else { // IE 4
            document.all.f4.style.display = 'none';
            document.all.f5.style.display = 'none';
            document.all.f6.style.display = 'none';
            document.all.f7.style.display = 'none';
            document.all.f7a.style.display = 'none';
        }
    }
}

function show3() {
    if (document.getElementById) { // DOM3 = IE5, NS6
        document.getElementById('f4').style.display = 'table-row';
        document.getElementById('f5').style.display = 'table-row';
        document.getElementById('f6').style.display = 'table-row';
        document.getElementById('f7').style.display = 'table-row';
        document.getElementById('f7a').style.display = 'table-row';
    } else {
        if (document.layers) { // Netscape 4
            document.id.display = 'none';
            document.f4.style.display = 'table-row';
            document.f5.style.display = 'table-row';
            document.f6.style.display = 'table-row';
            document.f7.style.display = 'table-row';
            document.f7a.style.display = 'table-row';
        } else { // IE 4
            document.all.f4.style.display = 'table-row';
            document.all.f5.style.display = 'table-row';
            document.all.f6.style.display = 'table-row';
            document.all.f7.style.display = 'table-row';
            document.all.f7a.style.display = 'table-row';
        }
    }
}
</script>
<div id="content">
    <div class="post">
        <div class="form-group">
            <?php 
                                $username=$user->username;
                                $nim=$user->nim;
                                $userid=$user->id;
                                 ?>
            <label for="nim">NIM:</label>
            <div class="controls">
                <?php echo form_input('nim',set_value('nim', isset($nim) ? $nim : ''),'id="nim" class="form-control " readonly placeholder="Masukkan nim"'); ?>
                <?php //echo form_input('userid',set_value('userid', isset($userid) ? $userid : ''),'id="userid" class="hidden form-control" readonly placeholder="Masukkan nim"'); ?>
            </div>
        </div>
        <table class="table table-striped table-responsive">
            <tbody>
                <tr>
                    <td class="i">Identitas<br><span class="h">f1</span></td>
                    <td> Nomor Mahasiswa</td>
                    <td>:</td>
                    <td>
                    	<!-- <input type="text" name="nimhsmsmh" value="" size="20"> -->
                    	<?php echo form_input('nimhsmsmh',set_value('nim', isset($nim) ? $nim : ''),'id="nimhsmsmh" class="form-control " readonly placeholder="Masukkan NIM"'); ?>
               
                    </td>
                </tr>
                <tr>
                    <td class="h"><span class="h"></span></td>
                    <td>Kode PT</td>
                    <td>:</td>
                    <td><input type="text" value="071030" name="kdptimsmh" size="20" readonly=""></td>
                </tr>
                <tr>
                    <td class="h"><span class="h"></span></td>
                    <td>Tahun Lulus</td>
                    <td>:</td>
                    <td><input type="text" value="" name="tahun_lulus" size="20"></td>
                </tr>
                <tr>
                    <td class="h"><span class="h"></span></td>
                    <td>Kode Prodi</td>
                    <td>:</td>
                    <td><input type="text" value="" name="kdpstmsmh" size="20"></td>
                </tr>
                <tr>
                    <td class="h"><span class="h"></span></td>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" value="" name="nmmhsmsmh" size="20"></td>
                </tr>
                <tr>
                    <td class="h"><span class="h"></span></td>
                    <td>Nomor Telepon/HP</td>
                    <td>:</td>
                    <td><input type="text" value="" name="telpomsmh" size="20"></td>
                </tr>
                <tr>
                    <td class="h"><span class="h"></span></td>
                    <td>Alamat Email</td>
                    <td>:</td>
                    <td><input type="text" value="" name="emailmsmh" size="40"></td>
                </tr>
                <tr>
                    <td colspan="4"><b>Tracer Study</b></td>
                </tr>
                <tr>
                    <td colspan="4"><b>Kuisioner Wajib</b></td>
                </tr>
                <tr id="f5">
                    <td class="h">f5</td>
                    <td valign="top">Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama?
                    
                    </td>
                    <td valign="top">:</td>
                    <td>
                        <input type="radio" name="f501" value="1">
                        [1] Kira-kira <input type="text" name="f502" size="5" value=""> bulan sebelum lulus ujian &nbsp;&nbsp;<span class="hl">(f5-01, f5-02)</span><br>
                        <input type="radio" name="f501" value="2">&nbsp;[2] Kira-kira <input type="text" name="f503" size="5" value=""> bulan setelah lulus ujian &nbsp;&nbsp;<span class="hl">(f5-01, f5-03)</span><br>
                    </td>
                </tr>
                <tr id="f12">
                    <td class="h">f12</td>
                    <td valign="top">Sebutkan sumberdana dalam pembiayaan kuliah?
                    </td>
                    <td valign="top">:</td>
                    <td>
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="radio" name="f1201" value="1"> [1] Biaya Sendiri / Keluarga<br>
                                        <input type="radio" name="f1201" value="2"> [2] Beasiswa ADIK<br>
                                        <input type="radio" name="f1201" value="3"> [3] Beasiswa BIDIKMISI<br>
                                        <input type="radio" name="f1201" value="4"> [4] Beasiswa PPA<br>
                                        <input type="radio" name="f1201" value="5"> [5] Beasiswa AFIRMASI<br>
                                        <input type="radio" name="f1201" value="6"> [6] Beasiswa Perusahaan/Swasta<br>
                                        <input type="radio" name="f1201" value="7"> [7] Lainnya, tuliskan:
                                    </td>
                                    <td><span class="hl">(f12-01)</span></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="f1202" value="" size="50"></td>
                                    <td><span class="hl">(f12-02)</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="h">f8</td>
                    <td valign="top">Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)?
                    </td>
                    <td valign="top">:</td>
                    <td>
                        <input type="radio" value="1" name="f8" valuetable="" table-striped="" table-responsive="1" onclick="hide1()"> [1] Ya <br>
                        <input type="radio" name="f8" value="2" onclick="show1()"> [2] Tidak
                    </td>
                </tr>
                <tr id="f14">
                    <td class="h">f14</td>
                    <td valign="top">
                        Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?
                    </td>
                    <td valign="top">:</td>
                    <td>
                        <span>
                            <input type="radio" name="f14" value="1"> [1] Sangat Erat<br>
                            <input type="radio" name="f14" value="2"> [2] Erat<br>
                            <input type="radio" name="f14" value="3"> [3] Cukup Erat<br>
                            <input type="radio" name="f14" value="4"> [4] Kurang Erat<br>
                            <input type="radio" name="f14" value="5"> [5] Tidak Sama Sekali <br>
                        </span>
                    </td>
                </tr>
                <tr id="f15">
                    <td class="h">f15</td>
                    <td valign="top">
                        Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?
                    </td>
                    <td valign="top">:</td>
                    <td>
                        <span>
                            <input type="radio" name="f15" value="1"> [1] Setingkat Lebih Tinggi<br>
                            <input type="radio" name="f15" value="2"> [2] Tingkat yang Sama<br>
                            <input type="radio" name="f15" value="3"> [3] Setingkat Lebih Rendah<br>
                            <input type="radio" name="f15" value="4"> [4] Tidak Perlu Pendidikan Tinggi<br>
                        </span>
                    </td>
                </tr>
                <tr id="f13">
                    <td class="h">f13</td>
                    <td valign="top">Kira-kira berapa pendapatan anda setiap bulannya?
                    </td>
                    <td valign="top">:</td>
                    <td>
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td>Dari Pekerjaan Utama</td>
                                    <td> Rp. &nbsp;
                                        <input type="text" name="f1301" value="0" size="20"><span class="hl">(f13-01)</span> (Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)</td>
                                </tr>
                                <tr>
                                    <td>Dari Lembur dan Tips</td>
                                    <td> Rp. &nbsp;
                                        <input type="text" name="f1302" value="0" size="20"><span class="hl">(f13-02)</span> (Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)</td>
                                </tr>
                                <tr>
                                    <td>Dari Pekerjaan Lainnya</td>
                                    <td> Rp. &nbsp;
                                        <input type="text" name="f1303" value="0" size="20"><span class="hl">(f13-03)</span> (Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>Kuisioner Opsional</b></td>
                </tr>
                <tr id="f2">
                    <td class="h">f2</td>
                    <td valign="top">
                        Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?
                    </td>
                    <td valign="top">:</td>
                    <td>
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td colspan="2"><b>Perkuliahan</b> <span class="hl">f21</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="f21" value="1"> [1] Sangat Besar<br>
                                        <input type="radio" name="f21" value="2"> [2] Besar<br>
                                        <input type="radio" name="f21" value="3"> [3] Cukup Besar<br>
                                        <input type="radio" name="f21" value="4"> [4] Kurang<br>
                                        <input type="radio" name="f21" value="5"> [5] Tidak Sama Sekali<br>
                                    </td>
                                    <td><span class="hl">f21</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td colspan="2"><b>Demonstrasi</b> <span class="hl">f22</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="f22" value="1"> [1] Sangat Besar<br>
                                        <input type="radio" name="f22" value="2"> [2] Besar<br>
                                        <input type="radio" name="f22" value="3"> [3] Cukup Besar<br>
                                        <input type="radio" name="f22" value="4"> [4] Kurang<br>
                                        <input type="radio" name="f22" value="5"> [5] Tidak Sama Sekali<br>
                                    </td>
                                    <td><span class="hl">f22</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td colspan="2"><b>Partisipasi dalam proyek riset</b> <span class="hl">f23</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="f23" value="1"> [1] Sangat Besar<br>
                                        <input type="radio" name="f23" value="2"> [2] Besar<br>
                                        <input type="radio" name="f23" value="3"> [3] Cukup Besar<br>
                                        <input type="radio" name="f23" value="4"> [4] Kurang<br>
                                        <input type="radio" name="f23" value="5"> [5] Tidak Sama Sekali<br>
                                    </td>
                                    <td><span class="hl">f23</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td colspan="2"><b>Magang</b> <span class="hl">f24</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="f24" value="1"> [1] Sangat Besar<br>
                                        <input type="radio" name="f24" value="2"> [2] Besar<br>
                                        <input type="radio" name="f24" value="3"> [3] Cukup Besar<br>
                                        <input type="radio" name="f24" value="4"> [4] Kurang<br>
                                        <input type="radio" name="f24" value="5"> [5] Tidak Sama Sekali<br>
                                    </td>
                                    <td><span class="hl">f24</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td colspan="2"><b>Praktikum</b> <span class="hl">f25</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="f25" value="1"> [1] Sangat Besar<br>
                                        <input type="radio" name="f25" value="2"> [2] Besar<br>
                                        <input type="radio" name="f25" value="3"> [3] Cukup Besar<br>
                                        <input type="radio" name="f25" value="4"> [4] Kurang<br>
                                        <input type="radio" name="f25" value="5"> [5] Tidak Sama Sekali<br>
                                    </td>
                                    <td><span class="hl">f25</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td colspan="2"><b>Kerja Lapangan</b> <span class="hl">f26</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="f26" value="1"> [1] Sangat Besar<br>
                                        <input type="radio" name="f26" value="2"> [2] Besar<br>
                                        <input type="radio" name="f26" value="3"> [3] Cukup Besar<br>
                                        <input type="radio" name="f26" value="4"> [4] Kurang<br>
                                        <input type="radio" name="f26" value="5"> [5] Tidak Sama Sekali<br>
                                    </td>
                                    <td><span class="hl">f26</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td colspan="2"><b>Diskusi</b> <span class="hl">f27</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="f27" value="1"> [1] Sangat Besar<br>
                                        <input type="radio" name="f27" value="2"> [2] Besar<br>
                                        <input type="radio" name="f27" value="3"> [3] Cukup Besar<br>
                                        <input type="radio" name="f27" value="4"> [4] Kurang<br>
                                        <input type="radio" name="f27" value="5"> [5] Tidak Sama Sekali<br>
                                    </td>
                                    <td><span class="hl">f27</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td id="f3" class="h">f3</td>
                    <td valign="top">Kapan anda mulai mencari pekerjaan? <i>Mohon pekerjaan sambilan tidak dimasukkan</i></td>
                    <td valign="top">:</td>
                    <td>
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td><span class="hl">f301</span>&nbsp;&nbsp;<input id="f301" type="radio" name="f301" value="1" onclick="show3()"> [1] Kira-kira <input type="text" name="f302" value="" size="5"> &nbsp;bulan sebelum lulus &nbsp;&nbsp;<span class="hl">f302</span></td>
                                </tr>
                                <tr>
                                    <td><span class="hl">f301</span>&nbsp;&nbsp;<input id="f302" type="radio" name="f301" value="2" onclick="show3()"> [2] Kira-kira <input type="text" name="f303" value="" size="5"> &nbsp;bulan sesudah lulus &nbsp;&nbsp;<span class="hl">f303</span></td>
                                </tr>
                                <tr>
                                    <td><span class="hl">f301</span>&nbsp;&nbsp;<input id="f303" type="radio" name="f301" value="3" onclick="hide3()"> [3] Saya tidak mencari kerja (<i>Langsung ke pertanyaan f8</i>)</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr id="f4">
                    <td class="h">f4</td>
                    <td valign="top">Bagaimana anda mencari pekerjaan tersebut?
                        <i>Jawaban bisa lebih dari satu</i></td>
                    <td valign="top">:</td>
                    <td>
                        <table class="table table-striped table-responsive" style="padding:5px;">
                            <tbody>
                                <tr>
                                    <td>
                                        <input name="f401" type="checkbox" value="1"> [1] Melalui iklan di koran/majalah, brosur <span class="hl">&nbsp;&nbsp;f4-01</span><br>
                                        <input name="f402" type="checkbox" value="1"> [1] Melamar ke perusahaan tanpa mengetahui lowongan yang ada <span class="hl">&nbsp;&nbsp;f4-02</span><br>
                                        <input name="f403" type="checkbox" value="1"> [1] Pergi ke bursa/pameran kerja <span class="hl">&nbsp;&nbsp;f4-03</span><br>
                                        <input name="f404" type="checkbox" value="1"> [1] Mencari lewat internet/iklan online/milis <span class="hl">&nbsp;&nbsp;f4-04</span><br>
                                        <input name="f405" type="checkbox" value="1"> [1] Dihubungi oleh perusahaan<span class="hl">&nbsp;&nbsp;f4-05</span><br>
                                        <input name="f406" type="checkbox" value="1"> [1] Menghubungi Kemenakertrans<span class="hl">&nbsp;&nbsp;f4-06</span><br>
                                        <input name="f407" type="checkbox" value="1"> [1] Menghubungi agen tenaga kerja komersial/swasta<span class="hl">&nbsp;&nbsp;f4-07</span><br>
                                        <input name="f408" type="checkbox" value="1"> [1] Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas <span class="hl">&nbsp;&nbsp;f4-08</span><br>
                                        <input name="f409" type="checkbox" value="1"> [1] Menghubungi kantor kemahasiswaan/hubungan alumni <span class="hl">&nbsp;&nbsp;f4-09</span><br>
                                        <input name="f410" type="checkbox" value="1"> [1] Membangun jejaring (<i>network</i>) sejak masih kuliah <span class="hl">&nbsp;&nbsp;f4-10</span><br>
                                        <input name="f411" type="checkbox" value="1"> [1] Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)<span class="hl">&nbsp;&nbsp;f4-11</span><br>
                                        <input name="f412" type="checkbox" value="1"> [1] Membangun bisnis sendiri<span class="hl">&nbsp;&nbsp;f4-12</span><br>
                                        <input name="f413" type="checkbox" value="1"> [1] Melalui penempatan kerja atau magang<span class="hl">&nbsp;&nbsp;f4-13</span><br>
                                        <input name="f414" type="checkbox" value="1"> [1] Bekerja di tempat yang sama dengan tempat kerja semasa kuliah <span class="hl">&nbsp;&nbsp;f4-14</span><br>
                                        <input name="f415" type="checkbox" value="1"> [1] Lainnya: <span class="hl">&nbsp;&nbsp;f4-15</span>
                                    </td>
                                    <td><span class="h"></span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" size="40" name="f416" value=""></td>
                                    <td><span class="hl">&nbsp;&nbsp;f4-16</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <!---
<tr id='f5'><td class='h'>f5</td><td valign='top'>Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?

</td><td valign='top'>:</td><td><input type='text' name='f500' size='5'> perusahaan/instansi/institusi
</td></tr>

<tr id='f6'><td class='h'>f6</td><td valign='top'>Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama? 
</td><td valign='top'>:</td><td>
	<input type='radio' name='f0601' value='1'>
		Kira-kira <input type='text' name='f0602' size='5'> bulan sebelum lulus ujian &nbsp;&nbsp;<span class='hl'>(f6-01, f6-02)</span><br />
                   <input type='radio' name='f0603' value='1'>&nbsp;Kira-kira <input type='text' name='f0604' size='5'> bulan setelah lulus ujian &nbsp;&nbsp;<span class='hl'>(f6-03, f6-04)</span><br />
</td></tr>
--->
                <tr id="f6">
                    <td class="h">f6</td>
                    <td valign="top">Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?
                    </td>
                    <td valign="top">:</td>
                    <td><input type="text" name="f6" size="5" value=""> perusahaan/instansi/institusi
                    </td>
                </tr>
                <tr id="f7">
                    <td class="h">f7</td>
                    <td valign="top">Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda?
                    </td>
                    <td valign="top">:</td>
                    <td> <input type="text" name="f7" size="5" value=""> perusahaan/instansi/institusi
                    </td>
                </tr>
                <tr id="f7a">
                    <td class="h">f7a</td>
                    <td valign="top">Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?
                    </td>
                    <td valign="top">:</td>
                    <td> <input type="text" name="f7a" size="5" value=""> perusahaan/instansi/institusi
                    </td>
                </tr>
                <tr id="f9">
                    <td class="h">f9</td>
                    <td valign="top">
                        Bagaimana anda menggambarkan situasi anda saat ini? <i> Jawaban bisa lebih dari satu</i>
                    </td>
                    <td valign="top">:</td>
                    <td>
                        <span>
                            <table class="table table-striped table-responsive">
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="f901" value="1"> [1] Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana <span class="hl">f9-01</span><br>
                                            <input type="checkbox" name="f902" value="2"> [2] Saya menikah <span class="hl">f9-02</span><br>
                                            <input type="checkbox" name="f903" value="3"> [3] Saya sibuk dengan keluarga dan anak-anak <span class="hl">f9-03</span><br>
                                            <input type="checkbox" name="f904" value="4"> [4] Saya sekarang sedang mencari pekerjaan <span class="hl">f9-04</span><br>
                                            <input type="checkbox" name="f905" value="5"> [5] Lainnya <span class="hl">f9-05</span><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" name="f906" size="60" maxlength="80" value=""> <span class="hl">f9-06</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </span></td>
                </tr>
                <tr id="f10">
                    <td class="h">f10</td>
                    <td valign="top">
                        Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir? <i> Pilihlah Satu Jawaban. KEMUDIAN LANJUT KE f17 </i>
                    </td>
                    <td valign="top">:</td>
                    <td>
                        <span>
                            <table class="table table-striped table-responsive">
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="radio" name="f1001" value="1" onclick="hide2()"> [1] Tidak<br>
                                            <input type="radio" name="f1001" value="2" onclick="hide2()"> [2] Tidak, tapi saya sedang menunggu hasil lamaran kerja<br>
                                            <input type="radio" name="f1001" value="3" onclick="hide2()"> [3] Ya, saya akan mulai bekerja dalam 2 minggu ke depan<br>
                                            <input type="radio" name="f1001" value="4" onclick="hide2()"> [4] Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan<br>
                                            <input type="radio" name="f1001" value="5"> [5] Lainnya<br>
                                        </td>
                                        <td><span class="hl">f10-01</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" name="f1002" size="60" maxlength="80" value=""></td>
                                        <td><span class="hl">f10-02</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </span></td>
                </tr>
                <tr id="f11">
                    <td class="h">f11</td>
                    <td valign="top">Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?
                    </td>
                    <td valign="top">:</td>
                    <td>
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="radio" name="f1101" value="1"> [1] Instansi pemerintah (termasuk BUMN)<br>
                                        <input type="radio" name="f1101" value="2"> [2] Organisasi non-profit/Lembaga Swadaya Masyarakat<br>
                                        <input type="radio" name="f1101" value="3"> [3] Perusahaan swasta<br>
                                        <input type="radio" name="f1101" value="4"> [4] Wiraswasta/perusahaan sendiri<br>
                                        <input type="radio" name="f1101" value="5"> [5] Lainnya, tuliskan:
                                    </td>
                                    <td><span class="hl">(f11-01)</span></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="f1102" value="" size="50"></td>
                                    <td><span class="hl">(f11-02)</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr id="f16">
                    <td class="h">f16</td>
                    <td valign="top">
                        Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? Jawaban bisa lebih dari satu
                    </td>
                    <td valign="top">:</td>
                    <td>
                        <span>
                            <input type="checkbox" name="f1601" value="1"> [1] Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya. <span class="hl">f16-01</span><br>
                            <input type="checkbox" name="f1602" value="2"> [2] Saya belum mendapatkan pekerjaan yang lebih sesuai.<span class="hl">f16-02</span><br>
                            <input type="checkbox" name="f1603" value="3"> [3] Di pekerjaan ini saya memeroleh prospek karir yang baik. <span class="hl">f16-03</span><br>
                            <input type="checkbox" name="f1604" value="4"> [4] Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya. <span class="hl">f16-04</span><br>
                            <input type="checkbox" name="f1605" value="5"> [5] Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.<span class="hl">f16-05</span><br>
                            <input type="checkbox" name="f1606" value="6"> [6] Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini. <span class="hl">f16-06</span><br>
                            <input type="checkbox" name="f1607" value="7"> [7] Pekerjaan saya saat ini lebih aman/terjamin/secure <span class="hl">f16-07</span><br>
                            <input type="checkbox" name="f1608" value="8"> [8] Pekerjaan saya saat ini lebih menarik <span class="hl">f16-08</span><br>
                            <input type="checkbox" name="f1609" value="9"> [9] Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.<span class="hl">f16-09</span><br>
                            <input type="checkbox" name="f1610" value="10"> [10] Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya. <span class="hl">f16-10</span><br>
                            <input type="checkbox" name="f1611" value="11"> [11] Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya. <span class="hl">f16-11</span><br>
                            <input type="checkbox" name="f1612" value="12"> [12] Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya. <span class="hl">f16-12</span><br>
                            <input type="checkbox" name="f1613" value="13"> [13] Lainnya: <span class="hl">f16-13</span><br>
                            <input type="text" name="f1614" size="60" value="" maxlength="80"><span class="hl">f16-14</span>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="h">f17</td>
                    <td valign="top">
                        Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai? (<b>A</b>) <br>
                        Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan? (<b>B</b>)
                    </td>
                    <td valign="top">:</td>
                    <td>
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <th colspan="5" style="align:center;">A</th>
                                    <th>&nbsp;</th>
                                    <th colspan="5">B</th>
                                </tr>
                                <tr>
                                    <th colspan="2">Sangat Rendah</th>
                                    <th>&nbsp;</th>
                                    <th colspan="2">Sangat Tinggi</th>
                                    <th>&nbsp;</th>
                                    <th colspan="2">Sangat Rendah</th>
                                    <th>&nbsp;</th>
                                    <th colspan="2">Sangat Tinggi</th>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>&nbsp;
                                    </th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1701" value="1"></td>
                                    <td><input type="radio" name="f1701" value="2"></td>
                                    <td><input type="radio" name="f1701" value="3"></td>
                                    <td><input type="radio" name="f1701" value="4"></td>
                                    <td><input type="radio" name="f1701" value="5"></td>
                                    <td>Pengetahuan di bidang atau disiplin ilmu anda <span class="hl">f17-1 f17-2b</span></td>
                                    <td><input type="radio" name="f1702b" value="1"></td>
                                    <td><input type="radio" name="f1702b" value="2"></td>
                                    <td><input type="radio" name="f1702b" value="3"></td>
                                    <td><input type="radio" name="f1702b" value="4"></td>
                                    <td><input type="radio" name="f1702b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1703" value="1"></td>
                                    <td><input type="radio" name="f1703" value="2"></td>
                                    <td><input type="radio" name="f1703" value="3"></td>
                                    <td><input type="radio" name="f1703" value="4"></td>
                                    <td><input type="radio" name="f1703" value="5"></td>
                                    <td>Pengetahuan di luar bidang atau disiplin ilmu anda <span class="hl">f17-3 f17-4b</span></td>
                                    <td><input type="radio" name="f1704b" value="1"></td>
                                    <td><input type="radio" name="f1704b" value="2"></td>
                                    <td><input type="radio" name="f1704b" value="3"></td>
                                    <td><input type="radio" name="f1704b" value="4"></td>
                                    <td><input type="radio" name="f1704b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1705" value="1"></td>
                                    <td><input type="radio" name="f1705" value="2"></td>
                                    <td><input type="radio" name="f1705" value="3"></td>
                                    <td><input type="radio" name="f1705" value="4"></td>
                                    <td><input type="radio" name="f1705" value="5"></td>
                                    <td>Pengetahuan umum <span class="hl">f17-5 f17-6b</span></td>
                                    <td><input type="radio" name="f1706b" value="1"></td>
                                    <td><input type="radio" name="f1706b" value="2"></td>
                                    <td><input type="radio" name="f1706b" value="3"></td>
                                    <td><input type="radio" name="f1706b" value="4"></td>
                                    <td><input type="radio" name="f1706b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1705a" value="1"></td>
                                    <td><input type="radio" name="f1705a" value="2"></td>
                                    <td><input type="radio" name="f1705a" value="3"></td>
                                    <td><input type="radio" name="f1705a" value="4"></td>
                                    <td><input type="radio" name="f1705a" value="5"></td>
                                    <td>Bahasa Inggris <span class="hl">f17-5a f17-6ba</span></td>
                                    <td><input type="radio" name="f1706ba" value="1"></td>
                                    <td><input type="radio" name="f1706ba" value="2"></td>
                                    <td><input type="radio" name="f1706ba" value="3"></td>
                                    <td><input type="radio" name="f1706ba" value="4"></td>
                                    <td><input type="radio" name="f1706ba" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1707" value="1"></td>
                                    <td><input type="radio" name="f1707" value="2"></td>
                                    <td><input type="radio" name="f1707" value="3"></td>
                                    <td><input type="radio" name="f1707" value="4"></td>
                                    <td><input type="radio" name="f1707" value="5"></td>
                                    <td>Ketrampilan internet <span class="hl">f17-7 f17-8b</span> </td>
                                    <td><input type="radio" name="f1708b" value="1"></td>
                                    <td><input type="radio" name="f1708b" value="2"></td>
                                    <td><input type="radio" name="f1708b" value="3"></td>
                                    <td><input type="radio" name="f1708b" value="4"></td>
                                    <td><input type="radio" name="f1708b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1709" value="1"></td>
                                    <td><input type="radio" name="f1709" value="2"></td>
                                    <td><input type="radio" name="f1709" value="3"></td>
                                    <td><input type="radio" name="f1709" value="4"></td>
                                    <td><input type="radio" name="f1709" value="5"></td>
                                    <td>Ketrampilan komputer <span class="hl">f17-9 f17-10b</span></td>
                                    <td><input type="radio" name="f1710b" value="1"></td>
                                    <td><input type="radio" name="f1710b" value="2"></td>
                                    <td><input type="radio" name="f1710b" value="3"></td>
                                    <td><input type="radio" name="f1710b" value="4"></td>
                                    <td><input type="radio" name="f1710b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1711" value="1"></td>
                                    <td><input type="radio" name="f1711" value="2"></td>
                                    <td><input type="radio" name="f1711" value="3"></td>
                                    <td><input type="radio" name="f1711" value="4"></td>
                                    <td><input type="radio" name="f1711" value="5"></td>
                                    <td>Berpikir kritis <span class="hl">f17-11 f17-12b</span></td>
                                    <td><input type="radio" name="f1712b" value="1"></td>
                                    <td><input type="radio" name="f1712b" value="2"></td>
                                    <td><input type="radio" name="f1712b" value="3"></td>
                                    <td><input type="radio" name="f1712b" value="4"></td>
                                    <td><input type="radio" name="f1712b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1713" value="1"></td>
                                    <td><input type="radio" name="f1713" value="2"></td>
                                    <td><input type="radio" name="f1713" value="3"></td>
                                    <td><input type="radio" name="f1713" value="4"></td>
                                    <td><input type="radio" name="f1713" value="5"></td>
                                    <td>Ketrampilan riset <span class="hl">f17-13 f17-14b</span> </td>
                                    <td><input type="radio" name="f1714b" value="1"></td>
                                    <td><input type="radio" name="f1714b" value="2"></td>
                                    <td><input type="radio" name="f1714b" value="3"></td>
                                    <td><input type="radio" name="f1714b" value="4"></td>
                                    <td><input type="radio" name="f1714b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1715" value="1"></td>
                                    <td><input type="radio" name="f1715" value="2"></td>
                                    <td><input type="radio" name="f1715" value="3"></td>
                                    <td><input type="radio" name="f1715" value="4"></td>
                                    <td><input type="radio" name="f1715" value="5"></td>
                                    <td>Kemampuan belajar <span class="hl">f17-15 f17-16b</span></td>
                                    <td><input type="radio" name="f1716b" value="1"></td>
                                    <td><input type="radio" name="f1716b" value="2"></td>
                                    <td><input type="radio" name="f1716b" value="3"></td>
                                    <td><input type="radio" name="f1716b" value="4"></td>
                                    <td><input type="radio" name="f1716b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1717" value="1"></td>
                                    <td><input type="radio" name="f1717" value="2"></td>
                                    <td><input type="radio" name="f1717" value="3"></td>
                                    <td><input type="radio" name="f1717" value="4"></td>
                                    <td><input type="radio" name="f1717" value="5"></td>
                                    <td>Kemampuan berkomunikasi <span class="hl">f17-17 f17-18b</span></td>
                                    <td><input type="radio" name="f1718b" value="1"></td>
                                    <td><input type="radio" name="f1718b" value="2"></td>
                                    <td><input type="radio" name="f1718b" value="3"></td>
                                    <td><input type="radio" name="f1718b" value="4"></td>
                                    <td><input type="radio" name="f1718b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1719" value="1"></td>
                                    <td><input type="radio" name="f1719" value="2"></td>
                                    <td><input type="radio" name="f1719" value="3"></td>
                                    <td><input type="radio" name="f1719" value="4"></td>
                                    <td><input type="radio" name="f1719" value="5"></td>
                                    <td>Bekerja di bawah tekanan <span class="hl">f17-19 f17-20b</span></td>
                                    <td><input type="radio" name="f1720b" value="1"></td>
                                    <td><input type="radio" name="f1720b" value="2"></td>
                                    <td><input type="radio" name="f1720b" value="3"></td>
                                    <td><input type="radio" name="f1720b" value="4"></td>
                                    <td><input type="radio" name="f1720b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1721" value="1"></td>
                                    <td><input type="radio" name="f1721" value="2"></td>
                                    <td><input type="radio" name="f1721" value="3"></td>
                                    <td><input type="radio" name="f1721" value="4"></td>
                                    <td><input type="radio" name="f1721" value="5"></td>
                                    <td>Manajemen waktu <span class="hl">f17-21 f17-22b</span></td>
                                    <td><input type="radio" name="f1722b" value="1"></td>
                                    <td><input type="radio" name="f1722b" value="2"></td>
                                    <td><input type="radio" name="f1722b" value="3"></td>
                                    <td><input type="radio" name="f1722b" value="4"></td>
                                    <td><input type="radio" name="f1722b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1723" value="1"></td>
                                    <td><input type="radio" name="f1723" value="2"></td>
                                    <td><input type="radio" name="f1723" value="3"></td>
                                    <td><input type="radio" name="f1723" value="4"></td>
                                    <td><input type="radio" name="f1723" value="5"></td>
                                    <td>Bekerja secara mandiri <span class="hl">f17-23 f17-24b</span></td>
                                    <td><input type="radio" name="f1724b" value="1"></td>
                                    <td><input type="radio" name="f1724b" value="2"></td>
                                    <td><input type="radio" name="f1724b" value="3"></td>
                                    <td><input type="radio" name="f1724b" value="4"></td>
                                    <td><input type="radio" name="f1724b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1725" value="1"></td>
                                    <td><input type="radio" name="f1725" value="2"></td>
                                    <td><input type="radio" name="f1725" value="3"></td>
                                    <td><input type="radio" name="f1725" value="4"></td>
                                    <td><input type="radio" name="f1725" value="5"></td>
                                    <td>Bekerja dalam tim/bekerjasama dengan orang lain <span class="hl">f17-25 f17-26b</span></td>
                                    <td><input type="radio" name="f1726b" value="1"></td>
                                    <td><input type="radio" name="f1726b" value="2"></td>
                                    <td><input type="radio" name="f1726b" value="3"></td>
                                    <td><input type="radio" name="f1726b" value="4"></td>
                                    <td><input type="radio" name="f1726b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1727" value="1"></td>
                                    <td><input type="radio" name="f1727" value="2"></td>
                                    <td><input type="radio" name="f1727" value="3"></td>
                                    <td><input type="radio" name="f1727" value="4"></td>
                                    <td><input type="radio" name="f1727" value="5"></td>
                                    <td>Kemampuan dalam memecahkan masalah <span class="hl">f17-27 f17-28b</span></td>
                                    <td><input type="radio" name="f1728b" value="1"></td>
                                    <td><input type="radio" name="f1728b" value="2"></td>
                                    <td><input type="radio" name="f1728b" value="3"></td>
                                    <td><input type="radio" name="f1728b" value="4"></td>
                                    <td><input type="radio" name="f1728b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1729" value="1"></td>
                                    <td><input type="radio" name="f1729" value="2"></td>
                                    <td><input type="radio" name="f1729" value="3"></td>
                                    <td><input type="radio" name="f1729" value="4"></td>
                                    <td><input type="radio" name="f1729" value="5"></td>
                                    <td>Negosiasi <span class="hl">f17-29 f17-30b</span></td>
                                    <td><input type="radio" name="f1730b" value="1"></td>
                                    <td><input type="radio" name="f1730b" value="2"></td>
                                    <td><input type="radio" name="f1730b" value="3"></td>
                                    <td><input type="radio" name="f1730b" value="4"></td>
                                    <td><input type="radio" name="f1730b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1731" value="1"></td>
                                    <td><input type="radio" name="f1731" value="2"></td>
                                    <td><input type="radio" name="f1731" value="3"></td>
                                    <td><input type="radio" name="f1731" value="4"></td>
                                    <td><input type="radio" name="f1731" value="5"></td>
                                    <td>Kemampuan analisis <span class="hl">f17-31 f17-32b</span></td>
                                    <td><input type="radio" name="f1732b" value="1"></td>
                                    <td><input type="radio" name="f1732b" value="2"></td>
                                    <td><input type="radio" name="f1732b" value="3"></td>
                                    <td><input type="radio" name="f1732b" value="4"></td>
                                    <td><input type="radio" name="f1732b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1733" value="1"></td>
                                    <td><input type="radio" name="f1733" value="2"></td>
                                    <td><input type="radio" name="f1733" value="3"></td>
                                    <td><input type="radio" name="f1733" value="4"></td>
                                    <td><input type="radio" name="f1733" value="5"></td>
                                    <td>Toleransi <span class="hl">f17-33 f17-34b</span></td>
                                    <td><input type="radio" name="f1734b" value="1"></td>
                                    <td><input type="radio" name="f1734b" value="2"></td>
                                    <td><input type="radio" name="f1734b" value="3"></td>
                                    <td><input type="radio" name="f1734b" value="4"></td>
                                    <td><input type="radio" name="f1734b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1735" value="1"></td>
                                    <td><input type="radio" name="f1735" value="2"></td>
                                    <td><input type="radio" name="f1735" value="3"></td>
                                    <td><input type="radio" name="f1735" value="4"></td>
                                    <td><input type="radio" name="f1735" value="5"></td>
                                    <td>Kemampuan adaptasi <span class="hl">f17-35 f17-36b</span></td>
                                    <td><input type="radio" name="f1736b" value="1"></td>
                                    <td><input type="radio" name="f1736b" value="2"></td>
                                    <td><input type="radio" name="f1736b" value="3"></td>
                                    <td><input type="radio" name="f1736b" value="4"></td>
                                    <td><input type="radio" name="f1736b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1737" value="1"></td>
                                    <td><input type="radio" name="f1737" value="2"></td>
                                    <td><input type="radio" name="f1737" value="3"></td>
                                    <td><input type="radio" name="f1737" value="4"></td>
                                    <td><input type="radio" name="f1737" value="5"></td>
                                    <td>Loyalitas<span class="hl">f17-37 f17-38b</span></td>
                                    <td><input type="radio" name="f1738b" value="1"></td>
                                    <td><input type="radio" name="f1738b" value="2"></td>
                                    <td><input type="radio" name="f1738b" value="3"></td>
                                    <td><input type="radio" name="f1738b" value="4"></td>
                                    <td><input type="radio" name="f1738b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1737a" value="1"></td>
                                    <td><input type="radio" name="f1737a" value="2"></td>
                                    <td><input type="radio" name="f1737a" value="3"></td>
                                    <td><input type="radio" name="f1737a" value="4"></td>
                                    <td><input type="radio" name="f1737a" value="5"></td>
                                    <td>Integritas <span class="hl">f17-37A f17-38ba</span></td>
                                    <td><input type="radio" name="f1738ba" value="1"></td>
                                    <td><input type="radio" name="f1738ba" value="2"></td>
                                    <td><input type="radio" name="f1738ba" value="3"></td>
                                    <td><input type="radio" name="f1738ba" value="4"></td>
                                    <td><input type="radio" name="f1738ba" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1739" value="1"></td>
                                    <td><input type="radio" name="f1739" value="2"></td>
                                    <td><input type="radio" name="f1739" value="3"></td>
                                    <td><input type="radio" name="f1739" value="4"></td>
                                    <td><input type="radio" name="f1739" value="5"></td>
                                    <td>Bekerja dengan orang yang berbeda budaya maupun latar belakang <span class="hl">f17-39 f17-40b</span></td>
                                    <td><input type="radio" name="f1740b" value="1"></td>
                                    <td><input type="radio" name="f1740b" value="2"></td>
                                    <td><input type="radio" name="f1740b" value="3"></td>
                                    <td><input type="radio" name="f1740b" value="4"></td>
                                    <td><input type="radio" name="f1740b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1741" value="1"></td>
                                    <td><input type="radio" name="f1741" value="2"></td>
                                    <td><input type="radio" name="f1741" value="3"></td>
                                    <td><input type="radio" name="f1741" value="4"></td>
                                    <td><input type="radio" name="f1741" value="5"></td>
                                    <td>Kepemimpinan <span class="hl">f17-41 f17-42b</span></td>
                                    <td><input type="radio" name="f1742b" value="1"></td>
                                    <td><input type="radio" name="f1742b" value="2"></td>
                                    <td><input type="radio" name="f1742b" value="3"></td>
                                    <td><input type="radio" name="f1742b" value="4"></td>
                                    <td><input type="radio" name="f1742b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1743" value="1"></td>
                                    <td><input type="radio" name="f1743" value="2"></td>
                                    <td><input type="radio" name="f1743" value="3"></td>
                                    <td><input type="radio" name="f1743" value="4"></td>
                                    <td><input type="radio" name="f1743" value="5"></td>
                                    <td>Kemampuan dalam memegang tanggungjawab <span class="hl">f17-43 f17-44b</span></td>
                                    <td><input type="radio" name="f1744b" value="1"></td>
                                    <td><input type="radio" name="f1744b" value="2"></td>
                                    <td><input type="radio" name="f1744b" value="3"></td>
                                    <td><input type="radio" name="f1744b" value="4"></td>
                                    <td><input type="radio" name="f1744b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1745" value="1"></td>
                                    <td><input type="radio" name="f1745" value="2"></td>
                                    <td><input type="radio" name="f1745" value="3"></td>
                                    <td><input type="radio" name="f1745" value="4"></td>
                                    <td><input type="radio" name="f1745" value="5"></td>
                                    <td>Inisiatif <span class="hl">f17-45 f17-46b</span></td>
                                    <td><input type="radio" name="f1746b" value="1"></td>
                                    <td><input type="radio" name="f1746b" value="2"></td>
                                    <td><input type="radio" name="f1746b" value="3"></td>
                                    <td><input type="radio" name="f1746b" value="4"></td>
                                    <td><input type="radio" name="f1746b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1747" value="1"></td>
                                    <td><input type="radio" name="f1747" value="2"></td>
                                    <td><input type="radio" name="f1747" value="3"></td>
                                    <td><input type="radio" name="f1747" value="4"></td>
                                    <td><input type="radio" name="f1747" value="5"></td>
                                    <td>Manajemen proyek/program <span class="hl">f17-47 f17-48b</span></td>
                                    <td><input type="radio" name="f1748b" value="1"></td>
                                    <td><input type="radio" name="f1748b" value="2"></td>
                                    <td><input type="radio" name="f1748b" value="3"></td>
                                    <td><input type="radio" name="f1748b" value="4"></td>
                                    <td><input type="radio" name="f1748b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1749" value="1"></td>
                                    <td><input type="radio" name="f1749" value="2"></td>
                                    <td><input type="radio" name="f1749" value="3"></td>
                                    <td><input type="radio" name="f1749" value="4"></td>
                                    <td><input type="radio" name="f1749" value="5"></td>
                                    <td>Kemampuan untuk memresentasikan ide/produk/laporan <span class="hl">f17-49 f17-50b</span></td>
                                    <td><input type="radio" name="f1750b" value="1"></td>
                                    <td><input type="radio" name="f1750b" value="2"></td>
                                    <td><input type="radio" name="f1750b" value="3"></td>
                                    <td><input type="radio" name="f1750b" value="4"></td>
                                    <td><input type="radio" name="f1750b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1751" value="1"></td>
                                    <td><input type="radio" name="f1751" value="2"></td>
                                    <td><input type="radio" name="f1751" value="3"></td>
                                    <td><input type="radio" name="f1751" value="4"></td>
                                    <td><input type="radio" name="f1751" value="5"></td>
                                    <td>Kemampuan dalam menulis laporan, memo dan dokumen <span class="hl">f17-51 f17-52b</span></td>
                                    <td><input type="radio" name="f1752b" value="1"></td>
                                    <td><input type="radio" name="f1752b" value="2"></td>
                                    <td><input type="radio" name="f1752b" value="3"></td>
                                    <td><input type="radio" name="f1752b" value="4"></td>
                                    <td><input type="radio" name="f1752b" value="5"></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="f1753" value="1"></td>
                                    <td><input type="radio" name="f1753" value="2"></td>
                                    <td><input type="radio" name="f1753" value="3"></td>
                                    <td><input type="radio" name="f1753" value="4"></td>
                                    <td><input type="radio" name="f1753" value="5"></td>
                                    <td>Kemampuan untuk terus belajar sepanjang hayat <span class="hl">f17-53 f17-54b</span></td>
                                    <td><input type="radio" name="f1754b" value="1"></td>
                                    <td><input type="radio" name="f1754b" value="2"></td>
                                    <td><input type="radio" name="f1754b" value="3"></td>
                                    <td><input type="radio" name="f1754b" value="4"></td>
                                    <td><input type="radio" name="f1754b" value="5"></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <input type="hidden" name="userid" value=<?php echo !empty($userid)?$userid:''; ?>>
        <button data-toggle="modal" href='#modal-tutup' id="save" type="submit" class="btn btn-md btn-success">
            <icon class="fa fa-floppy-o"></icon> Simpan
        </button>
        <a href="#" id="cancel_edit" class="btn btn-md btn-danger batal" style=""><i class="glyphicon glyphicon-remove"></i> Batal</a>
    </div>
</div>
<?php echo form_close();?>
<!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-tutup'>Trigger modal</a> -->
<div class="modal fade" id="modal-tutup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="alert alert-success">
                    <button type="button" class="btnclose close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <strong>Sukses!</strong>Data telah disimpan. Terima kasih atas partisipasi Anda..
                </div>
            </div>
            <div class="modal-footer ">
                <p class="text-center">
                    <button type="button" class="btnclose btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Tutup</button>
                </p>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->