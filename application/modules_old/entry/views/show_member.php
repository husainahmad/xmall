<div class="col-xs-12 table-responsive">
	<table class="table table-striped" style="width:98% !important;">
	<tbody>	
	<tr>
	<td align="center">
	<b>
	<?php echo $header_member['NamaLengkap'];?><br>
	<?php echo $header_member['Alamat'];?><br>
	Jumlah Kupon :  Kupon 
	</b>
	<input type="hidden" name="MemberId" id="MemberId" value="<?php echo $header_member['MemberId'];?>">
	</td></tr>	
	</tbody>
	</table>		

	<table>
	<tr>
	<td><b>Nilai</b></td>
	<td><input type="text" class="form-control" name="Nominal" id="Nominal" style="width:200px;"></td>
	<td>
	<button style="margin-top:-1px;margin-left:5px;height:25px;" class="btn btn-primary" type="button" onClick="showKupon('show_kupon/'+Nominal.value)">Submit</button></td>
	</tr>

	<tr>
	<td align="right"><b>Toko</b></td>
	<td colspan="2"><select class="form-control" name="Tenant" id="Tenant" style="width:200px;">
      <option value="">[Pilih Toko]</option>
      <?php echo $this->data_model->get_select_tenant();?>
    </select></td>
	</tr>
	</table>
	
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<div id="Kupon"></div>

</div>