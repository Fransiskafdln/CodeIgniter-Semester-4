<div class="container-fluid">

	<div class="card">
		<h5 class="card-header"> Detail Arsitek</h5>
		<div class="card-body">
<?php foreach($arsitek as $ars): ?>
<div class="row">
	<div class="col-md-4">
		<img src="<?php echo base_url() .'/uploads/' .$ars->gambar ?>" class="card-img-top">  
	</div>
	<div class="col-md-8"> 
		<table class="table">
			<tr>
				<td> Nama Design</td>
				<td><strong><?php echo $ars->nama_design ?></strong></td>
			</tr>
			<tr>
				<td> Keterangan</td>
				<td><strong><?php echo $ars->keterangan ?></strong></td>
			<tr>
				<td> Biaya Konsultasi</td>
				<td><strong><?php echo $ars->biaya_konsultasi ?></strong></td>
			</tr>
			<tr>
				<td> Nama Arsitek </td>
				<td><strong><?php echo $ars->designer ?></strong></td>
			</tr>
			<tr>
				<td> Email </td>
				<td><strong><?php echo $ars->email ?></strong></td>
			</tr>

			<tr>
				<td> <?php echo anchor('dashboard/hubungi_arsitek/' .$ars->id_design,'<div class="btn btn-sm btn-success"> Hubungi Arsitek </div>')  ?></td>
				<td>	<div>

		 <a href="<?php echo base_url('dashboard/index') ?>"><div class="btn btn-sm btn-primary">Ganti Design</div></a> 
	</div> </td>
</tr>

		</table>
	</div>
	
</div>			


<?php endforeach; ?>

		</div>
	</div>
</div>