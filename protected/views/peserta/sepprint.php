<html>
	<header>SEP</header>
	<body>
		<img src="BpjsSimulationX/protected/views/peserta/bpjs.jpg">
		<h2 align="center">SURAT ELIGIBILITAS PESERTA <br/>RUMAH SAKIT HKBP BALIGE
		</h2>
<table>
	<tr>
		<td>No. Sep</td>
		<td>:</td>
		<td><?php echo "123"; ?></td>
		<td>&nbsp;&nbsp;</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Tgl. Sep</td>
		<td>:</td>
		<td><?php echo "30/03/2017"; ?></td>
		<td>&nbsp;&nbsp;</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>No. Kartu</td>
		<td>:</td>
		<td><?php echo $model->noKartu; ?> No. MR : 12345</td>
		<td>&nbsp;&nbsp;</td>
		<td>Peserta</td>
		<td>:</td>
		<td>Mandiri</td>
	</tr>
	<tr>
		<td>Nama Peserta</td>
		<td>:</td>
		<td><?php echo $model->nama; ?></td>
		<td>&nbsp;&nbsp;</td>
		<td>COB</td>
		<td>:</td>
		<td></td>
	</tr>
	<tr>
		<td>Tgl. Lahir</td>
		<td>:</td>
		<td><?php echo $model->tglLahir; ?></td>
		<td>&nbsp;&nbsp;</td>
		<td>Jenis Rawat</td>
		<td>:</td>
		<td>Rawat Inap</td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php echo $model->sex; ?></td>
		<td>&nbsp;&nbsp;</td>
		<td>Kls. Rawat</td>
		<td>:</td>
		<td>Kelas II</td>
	</tr>
	<tr>
		<td>Poli Tujuan</td>
		<td>:</td>
		<td><?php echo "" ?></td>
		<td>&nbsp;&nbsp;</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Asal Faskes Tk. I</td>
		<td>:</td>
		<td><?php echo "RS. HKBP BALIGE"; ?></td>
		<td>&nbsp;&nbsp;</td>
		<td>Pasien/ Keluarga Pasien</td>
		<td></td>
		<td>Petugas BPJS Kesehatan</td>
	</tr>
	<tr>
		<td>Diagnosa Awal</td>
		<td>:</td>
		<td><?php echo ""; ?></td>
		<td>&nbsp;&nbsp;</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Catatan</td>
		<td>:</td>
		<td><?php echo ""; ?></td>
		<td>&nbsp;&nbsp;</td>
		<td>____________________</td>
		<td></td>
		<td>____________________</td>
	</tr>
</table>
<br/>
<span>*Saya menyetujui BPJS Kesehatan menggunakan informasi Medis Pasien Jika diperlukan</span><br/><br/>
<span>*SEP bukan sebagai bukti penjaminan peserta</span>

	</body>
</html>


<style>
td {
	padding-left: 30px;
	height: 30px;
    vertical-align: bottom;
    font-size: 18px;
}

span{
	margin-left: 30px;	
	padding-left: 30px;
	font-style: italic;
}

</style>