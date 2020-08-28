<tr>
    <td class="h">f8</td>
    <td valign="top">Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)?
    </td>
    <td valign="top">:</td>
    <td>
        <input value="1" name="f8" valuetable="" table-striped="" table-responsive="1" onclick="hide1()" type="radio"> [1] Ya (<i>Jika ya, lanjutkan ke f11</i>)<br>
        <input name="f8" value="2" onclick="show1()" type="radio"> [2] Tidak
    </td>
</tr>
<tr style="display: none;" id="f9">
    <td class="h">f9</td>
    <td valign="top">
        Bagaimana anda menggambarkan situasi anda saat ini? <i> Jawaban bisa lebih dari satu</i>
    </td>
    <td valign="top">:</td>
    <td>
        <span>
	<table class="table table-striped table-responsive"><tbody><tr><td>
        <input name="f901" value="1" type="checkbox"> [1] Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana <span class="hl">f9-01</span><br>
        <input name="f902" value="2" type="checkbox"> [2] Saya menikah <span class="hl">f9-02</span><br>
        <input name="f903" value="3" type="checkbox"> [3] Saya sibuk dengan keluarga dan anak-anak <span class="hl">f9-03</span><br>
        <input name="f904" value="4" type="checkbox"> [4] Saya sekarang sedang mencari pekerjaan <span class="hl">f9-04</span><br>
        <input name="f905" value="5" type="checkbox"> [5] Lainnya <span class="hl">f9-05</span><br>
    </td>
</tr>
<tr>
    <td>
        <input name="f906" size="60" maxlength="80" value="" type="text"> <span class="hl">f9-06</span></td>
</tr>
</tbody>
</table>
</span>
</td>
</tr>

<tr style="display: none;" id="f10">
    <td class="h">f10</td>
    <td valign="top">
        Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir? <i> Pilihlah Satu Jawaban. KEMUDIAN LANJUT KE f17 </i>
    </td>
    <td valign="top">:</td>
    <td>
        <span>
	<table class="table table-striped table-responsive"><tbody><tr><td>
        <input name="f1001" value="1" onclick="hide2()" type="radio"> [1] Tidak<br>
        <input name="f1001" value="2" onclick="hide2()" type="radio"> [2] Tidak, tapi saya sedang menunggu hasil lamaran kerja<br>
        <input name="f1001" value="3" onclick="hide2()" type="radio"> [3] Ya, saya akan mulai bekerja dalam 2 minggu ke depan<br>
        <input name="f1001" value="4" onclick="hide2()" type="radio"> [4] Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan<br>
        <input name="f1001" value="5" type="radio"> [5] Lainnya<br>
	</td><td><span class="hl">f10-01</span></td>
</tr>
<tr>
    <td>
        <input name="f1002" size="60" maxlength="80" value="" type="text"></td>
    <td><span class="hl">f10-02</span></td>
</tr>
</tbody>
</table>
</span>
</td>
</tr>

<tr style="display: table-row;" id="f11">
    <td class="h">f11</td>
    <td valign="top">Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?
    </td>
    <td valign="top">:</td>
    <td>
        <table class="table table-striped table-responsive">
            <tbody>
                <tr>
                    <td>
                        <input name="f1101" value="1" type="radio"> [1] Instansi pemerintah (termasuk BUMN)<br>
                        <input name="f1101" value="2" type="radio"> [2] Organisasi non-profit/Lembaga Swadaya Masyarakat<br>
                        <input name="f1101" value="3" type="radio"> [3] Perusahaan swasta<br>
                        <input name="f1101" value="4" type="radio"> [4] Wiraswasta/perusahaan sendiri<br>
                        <input name="f1101" value="5" type="radio"> [5] Lainnya, tuliskan:
                    </td>
                    <td><span class="hl">(f11-01)</span></td>
                </tr>
                <tr>
                    <td><input name="f1102" value="" size="50" type="text"></td>
                    <td><span class="hl">(f11-02)</span></td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>