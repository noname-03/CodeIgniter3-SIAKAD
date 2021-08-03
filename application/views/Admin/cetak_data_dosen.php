<body onload="javascript:window.print()" style="marging auto; width:100%;">
<div style="margin-left: 10px; margin-right: 10px;"></div>

<table width="100%" cellpadding="0" cellspacing="0">
	
	<tr align="center">
		<td rowspan="3"><img src="<?php echo base_url().'assets/assets/images/cic.png' ?> " width="200" height="150"></td>
		<td><font size="5">LEMBAGA PENDIDIKAN PERGURUAN TINGGI</font></td>
	</tr>
	<tr align="center">
		<td><font size="6">UNIVERSITAS CATUR INSAN CENDEKIA</font></td>
	</tr>
	<tr align="center">
		<td><font size="3">Jl. Kesambi No.202 Cirebon - 45133 ~ Telp. (0231) 200418<br>
			Website : http://www.cic.ac.id ~ E-Mail : info@cic.ac.id</font>
		</td>
	</tr>
</table>
<hr><br>

<font size="5"><center><u>Laporan Data Dosen</u></center></font>

<p>&nbsp;</p>

<table align="center" width="90%" cellspacing="0" cellpadding="0">
	<tr bgcolor="lightgray">
		<th style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"> No. </th>
		<th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"> NIDN Dosen </th>
		<th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"> Nama Dosen </th>
		<th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"> Gender </th>
		<th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"> Alamat </th>
		<th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"> No. Handphone </th>
		
	</tr>

		<?php
          	$no = 1;
            foreach ($tbl_dosen as $dosen) {
        ?>
    <tr>
    	<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $no++ ?></td>
    	<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $dosen->nidn_dosen ?></td>
    	<td style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $dosen->nm_dosen ?></td>
    	<td style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $dosen->gender ?></td>
    	<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $dosen->alamat ?></td>
    	<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $dosen->nohp ?></td>
    </tr>

    <?php
    $no++;
	}
	?>
</table>

<p style="text-align: right; font-size: 18px;">Cirebon, <?php echo date("d M Y") ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p style="text-align: right; font-size: 18px;">Rektor UCIC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;</p> <p></p>
<p style="text-align: right; font-size: 18px;">Dr. Chandra Lukita, M.M &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

</body>