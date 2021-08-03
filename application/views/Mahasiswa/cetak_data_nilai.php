<body onload="javascript:window.print()" style="margin: auto; width:90%">
<div style="margin-left: 10px; margin-right: 10px;"></div>

<p>&nbsp;</p>

<table width="90%" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="3"><div align="center"><img src="<?php echo base_url().'assets/assets/images/cic.png' ?>" width="200" height="150"></div></td>
		<td><div align="center"><font size="5">LEMBAGA PENDIDIKAN PERGURUAN TINGGI</font></div></td>
	</tr>
	<tr>
		<td><div align="center"><font size="6">UNIVERSITAS CATUR INSAN CENDEKIA</font></div></td>
	</tr>
	<tr>
		<td><div align="center"><font size="3">Jl. Kesambi N. 202 Cirebon - 45133, Telp. (0231) 220250</font></div></td>
	</tr>
</table>
<hr>
<p>&nbsp</p>
<font size="5"><center><u>Laporan Data Nilai Mahasiswa</u></center></font>
<p>&nbsp;</p>
<?php foreach ($tbl_nilai as $nilai1) ?>
<font size="3">Matakuliah : <?php echo $nilai1->nm_matkul ?></font><br>
<font size="3">Dosen Pengampu : <?php echo $nilai1->nm_dosen ?></font><br>
<font size="3">Kelas : <?php echo $nilai1->nm_kelas ?> Semester <?php echo $nilai1->semester ?></font><p></p>

<table width="90%" align="center" cellpadding="0" cellspacing="0">
	<tr align="center">
		<td style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;" >No.</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;" >NIM Mahasiswa</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;" >Nama Mahasiswa</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;" >Nilai UTS</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;" >Nilai UAS</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;" >Rata-Rata</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;" >Grade</td>
	</tr>
	<tr>
											<?php
                                            $no = 1;
                                            foreach ($tbl_nilai as $nilai) {
                                            $uts = ($nilai->uts * 40)/100;
                                            $uas = ($nilai->uas * 60)/100;
                                            $rata = $uts + $uas;

                                            if($rata >= 85){
                                                $grade = 'A';
                                            }
                                            else if($rata >= 75){
                                                $grade = 'B';
                                            }
                                            else if($rata >= 65){
                                                $grade = 'C';
                                            }
                                            else if($rata >= 55){
                                                $grade = 'D';
                                            }
                                            else{
                                                $grade = 'E';
                                            }

                                            ?>
        <td style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;" ><?php echo $no++ ?></td>
        <td style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;" ><?php echo $nilai->nim_mahasiswa ?></td>
        <td style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;" ><?php echo $nilai->nm_mahasiswa ?></td>
        <td style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;" ><?php echo $nilai->uts ?></td>
        <td style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;" ><?php echo $nilai->uas ?></td>
        <td style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;" ><?php echo $rata ?></td>
        <td style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;" ><?php echo $grade ?></td>
	</tr>
	<?php } ?>	

</table>

<p style="text-align: right; font-size: 18px;">Cirebon, <?php echo date("d M Y") ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p style="text-align: right; font-size: 18px;">Rektor UCIC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p style="text-align: right; font-size: 18px;">Dr. Chandra Lukita, M.M</p>

</body>