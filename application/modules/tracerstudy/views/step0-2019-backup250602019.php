<?php echo form_open(base_url('tracerstudy/submit'),'role="form" class="form-horizontal" id="form_jawab_mhs" '); ?>
<?php //print_r($detail); ?>
<div class="panel panel-info">
    <div class="panel-body">
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              
                 <h4>Identitas Alumni</h4><span class="h">F1</span>
            <!-- <input type="hidden" value='1' id="ajax" name="ajax"> -->
                <div class="input-group">
                    <label for="nim" class="col-sm-12 col-md-6">Nomor Mahasiswa:</label>
                    <input type="text" class="col-sm-12 col-md-6 form-control text-muted" value="<?php echo !empty($detail['nim'])?$detail['nim']:'' ?>" name="nim" id="nim" size="20" readonly="readonly">
                </div>
                <div class="input-group">
                    <label for="kdptimsmh" class="col-sm-12 col-md-6">Kode PT:</label>
                    <input type="text" class="col-sm-12 col-md-6 form-control text-muted" value="071030" name="kdptimsmh" id="kdptimsmh" size="20" readonly="readonly">
                    
                </div>
                <div class="input-group">
                    <label for="tahun_lulus" class="col-sm-12 col-md-6">Tahun Lulus:</label>
                    <input type="text" class="col-sm-12 col-md-6 form-control text-muted" value="<?php echo !empty($detail['tahun_lulus'])?$detail['tahun_lulus']:'' ?>" name="tahun_lulus" id="tahun_lulus" size="20" readonly="readonly">
                </div>
                <div class="input-group">
                    <label for="kdpstmsmh" class="col-sm-12 col-md-6">Kode Prodi:</label>
                    <input type="text" class="col-sm-12 col-md-6 form-control text-muted" value="<?php echo !empty($detail['kdpstmsmh'])?$detail['kdpstmsmh']:'' ?>" name="kdpstmsmh" id="kdpstmsmh" size="20" readonly="readonly">
                    <div class="input-group-append">
