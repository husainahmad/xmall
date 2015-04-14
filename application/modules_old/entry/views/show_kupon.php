	<table class="table table-bordered" style="width:30%;">
	<tbody>
	<input type="hidden" name="JumlahKupon" id="JumlahKupon" value="<?php echo $JumlahKupon;?>">
	<?php
	$NomorKupon = $KuponId + 1;
	for($i=1;$i<=$JumlahKupon;$i++){
	$satu="KBM-0000000000";
	$dua = $NomorKupon;
	$tiga = substr_replace($satu, $dua, (strlen($satu) - strlen($dua)));
	?>
	<tr>
	<td align="right"><b><?php echo $i;?>.</b></td>
	<td><input type="text" class="form-control" name="NomorKupon<?php echo $i;?>" id="NomorKupon<?php echo $i;?>" style="width:300px;" value="<?php echo $tiga;?>"></td>
	</tr>
	<?php
	$NomorKupon++;
	}
	?>
	</tbody>
	</table>

	<div class="col-xs-12 table-responsive" style="margin-top:20px;">
	
	<table width="100%" border="0">
	<tr>
	<td align="right">
		<button class="btn btn-primary" type="button" id="simpan" onClick="goSubmit();">Simpan</button>
	</td>
	</tr>
	</table>
	</div>