<span class="input-group-text"><strong><?php echo !empty($detail['jurusan'])?$detail['jurusan']:'' ?></strong></span>
</div>
                </div>
                <div class="input-group">
                    
                    <label for="nmmhsmsmh" class="col-sm-12 col-md-6">Nama:</label>
                    <input type="text" class="col-sm-12 col-md-6 form-control text-muted" value="<?php echo !empty($detail['nmmhsmsmh'])?$detail['nmmhsmsmh']:'' ?>" name="nmmhsmsmh" id="nmmhsmsmh" size="20">
                </div>
                <div class="input-group">
                    <label for="telpomsmh" class="col-sm-12 col-md-6">Nomor Telepon/HP:</label>
                    <input type="text" class="col-sm-12 col-md-6 form-control text-muted" value="<?php echo !empty($detail['telpomsmh'])?$detail['telpomsmh']:'' ?>" name="telpomsmh" id="telpomsmh" size="20" readonly="readonly">
                </div>
                <div class="input-group">
                    <label for="emailmsmh" class="col-sm-12 col-md-6">Alamat Email:</label>
                    <input type="text" class="col-sm-12 col-md-6 form-control text-muted" value="<?php echo !empty($detail['emailmsmh'])?$detail['emailmsmh']:'' ?>" name="emailmsmh" id="emailmsmh" size="40" readonly="readonly">
                </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h4>Keterangan Tempat Kerja/Usaha</h4><span class="h">Mohon untuk dapat mengisi kolom berikut</span>
                <div class="input-group">
                    <label for="namakantor" class="col-sm-12 col-md-6">Nama Kantor/Institusi/Perusahaan Sekarang</label>
                    <input type="text" class="col-sm-12 col-md-6 form-control" value="<?php echo !empty($detail['namakantor'])?$detail['namakantor']:'' ?>" name="namakantor" id="namakantor" placeholder="Masukkan Nama Perusahaan/Usaha">
                </div>
                <div class="input-group">
                    <label for="namausaha" class="col-sm-12 col-md-6">Nama Usaha (Jika Memiliki usaha/bisnis/wirausaha)</label>
                    <input type="text" class="col-sm-12 col-md-6 form-control" value="<?php echo !empty($detail['namausaha'])?$detail['namausaha']:'' ?>" name="namausaha" id="namausaha" placeholder="Masukkan Nama Usaha Anda">
                </div>
                <div class="input-group">
                    <label for="alamatkerja" class="col-sm-12 col-md-6">Alamat Tempat Kerja/Usaha</label>
                    <input type="text" class="col-sm-12 col-md-6 form-control" value="<?php echo !empty($detail['alamatkerja'])?$detail['alamatkerja']:'' ?>" name="alamatkerja" id="alamatkerja" placeholder="Masukkan Alamat Kerja/Usaha">
                </div>
                <div class="input-group">
                    <label for="jabatankerja" class="col-sm-12 col-md-6">Jabatan</label>
                    <input type="text" class="col-sm-12 col-md-6 form-control" value="<?php echo !empty($detail['jabatankerja'])?$detail['jabatankerja']:'' ?>" name="jabatankerja" id="jabatankerja" placeholder="Masukkan Jabatan Kerja">
                </div>
                <div class="input-group">
                    
                    <label for="emailkerja" class="col-sm-12 col-md-6">Email Tempat Kerja/bisnis: (Jika Ada) </label>
                    <input type="email" class="col-sm-12 col-md-6 form-control" value="<?php echo !empty($detail['emailkerja'])?$detail['emailkerja']:'' ?>" name="emailkerja" id="emailkerja" placeholder="Masukkan Email Tempat Kerja">
                    
                </div>
                <div class="input-group">
                    <label for="nohpcp" class="col-sm-12 col-md-6">Nomor Telepon/HP:</label>
                    <input type="tel" class="col-sm-12 col-md-6 form-control" value="<?php echo !empty($detail['nohpcp'])?$detail['nohpcp']:'' ?>" name="nohpcp" id="nohpcp" placeholder="Masukkan No HP Contact Person">
                </div>
                <div class="input-group">
                    <label for="namacp" class="col-sm-12 col-md-6">Nama Kontak (Contact Person)</label>
                    <input type="text" class="col-sm-12 col-md-6 form-control" value="<?php echo !empty($detail['namacp'])?$detail['namacp']:'' ?>" size="40" name="namacp" id="namacp" placeholder="Masukkan Nama Contact Person">
                </div>
                 
             </div>
          
            
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
                <h4 class="text-center">Kuisioner Wajib</h4>
            </div>
            
        </div>

        <table class="table table-striped table-responsive">
            <tbody>
                
            
                
              
                <tr>
                    <td colspan="4"><b>Kuisioner Opsional</b></td>
                </tr>
                <!-- F2 -->
                <tr id="f2">
                    <td class="h">f2</td>
                    <td valign="top" colspan="3">
                        <h4>Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?</h4> 
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <table class="table table-striped table-responsive">
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><b>Perkuliahan</b> <span class="hl">f21</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <div class="kt-radio-list">
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [1] Sangat Besar
                                                            <input type="radio" name="f21" value="1"><span></span>
                                                        </label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [2] Besar
                                                            <input type="radio" name="f21" value="2"><span></span>
                                                        </label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [3] Cukup Besar
                                                            <input type="radio" name="f21" value="3"><span></span>
                                                        </label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [4] Kurang
                                                            <input type="radio" name="f21" value="4"><span></span>
                                                        </label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [5] Tidak Sama Sekali
                                                            <input type="radio" name="f21" value="5"><span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="hl">f21</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <table class="table table-striped table-responsive">
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><b>Demonstrasi</b> <span class="hl">f22</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <div class="kt-radio-list">
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [1] Sangat Besar<br>
                                                            <input type="radio" name="f22" value="1"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [2] Besar<br>
                                                            <input type="radio" name="f22" value="2"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [3] Cukup Besar<br>
                                                            <input type="radio" name="f22" value="3"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [4] Kurang<br>
                                                            <input type="radio" name="f22" value="4"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [5] Tidak Sama Sekali<br>
                                                            <input type="radio" name="f22" value="5"><span></span></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="hl">f22</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <table class="table table-striped table-responsive">
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><b>Partisipasi dalam proyek riset</b> <span class="hl">f23</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <div class="kt-radio-list">
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [1] Sangat Besar<br>
                                                            <input type="radio" name="f23" value="1"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [2] Besar<br>
                                                            <input type="radio" name="f23" value="2"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [3] Cukup Besar<br>
                                                            <input type="radio" name="f23" value="3"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [4] Kurang<br>
                                                            <input type="radio" name="f23" value="4"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [5] Tidak Sama Sekali<br>
                                                            <input type="radio" name="f23" value="5"><span></span></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="hl">f23</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                    <table class="table table-striped table-responsive">
                                        <tbody>
                                            <tr>
                                                <td colspan="2"><b>Magang</b> <span class="hl">f24</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <div class="kt-radio-list">
                                                            <label class="kt-radio kt-radio--bold kt-radio--brand"> [1] Sangat Besar<br>
                                                                <input type="radio" name="f24" value="1"><span></span></label>
                                                            <label class="kt-radio kt-radio--bold kt-radio--brand"> [2] Besar<br>
                                                                <input type="radio" name="f24" value="2"><span></span></label>
                                                            <label class="kt-radio kt-radio--bold kt-radio--brand"> [3] Cukup Besar<br>
                                                                <input type="radio" name="f24" value="3"><span></span></label>
                                                            <label class="kt-radio kt-radio--bold kt-radio--brand"> [4] Kurang<br>
                                                                <input type="radio" name="f24" value="4"><span></span></label>
                                                            <label class="kt-radio kt-radio--bold kt-radio--brand"> [5] Tidak Sama Sekali<br>
                                                                <input type="radio" name="f24" value="5"><span></span></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="hl">f24</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                       <div class="row">
                           <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <table class="table table-striped table-responsive">
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><b>Praktikum</b> <span class="hl">f25</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <div class="kt-radio-list">
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [1] Sangat Besar<br>
                                                            <input type="radio" name="f25" value="1"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [2] Besar<br>
                                                            <input type="radio" name="f25" value="2"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [3] Cukup Besar<br>
                                                            <input type="radio" name="f25" value="3"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [4] Kurang<br>
                                                            <input type="radio" name="f25" value="4"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [5] Tidak Sama Sekali<br>
                                                            <input type="radio" name="f25" value="5"><span></span></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="hl">f25</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                           <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> 

                                <table class="table table-striped table-responsive">
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><b>Kerja Lapangan</b> <span class="hl">f26</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <div class="kt-radio-list">
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [1] Sangat Besar<br>
                                                            <input type="radio" name="f26" value="1"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [2] Besar<br>
                                                            <input type="radio" name="f26" value="2"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [3] Cukup Besar<br>
                                                            <input type="radio" name="f26" value="3"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [4] Kurang<br>
                                                            <input type="radio" name="f26" value="4"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [5] Tidak Sama Sekali<br>
                                                            <input type="radio" name="f26" value="5"><span></span></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="hl">f26</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                           <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <table class="table table-striped table-responsive">
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><b>Diskusi</b> <span class="hl">f27</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <div class="kt-radio-list">
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [1] Sangat Besar<br>
                                                            <input type="radio" name="f27" value="1"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [2] Besar<br>
                                                            <input type="radio" name="f27" value="2"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [3] Cukup Besar<br>
                                                            <input type="radio" name="f27" value="3"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [4] Kurang<br>
                                                            <input type="radio" name="f27" value="4"><span></span></label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [5] Tidak Sama Sekali<br>
                                                            <input type="radio" name="f27" value="5"><span></span></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="hl">f27</span></td>
                                        </tr>
                                    </tbody>
                                </table>

                           </div>
                       </div>

                     
                       
                       
                        
                       
                        
                    </td>
                </tr>
                <!-- End F2 -->
                <!-- F3 -->
                <tr>
                    <td id="f3" class="h">f3</td>
                    <td valign="top" colspan="3"><h5>Kapan anda mulai mencari pekerjaan? <i>Mohon pekerjaan sambilan tidak dimasukkan</i></h5>
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="hl">f301</span>&nbsp;&nbsp;
                                            <label class="kt-radio kt-radio-bold kt-radio--brand">[1] Kira-kira <input id="f301" type="radio" name="f301" value="1" onclick="show3()"><span></span> </label> 
                                            <div class="input-group">
                                                
                                                <select name="f302" id="f302" class="form-control" required="required">
                                                    <option value="0">Pilih x Bulan</option>
                                                    <option value="1">1 Bulan</option>
                                                    <option value="2">2 Bulan</option>
                                                    <option value="3">3 Bulan</option>
                                                    <option value="4">4 Bulan</option>
                                                    <option value="5">5 Bulan</option>
                                                    <option value="6">6 Bulan</option>
                                                    <option value="7">7 Bulan</option>
                                                    <option value="8">8 Bulan</option>
                                                    <option value="9">9 Bulan</option>
                                                    <option value="10">10 Bulan</option>
                                                    <option value="11">11 Bulan</option>
                                                    <option value="12">12 Bulan</option>
                                                    
                                                </select>
                                                <div class="input-group-append">
                                                    <span class="input-group-text text-info">
                                                        
                                                &nbsp;bulan sebelum lulus &nbsp;&nbsp;<span class="hl">f302</span>
                                                    </span>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="hl">f301</span>&nbsp;&nbsp;
                                            <label class="kt-radio kt-radio-bold kt-radio--brand">[2] Kira-kira<input id="f302" type="radio" name="f301" value="2" onclick="show3()"><span></span>  </label>
                                            <div class="input-group">
                                                
                                                <select name="f303" id="f303" class="form-control" required="required">
                                                    <option value="0">Pilih x Bulan</option>
                                                    <option value="1">1 Bulan</option>
                                                    <option value="2">2 Bulan</option>
                                                    <option value="3">3 Bulan</option>
                                                    <option value="4">4 Bulan</option>
                                                    <option value="5">5 Bulan</option>
                                                    <option value="6">6 Bulan</option>
                                                    <option value="7">7 Bulan</option>
                                                    <option value="8">8 Bulan</option>
                                                    <option value="9">9 Bulan</option>
                                                    <option value="10">10 Bulan</option>
                                                    <option value="11">11 Bulan</option>
                                                    <option value="12">12 Bulan</option>
                                                    
                                                </select>
                                                <div class="input-group-append">
                                                    <span class="input-group-text text-info">
                                                        
                                                &nbsp;bulan setelah lulus &nbsp;&nbsp;<span class="hl">f303</span>
                                                    </span>
                                                </div>
                                            </div>
                                              
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="hl">f301</span>&nbsp;&nbsp;
                                        <label class="kt-radio kt-radio-bold kt-radio--brand">[3] Saya tidak mencari kerja<input id="f303" type="radio" name="f301" value="3" onclick="hide3()"> <span></span></label> (<i>Langsung ke pertanyaan f8</i>)</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <!-- End F3 -->
                <!-- F4 -->
                
                <tr id="f4" style="display: none;">
                    <td class="h">f4</td>
                    <td valign="top"  colspan="3"><h5>Bagaimana anda mencari pekerjaan tersebut?</h5>
                        <i>Jawaban bisa lebih dari satu</i>
                        <table class="table table-striped table-responsive" style="padding:5px;">
                            <tbody>
                                <tr>
                                    <td>
                                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [1] Melalui iklan di koran/majalah, brosur 
                                            <input name="f401" type="checkbox" value="1"><span></span></label><span class="hl">&nbsp;&nbsp;f4-01</span><br>
                                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [1] Melamar ke perusahaan tanpa mengetahui lowongan yang ada 
                                            <input name="f402" type="checkbox" value="1"><span></span></label><span class="hl">&nbsp;&nbsp;f4-02</span><br>
                                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [1] Pergi ke bursa/pameran kerja 
                                            <input name="f403" type="checkbox" value="1"><span></span></label><span class="hl">&nbsp;&nbsp;f4-03</span><br>
                                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [1] Mencari lewat internet/iklan online/milis 
                                            <input name="f404" type="checkbox" value="1"><span></span></label><span class="hl">&nbsp;&nbsp;f4-04</span><br>
                                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [1] Dihubungi oleh perusahaan
                                            <input name="f405" type="checkbox" value="1"><span></span></label><span class="hl">&nbsp;&nbsp;f4-05</span><br>
                                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [1] Menghubungi Kemenakertrans
                                            <input name="f406" type="checkbox" value="1"><span></span></label><span class="hl">&nbsp;&nbsp;f4-06</span><br>
                                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [1] Menghubungi agen tenaga kerja komersial/swasta
                                            <input name="f407" type="checkbox" value="1"><span></span></label><span class="hl">&nbsp;&nbsp;f4-07</span><br>
                                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [1] Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas 
                                            <input name="f408" type="checkbox" value="1"><span></span></label><span class="hl">&nbsp;&nbsp;f4-08</span><br>
                                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [1] Menghubungi kantor kemahasiswaan/hubungan alumni 
                                            <input name="f409" type="checkbox" value="1"><span></span></label><span class="hl">&nbsp;&nbsp;f4-09</span><br>
                                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [1] Membangun jejaring (<i>network</i>) sejak masih kuliah 
                                            <input name="f410" type="checkbox" value="1"><span></span></label><span class="hl">&nbsp;&nbsp;f4-10</span><br>
                                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [1] Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)
                                            <input name="f411" type="checkbox" value="1"><span></span></label><span class="hl">&nbsp;&nbsp;f4-11</span><br>
                                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [1] Membangun bisnis sendiri
                                            <input name="f412" type="checkbox" value="1"><span></span></label><span class="hl">&nbsp;&nbsp;f4-12</span><br>
                                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [1] Melalui penempatan kerja atau magang
                                            <input name="f413" type="checkbox" value="1"><span></span></label><span class="hl">&nbsp;&nbsp;f4-13</span><br>
                                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [1] Bekerja di tempat yang sama dengan tempat kerja semasa kuliah 
                                            <input name="f414" type="checkbox" value="1"><span></span></label><span class="hl">&nbsp;&nbsp;f4-14</span><br>
                                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [1] Lainnya: 
                                            <input name="f415" type="checkbox" value="1"><span></span></label><span class="hl">&nbsp;&nbsp;f4-15</span>
                                    </td>
                                    <td><span class="h"></span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" size="40" name="f416" value=""></td>
                                    <td><span class="hl">&nbsp;&nbsp;f4-16</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>

                <!-- F5 -->
                <tr id="f5" style="display: none;">
                    <td class="h">f5</td>
                    <td valign="top" colspan="3">
                        <h4>Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama?</h4>
                        <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <label class="kt-radio kt-radio--single kt-radio--success">
                                                <input type="radio" name="f501" value="1">
                                            <span></span>
                                        </label>
                                        </span>
                                        <span class="input-group-text">[1] Kira-kira</span>
                                    </div>
                                     <input type="text" class="form-control" name="f502" size="5" value="" aria-label="Text input with radio"> 
                                     <div class="input-group-append">
                                     
                                        <span class="input-group-text">Bulan sebelum lulus ujian &nbsp;&nbsp; <span class="hl">(f5-01, f5-02)</span><br></span>
                                    </div>
                                </div>
                            </div>
                          <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <label class="kt-radio kt-radio--single kt-radio--success">
                                                <input type="radio" name="f501" value="2">
                                            <span></span>
                                        </label>
                                        </span>
                                        <span class="input-group-text">[2] Kira-kira</span>
                                    </div>
                                     <input type="text" class="form-control" name="f503" size="5" value="" aria-label="Text input with radio"> 
                                     <div class="input-group-append">
                                     
                                        <span class="input-group-text">Bulan setelah lulus ujian &nbsp;&nbsp; <span class="hl">(f5-01, f5-02)</span><br></span>
                                    </div>
                                </div>
                            </div>
                    
                    </td>
                </tr>

                <!-- F6 -->
                <tr id="f6" style="display: none;">
                    <td class="h">f6</td>
                    <td valign="top" colspan="3"><h5>Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama ?</h5>
                    <input type="text" class="form-control" name="f6" size="5" value=""> perusahaan/instansi/institusi
                    </td>
                </tr>
                <!-- F7 -->
                <tr id="f7" style="display: none;">
                    <td class="h">f7</td>
                    <td valign="top" colspan="3"><h5>Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda?</h5>
                     <input type="text" class="form-control" name="f7" size="5" value=""> perusahaan/instansi/institusi
                    </td>
                </tr>
                <tr id="f7a" style="display: none;">
                    <td class="h">f7a</td>
                    <td valign="top" colspan="3"><h5>Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?</h5>
                     <input type="text" class="form-control" name="f7a" size="5" value=""> perusahaan/instansi/institusi
                    </td>
                </tr>
  				<!-- End F7 -->
  				<!-- F8 -->
                <tr>
                    <td class="h">f8</td>
                    <td valign="top" colspan="3"><h5>Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)?</h5>
                    
                        <div class="form-group"><div class="kt-radio-list">
                            
                        
                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [1] Ya
                            <input type="radio" value="1" name="f8" valuetable="" table-striped="" table-responsive="1" onclick="hide1()"><span></span>
                        </label>
                        <label class="kt-radio kt-radio--bold kt-radio--brand"> [2] Tidak
                            <input type="radio" name="f8" value="2" onclick="show1()"><span></span>
                        </label>
                        </div></div>
                    </td>
                </tr>

                <!-- F9 -->
                <tr id="f9" style="display: none;">
                    <td class="h">f9</td>
                    <td valign="top">
                        <h5>Bagaimana anda menggambarkan situas colspan="3"i anda saat ini? <i> Jawaban bisa lebih dari satu</i></h5>
                    
                        <span>
                            <table class="table table-striped table-responsive">
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="kt-checkbox kt-checkbox--brand kt-checkbox--bold"> [1] Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana 
                                            <input type="checkbox" name="f901" value="1"><span></span></label>
                                            <span class="hl">f9-01</span><br>
                                            <label class="kt-checkbox kt-checkbox--brand kt-checkbox--bold"> [2] Saya menikah >
                                            <input type="checkbox" name="f902" value="2"><span></span></label
                                            <span class="hl">f9-02</span><br>
                                            <label class="kt-checkbox kt-checkbox--brand kt-checkbox--bold"> [3] Saya sibuk dengan keluarga dan anak-anak 
                                            <input type="checkbox" name="f903" value="3"><span></span></label>
                                            <span class="hl">f9-03</span><br>
                                            <label class="kt-checkbox kt-checkbox--brand kt-checkbox--bold"> [4] Saya sekarang sedang mencari pekerjaan 
                                            <input type="checkbox" name="f904" value="4"><span></span></label>
                                            <span class="hl">f9-04</span><br>
                                            <label class="kt-checkbox kt-checkbox--brand kt-checkbox--bold"> [5] Lainnya 
                                            <input type="checkbox" name="f905" value="5"><span></span></label>
                                            <span class="hl">f9-05</span><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="f906" size="60" maxlength="80" value=""> <span class="hl">f9-06</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </span></td>
                </tr>
                <!-- F10 -->
                <tr id="f10" style="display: none;">
                    <td class="h">f10</td>
                    <td valign="top">
                        <h5>Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir?</h5> <i> Pilihlah Satu Jawaban. KEMUDIAN LANJUT KE f17 </i>
                     colspan="3"
                        <span>
                            <table class="table table-striped table-responsive">
                                <tbody>
                                    <tr>
                                        <td>

                                            <div class="form-group">
                                                <div class="kt-radio-list">
                                                    
                                                
                                            <label class="kt-radio kt-radio--brand kt-radio-bold"> [1] Tidak<br>
                                            <input type="radio" name="f1001" value="1" onclick="hide2()"><span></span></label>
                                            <label class="kt-radio kt-radio--brand kt-radio-bold"> [2] Tidak, tapi saya sedang menunggu hasil lamaran kerja<br>
                                            <input type="radio" name="f1001" value="2" onclick="hide2()"><span></span></label>
                                            <label class="kt-radio kt-radio--brand kt-radio-bold"> [3] Ya, saya akan mulai bekerja dalam 2 minggu ke depan<br>
                                            <input type="radio" name="f1001" value="3" onclick="hide2()"><span></span></label>
                                            <label class="kt-radio kt-radio--brand kt-radio-bold"> [4] Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan<br>
                                            <input type="radio" name="f1001" value="4" onclick="hide2()"><span></span></label>
                                            <label class="kt-radio--brand kt-radio--bold kt-radio"> [5] Lainnya<br>
                                            <input type="radio" name="f1001" value="5"><span></span></label>
                                            </div>
                                            </div>
                                        </td>
                                        <td><span class="hl">f10-01</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="f1002" size="60" maxlength="80" value=""></td>
                                        <td><span class="hl">f10-02</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </span></td>
                </tr>
                <tr id="f11" style="display: table-row;">
                    <td class="h">f11</td>
                    <td valign="top" colspan="3"><h5>Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?</h5>
                    
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                        <div class="kt-radio-list">
                                            
                                        
                                        <label class="kt-radio--brand kt-radio--bold kt-radio"> [1] Instansi pemerintah (termasuk BUMN)<br>
                                        <input type="radio" name="f1101" value="1"><span></span></label>
                                        <label class="kt-radio--brand kt-radio--bold kt-radio"> [2] Organisasi non-profit/Lembaga Swadaya Masyarakat<br><input type="radio" name="f1101" value="2"><span></span></label>
                                        
                                        <label class="kt-radio--brand kt-radio--bold kt-radio"> [3] Perusahaan swasta<br>
                                        <input type="radio" name="f1101" value="3"><span></span></label>
                                        <label class="kt-radio--brand kt-radio--bold kt-radio"> [4] Wiraswasta/perusahaan sendiri<br>
                                        <input type="radio" name="f1101" value="4"><span></span></label>
                                        <label class="kt-radio--brand kt-radio--bold kt-radio"> [5] Lainnya, tuliskan:
                                        <input type="radio" name="f1101" value="5"><span></span></label>
                                        </div>
                                    </div>
                                    </td>
                                    <td><span class="hl">(f11-01)</span></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="f1102" value="" size="50"></td>
                                    <td><span class="hl">(f11-02)</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <!-- F12 -->
                <tr id="f12">
                    <td class="h">f12</td>
                    <td valign="top" colspan="3">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    

                                <h5>Sebutkan sumberdana dalam pembiayaan kuliah?</h5>
                                 <span class="hl">(f12-01)</span>
                    
                        <!-- <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td> -->
                                        <div class="form-group">
                                            <div class="kt-radio-list">
                                            
                                       
                                            <label class="kt-radio kt-radio--bold kt-radio--brand"> [1] Biaya Sendiri / Keluarga
                                                <input type="radio" name="f1201" value="1"><span></span></label>
                                            <label class="kt-radio kt-radio--bold kt-radio--brand"> [2] Beasiswa ADIK
                                                <input type="radio" name="f1201" value="2"><span></span></label>
                                            <label class="kt-radio kt-radio--bold kt-radio--brand"> [3] Beasiswa BIDIKMISI
                                                <input type="radio" name="f1201" value="3"><span></span></label>
                                            <label class="kt-radio kt-radio--bold kt-radio--brand"> [4] Beasiswa PPA
                                                <input type="radio" name="f1201" value="4"><span></span></label>
                                            <label class="kt-radio kt-radio--bold kt-radio--brand"> [5] Beasiswa AFIRMASI
                                                <input type="radio" name="f1201" value="5"><span></span></label>
                                            <label class="kt-radio kt-radio--bold kt-radio--brand"> [6] Beasiswa Perusahaan/Swasta
                                                <input type="radio" name="f1201" value="6"><span></span></label>
                                            <label class="kt-radio kt-radio--bold kt-radio--brand"> [7] Lainnya,
                                                <input type="radio" name="f1201" value="7"><span></span></label>
                                                </div> 
                                            </div>
                                        <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                            <input type="text" class="form-control" name="f1202" value="" size="50">
                                        </div>
                                            <span class="hl col-xs-12 col-md-2">(f12-02)</span>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                
                            </div>
                                <div class="">
                                            
                                        
                                </div>
                    </td>
                </tr>
                <!-- F13 -->
                <tr id="f13" style="display: table-row;">
                    <td class="h">f13</td>
                    <td valign="top" colspan="3"><h5>Kira-kira berapa pendapatan anda setiap bulannya?</h5>
                    	<div class="row">
                    		<div class="col-xs-12 col-sm-12 col-md-6">
                    			<div class="form-group ">
                                                         
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                         Dari Pekerjaan Utama
                                                                    </span>
                                                                    <span class="input-group-text">Rp</span>
                                                                </div>
                                                                <input type="text" class="form-control f1301"  name="f1301" value="0" size="20">
                                                                
                                                                <div class="input-group-append">
                                                                    
                                                                    <span class="input-group-text hl">(f13-01)</span> 
                                                                
                                                                </div>
                                                            </div>
                                                                <span class="errmsgf13 f1301 text-info">(Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)</span>
                                        </div>
                    		</div>
                    		

                    	</div>
                    	<div class="row">
                    		 <div class="col-xs-12 col-sm-12 col-md-6">
                    		 	<div class="form-group">
                    		 		
                    		 	
                                                         
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                         Dari Lembur dan Tips
                                                                    </span>
                                                                    <span class="input-group-text">Rp</span>
                                                                </div>
                                                                <input type="text" class="form-control f1302" name="f1302" value="0" size="20">

                                                                <div class="input-group-append">
                                                                    
                                                                <span class="hl input-group-text">(f13-02)</span>
                                                                </div>

                                                                
                                                            </div>
                                                                <span class="errmsgf13 f1302 text-info">(Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)</span>
                                                        </div></div>
                    	</div>
                    	
                       <div class="row">
                       	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                       		<div class="form-group ">
                                                         
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        Dari Pekerjaan Lainnya
                                                                    </span>
                                                                    <span class="input-group-text">Rp</span>
                                                                </div>
                                                                <input type="text" class="form-control f1303" name="f1303" value="0" size="20">
                                                                
                                                                <div class="input-group-append">
                                                                    
                                                                <span class="input-group-text hl">(f13-03)</span> 
                                                                </div>
                                                            </div>
                                                                <span class="errmsgf13 f1303 text-info">(Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)</span>
                                                        </div>
                       	</div>
                       </div>
                    </td>
                </tr>
                <!-- F14 -->
                <tr id="f14" style="display: table-row;">
                    <td class="h">f14</td>
                    <td valign="top" colspan="3">
                        <h5>Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</h5>
                    
                        <div class="form-group">
                            <div class="kt-radio-list">
                                <label class="kt-radio kt-radio--bold kt-radio--brand"> [1] Sangat Erat
                                    <input type="radio" name="f14" value="1"><span></span></label>
                                <label class="kt-radio kt-radio--bold kt-radio--brand"> [2] Erat
                                    <input type="radio" name="f14" value="2"><span></span></label>
                                <label class="kt-radio kt-radio--bold kt-radio--brand"> [3] Cukup Erat
                                    <input type="radio" name="f14" value="3"><span></span></label>
                                <label class="kt-radio kt-radio--bold kt-radio--brand"> [4] Kurang Erat
                                    <input type="radio" name="f14" value="4"><span></span></label>
                                <label class="kt-radio kt-radio--bold kt-radio--brand"> [5] Tidak Sama Sekali
                                    <input type="radio" name="f14" value="5"><span></span></label>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- F15 -->
                <tr id="f15" style="display: table-row;">
                    <td class="h">f15</td>
                    <td valign="top" colspan="3">
                        <h5>Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</h5>
                    
                        <div class="form-group"><div class="kt-radio-list">
                            <label class="kt-radio kt-radio--bold kt-radio--brand"> [1] Setingkat Lebih Tinggi
                                <input type="radio" name="f15" value="1"><span></span></label>
                            <label class="kt-radio kt-radio--bold kt-radio--brand"> [2] Tingkat yang Sama
                                <input type="radio" name="f15" value="2"><span></span></label>
                            <label class="kt-radio kt-radio--bold kt-radio--brand"> [3] Setingkat Lebih Rendah
                                <input type="radio" name="f15" value="3"><span></span></label>
                            <label class="kt-radio kt-radio--bold kt-radio--brand"> [4] Tidak Perlu Pendidikan Tinggi
                                <input type="radio" name="f15" value="4"><span></span></label>
                        </div></div>
                    </td>
                </tr>
                <!-- F16 -->
                <tr id="f16" style="display: table-row;">
                    <td class="h">f16</td>
                    <td valign="top" colspan="3">
                       <h5> Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? Jawaban bisa lebih dari satu</h5>
                    
                        <span>
                            
                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [1] Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya. 
                            <input type="checkbox" name="f1601" value="1"><span></span></label><span class="hl">f16-01</span><br>

                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [2] Saya belum mendapatkan pekerjaan yang lebih sesuai.
                            <input type="checkbox" name="f1602" value="2"><span></span></label><span class="hl">f16-02</span><br>
                            
                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [3] Di pekerjaan ini saya memeroleh prospek karir yang baik. 
                            <input type="checkbox" name="f1603" value="3"><span></span></label><span class="hl">f16-03</span><br>
                            
                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [4] Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya. 
                            <input type="checkbox" name="f1604" value="4"><span></span></label><span class="hl">f16-04</span><br>
                            
                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [5] Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.
                            <input type="checkbox" name="f1605" value="5"><span></span></label><span class="hl">f16-05</span><br>
                            
                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [6] Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini. 
                            <input type="checkbox" name="f1606" value="6"><span></span></label><span class="hl">f16-06</span><br>
                            
                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [7] Pekerjaan saya saat ini lebih aman/terjamin/secure 
                            <input type="checkbox" name="f1607" value="7"><span></span></label><span class="hl">f16-07</span><br>
                            
                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [8] Pekerjaan saya saat ini lebih menarik 
                            <input type="checkbox" name="f1608" value="8"><span></span></label><span class="hl">f16-08</span><br>
                            
                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [9] Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.
                            <input type="checkbox" name="f1609" value="9"><span></span></label><span class="hl">f16-09</span><br>
                            
                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [10] Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya. 
                            <input type="checkbox" name="f1610" value="10"><span></span></label><span class="hl">f16-10</span><br>
                            
                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [11] Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya. 
                            <input type="checkbox" name="f1611" value="11"><span></span></label><span class="hl">f16-11</span><br>
                            
                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [12] Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya. 
                            <input type="checkbox" name="f1612" value="12"><span></span></label><span class="hl">f16-12</span><br>
                            
                            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"> [13] Lainnya: 
                            <input type="checkbox" name="f1613" value="13"><span></span></label><span class="hl">f16-13</span><br>
                            <input type="text" class="form-control" name="f1614" size="60" value="" maxlength="80"> <span class="hl">f16-14</span>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="h">f17</td>
                    <td valign="top" colspan="3">
                         <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <th colspan="5" style="align:center;"><h2>A</h2>
                                        <h4>Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai? (<b>A</b>) <br></h4>
                                    </th>
                                    <th>&nbsp;</th>
                                    <th colspan="5"><h2>B</h2>
                                        <h4>Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan? (<b>B</b>)</h4>
                                    </th>
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
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1701" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1701" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1701" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1701" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1701" value="5"><span></span></label></td>
                                    <td><h5>Pengetahuan di bidang atau disiplin ilmu anda </h5><span class="hl">f17-1 f17-2b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1702b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1702b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1702b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1702b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1702b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1703" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1703" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1703" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1703" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1703" value="5"><span></span></label></td>
                                    <td><h5>Pengetahuan di luar bidang atau disiplin ilmu anda </h5><span class="hl">f17-3 f17-4b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1704b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1704b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1704b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1704b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1704b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1705" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1705" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1705" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1705" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1705" value="5"><span></span></label></td>
                                    <td><h5>Pengetahuan umum </h5><span class="hl">f17-5 f17-6b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1706b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1706b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1706b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1706b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1706b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1705a" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1705a" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1705a" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1705a" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1705a" value="5"><span></span></label></td>
                                    <td><h5>Bahasa Inggris </h5><span class="hl">f17-5a f17-6ba</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1706ba" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1706ba" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1706ba" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1706ba" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1706ba" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1707" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1707" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1707" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1707" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1707" value="5"><span></span></label></td>
                                    <td><h5>Ketrampilan internet </h5><span class="hl">f17-7 f17-8b</span> </td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1708b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1708b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1708b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1708b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1708b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1709" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1709" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1709" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1709" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1709" value="5"><span></span></label></td>
                                    <td><h5>Ketrampilan komputer </h5><span class="hl">f17-9 f17-10b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1710b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1710b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1710b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1710b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1710b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1711" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1711" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1711" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1711" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1711" value="5"><span></span></label></td>
                                    <td><h5>Berpikir kritis </h5><span class="hl">f17-11 f17-12b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1712b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1712b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1712b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1712b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1712b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1713" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1713" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1713" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1713" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1713" value="5"><span></span></label></td>
                                    <td><h5>Ketrampilan riset </h5><span class="hl">f17-13 f17-14b</span> </td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1714b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1714b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1714b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1714b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1714b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1715" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1715" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1715" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1715" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1715" value="5"><span></span></label></td>
                                    <td><h5>Kemampuan belajar </h5><span class="hl">f17-15 f17-16b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1716b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1716b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1716b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1716b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1716b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1717" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1717" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1717" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1717" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1717" value="5"><span></span></label></td>
                                    <td><h5>Kemampuan berkomunikasi </h5><span class="hl">f17-17 f17-18b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1718b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1718b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1718b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1718b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1718b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1719" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1719" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1719" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1719" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1719" value="5"><span></span></label></td>
                                    <td><h5>Bekerja di bawah tekanan </h5><span class="hl">f17-19 f17-20b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1720b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1720b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1720b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1720b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1720b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1721" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1721" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1721" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1721" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1721" value="5"><span></span></label></td>
                                    <td><h5>Manajemen waktu </h5><span class="hl">f17-21 f17-22b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1722b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1722b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1722b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1722b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1722b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1723" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1723" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1723" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1723" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1723" value="5"><span></span></label></td>
                                    <td><h5>Bekerja secara mandiri </h5><span class="hl">f17-23 f17-24b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1724b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1724b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1724b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1724b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1724b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1725" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1725" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1725" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1725" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1725" value="5"><span></span></label></td>
                                    <td><h5>Bekerja dalam tim/bekerjasama dengan orang lain </h5><span class="hl">f17-25 f17-26b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1726b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1726b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1726b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1726b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1726b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1727" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1727" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1727" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1727" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1727" value="5"><span></span></label></td>
                                    <td><h5>Kemampuan dalam memecahkan masalah </h5><span class="hl">f17-27 f17-28b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1728b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1728b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1728b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1728b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1728b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1729" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1729" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1729" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1729" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1729" value="5"><span></span></label></td>
                                    <td><h5>Negosiasi </h5><span class="hl">f17-29 f17-30b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1730b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1730b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1730b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1730b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1730b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1731" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1731" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1731" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1731" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1731" value="5"><span></span></label></td>
                                    <td><h5>Kemampuan analisis </h5><span class="hl">f17-31 f17-32b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1732b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1732b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1732b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1732b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1732b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1733" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1733" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1733" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1733" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1733" value="5"><span></span></label></td>
                                    <td><h5>Toleransi </h5><span class="hl">f17-33 f17-34b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1734b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1734b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1734b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1734b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1734b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1735" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1735" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1735" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1735" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1735" value="5"><span></span></label></td>
                                    <td><h5>Kemampuan adaptasi </h5><span class="hl">f17-35 f17-36b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1736b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1736b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1736b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1736b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1736b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1737" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1737" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1737" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1737" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1737" value="5"><span></span></label></td>
                                    <td><h5>Loyalitas</h5><span class="hl">f17-37 f17-38b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1738b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1738b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1738b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1738b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1738b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1737a" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1737a" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1737a" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1737a" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1737a" value="5"><span></span></label></td>
                                    <td><h5>Integritas </h5><span class="hl">f17-37A f17-38ba</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1738ba" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1738ba" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1738ba" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1738ba" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1738ba" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1739" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1739" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1739" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1739" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1739" value="5"><span></span></label></td>
                                    <td><h5>Bekerja dengan orang yang berbeda budaya </h5>maupun latar belakang <span class="hl">f17-39 f17-40b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1740b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1740b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1740b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1740b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1740b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1741" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1741" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1741" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1741" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1741" value="5"><span></span></label></td>
                                    <td><h5>Kepemimpinan </h5><span class="hl">f17-41 f17-42b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1742b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1742b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1742b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1742b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1742b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1743" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1743" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1743" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1743" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1743" value="5"><span></span></label></td>
                                    <td><h5>Kemampuan dalam memegang tanggungjawab </h5><span class="hl">f17-43 f17-44b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1744b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1744b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1744b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1744b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1744b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1745" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1745" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1745" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1745" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1745" value="5"><span></span></label></td>
                                    <td><h5>Inisiatif </h5><span class="hl">f17-45 f17-46b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1746b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1746b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1746b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1746b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1746b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1747" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1747" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1747" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1747" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1747" value="5"><span></span></label></td>
                                    <td><h5>Manajemen proyek/program </h5><span class="hl">f17-47 f17-48b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1748b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1748b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1748b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1748b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1748b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1749" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1749" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1749" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1749" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1749" value="5"><span></span></label></td>
                                    <td><h5>Kemampuan untuk memresentasikan ide/produk/laporan </h5><span class="hl">f17-49 f17-50b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1750b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1750b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1750b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1750b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1750b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1751" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1751" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1751" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1751" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1751" value="5"><span></span></label></td>
                                    <td><h5>Kemampuan dalam menulis laporan, memo dan dokumen </h5><span class="hl">f17-51 f17-52b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1752b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1752b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1752b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1752b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1752b" value="5"><span></span></label></td>
                                </tr>
                                <tr>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1753" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1753" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1753" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1753" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1753" value="5"><span></span></label></td>
                                    <td><h5>Kemampuan untuk terus belajar sepanjang hayat </h5><span class="hl">f17-53 f17-54b</span></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1754b" value="1"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1754b" value="2"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1754b" value="3"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1754b" value="4"><span></span></label></td>
                                    <td><label class="kt-radio kt-radio--bold kt-radio--success"><input type="radio" name="f1754b" value="5"><span></span></label></td>
                                </tr>
                            </tbody>
                        </table>

                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    <div class="panel-footer">   
           <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                            <a href="<?php echo site_url('jawab_mhs'); ?>" class="btn btn-default">
                       <i class="fa fa-chevron-left"></i> Kembali
                   </a> 
                            <a id="save" type="submit" class="btn btn-md btn-success" href='#' onclick="timeout();"><icon class="fa fa-floppy-o"></icon> Simpan</a>
                           
                            
                        </div>
                    </div>
          
    </div><!--/ Panel Footer -->       
</div><!--/ Panel -->

<?php echo form_close(); ?>  

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